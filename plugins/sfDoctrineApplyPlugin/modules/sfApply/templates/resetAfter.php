<?php use_helper('I18N') ?>
<div class="sf_apply_notice">
<p>
<?php echo __("Your password has been successfully reset. You are now logged
in to this site. In the future, be sure to log in with your new password.") ?>
</p>
<p>
<?php echo link_to(__("Continue"), sfConfig::get('app_sfApplyPlugin_after', '@homepage')) ?>
</p>
</div>
