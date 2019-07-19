<?php defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage();
$main = new Area('Main');
?>

<?php if ($main->getTotalBlocksInArea($c) || $c->isEditMode()): ?>
    <?php $main->display($c); ?>
<?php else: ?>
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
            <h1 class="error"><?= t('Unauthorised'); ?></h1>
            <p><?= t('You are not authorised to access this resource.'); ?></p>
            <a class="btn btn-primary" href="<?= DIR_REL; ?>/"><?= t('Back to Home'); ?></a>
        </div>
    </div>
<?php endif; ?>
