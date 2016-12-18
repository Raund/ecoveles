<?php /* Smarty version 2.6.26, created on 2016-09-11 12:20:30
         compiled from remind_password.txt */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'remind_password.txt', 4, false),)), $this); ?>
<?php echo 'Здравствуйте'; ?>
!

<p><?php echo 'Логин'; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['user_login'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</p>

<p><?php echo 'Пароль'; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['user_pass'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</p>

<p><?php echo 'С наилучшими пожеланиями'; ?>
, <?php echo @CONF_SHOP_NAME; ?>

<br /><?php echo @CONF_SHOP_URL; ?>
</p>