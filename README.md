# Core hacks

---

## 1. README.md

Add this readme file.

---

## 2. Vendor folder

### Amend location

Amend `bootstrap/configure.php:150`

```php
const DIRNAME_VENDOR = '../../vendor';
```

---

## 3. 401 "unauthorised" response factory

### Append interface

Append `src/Http/ResponseFactoryInterface.php`

```php
/**
 * Create an unauthorised response
 *
 * @param string $content
 * @param int $code
 * @param array $headers
 *
 * @return SymfonyResponse
 */
public function unauthorised($content = null, $code = Response::HTTP_UNAUTHORIZED, $headers = []);
```

### Append method

Append `src/Http/ResponseFactory.php`

```php
/**
 * @param string $content
 * @param int $code
 * @param array $headers
 *
 * @return SymfonyResponse
 */
public function unauthorised($content = '', $code = Response::HTTP_UNAUTHORIZED, $headers = [])
{
    $c = Page::getByPath('/page_unauthorised');
    if (is_object($c) && !$c->isError()) {
        $this->request->setCurrentPage($c);
        $controller = $c->getPageController(); // get the single page controller
    } else {
        $controller = $this->app->make(PageUnauthorised::class); // get the `frontend` controller
    }
    return $this->controller($controller, $code, $headers);
}
```

---

## 4. 401 "unauthorised" frontend page

### Add controller

Add `controllers/frontend/page_unauthorised.php`

```php
<?php namespace Concrete\Controller\Frontend;

use Controller;

/**
 * Class PageUnauthorised
 */
class PageUnauthorised extends Controller
{
    protected $viewPath = '/frontend/page_unauthorised';
}
```

### Add template

Add `views/frontend/page_unauthorised.php`

``` php
<?php namespace Concrete\Controller\SinglePage;

use Concrete\Core\Http\Response;
use Concrete\Core\Page\Controller\PageController;
use Events;
use Page;

class PageUnauthorised extends PageController
{

    /**
     * @param $method
     * @param $arguments
     *
     * @return Response|mixed
     */
    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }
        return $this->view();
    }

    /**
     * @return Response
     */
    public function view()
    {
        Events::dispatch('on_page_unauthorised');
        return new Response($this->getViewObject()->render(), 404);
    }

    /**
     * Overrides built-in request validation.
     *
     * @return true
     */
    public function validateRequest()
    {
        return true;
    }

}
```

---

## 5. 401 "unauthorised" single page

### Allow single page to be themed

Amend `src/Page/Single.php:20`

```php
public static function getThemeableCorePages()
{
    return [
        'download_file.php',
        'login.php',
        'maintenance.php',
        'members.php',
        'page_forbidden.php',
        'page_not_found.php',
        'page_unauthorised',
        'register.php',
        'upgrade.php',
        'user_error.php'
    ];
}
```

### Add controller

Add `controllers/single_page/page_unauthorised.php`

```php
<?php namespace Concrete\Controller\SinglePage;

use Concrete\Core\Http\Response;
use Concrete\Core\Page\Controller\PageController;
use Events;
use Page;

class PageUnauthorised extends PageController
{

    /**
     * @param $method
     * @param $arguments
     *
     * @return Response|mixed
     */
    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }
        return $this->view();
    }

    /**
     * @return Response
     */
    public function view()
    {
        Events::dispatch('on_page_unauthorised');
        return new Response($this->getViewObject()->render(), 404);
    }

    /**
     * Overrides built-in request validation.
     *
     * @return true
     */
    public function validateRequest()
    {
        return true;
    }

}
```

### Add template

Add `single_pages/page_unauthorised.php`

```php
<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<h1 class="error"><?= t('Unauthorised'); ?></h1>

<?php echo t('You are not authorised to access this resource.'); ?>
<br/>
<br/>

<a href="<?= DIR_REL ?>/"><?= t('Back to Home'); ?></a>.
```

---

## 6. Update file permissions & download

### Amend file permissions dialog

Adds `Disclaimer` & `Publish` tabs to the file permissions dialog.

Replace `tools/files/permissions.php`

