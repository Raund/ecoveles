<?php /* Smarty version 2.6.26, created on 2016-10-04 14:43:48
         compiled from backend/custord_custlist_affiliate.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'backend/custord_custlist_affiliate.tpl.html', 34, false),array('function', 'assign_array', 'backend/custord_custlist_affiliate.tpl.html', 107, false),array('modifier', 'set_query_html', 'backend/custord_custlist_affiliate.tpl.html', 36, false),array('modifier', 'default', 'backend/custord_custlist_affiliate.tpl.html', 36, false),array('modifier', 'set_query', 'backend/custord_custlist_affiliate.tpl.html', 90, false),array('modifier', 'string_format', 'backend/custord_custlist_affiliate.tpl.html', 129, false),)), $this); ?>
<script language="javascript" type="text/javascript">
<!--
window.reloadURL = '<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
';
//-->
</script>
<?php if ($this->_tpl_vars['safemode']): ?><div class="error_msg_f"><?php echo 'Включен безопасный режим. Действие не выполнено.'; ?>
</div><?php endif; ?>
<table>
<tr>
<td nowrap="nowrap">


<?php echo 'Привлеченные покупатели'; ?>
: <?php echo $this->_tpl_vars['RecruitedCustomersNumber']; ?>

<form action="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" method="POST" name="form_cancel_customer" style="display:none;">
<input name="fACTION" value="CANCEL_CUSTOMER" type="hidden" />
<input name="fREDIRECT" value="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" type="hidden" />
<input name="CUSTOMER[customerID]" value="" type="hidden" />
</form>
<?php if ($this->_tpl_vars['RecruitedCustomersNumber']): ?>
<table class="grid">
<tr class="gridsheader">
	<td>
		<?php echo 'Логин'; ?>

	</td>
	<td nowrap="nowrap"><?php echo 'Статус учетной записи'; ?>
</td>
	<td nowrap="nowrap">
		<?php echo 'Время регистрации'; ?>

	</td>
	<td></td>
</tr>

<?php $_from = $this->_tpl_vars['RecruitedCustomers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Customer']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
	<td>
		<a href='<?php echo ((is_array($_tmp="userID=".($this->_tpl_vars['_Customer']['customerID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo ((is_array($_tmp=@$this->_tpl_vars['_Customer']['Login'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['_Customer']['Email']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['_Customer']['Email'])); ?>
</a>
	</td>
	<td align="center">
		<?php if ($this->_tpl_vars['_Customer']['ActivationCode']): ?>
			<?php echo 'Не активирована'; ?>

		<?php else: ?>
			<?php echo 'Активирована'; ?>

		<?php endif; ?>
	</td>
	<td align="center">
		<?php echo $this->_tpl_vars['_Customer']['reg_datetime']; ?>

	</td>
	<td><a href="javascript:void(0)" onclick="
			if(!confirm('<?php echo 'Вы уверены?'; ?>
'))return false;
			document.form_cancel_customer.elements['CUSTOMER[customerID]'].value = <?php echo $this->_tpl_vars['_Customer']['customerID']; ?>
;
			document.form_cancel_customer.submit();
			return false;
			" title="<?php echo 'Удалить из списка привлеченных пользователей?'; ?>
"><img src="./images_common/remove.gif" alt="<?php echo 'Удалить из списка привлеченных пользователей?'; ?>
" /></a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr class="gridsfooter">
	<td colspan="4"></td>
</tr>
</table>

<?php endif; ?>

<hr />
<b style="font-size:110%"><?php echo 'Комиссионные и выплаты'; ?>
</b>

<br /><br />
<b><?php echo 'Укажите период:'; ?>
</b>
<form method="POST" action="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
">
<?php if ($this->_tpl_vars['Error_DateFormat']): ?>
<div class="error_msg_f"><?php echo 'Неверный формат даты'; ?>
</div>
<?php endif; ?>
<?php echo 'от'; ?>
: <input type="text" name="from" value="<?php echo $this->_tpl_vars['from']; ?>
" size="12" /> <?php echo 'По'; ?>
: <input name="till" value="<?php echo $this->_tpl_vars['till']; ?>
" type="text" size="12" /> <input value="<?php echo 'Посмотреть'; ?>
" type="submit" />
</form>
<?php if (! $this->_tpl_vars['show_tables']): ?>
<?php echo 'Период не установлен'; ?>

<?php endif; ?>

<hr />


<?php if ($this->_tpl_vars['show_tables']): ?>
<b><?php echo 'Начисленные комиссионные'; ?>
 (<?php echo 'от'; ?>
 <?php echo $this->_tpl_vars['from']; ?>
 <?php echo 'По'; ?>
 <?php echo $this->_tpl_vars['till']; ?>
)</b> 

<?php if ($this->_tpl_vars['delete_commission']): ?><div class="ok_msg_f"><?php echo 'Запись о начислении комиссии удалена'; ?>
</div><?php endif; ?>
<?php endif; ?>
<p><a href="<?php echo ((is_array($_tmp="ukey=admin_affprogram&edCustomerID=".($this->_tpl_vars['edCustomerID']))) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
#new_commission_anchor"><?php echo 'Добавить начисление комиссионных'; ?>
</a></p>

<?php if ($this->_tpl_vars['CommissionsNumber'] && $this->_tpl_vars['show_tables']): ?>
	<form action="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" method="POST" name="form_delete_commission" style="display:none;">
	<input name="fACTION" value="DELETE_COMMISSION" type="hidden" />
	<input name="fREDIRECT" value="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" type="hidden" />
	<input name="COMMISSION[cID]" value="" type="hidden" />
	</form>

	<table width="100%" class="grid">
	<tr class="gridsheader">
		<?php $this->assign('GridHeaders', $this->_tpl_vars['GridHeadersC']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/gridheader.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<td width="1%">&nbsp;</td>
		<td width="1%">&nbsp;</td>
	</tr>
	<?php $_from = $this->_tpl_vars['Commissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Commission']):
?>
	<?php echo smarty_function_assign_array(array('var' => 'TotalCommissionsAmount','index' => $this->_tpl_vars['_Commission']['CurrencyISO3'],'value' => $this->_tpl_vars['TotalCommissionsAmount'][$this->_tpl_vars['_Commission']['CurrencyISO3']]+$this->_tpl_vars['_Commission']['Amount']), $this);?>

	<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
		<td>C-<?php echo $this->_tpl_vars['_Commission']['cID']; ?>
</td>
		<td><?php echo $this->_tpl_vars['_Commission']['xDateTime']; ?>
</td>
		<td><?php echo $this->_tpl_vars['_Commission']['Description']; ?>
</td>
		<td nowrap="nowrap"><?php echo $this->_tpl_vars['_Commission']['Amount']; ?>
 <?php echo $this->_tpl_vars['_Commission']['CurrencyISO3']; ?>
</td>
		<td class="normal"><a href="#" onclick="open_window('<?php echo ((is_array($_tmp="sub_page=edit_commission&cID=".($this->_tpl_vars['_Commission']['cID']))) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
',500,400);return false;"><?php echo 'Редактировать'; ?>
</a></td>
		<td><a href="javascript:void(0)" onclick="
			if(!confirm('<?php echo 'Вы уверены?'; ?>
'))return false;
			document.form_delete_commission.elements['COMMISSION[cID]'].value = <?php echo $this->_tpl_vars['_Commission']['cID']; ?>
;
			document.form_delete_commission.submit();
			return false;
			" title="<?php echo 'Удалить'; ?>
"><img src="images_common/remove.gif" alt="<?php echo 'Удалить'; ?>
" /></a></td>
	</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr class="background1 gridsfooter">
			<td colspan="1" valign="top">
				<strong><?php echo 'Итого'; ?>
</strong>
			</td>
			<td colspan="5" align="right">
				<table align="right">
				<?php $_from = $this->_tpl_vars['TotalCommissionsAmount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_key'] => $this->_tpl_vars['_total']):
?>
					<tr><td align="right" style="border-width:0px;padding:0px"><?php echo ((is_array($_tmp=$this->_tpl_vars['_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 <?php echo $this->_tpl_vars['_key']; ?>
</td></tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	</table>
<?php elseif ($this->_tpl_vars['show_tables']): ?>
	<br /><br /><?php echo 'Не найдено ни одного начисления комиссии за указанный период'; ?>

<?php endif; ?>

<hr />

<?php if ($this->_tpl_vars['show_tables']): ?>
<b><?php echo 'Выплаты'; ?>
 (<?php echo 'от'; ?>
 <?php echo $this->_tpl_vars['from']; ?>
 <?php echo 'По'; ?>
 <?php echo $this->_tpl_vars['till']; ?>
)</b>

<?php if ($this->_tpl_vars['delete_payment']): ?><div class="ok_msg_f"><?php echo 'Запись о выплате удалена'; ?>
</div><?php endif; ?>
<?php endif; ?>
<p><a href="<?php echo ((is_array($_tmp="ukey=admin_affprogram&edCustomerID=".($this->_tpl_vars['edCustomerID']))) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
#new_payment_anchor"><?php echo 'Добавить выплату'; ?>
</a></p>

<?php if ($this->_tpl_vars['PaymentsNumber'] && $this->_tpl_vars['show_tables']): ?>
	<form action="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" method="POST" name="form_delete_payment" style="display:none;">
	<input name="fACTION" value="DELETE_PAYMENT" type="hidden" />
	<input name="fREDIRECT" value="<?php echo $this->_tpl_vars['REQUEST_URI']; ?>
" type="hidden" />
	<input name="PAYMENT[pID]" value="" type="hidden" />
	</form>
	
	<table width="100%" class="grid">
		<tr class="gridsheader">
		<?php $this->assign('GridHeaders', $this->_tpl_vars['GridHeadersP']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/gridheader.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<td width="1%">&nbsp;</td>
			<td width="1%">&nbsp;</td>
		</tr>
		<?php $_from = $this->_tpl_vars['Payments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Payment']):
?>
			<?php echo smarty_function_assign_array(array('var' => 'TotalPaymentsAmount','index' => $this->_tpl_vars['_Payment']['CurrencyISO3'],'value' => $this->_tpl_vars['TotalPaymentsAmount'][$this->_tpl_vars['_Payment']['CurrencyISO3']]+$this->_tpl_vars['_Payment']['Amount']), $this);?>

		<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1','name' => 'c2'), $this);?>
">
			<td>P-<?php echo $this->_tpl_vars['_Payment']['pID']; ?>
</td>
			<td><?php echo $this->_tpl_vars['_Payment']['xDate']; ?>
</td>
			<td><?php echo $this->_tpl_vars['_Payment']['Description']; ?>
</td>
			<td nowrap="nowrap"><?php echo $this->_tpl_vars['_Payment']['Amount']; ?>
 <?php echo $this->_tpl_vars['_Payment']['CurrencyISO3']; ?>
</td>
			<td class="normal"><a href="#" onclick="open_window('<?php echo ((is_array($_tmp="sub_page=edit_payment&pID=".($this->_tpl_vars['_Payment']['pID']))) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
',500,400); return false;"><?php echo 'Редактировать'; ?>
</a></td>
			<td><a href="javascript:void(0)" onclick="
				if(!confirm('<?php echo 'Вы уверены?'; ?>
'))return false;
				document.form_delete_payment.elements['PAYMENT[pID]'].value = <?php echo $this->_tpl_vars['_Payment']['pID']; ?>
;
				document.form_delete_payment.submit();
				return false;
				" title="<?php echo 'Удалить'; ?>
"><img src="images_common/remove.gif" alt="<?php echo 'Удалить'; ?>
" /></a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr class="background1 gridsfooter">
			<td colspan="1" valign="top">
				<strong><?php echo 'Итого'; ?>
</strong>
			</td>
			<td colspan="5" align="right">
				<table align="right">
				<?php $_from = $this->_tpl_vars['TotalPaymentsAmount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_key'] => $this->_tpl_vars['_total']):
?>
					<tr><td align="right" style="border-width:0px;padding:0px"><?php echo ((is_array($_tmp=$this->_tpl_vars['_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 <?php echo $this->_tpl_vars['_key']; ?>
</td></tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	</table>
<?php elseif ($this->_tpl_vars['show_tables']): ?>
	<br /><br /><?php echo 'Не найдено ни одного платежа за указанный период'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['PaymentsNumber'] && $this->_tpl_vars['CommissionsNumber'] && $this->_tpl_vars['show_tables']): ?>
	<hr />
		<table width="100%" class="grid">
		<tr class="background1">
			<td valign="top">
			<strong><?php echo 'Баланс'; ?>
</strong>
			</td>
			<td align="right">
				<table align="right">
				<?php $_from = $this->_tpl_vars['CurrencyISO3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_currency']):
?>
				<?php if ($this->_tpl_vars['TotalCommissionsAmount'][$this->_tpl_vars['_currency']['currency_iso_3']] || $this->_tpl_vars['TotalPaymentsAmount'][$this->_tpl_vars['_currency']['currency_iso_3']]): ?>
					<tr>
						<td align="right" style="border-width:0px;padding:0px">
						<?php echo ((is_array($_tmp=($this->_tpl_vars['TotalCommissionsAmount'][$this->_tpl_vars['_currency']['currency_iso_3']]-$this->_tpl_vars['TotalPaymentsAmount'][$this->_tpl_vars['_currency']['currency_iso_3']]))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>

						<?php echo $this->_tpl_vars['_currency']['currency_iso_3']; ?>

						</td>
					</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	</table>
<?php endif; ?>
<br />
</td>
</tr>
</table>