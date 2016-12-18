<?php /* Smarty version 2.6.26, created on 2016-12-18 21:51:00
         compiled from language.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'language.tpl.html', 2, false),array('modifier', 'escape', 'language.tpl.html', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['language_selection_view'] == 'select'): ?>
<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" name="lang_form" method="post" style="display_inline">
	<select name="lang" onchange="document.location.href = select_getCurrValue(this);">
	<?php $_from = $this->_tpl_vars['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
		<option value='<?php echo ((is_array($_tmp="lang_iso2=".($this->_tpl_vars['lang']->iso2))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'<?php if ($this->_tpl_vars['current_language'] == $this->_tpl_vars['lang_id']): ?> selected="selected"<?php endif; ?>>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']->description)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

		</option>
	<?php endforeach; endif; unset($_from); ?>
	</select>
</form>
<?php else: ?>
	<?php $_from = $this->_tpl_vars['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
		<a href='<?php echo ((is_array($_tmp="lang_iso2=".($this->_tpl_vars['lang']->iso2))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php if ($this->_tpl_vars['lang']->thumbnail_url): ?><img src="<?php echo $this->_tpl_vars['lang']->thumbnail_url; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']->description)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" border="0" ><?php else: 
 echo ((is_array($_tmp=$this->_tpl_vars['lang']->description)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 endif; ?></a>&nbsp;
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>