```php
<?php defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\EditResponse as FileEditResponse;
use Concrete\Core\File\StorageLocation\StorageLocation as FileStorageLocation;

// application
$app = Concrete\Core\Support\Facade\Application::getFacadeApplication();

// helpers
$form = $app->make('helper/form');
$dateTime = $app->make('helper/form/date_time');
$config = $app->make('config');
$token = $app->make('token');

$fileId = $_REQUEST['fID'];
$file = File::getByID($fileId);

$cp = new Permissions($file);
if (!$cp->canAdmin()) {
    die(t('Access Denied.'));
}

$fileAdvancedPermissions = $config->get('concrete.permissions.model') != 'simple';

$version = $file->getVersion();
$category = $version->getObjectAttributeCategory();

$filePublishDateHandle = 'fPublishDate';
$filePublishDate = $version->getAttribute($filePublishDateHandle);
$filePublishDateAttribute = $category->getAttributeKeyByHandle($filePublishDateHandle);

$fileDisclaimerHandle = 'fDisclaimer';
$fileDisclaimer = $version->getAttribute($fileDisclaimerHandle);
$fileDisclaimerAttribute = $category->getAttributeKeyByHandle($fileDisclaimerHandle);

$fileStorageLocations = FileStorageLocation::getList();

/* EDIT ACTIONS ***************************************************************/

$r = new FileEditResponse();
$r->setFile($file);

// DATE
if ($_POST['task'] == 'set_date') {
    if (!$token->validate('set_date_' . $fileId)) {
        die(t('Invalid CSRF Token.'));
    }
    // @todo set date
}

// DISCLAIMER
if ($_POST['task'] == 'set_disclaimer') {
    if (!$token->validate('set_disclaimer_' . $fileId)) {
        die(t('Invalid CSRF Token.'));
    }
    $version->setAttribute('fDisclaimer', isset($_POST['fDisclaimer']));
    $r->setMessage(t('File disclaimer updated.'));
    $r->outputJSON();
}

// PASSWORD
if ($_POST['task'] == 'set_password') {
    if (!$token->validate('set_password_' . $fileId)) {
        die(t('Invalid CSRF Token.'));
    }
    $file->setPassword($_POST['fPassword']);
    $r->setMessage(t('File password saved successfully.'));
    $r->outputJSON();
}

// LOCATION
if ($_POST['task'] == 'set_location') {
    if (!$token->validate('set_location_' . $fileId)) {
        die(t('Invalid CSRF Token.'));
    }
    $fslId = $_REQUEST['fslID'];
    $fsl = FileStorageLocation::getByID($fslId);
    if (is_object($fsl)) {
        try {
            $file->setFileStorageLocation($fsl);
        } catch (Exception $e) {
            $json = new Concrete\Core\Application\EditResponse();
            $err = $app->make('error');
            $err->add($e->getMessage());
            $json->setError($err);
            $json->outputJSON();
        }
    }
    $r->setMessage(t('File storage location saved successfully.'));
    $r->outputJSON();
}
?>

<div class="ccm-ui" id="ccm-file-permissions-dialog-wrapper">

    <!-- TABS -->
    <ul class="nav nav-tabs" id="ccm-file-permissions-tabs">
        <?php if ($fileAdvancedPermissions): ?>
            <li><a href="javascript:void(0)" id="ccm-file-permissions-advanced"><?= t('Permissions') ?></a></li>
        <?php endif; ?>
        <?php if ($filePublishDateAttribute): ?>
            <li><a href="javascript:void(0)" id="ccm-file-date"><?= t('Publish Date') ?></a></li>
        <?php endif; ?>
        <?php if ($fileDisclaimerAttribute): ?>
            <li><a href="javascript:void(0)" id="ccm-file-disclaimer"><?= t('Disclaimer') ?></a></li>
        <?php endif; ?>
        <li><a href="javascript:void(0)" id="ccm-file-password"><?= t('Password') ?></a></li>
        <li><a href="javascript:void(0)" id="ccm-file-storage"><?= t('Storage Location') ?></a></li>
    </ul>

    <br>

    <!-- ADVANCED PERMISSIONS -->
    <?php if ($fileAdvancedPermissions): ?>
        <div id="ccm-file-permissions-advanced-tab" style="display: none;">
            <?php View::element('permission/lists/file', array('f' => $f)); ?>
        </div>
    <?php endif; ?>

    <!-- DATE -->
    <?php if (is_object($filePublishDateAttribute)): ?>
        <div id="ccm-file-date-tab" style="display: none;">
            <h4><?= t('File is only publicly accessible after a certain date'); ?></h4>
            <form method="post" data-dialog-form="date" action="<?= $app->make('helper/concrete/urls')->getToolsURL('files/permissions') ?>">
                <?php
                $token->output('set_date_' . $file->getFileID());
                echo $form->hidden('task', 'set_date');
                echo $form->hidden('fID', $file->getFileID());
                ?>
                <div class="form-group">
                    <?= $dateTime->datetime('fPublishDate'); ?>
                </div>
            </form>
            <div id="ccm-file-date-buttons" style="display: none">
                <button type="button" onclick="jQuery.fn.dialog.closeTop()" class="btn btn-default pull-left"><?= t('Cancel') ?></button>
                <button type="button" onclick="$('form[data-dialog-form=date]').submit()" class="btn btn-primary pull-right"><?= t('Save Publish Date') ?></i></button>
            </div>
        </div>
    <?php endif; ?>

    <!-- DISCLAIMER -->
    <?php if (is_object($fileDisclaimerAttribute)): ?>
        <div id="ccm-file-disclaimer-tab" style="display: none;">
            <h4><?= t('Requires a disclaimer is accepted to access this file') ?></h4>
            <form method="post" data-dialog-form="disclaimer" action="<?= $app->make('helper/concrete/urls')->getToolsURL('files/permissions') ?>">
                <?php
                $token->output('set_disclaimer_' . $file->getFileID());
                echo $form->hidden('task', 'set_disclaimer');
                echo $form->hidden('fID', $file->getFileID());
                ?>
                <div class="form-group">
                    <label class="form-control">
                        <?= $form->checkbox('fDisclaimer', 'disclaimer', $fileDisclaimer); ?>
                        &nbsp;
                        Enable disclaimer 401 redirect
                    </label>
                </div>
            </form>
            <div id="ccm-file-disclaimer-buttons" style="display: none">
                <button type="button" onclick="jQuery.fn.dialog.closeTop()" class="btn btn-default pull-left"><?= t('Cancel') ?></button>
                <button type="button" onclick="$('form[data-dialog-form=disclaimer]').submit()" class="btn btn-primary pull-right"><?= t('Save Disclaimer') ?></i></button>
            </div>
        </div>
    <?php endif; ?>

    <!-- PASSWORD -->
    <div id="ccm-file-password-tab" style="display: none;">
        <h4><?= t('Requires a password to access') ?></h4>
        <p><?= t('Leave the following form field blank in order to allow everyone to download this file.') ?></p>
        <form method="post" data-dialog-form="file-password" action="<?= $app->make('helper/concrete/urls')->getToolsURL('files/permissions') ?>">
            <?php
            $token->output('set_password_' . $file->getFileID());
            echo $form->hidden('task', 'set_password');
            echo $form->hidden('fID', $file->getFileID());
            ?>
            <div class="form-group">
                <?= $form->text('fPassword', $file->getPassword()) ?>
                <div class="alert alert-info small">
                    <?= t('Users who access files through the file manager will not be prompted for a password.') ?>
                </div>
            </div>
        </form>
        <div id="ccm-file-password-buttons" style="display: none">
            <button type="button" onclick="jQuery.fn.dialog.closeTop()" class="btn btn-default pull-left"><?= t('Cancel') ?></button>
            <button type="button" onclick="$('form[data-dialog-form=file-password]').submit()" class="btn btn-primary pull-right"><?= t('Save Password') ?></i></button>
        </div>
    </div>

    <!-- STORAGE -->
    <div id="ccm-file-storage-tab" style="display: none">
        <h4><?= t('Choose File Storage Location') ?></h4>
        <form method="post" data-dialog-form="file-storage" action="<?= $app->make('helper/concrete/urls')->getToolsURL('files/permissions') ?>">
            <?php
            $token->output('set_location_' . $file->getFileID());
            echo $form->hidden('task', 'set_location');
            echo $form->hidden('fID', $file->getFileID());
            ?>
            <div class="form-group">
                <?php foreach ($fileStorageLocations as $fsl): ?>
                    <div class="radio"><label><?= $form->radio('fslID', $fsl->getID(), $file->getStorageLocationID() == $fsl->getID()) ?> <?= $fsl->getDisplayName() ?></label></div>
                <?php endforeach; ?>
                <p class="alert alert-danger small"><?= t('All versions of a file will be moved to the selected location.') ?></p>
            </div>
        </form>
        <div id="ccm-file-storage-buttons" style="display: none">
            <button type="button" onclick="jQuery.fn.dialog.closeTop()" class="btn btn-default pull-left"><?= t('Cancel') ?></button>
            <button type="button" onclick="$('form[data-dialog-form=file-storage]').submit()" class="btn btn-primary pull-right"><?= t('Save Location') ?></i></button>
        </div>
    </div>

</div>

<script type="text/javascript">

    /**
     * This is Concrete5 spaghetti code - leave it alone - trust me.
     *
     * Triggers tabs & panel visibility states & clones out buttons into the UI dialog.
     */

    //// METHODS

    ccm_filePermissionsSetupButtons = function () {
        var $dialog = $("#ccm-file-permissions-dialog-wrapper").closest('.ui-dialog-content');
        if ($("#" + ccm_fpActiveTab + "-buttons").length > 0) {
            $dialog.jqdialog('option', 'buttons', [{}]);
            $dialog.parent().find(".ui-dialog-buttonset").remove();
            $dialog.parent().find(".ui-dialog-buttonpane").html('');
            $("#" + ccm_fpActiveTab + "-buttons").clone().show().appendTo($dialog.parent().find('.ui-dialog-buttonpane').addClass('ccm-ui'));
        } else {
            $("#ccm-file-permissions-dialog-wrapper").closest('.ui-dialog-content').jqdialog('option', 'buttons', false);
        }
    };

    //// VARIABLES

    var $tabs = $("#ccm-file-permissions-tabs a");
    var ccm_fpActiveTab = $tabs.first().attr('id');

    //// ACTIONS

    $tabs.on('click', function () {
        $("li.active").removeClass('active');
        $("#" + ccm_fpActiveTab + "-tab").hide();
        ccm_fpActiveTab = $(this).attr('id');
        $(this).parent().addClass("active");
        $("#" + ccm_fpActiveTab + "-tab").show();
        ccm_filePermissionsSetupButtons();
    }).first().trigger('click');

    //// INIT

    $(function () {
        ccm_filePermissionsSetupButtons();
        //$('form[data-dialog-form=file-storage],form[data-dialog-form=file-password]').concreteAjaxForm();
    });

</script>
```

