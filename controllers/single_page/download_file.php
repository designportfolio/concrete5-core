<?php namespace Concrete\Controller\SinglePage;

use Concrete\Core\Http\Response;
use Concrete\Core\Entity\File\File as FileEntity;
use Concrete\Core\Entity\File\Version as FileVersion;
use Concrete\Core\File\File;
use Concrete\Core\Http\ResponseFactoryInterface;
use Concrete\Core\Page\Controller\PageController;
use Concrete\Core\Page\Page;
use Concrete\Core\Permission\Checker as Permissions;
use Concrete\Core\Routing\Redirect;
use Concrete\Core\Routing\RedirectResponse;
use Concrete\Core\User\User;

class DownloadFile extends PageController
{

    /* VARIABLES **************************************************************/

    /**
     * @var bool $force
     */
    protected $force = false;


    /* HELPER METHODS *********************************************************/

    /**
     * @param int $fID
     *
     * @return FileEntity|null
     */
    protected function getFile($fID)
    {
        if ($fID > 0) {
            return File::getByID($fID);
        }
        return null;
    }

    /**
     * Checks if the user has permissions to view the page the asset is related to.
     *
     * @note returns void, but sets `Page $rc` front-end variable
     *
     * @param int $rcID
     *
     * @return void
     */
    protected function canViewPage($rcID)
    {
        $rc = Page::getByID($rcID, 'ACTIVE');
        if (is_object($rc) && !$rc->isError()) {
            $rcp = new Permissions($rc);
            if ($rcp->canViewPage()) {
                $this->set('rc', $rc);
            }
        }
    }

    /**
     * @param FileEntity $f
     *
     * @return mixed
     */
    protected function canViewFile(FileEntity $f)
    {
        $fp = new Permissions($f);
        return $fp->canViewFile();
    }

    /**
     * @param FileVersion $fv
     *
     * @return mixed
     */
    protected function checkDisclaimer(FileVersion $fv)
    {
        if ($fv->getAttribute('fDisclaimer') === true) {
            $user = new User();
            if (!$user->isRegistered()) {
                return false;
            }
        }
        return true;
    }

    /**
     * Download the asset, or redirect if remotely located.
     *
     * @param FileEntity $file
     * @param null|int $rcID
     *
     * @return Response|RedirectResponse|void
     */
    protected function download(FileEntity $file, $rcID = null)
    {
        // track
        $file->trackDownload($rcID);

        // no force - check for public URL, else fallback
        $fv = $file->getVersion();
        if ($this->force === false) {
            $fsl = $file->getFileStorageLocationObject();
            $configuration = $fsl->getConfigurationObject();
            if ($configuration->hasPublicURL()) {
                return Redirect::url($fv->getURL())->send();
            }
        }

        // fallback
        return $fv->buildForceDownloadResponse();
    }

    /**
     * @param int $fID
     * @param null $rcID
     *
     * @return mixed|void
     */
    public function force($fID = 0, $rcID = null)
    {
        $this->force = true;
        return $this->view($fID, $rcID);
    }


    /* ACTIONS ****************************************************************/

    /**
     * @param int $fID file Id
     * @param int|null $rcID related content ID
     *
     * @return void|mixed
     */
    public function view($fID = 0, $rcID = null)
    {
        // sanitise
        $sanitiser = $this->app->make('helper/security');
        $fID = $sanitiser->sanitizeInt($fID);
        $rcID = $sanitiser->sanitizeInt($rcID);

        // locate file to proceed
        if ($file = $this->getFile($fID)) {

            // can view related collection
            if ($rcID !== null) {
                $this->canViewPage($rcID); // sets 'rc' front end variable ??
            }

            // can view file
            if (!$this->canViewFile($file)) {
                return false;
            }

            // disclaimer
            $fv = $file->getApprovedVersion();
            if (!$this->checkDisclaimer($fv)) {
                return $this->app->make(ResponseFactoryInterface::class)->unauthorised('');
            }

            // password or download
            if ($file->getPassword()) {
                // show the password form
                $this->set('fID', $fID);
                $this->set('rcID', $rcID);
                $this->set('force', $this->force);
                $this->set('filename', $fv->getFilename());
                $this->set('filesize', $fv->getSize());
            } else {
                return $this->download($file, $rcID);
            }
        }
    }

    /**
     * Password checking function.
     *
     * @param int $fID file ID
     * @param int|null $rcID related content ID
     *
     * @return RedirectResponse|void
     */
    public function submit_password($fID = 0, $rcID = null)
    {
        // sanitise input
        $sanitiser = $this->app->make('helper/security');
        $fID = $sanitiser->sanitizeInt($fID);

        // locate file to proceed
        if ($file = $this->getFile($fID)) {

            // related collection
            if ($rcID !== null) {
                $rcID = $sanitiser->sanitizeInt($rcID);
            }

            // check password
            $password = $sanitiser->sanitizeString($this->post('password'));
            if ($password === $file->getPassword()) {
                $this->download($file, $rcID);
            } else {
                $this->set('error', t("Password incorrect. Please try again."));
                $this->view($fID, $rcID);
            }
        }
    }

    /**
     * Method used to inject an asset into the WYSIWYG editor.
     *
     * @param int $fID file ID
     *
     * @return bool
     */
    public function view_inline($fID = 0)
    {
        // sanitise input
        $sanitiser = $this->app->make('helper/security');
        $fID = $sanitiser->sanitizeInt($fID);

        // locate file to proceed
        if ($file = $this->getFile($fID)) {

            // can view file
            if (!$this->canViewFile($file)) {
                return false;
            }

            // disclaimer
            $fv = $file->getApprovedVersion();
            if (!$this->checkDisclaimer($fv)) {
                return false;
            }

            // output
            $mimeType = $fv->getMimeType();
            header("Content-type: $mimeType");
            echo $fv->getFileContents();
            $this->app->shutdown();
        }

        // default return
        return false;
    }
}
