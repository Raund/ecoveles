<?php /* Smarty version 2.6.26, created on 2016-10-30 14:46:36
         compiled from /home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/consignmentnote.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/consignmentnote.html', 15, false),array('modifier', 'default', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/consignmentnote.html', 40, false),array('modifier', 'htmlsafe', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/consignmentnote.html', 40, false),array('modifier', 'string_format', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/consignmentnote.html', 295, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ТОВАРНАЯ НАКЛАДНАЯ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<base href="<?php echo @CONF_FULL_SHOP_URL; ?>
" />
<link rel="stylesheet" href="<?php echo @URL_CSS; ?>
/printforms.css" type="text/css" />
<?php if (! $this->_tpl_vars['strict']): ?>
<script type="text/javascript">
var lang_strings = <?php echo '{'; ?>

	'edit_link':'<?php echo 'Корректировка перед печатью'; ?>
',
	'field_title':'<?php echo 'Двойной клик для редактирования'; ?>
',
	'save_link':'<?php echo 'OK'; ?>
'
<?php echo '}'; ?>

var page_url = '<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
';
</script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/inline_edit_printform.js"></script>
<?php endif; ?>
</head>
<body<?php if (! $this->_tpl_vars['strict']): ?> onload="Printform.init('inline_edit');"<?php endif; ?>>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "print_button.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td class=reportSmallFont align=right>Унифицированная форма №
		Торг-12<br>Утверждена Постановлением Госкомстата России
		<br>от 25.12.1998 г. за №132
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td valign=top width="90%">
		<table cellpadding="0" cellspacing="0" border="0" width="100%"	class="mainTable">
			<tr>
				<td class=underlined align=center><b>
<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "Продавец") : smarty_modifier_default($_tmp, "Продавец")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php if ($this->_tpl_vars['INN']): 
 echo ((is_array($_tmp="ИНН ".($this->_tpl_vars['INN']).",&nbsp;")) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); 
 endif; 
 echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYADDRESS'])) ? $this->_run_mod_handler('default', true, $_tmp, "город, улица, дом") : smarty_modifier_default($_tmp, "город, улица, дом")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;(тел.:<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYPHONE'])) ? $this->_run_mod_handler('default', true, $_tmp, "+7 495 1234567") : smarty_modifier_default($_tmp, "+7 495 1234567")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
)</b>
				</td>
			</tr>
			<tr>
				<td class=underlined align=center><b>
<?php echo ((is_array($_tmp="р/счет №".($this->_tpl_vars['BANK_ACCOUNT_NUMBER'])." в ".($this->_tpl_vars['BANKNAME']).", кор/счет ".($this->_tpl_vars['BANK_KOR_NUMBER']).", БИК ".($this->_tpl_vars['BIK']))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>

				</b></td>
			</tr>
			<tr>
				<td class="reportSmallFont underlined cellComment" align="center"	style="padding-top: 1mm; padding-bottom: 5mm">
					грузоотправитель, адрес, номер телефона, банковские реквизиты</td>
			</tr>
			<tr>
				<td class="reportSmallFont cellComment" align="center" style="padding-top: 1mm; padding-bottom: 2mm">
					структурное	подразделение
				</td>
			</tr>
		</table>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td class="reportSmallFont name_cell">Грузополучатель</td>
				<td width="100%" class="reportSmallFont underlined"><b class="inline_edit">
<?php if ($this->_tpl_vars['customer']['company']): 
 echo ((is_array($_tmp=$this->_tpl_vars['customer']['company'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
&nbsp;<?php else: ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['shipping_state']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['shipping_city']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['shipping_zip']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_zip'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['shipping_address']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['customer']['phone']): ?>тел.: <?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); 
 endif; ?>
				</b></td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell">Поставщик</td>
				<td width="100%" class="reportSmallFont underlined"><b>
				<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "Продавец") : smarty_modifier_default($_tmp, "Продавец")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php if ($this->_tpl_vars['INN']): 
 echo ((is_array($_tmp="ИНН ".($this->_tpl_vars['INN']).",&nbsp;")) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); 
 endif; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYADDRESS'])) ? $this->_run_mod_handler('default', true, $_tmp, "город, улица, дом") : smarty_modifier_default($_tmp, "город, улица, дом")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;(тел.:<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYPHONE'])) ? $this->_run_mod_handler('default', true, $_tmp, "-") : smarty_modifier_default($_tmp, "-")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
)
<?php echo ((is_array($_tmp=", р/счет №".($this->_tpl_vars['BANK_ACCOUNT_NUMBER'])." в ".($this->_tpl_vars['BANKNAME']).", кор/счет	№".($this->_tpl_vars['BANK_KOR_NUMBER']).", БИК ".($this->_tpl_vars['BIK']))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>

			</tr>
			<tr>
				<td class="reportSmallFont name_cell">Плательщик</td>
				<td width="100%" class="reportSmallFont underlined">
				<b class="inline_edit">
<?php if ($this->_tpl_vars['customer']['company']): 
 echo ((is_array($_tmp=$this->_tpl_vars['customer']['company'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
&nbsp;<?php else: ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['billing_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['billing_state']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['billing_state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['billing_city']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['billing_city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['billing_zip']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['billing_zip'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['order']['billing_address']): 
 echo ((is_array($_tmp=$this->_tpl_vars['order']['billing_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['customer']['phone']): ?>тел.: <?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); 
 endif; ?>
				</b></td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell">Основание</td>
				<td width="100%" class="reportSmallFont underlined"><b class="inline_edit">По заказу № <?php echo $this->_tpl_vars['order']['orderID_view']; ?>
 от <?php echo $this->_tpl_vars['order']['date_print']; ?>
 г.</b></td>
			</tr>
			<tr>
				<td colspan=2>&nbsp;</td>
		</table>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td align=center>

				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td rowspan=2 class="reportSmallFont docNameLabels" valign=bottom>
						<b>ТОВАРНАЯ	НАКЛАДНАЯ&nbsp;</b>
						</td>
						<td class="reportSmallFont docNameLabels b_top b_left b_right" align="center">
							Номер<br>документа
						</td>
						<td class="reportSmallFont docNameLabels b_top b_right"	align="center">
							Дата<br>составления
						</td>
					</tr>

					<tr>
						<td
							class="reportSmallFont docNameLabels b_top b_left b_bottom b_right docNameValues"
							align=center>
							<b class="inline_edit"><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['orderID_view'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b>
						</td>
						<td
							class="reportSmallFont docNameLabels b_top b_right b_bottom docNameValues"
							align=center>
							<b class="inline_edit"><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['paid_date'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b>
						</td>
					</tr>

					<tr>
						<td colspan=3 class=separatorCell>&nbsp;</td>
					</tr>
				</table>

				</td>
			</tr>
		</table>
		</td>

		<td valign=top align=right>

		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td colspan=2 class=reportSmallFont>&nbsp;</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_top b_right reportSmallFont"
					align=center>Код</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>Форма
				по ОКУД</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>0330212</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>по
				ОКПО</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>Вид
				деятельности по ОКДП</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>по
				ОКПО</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>по
				ОКПО</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td class="reportSmallFont">&nbsp;</td>
				<td class="reportSmallFont name_cell b_bottom nobr" align=right>по
				ОКПО</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td rowspan="2">&nbsp;</td>
				<td style="width: 20mm"
					class="name_cell item_cell b_left b_bottom reportSmallFont"
					align=right>номер</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont inline_edit"
					align=center><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['orderID_view'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
			</tr>
			<tr>
				<td style="width: 20mm"
					class="name_cell item_cell b_left b_bottom reportSmallFont"
					align=right>дата</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont inline_edit"
					align=center><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['paid_date'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" rowspan="2" valign="top">Транспортная
				накладная</td>
				<td style="width: 20mm"
					class="name_cell item_cell b_left b_bottom reportSmallFont"
					align=right>номер</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20mm"
					class="name_cell item_cell b_left b_bottom reportSmallFont"
					align=right>дата</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
			<tr>
				<td class="reportSmallFont name_cell nobr" colspan=2 align=right>Вид
				операции</td>
				<td style="width: 20mm"
					class="item_cell b_left b_bottom b_right reportSmallFont"
					align=center>&nbsp;</td>
			</tr>
		</table>

		</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td rowspan="2" class="b_top b_left"><b>№<br>
		п/п</b></td>
		<td colspan="2" class="b_top b_left b_bottom"><b>Товар</b></td>
		<td colspan="2" class="b_top b_left b_bottom"><b>Ед. изм.</b></td>
		<td rowspan="2" class="b_top b_left"><b>Вид<br>упа-<br>ков-<br>ки</b></td>
		<td colspan="2" class="b_top b_left b_bottom"><b>Количество</b></td>
		<td rowspan="2" class="b_top b_left"><b>Масса<br>брутто</b></td>
		<td rowspan="2" class="b_top b_left"><b>Количество<br>(масса<br>нетто)</b></td>
		<td rowspan="2" class="b_top b_left"><b>Цена, руб.<br>коп.</b></td>
		<td rowspan="2" class="b_top b_left"><b>Сумма без<br>учета НДС<br>руб. коп.</b></td>
		<td colspan="2" class="b_top b_left b_bottom"><b>НДС</b></td>
		<td rowspan="2" class="b_top b_left b_right"><b>Сумма с<br>учетом НДС<br>руб. коп.</b></td>
	</tr>
	<tr>
		<td class="b_left">наименование, характеристика,<br>сорт, артикул товара</td>
		<td class="b_left">Код</td>
		<td class="b_left">Наиме-<br>нование</td>
		<td class="b_left">код<br>по<br>ОКЕИ</td>
		<td class="b_left">в од-<br>ном<br>месте</td>
		<td class="b_left">мест,<br>штук</td>
		<td class="b_left">ставка, %</td>
		<td class="b_left">сумма руб.<br>коп.</td>
	</tr>
	<tr class=boldborders>
		<td class="b_left b_top b_bottom">1</td>
		<td class="b_left b_top b_bottom">2</td>
		<td class="b_left b_top b_bottom">3</td>
		<td class="b_left b_top b_bottom">4</td>
		<td class="b_left b_top b_bottom">5</td>
		<td class="b_left b_top b_bottom">6</td>
		<td class="b_left b_top b_bottom">7</td>
		<td class="b_left b_top b_bottom">8</td>
		<td class="b_left b_top b_bottom">9</td>
		<td class="b_left b_top b_bottom">10</td>
		<td class="b_left b_top b_bottom">11</td>
		<td class="b_left b_top b_bottom">12</td>
		<td class="b_left b_top b_bottom">13</td>
		<td class="b_left b_top b_bottom">14</td>
		<td class="b_left b_top b_bottom b_right">15</td>
	</tr>
	<?php $_from = $this->_tpl_vars['order_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['order_item']):
?>
	<tr>
		<td class="b_left b_bottom"><?php echo $this->_tpl_vars['id']+1; ?>
</td>
		<td class="b_left b_bottom leftAlign inline_edit"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom">шт.</td>
		<td class="b_left b_bottom">шт.</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom rightAlign">&nbsp;</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom rightAlign"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_item']['Quantity'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.3f") : smarty_modifier_string_format($_tmp, "%0.3f")); ?>
</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Nds_ItemPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom"><?php echo $this->_tpl_vars['NDS']; ?>
</td>
		<td class="b_left b_bottom rightAlign"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Nds_amount'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom b_right rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['ItemPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="7" align="right" class="rightAlign">Итого</td>
		<td class="b_left b_bottom">X</td>
		<td class="b_left b_bottom">X</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_quantity'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.3f") : smarty_modifier_string_format($_tmp, "%0.3f")); ?>
</td>
		<td class="b_left b_bottom">X</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_nds_price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom">X</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_nds'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom b_right rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
	</tr>
	<tr class=totals>
		<td colspan="7" align="right" class="rightAlign normalFont ">Всего
		по накладной</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom">&nbsp;</td>
		<td class="b_left b_bottom rightAlign"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_quantity'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.3f") : smarty_modifier_string_format($_tmp, "%0.3f")); ?>
</td>
		<td class="b_left b_bottom normalFont">X</td>
		<td class="b_left b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_nds_price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom normalFont">X</td>
		<td class="b_left b_bottom rightAlign"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_nds'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_bottom b_right rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td class=separatorCell>&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td class="nobr">Товарная накладная имеет приложение на</td>
		<td style="width: 40%" class="underlined">&nbsp;</td>
		<td class="nobr">и содержит</td>
		<td style="width: 40%" class=underlined><b><?php echo $this->_tpl_vars['order']['total_record_string']; ?>
</b></td>
		<td class="nobr">порядковых номеров записей</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="reportSmallFont cellComment">прописью</td>
		<td>&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td class=separatorCell>&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="rightAlign">Масса груза (нетто)</td>
		<td class=underlined><b>&nbsp;</b></td>
		<td class="b_top b_left b_bottom b_right" style="width: 30mm">&nbsp;</td>
		<td class="leftAlign" style="width: 20mm">кг</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class=cellComment>прописью</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 20mm" class="leftAlign nobr">Всего мест</td>
		<td style="width: 50%" class=underlined><b>&nbsp;</b></td>
		<td class="rightAlign">Масса груза (брутто)</td>
		<td class=underlined><b>&nbsp;</b></td>
		<td class="b_top b_left b_bottom b_right" style="width: 30mm">&nbsp;</td>
		<td class="leftAlign" style="width: 20mm">кг</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class=cellComment>прописью</td>
		<td>&nbsp;</td>
		<td class=cellComment>прописью</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable">
	<tr>
		<td class=separatorCell>&nbsp;</td>
	</tr>
</table>

<table border=0 cellpadding=0 cellspacing=0 width="100%">
	<tr>

		<td width="50%">

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class="nobr">Приложение (паспорта, сертификаты, и т.п.)</td>
				<td width="80%" class=underlined>&nbsp;</td>
				<td>листах</td>
			</tr>
		</table>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class=leftAlign>Всего отпущено на сумму</td>
			</tr>
			<tr>
				<td class="underlined leftAlign"><b><?php echo $this->_tpl_vars['order']['total_price_string']; ?>
, <?php if ($this->_tpl_vars['order']['nds']): ?>в т.ч. НДС<?php else: ?>без налога (НДС)<?php endif; ?></b></td>
			</tr>
			<tr>
				<td class=separatorCell>&nbsp;</td>
			</tr>
		</table>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class="leftAlign nobr">Отпуск разрешил</td>
				<td class=underlined style="width: 30%">Директор</td>
				<td>&nbsp;</td>
				<td class=underlined style="width: 30%">&nbsp;</td>
				<td>&nbsp;</td>
				<td class=underlined><b><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['CEO_NAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class=cellComment>должность</td>
				<td>&nbsp;</td>
				<td class=cellComment>подпись</td>
				<td>&nbsp;</td>
				<td class="cellComment nobr">расшифровка подписи</td>
			</tr>
			<tr>
				<td class=leftAlign>&nbsp;</td>
				<td class=underlined>Гл. Бухгалтер</td>
				<td>&nbsp;</td>
				<td class=underlined>&nbsp;</td>
				<td>&nbsp;</td>
				<td class=underlined><b><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['BUH_NAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class=cellComment>должность</td>
				<td>&nbsp;</td>
				<td class=cellComment>подпись</td>
				<td>&nbsp;</td>
				<td class="cellComment nobr">расшифровка подписи</td>
			</tr>
		</table>

		<table border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td width="90">М.П.</td>
				<td style="padding-left:100px;" class="inline_edit"><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['paid_date'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
			</tr>
		</table>

		</td>

		<td style="padding-left: 5px">&nbsp;</td>

		<td width="50%" valign=top>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class="leftAlign nobr">По доверенности №</td>
				<td class=underlined style="width: 85%">&nbsp;</td>
			</tr>
			<tr>
				<td class=separatorCell>&nbsp;</td>
				<td class=separatorCell>&nbsp;</td>
			</tr>
		</table>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class=leftAlign>Выданной</td>
				<td class=underlined style="width: 90%">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="cellComment nobr">кем, кому (организация,
				должность, фамилия, и.о.)</td>
			</tr>
		</table>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class="leftAlign nobr">Груз принял</td>
				<td class=underlined style="width: 90%">&nbsp;</td>
			</tr>
		</table>

		<table width="100%" border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td class=separatorCell>&nbsp;</td>
				<td class=separatorCell>&nbsp;</td>
			</tr>
			<tr>
				<td align=left class="nobr">Груз получил грузополучатель</td>
				<td class=underlined style="width: 90%">&nbsp;</td>
			</tr>
		</table>

		<table border="0" cellpadding=0 cellspacing=0
			class="mainTable">
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="90">М.П.</td>
				<td style="padding-left:100px;" class="inline_edit"><?php echo ((is_array($_tmp=@$this->_tpl_vars['order']['paid_date'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
			</tr>
		</table>

		</td>

	</tr>
</table>

</body>
</html>