<?php /* Smarty version 2.6.26, created on 2016-10-06 18:31:10
         compiled from backend/order_statuses.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/order_statuses.html', 14, false),array('modifier', 'cat', 'backend/order_statuses.html', 33, false),array('modifier', 'escape', 'backend/order_statuses.html', 36, false),array('function', 'cycle', 'backend/order_statuses.html', 28, false),array('function', 'html_text', 'backend/order_statuses.html', 33, false),)), $this); ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/color_picker.js"></script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/color_functions.js"></script>
<link href="<?php echo @URL_CSS; ?>
/color_picker.css" rel="stylesheet" type="text/css" />

<h1><?php echo 'Статусы заказов'; ?>
</h1>

<?php echo $this->_tpl_vars['MessageBlock']; ?>

<h2><?php echo 'Предустановленные статусы заказов'; ?>
</h2>
<p>
<?php echo 'Следующие статусы заказов вашего интернет-магазина - предопределенные. Вы можете редактировать настройки отображения этих статусов.<br />Статусы "Деньги списаны с карты клиента" и "Деньги возвращены" используются только для заказов, которые оплачиваются кредитными картами.'; ?>

</p>

<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" enctype="multipart/form-data">
<input name="action" value="save_statuses" type="hidden" />

<table id="tbl-methods" class="grid">
<tr class="gridsheader">
	<td><?php echo 'Описание'; ?>
</td>
	<td>&nbsp;</td>
	<td><?php echo 'Статус'; ?>
</td>
	<td><?php echo 'Цвет'; ?>
</td>
	<td><?php echo 'Жирный'; ?>
</td>
	<td><?php echo 'Курсив'; ?>
</td>
	
</tr>
<?php $_from = $this->_tpl_vars['predefined_statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_status']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1','name' => 'predefined'), $this);?>
">
	<td class="field_descr" style="background-color: white;width:250px;"><em><?php echo $this->_tpl_vars['_status']['description']; ?>
</em></td>
	<td class="field_descr" style="background-color: white;">&rarr;</td>
	<td>
		<?php echo smarty_function_html_text(array('dbfield' => 'status_name','name' => "status_name_%lang%_".($this->_tpl_vars['_status']['statusID']),'values' => $this->_tpl_vars['_status'],'style' => ((is_array($_tmp=$this->_tpl_vars['_status']['_style'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' width:250px;') : smarty_modifier_cat($_tmp, ' width:250px;'))), $this);?>

	</td>
	<td nowrap="nowrap">
	#<input name="color_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['_status']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" size="6" maxlength="6" />
	<img src="images_common/color_picker/select_arrow.gif" onmouseover="this.src='images_common/color_picker/select_arrow_over.gif'" onmouseout="this.src='images_common/color_picker/select_arrow.gif'" onclick="showColorPicker(this,document.forms[0].color_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
)">
	</td>
	<td align="center"><input name="bold_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" <?php if ($this->_tpl_vars['_status']['bold']): ?>checked="checked"<?php endif; ?> value="1" type="checkbox" /></td>
	<td align="center"><input name="italic_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" <?php if ($this->_tpl_vars['_status']['italic']): ?>checked="checked"<?php endif; ?> value="1" type="checkbox" /></td>
	
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<p>
<?php echo 'В дополнение к предопределенным статусам вы можете добавить любые произвольные статусы, чтобы более точно отразить процесс обработки заказов в вашем интернет-магазине.'; ?>

</p>

<h2><?php echo 'Произвольные статусы заказов'; ?>
</h2>

<table id="tbl-methods" class="grid">
<?php if ($this->_tpl_vars['custom_statuses']): ?>
<tr class="gridsheader">
	<td><?php echo 'Статус'; ?>
</td>
	<td><?php echo 'Цвет'; ?>
</td>
	<td><?php echo 'Жирный'; ?>
</td>
	<td><?php echo 'Курсив'; ?>
</td>
	<td><?php echo 'Сортировка'; ?>
</td>
	<td>&nbsp;</td>
</tr>
<?php $_from = $this->_tpl_vars['custom_statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_status']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
	<td>
		<?php echo smarty_function_html_text(array('dbfield' => 'status_name','name' => "status_name_%lang%_".($this->_tpl_vars['_status']['statusID']),'values' => $this->_tpl_vars['_status'],'style' => ((is_array($_tmp=$this->_tpl_vars['_status']['_style'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' width:250px;') : smarty_modifier_cat($_tmp, ' width:250px;'))), $this);?>

	</td>
	<td>#<input name="color_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['_status']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" size="6" maxlength="6" />
	<img src="images_common/color_picker/select_arrow.gif" onmouseover="this.src='images_common/color_picker/select_arrow_over.gif'" onmouseout="this.src='images_common/color_picker/select_arrow.gif'" onclick="showColorPicker(this,document.forms[0].color_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
)">
	</td>
	<td align="center"><input name="bold_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" <?php if ($this->_tpl_vars['_status']['bold']): ?>checked="checked"<?php endif; ?> value="1" type="checkbox" /></td>
	<td align="center"><input name="italic_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" <?php if ($this->_tpl_vars['_status']['italic']): ?>checked="checked"<?php endif; ?> value="1" type="checkbox" /></td>
	<td align="center">
		<input name="sort_order_<?php echo $this->_tpl_vars['_status']['statusID']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['_status']['sort_order'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" size="2" />
	</td>
	<td align="center">
		<a href='<?php echo ((is_array($_tmp="action=delete_status&statusID=".($this->_tpl_vars['_status']['statusID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' class="confirm_action" title="<?php echo 'Вы уверены?'; ?>
"><img align="middle" alt="<?php echo 'Удалить'; ?>
" src="images_common/remove.gif" /></a>
	</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<tr class="gridsheader">
	<td colspan="6">
		<?php echo 'Добавить'; ?>
:
	</td>
</tr>
<tr>
	<td>
		<?php echo smarty_function_html_text(array('name' => 'status_name','style' => 'width:250px;'), $this);?>

	</td>
	<td>#<input name="color" value="000000" type="text" size="6" maxlength="6" />
	<img src="images_common/color_picker/select_arrow.gif" onmouseover="this.src='images_common/color_picker/select_arrow_over.gif'" onmouseout="this.src='images_common/color_picker/select_arrow.gif'" onclick="showColorPicker(this,document.forms[0].color)">
	</td>
	<td align="center"><input name="bold" value="1" type="checkbox" /></td>
	<td align="center"><input name="italic" value="1" type="checkbox" /></td>
	<td align="center">
		<input name="sort_order" type="text" size="2" />
	</td>
	<td>&nbsp;</td>
</tr>
</table>

<p>
	<input type="submit" value="<?php echo 'Сохранить'; ?>
" name="save" />
</p>

</form>