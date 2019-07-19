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
