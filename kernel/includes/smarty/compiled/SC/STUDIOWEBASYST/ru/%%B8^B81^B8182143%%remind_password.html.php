<?php /* Smarty version 2.6.26, created on 2016-09-11 12:20:23
         compiled from remind_password.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'remind_password.html', 7, false),array('modifier', 'escape', 'remind_password.html', 12, false),)), $this); ?>
<h1><?php echo 'Напомнить пароль'; ?>
</h1>

<?php echo $this->_tpl_vars['MessageBlock__error']; ?>

<?php echo $this->_tpl_vars['MessageBlock__success']; ?>


<?php if (! $this->_tpl_vars['MessageBlock__success']): ?>
<form method="post" action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
">
	<input name="action" value="remind" type="hidden" >
	<?php echo 'Введите <strong>логин</strong> или <strong>адрес электронной почты</strong>:'; ?>

	
	<p>
	<input name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" >
	<input type="submit" value="<?php echo 'OK'; ?>
" >
	</p>
	
	<p>
		<a href="<?php echo ((is_array($_tmp='?ukey=register')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo 'Зарегистрироваться'; ?>
</a>
	</p>
</form>
<?php endif; ?>