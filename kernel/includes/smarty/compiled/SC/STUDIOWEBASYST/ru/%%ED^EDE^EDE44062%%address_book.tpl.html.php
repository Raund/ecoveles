<?php /* Smarty version 2.6.26, created on 2016-10-07 07:53:00
         compiled from address_book.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'address_book.tpl.html', 17, false),array('function', 'cycle', 'address_book.tpl.html', 36, false),)), $this); ?>

<?php echo $this->_tpl_vars['MessageBlock']; ?>


<table cellspacing="0" cellpadding="10" width="100%">
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['addresses']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
	<?php if ($this->_tpl_vars['defaultAddressID'] == $this->_tpl_vars['addresses'][$this->_sections['k']['index']]['addressID']): ?>
	<tr>
		<td colspan="5">
			<strong><?php echo 'Адрес по умолчанию'; ?>
:</strong>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $this->_tpl_vars['addresses'][$this->_sections['k']['index']]['addressStr']; ?>
</td>
		<td></td>
		<td><a href='<?php echo ((is_array($_tmp="?ukey=address_editor&addressID=".($this->_tpl_vars['addresses'][$this->_sections['k']['index']]['addressID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Редактировать'; ?>
</a></td>
		<td>
			<a href="javascript:confirmDelete(<?php echo $this->_tpl_vars['addresses'][$this->_sections['k']['index']]['addressID']; ?>
,'<?php echo 'Удалить?'; ?>
','<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
&delete=');">
			<img src="<?php echo @URL_IMAGES; ?>
/remove.gif" alt='<?php echo 'Удалить'; ?>
' /></a>
		</td>
	</tr>
	<?php $this->assign('_defaddress_exists', 1); ?>
	<?php endif; ?>
<?php endfor; endif; ?>
<?php unset($this->_sections['_address']);
$this->_sections['_address']['name'] = '_address';
$this->_sections['_address']['loop'] = is_array($_loop=$this->_tpl_vars['addresses']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['_address']['start'] = (int)0;
$this->_sections['_address']['show'] = true;
$this->_sections['_address']['max'] = $this->_sections['_address']['loop'];
$this->_sections['_address']['step'] = 1;
if ($this->_sections['_address']['start'] < 0)
    $this->_sections['_address']['start'] = max($this->_sections['_address']['step'] > 0 ? 0 : -1, $this->_sections['_address']['loop'] + $this->_sections['_address']['start']);
else
    $this->_sections['_address']['start'] = min($this->_sections['_address']['start'], $this->_sections['_address']['step'] > 0 ? $this->_sections['_address']['loop'] : $this->_sections['_address']['loop']-1);
if ($this->_sections['_address']['show']) {
    $this->_sections['_address']['total'] = min(ceil(($this->_sections['_address']['step'] > 0 ? $this->_sections['_address']['loop'] - $this->_sections['_address']['start'] : $this->_sections['_address']['start']+1)/abs($this->_sections['_address']['step'])), $this->_sections['_address']['max']);
    if ($this->_sections['_address']['total'] == 0)
        $this->_sections['_address']['show'] = false;
} else
    $this->_sections['_address']['total'] = 0;
if ($this->_sections['_address']['show']):

            for ($this->_sections['_address']['index'] = $this->_sections['_address']['start'], $this->_sections['_address']['iteration'] = 1;
                 $this->_sections['_address']['iteration'] <= $this->_sections['_address']['total'];
                 $this->_sections['_address']['index'] += $this->_sections['_address']['step'], $this->_sections['_address']['iteration']++):
$this->_sections['_address']['rownum'] = $this->_sections['_address']['iteration'];
$this->_sections['_address']['index_prev'] = $this->_sections['_address']['index'] - $this->_sections['_address']['step'];
$this->_sections['_address']['index_next'] = $this->_sections['_address']['index'] + $this->_sections['_address']['step'];
$this->_sections['_address']['first']      = ($this->_sections['_address']['iteration'] == 1);
$this->_sections['_address']['last']       = ($this->_sections['_address']['iteration'] == $this->_sections['_address']['total']);
?>
	<?php if ($this->_tpl_vars['defaultAddressID'] != $this->_tpl_vars['addresses'][$this->_sections['_address']['index']]['addressID']): ?>
	<?php if (! $this->_tpl_vars['_other_title']): ?>
	<?php $this->assign('_other_title', 1); ?>
	<tr>
		<td colspan="5">
			<strong><?php echo 'Остальные адреса'; ?>
:</strong>
		</td>
	</tr>
	<?php endif; ?>
	<tr class='<?php echo smarty_function_cycle(array('values' => "row_odd,row_even"), $this);?>
'>
		<td>&nbsp;</td>
		<td><?php echo $this->_tpl_vars['addresses'][$this->_sections['_address']['index']]['addressStr']; ?>
</td>
		<td><a href='<?php echo ((is_array($_tmp="set_default=".($this->_tpl_vars['addresses'][$this->_sections['_address']['index']]['addressID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Сделать адресом по умолчанию'; ?>
</a></td>
		<td><a href='<?php echo ((is_array($_tmp="?ukey=address_editor&addressID=".($this->_tpl_vars['addresses'][$this->_sections['_address']['index']]['addressID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Редактировать'; ?>
</a></td>
		<td>
			<a href="javascript:confirmDelete(<?php echo $this->_tpl_vars['addresses'][$this->_sections['_address']['index']]['addressID']; ?>
,'<?php echo 'Удалить?'; ?>
','<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
&delete=');">
			<img src="<?php echo @URL_IMAGES; ?>
/remove.gif" alt='<?php echo 'Удалить'; ?>
' /></a>
		</td>
	</tr>
	<?php endif; ?>
<?php endfor; else: ?>
	<?php if (! $this->_tpl_vars['_defaddress_exists']): ?>
	<tr>
		<td><?php echo 'пустой список'; ?>
</td>
	</tr>
	<?php endif; ?>
<?php endif; ?>

</table>

<p>
	<?php if ($this->_tpl_vars['PAGE_VIEW'] != 'mobile'): ?>
	<input type="button" value='<?php echo 'Добавить адрес'; ?>
' class="goto" rel='<?php echo ((is_array($_tmp="?ukey=add_address")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' >
	<?php else: ?>
	<a href='<?php echo ((is_array($_tmp="?ukey=add_address")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Добавить адрес'; ?>
</a>
	<?php endif; ?>
</p>