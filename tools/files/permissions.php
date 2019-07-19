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