### Update file single page controller

Amend `controllers/single_page/download_file.php`

```php
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
```

### Update file single page template

Amend `single_pages/download_file.php`

```php
<?php defined('C5_EXECUTE') or die('Access Denied.');

/**
 * @var int $fID
 * @var int $rcID
 * @var bool $force
 * @var string $filename
 * @var string $filesize
 */

$form = Core::make('helper/form');
?>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
        <h1><?= t('Download File'); ?></h1>
        <?php if (!isset($filename)): ?>
            <p><?= t('Invalid File.'); ?></p>
        <?php else: ?>
            <p><?= t('This file requires a password to download.'); ?></p>
            <?php if (isset($error)): ?>
                <div class="ccm-error-response"><?= $error; ?></div>
            <?php endif; ?>
            <form class="" action="<?= View::url('/download_file', 'submit_password', $fID, $rcID); ?>" method="post">
                <input type="hidden" name="force" value="<?= $force ? 1 : 0; ?>">
                <div class="form-group">
                    <?= $form->label('password', t('Password')); ?>
                    <?= $form->password('password', null); ?>
                </div>
                <?php $backURL = (isset($rc) && $rc instanceof Page) ? $rc->getCollectionLink() : Page::getByID(HOME_UID)->getCollectionLink(); ?>
                <a class="btn btn-default" href="<?= $backURL; ?>"><?= t('Cancel'); ?></a>
                <button type="submit" class="btn btn-primary"><?= t('Download'); ?></button>
            </form>
        <?php endif; ?>
    </div>
</div>
```

## 7. Add typing to sanitisation service

Amend `src/Validation/SanitizeService.php`

```php
<?php

/**
 * Helper class for sanitizing input and escaping output.
 *
 * \@package Helpers
 *
 * @category Concrete
 *
 * @subpackage Security
 *
 * @author Chris Rosser <chris@bluefuton.com>
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 */

//declare(strict_types=1);

namespace Concrete\Core\Validation;

class SanitizeService
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function sanitizeString(string $string): string
    {
        return (string)filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    /**
     * @param string $int
     *
     * @return int
     */
    public function sanitizeInt(string $int): int
    {
        return (int)filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function sanitizeURL(string $url): string
    {
        return (string)filter_var($url, FILTER_SANITIZE_URL);
    }

    /**
     * @param string $email
     *
     * @return string
     */
    public function sanitizeEmail(string $email): string
    {
        return (string)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
```

---
