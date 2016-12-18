<?php /* Smarty version 2.6.26, created on 2016-12-19 01:30:24
         compiled from backend/languages_list.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'backend/languages_list.tpl.html', 1, false),array('modifier', 'set_query_html', 'backend/languages_list.tpl.html', 5, false),array('modifier', 'escape', 'backend/languages_list.tpl.html', 21, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['CurrentDivision']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<?php echo $this->_tpl_vars['MessageBlock']; ?>


<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" class="ajaxform" method="post" id="form-save-order" style="display: inline;" enctype="multipart/form-data">
<input name="action" value="save_order" type="hidden" />
	<table cellspacing="0" cellpadding="5" id="langs_tbl" class="grid">
	<tr class="gridsheader">
		<td>&nbsp;</td>
		<td><?php echo 'Название'; ?>
</td>
		<td><?php echo 'ID'; ?>
</td>
		<td><?php echo 'Включен'; ?>
</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo 'Удалить'; ?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['forlang'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['forlang']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['forlang']['iteration']++;
?>
	<tbody class="dragable lang">
	<tr>
		<td class="handle" style="vertical-align: middle!important;">
			<?php if ($this->_tpl_vars['language']['thumbnail_url']): ?><img src="<?php echo $this->_tpl_vars['language']['thumbnail_url']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['language']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><?php endif; ?>&nbsp;
		</td>
		<td class="handle"><?php echo ((is_array($_tmp=$this->_tpl_vars['language']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 if (@CONF_DEFAULT_LANG == $this->_tpl_vars['language']['id']): ?> (<em><?php echo 'основной'; ?>
</em>)<?php endif; ?></td>
		<td class="handle"><?php echo $this->_tpl_vars['language']['iso2']; ?>
</td>
		<td align="center">
			<input type="checkbox" disabled="disabled" <?php if ($this->_tpl_vars['language']['enabled']): ?> checked="checked"<?php endif; ?> />
			<input type="hidden" class="field_priority" name="priority_<?php echo $this->_tpl_vars['language']['id']; ?>
" value="<?php echo $this->_tpl_vars['language']['priority']; ?>
" />
		</td>
		<td><a class="bluehref" href='<?php echo ((is_array($_tmp="?ukey=addmod_language&lang_id=".($this->_tpl_vars['language']['id']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Настройки'; ?>
</a></td>
		<td><a class="bluehref" href='<?php echo ((is_array($_tmp="?ukey=locals&lang_id=".($this->_tpl_vars['language']['id']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Редактировать перевод'; ?>
</a></td>
		<td align="center">
			<?php if (@CONF_DEFAULT_LANG != $this->_tpl_vars['language']['id']): ?>
			<a href='<?php echo ((is_array($_tmp="lang_id=".($this->_tpl_vars['language']['id'])."&act=dellang")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' title="<?php echo 'Удалить'; ?>
" onclick="return window.confirm('<?php echo 'Вы уверены, что хотите удалить язык? Действие необратимо.'; ?>
');"><img align="middle" alt="<?php echo 'Удалить'; ?>
" src="<?php echo @URL_IMAGES; ?>
/remove.gif" /></a>
			<?php endif; ?>
		</td>
	</tr>
	</tbody>
	<?php endforeach; endif; unset($_from); ?>
	</table>
</form>
<br />
<form action="<?php echo ((is_array($_tmp='?ukey=add_language')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" style="display:inline">
<input class="button" type="submit" value="<?php echo 'Добавить язык'; ?>
" />
</form>
<?php if ($this->_tpl_vars['languages_num'] > 1): ?>
<form action="<?php echo ((is_array($_tmp='?ukey=change_default_language')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" style="display:inline">
<input class="button" type="submit" value="<?php echo 'Изменить основной язык'; ?>
" />
</form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/sortable_table.html", 'smarty_include_vars' => array('table_id' => 'langs_tbl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>