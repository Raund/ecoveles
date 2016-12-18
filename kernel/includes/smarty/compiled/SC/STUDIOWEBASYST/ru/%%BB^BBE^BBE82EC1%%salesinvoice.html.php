<?php /* Smarty version 2.6.26, created on 2016-10-30 14:46:37
         compiled from /home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/salesinvoice.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/salesinvoice.html', 15, false),array('modifier', 'default', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/salesinvoice.html', 53, false),array('modifier', 'htmlsafe', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/salesinvoice.html', 53, false),array('modifier', 'string_format', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/forms/salesinvoice.html', 175, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Счет-фактура</title>
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
<div align=right>
<table cellpadding="0" cellspacing="0" border="0" style="width: 100mm">
	<tr>
		<td class=reportSmallFont align=left>Приложение № 1<br>
		к Правилам ведения журналов учета полученных и выставленных
		счетов-фактур, книг покупок и книг продаж при расчетах по налогу на
		добавленную стоимость, утвержденным постановлением Правительства РФ от
		02.12.2000 № 914 (в ред. Постановления Правительства РФ от 15.03.2001
		г. № 189, от 27.07.2002 № 575, от 16.02.2004 № 84, от 11.05.2006 №
		283, от 26.05.2009 № 451)</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>
</div>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal" width="100%">
	<tr>
		<td><b>СЧЁТ-ФАКТУРА № <span class="inline_edit"><?php echo $this->_tpl_vars['order']['orderID_view']; ?>
</span> от <span class="inline_edit"><?php echo $this->_tpl_vars['order']['date_print']; ?>
 г.</span></b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal">
	<tr>
		<td class=leftAlign>Продавец:</td>
		<td class="leftAlign underlined"><b><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "Продавец") : smarty_modifier_default($_tmp, "Продавец")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>
	</tr>
	<tr>
		<td class=leftAlign>Адрес:</td>
		<td class="leftAlign underlined"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['COMPANYADDRESS'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;(тел.:<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYPHONE'])) ? $this->_run_mod_handler('default', true, $_tmp, "-") : smarty_modifier_default($_tmp, "-")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
)</b></td>
	</tr>
	<tr>
		<td class=leftAlign>ИНН/КПП продавца:</td>
		<td class="leftAlign underlined"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['INN'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['KPP'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>
	</tr>
	<tr>
		<td class=leftAlign>Грузоотправитель и его адрес:</td>
		<td class="leftAlign underlined"><b><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, "Продавец") : smarty_modifier_default($_tmp, "Продавец")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYADDRESS'])) ? $this->_run_mod_handler('default', true, $_tmp, "город, улица, дом") : smarty_modifier_default($_tmp, "город, улица, дом")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
,&nbsp;(тел.:<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['COMPANYPHONE'])) ? $this->_run_mod_handler('default', true, $_tmp, "-") : smarty_modifier_default($_tmp, "-")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
)<?php echo ((is_array($_tmp=", р/счет №".($this->_tpl_vars['BANK_ACCOUNT_NUMBER'])." в ".($this->_tpl_vars['BANKNAME']).", кор/счет №".($this->_tpl_vars['BANK_KOR_NUMBER']).", БИК ".($this->_tpl_vars['BIK']))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</b></td>
	</tr>
	<tr>
		<td class=leftAlign>Грузополучатель и его адрес:</td>
		<td class="leftAlign underlined"><b class="inline_edit">
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
		<td colspan=2>&nbsp;</td>
	</tr>
	<tr>
		<td class=leftAlign colspan="2">К платежно-расчетному документу: №
		<table style="display:inline;"><tr>
		<td class="underlined inline_edit" style="width:60mm;">&nbsp;</td> 
		<td>от </td>
		<td class="underlined inline_edit" style="width:50mm;">&nbsp;</td>
		</tr></table>
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal">
	<tr>
		<td class=leftAlign>Покупатель:</td>
		<td class="leftAlign underlined"><b class="inline_edit"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['customer']['company'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['order']['billing_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['order']['billing_name'])))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b></td>
	</tr>
	<tr>
		<td class=leftAlign>Адрес:</td>
		<td class="leftAlign underlined"><b class="inline_edit">
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
 endif; ?>&nbsp;</b></td>
	</tr>
	<tr>
		<td class=leftAlign>ИНН/КПП покупателя:</td>
		<td class="leftAlign underlined">
		<table style="display:inline;"><tr>
		<td style="width:50mm;font-weight: bold;" class="inline_edit"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer']['inn'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
		<td style="font-weight: bold;">/</td>
		<td style="width:50mm;font-weight: bold;" class="inline_edit"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer']['kpp'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
		</tr></table>
		</td>
	</tr>
	<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding=0 cellspacing=0
	class="mainTable_normal">
	<tr>
		<td class="b_left b_top">
			Наименование товара (описание выполненных<br> работ, оказанных услуг),<br/>имущественного права 
		</td>
		<td class="b_left b_top">
			Ед.<br>изм. 
		</td>
		<td class="b_left b_top">
			Кол-<br>во 
		</td>
		<td class="b_left b_top">Цена (тариф)<br>за ед. изм. 
		</td>
		<td class="b_left b_top">
			Стоимость товаров<br>(работ, услуг),<br>имущественных прав,<br>всего без налога 
		</td>
		<td class="b_left b_top">В т.ч.<br>акциз 
		</td>
		<td class="b_left b_top">Налоговая<br>ставка 
		</td>
		<td class="b_left b_top">Сумма<br>налога 
		</td>
		<td class="b_left b_top">
			Стоимость товаров<br>(работ, услуг),<br>имущественных прав,<br>всего с учетом налога 
		</td>
		<td class="b_left b_top">Страна<br>происхождения</td>
		<td class="b_left b_top b_right">№ таможенной<br>декларации</td>
	</tr>
	<tr>
		<td class="b_left b_top">1</td>
		<td class="b_left b_top">2</td>
		<td class="b_left b_top">3</td>
		<td class="b_left b_top">4</td>
		<td class="b_left b_top">5</td>
		<td class="b_left b_top">6</td>
		<td class="b_left b_top">7</td>
		<td class="b_left b_top">8</td>
		<td class="b_left b_top">9</td>
		<td class="b_left b_top">10</td>
		<td class="b_left b_top b_right">11</td>
	</tr>
	<?php $_from = $this->_tpl_vars['order_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['order_item']):
?>
	<tr>
		<td class="b_left b_top leftAlign inline_edit"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</td>
		<td class="b_left b_top inline_edit">шт.</td>
		<td class="b_left b_top"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_item']['Quantity'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Nds_ItemPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top rightAlign">0,00</td>
		<td class="b_left b_top rightAlign"><?php echo $this->_tpl_vars['NDS']; ?>
%</td>
		<td class="b_left b_top rightAlign"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['Nds_amount'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order_item']['ItemPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top inline_edit">&nbsp;</td>
		<td class="b_top b_left b_right inline_edit">&nbsp;</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['order']['shipping_cost']): ?>
	<tr>
		<td class="b_left b_top leftAlign">доставка <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['shipping_type'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)); ?>
</td>
		<td class="b_left b_top">шт.</td>
		<td class="b_left b_top">1</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['shipping_cost'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['shipping_cost'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top rightAlign">0,00</td>
		<td class="b_left b_top rightAlign">0%</td>
		<td class="b_left b_top rightAlign">0,00</td>
		<td class="b_left b_top rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['shipping_cost'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top">&nbsp;</td>
		<td class="b_top b_left b_right">&nbsp;</td>
	</tr>
	<?php endif; ?>
	<tr class=totals>
		<td colspan=7 class="b_left b_top b_bottom">
		<table class=mainTable_normal border="0" cellpadding=0 cellspacing=0
			width="100%">
			<tr>
				<td class="leftAlign nobr"><b>Всего к оплате</b></td>
				<td class="rightAlign nobr"><b><?php echo $this->_tpl_vars['order']['total_price_string']; ?>
, <?php if ($this->_tpl_vars['order']['nds']): ?>в т.ч. НДС<?php else: ?>без налога (НДС)<?php endif; ?></b></td>
			</tr>
		</table>
		</td>
		<td class="b_left b_top b_bottom rightAlign"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_nds'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top b_bottom rightAlign nobr"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['order']['total_price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%0.2f") : smarty_modifier_string_format($_tmp, "%0.2f")); ?>
</td>
		<td class="b_left b_top">&nbsp;</td>
		<td class="b_top">&nbsp;</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal" width="100%">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal" width="100%">
	<tr>
		<td style="width: 45mm" class="nobr"><b>Руководитель
		организации</b></td>
		<td class=underlined>&nbsp;</td>
		<td style="width: 5mm">&nbsp;</td>
		<td class="underlined nobr" style="width: 45mm"><b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CEO_NAME'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b></td>
		<td style="width: 15mm">&nbsp;</td>
		<td style="width: 55mm" class="nobr"><b>Главный бухгалтер</b></td>
		<td class=underlined>&nbsp;</td>
		<td style="width: 5mm">&nbsp;</td>
		<td class="underlined nobr" style="width: 45mm"><b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['BUH_NAME'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class=smallFont>подпись</td>
		<td>&nbsp;</td>
		<td class=smallFont>расшифровка подписи</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class=smallFont>подпись</td>
		<td>&nbsp;</td>
		<td class=smallFont>расшифровка подписи</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0"
	class="mainTable_normal" width="100%">
	<tr>
		<td class="nobr" valign="bottom" style="width: 55mm"><b>Индивидуальный предприниматель</b></td>
		<td class="underlined" style="width: 45mm">&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td class="underlined nobr" valign="bottom"><b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['IP_NAME'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b></td>
		<td style="width: 5mm">&nbsp;</td>
		<td class="underlined nobr" valign="bottom"><b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['IP_REGISTRATION'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp, true, true) : smarty_modifier_htmlsafe($_tmp, true, true)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class=smallFont>подпись</td>
		<td>&nbsp;</td>
		<td class=smallFont>расшифровка подписи</td>
		<td>&nbsp;</td>
		<td class=smallFont>(реквизиты свидетельства о государственной регистрации<br/>индивидуального предпринимателя)</td>
	</tr>
</table>

<br/>
<br/>
<p>Примечание. Первый экземпляр - покупателю, второй экземпляр - продавцу.</p>

</body>
</html>