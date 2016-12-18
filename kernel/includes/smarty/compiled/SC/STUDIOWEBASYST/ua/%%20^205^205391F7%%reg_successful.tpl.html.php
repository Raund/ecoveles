<?php /* Smarty version 2.6.26, created on 2016-10-18 20:19:19
         compiled from reg_successful.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'reg_successful.tpl.html', 21, false),)), $this); ?>

<?php if ($this->_tpl_vars['reg_terminated']): ?> 
	<center><b><?php echo 'Your account has been successfully terminated.'; ?>
</b></center>

<?php else: ?>

	<?php if ($this->_tpl_vars['reg_updating']): ?>
		<br><br><br>
		<center><b><?php echo 'Your information has been updated.<br />Thank you.'; ?>
</b></center>
	<?php else: ?>

		<?php if (@CONF_ENABLE_REGCONFIRMATION): ?>
		<center><h1><?php echo 'Account activation'; ?>
</h1></center>
		<?php else: ?>
		<br><br><br>
		<?php endif; ?>

		<center><b><?php echo 'Registration successful.<br />Thank you!'; ?>
</b></center>
		<center><a href="<?php echo ((is_array($_tmp='ukey=office')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo 'Особистий кабінет'; ?>
</a></center>		
		
		<?php if (@CONF_ENABLE_REGCONFIRMATION): ?>
			<form method="get" action="<?php echo ((is_array($_tmp='ukey=act_customer')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" style="text-align:center;">
				<input type="hidden" name="ukey" value="act_customer" >
				<?php echo 'Input Activation Key (emailed to you):'; ?>
  <input type="text" name="act_code" value="<?php echo $this->_tpl_vars['ActCode']; ?>
" >
				<br />
				<br />
				<input type="submit" value="<?php echo 'Активувати'; ?>
" >
			</form>
		<?php endif; ?>
	<?php endif; ?>

<?php endif; ?>