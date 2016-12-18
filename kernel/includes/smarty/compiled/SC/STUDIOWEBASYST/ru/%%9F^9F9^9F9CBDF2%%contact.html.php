<?php /* Smarty version 2.6.26, created on 2016-09-08 21:40:20
         compiled from onesteporder/contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'onesteporder/contact.html', 18, false),array('modifier', 'replace', 'onesteporder/contact.html', 18, false),array('modifier', 'escape', 'onesteporder/contact.html', 30, false),array('modifier', 'default', 'onesteporder/contact.html', 142, false),array('modifier', 'count', 'onesteporder/contact.html', 338, false),)), $this); ?>

<?php if (( @CONF_ONESTEPORDER_TYPES_ORDERING == 'all' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' ) && @CONF_ONESTEPORDER_YANDEX_ADRESS_ENABLE): ?> 
<div class="onesteporder-contact-yandex"><a href="http://market.yandex.ru/addresses.xml?callback=http%3A%2F%2F<?php echo @CONF_SHOP_URL; ?>
%2Fcart%2F&size=mini&type=json" <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>TARGET="_parent"<?php endif; ?>>Заполнить поля с помощью <span class="onesteporder-contact-yandex-lable"><span>Я</span>ндекс</span></a></div>
<?php endif; ?>
	

<div class="onesteporder-block-title">Контактная информация:</div>
	
	
<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-contact-table">
	
	<tr class="onesteporder-contact-tr-delay"><td colspan="2"></td></tr>
	<?php if ($this->_tpl_vars['type'] == 'Standart' && ! $this->_tpl_vars['log']): ?>
		
		<tr class="onesteporder-contact-tr-first">
			<td colspan="2">
				<input name="permanent_registering" <?php if ($this->_tpl_vars['POST']['permanent_registering']): ?> checked<?php endif; ?> type="checkbox" onClick="showRegistrationForm(this);" id="permanent_registering<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-checkbox" />
				<label for="permanent_registering<?php echo $this->_tpl_vars['type']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp='checkout_permanent_registering')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '%SHOPNAME%', @CONF_SHOP_NAME) : smarty_modifier_replace($_tmp, '%SHOPNAME%', @CONF_SHOP_NAME)); ?>
</label>
			</td>
		</tr>
		<tr class="onesteporder-contact-tr-delay"><td colspan="2"></td></tr>
	<?php endif; ?>


	<?php if ($this->_tpl_vars['type'] == 'Standart' && ! $this->_tpl_vars['log']): ?>
		<tbody class="<?php if (! $this->_tpl_vars['POST']['permanent_registering']): ?>system_DisplayNone<?php endif; ?>" id="RegistrationFields<?php echo $this->_tpl_vars['type']; ?>
">
			<tr class="onesteporder-contact-tr">
				<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Логин'; ?>
:</td>
				<td class="onesteporder-contact-td2">
					<input name="customer_info[Login]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['POST']['customer_info']['Login'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" class="onesteporder-contact-input" />
				</td>
			</tr>
			<tr class="onesteporder-contact-tr">
				<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Пароль'; ?>
:</td>
				<td class="onesteporder-contact-td2">
					<input name="customer_info[cust_password]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['POST']['customer_info']['cust_password'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="password" class="onesteporder-contact-input" />
				</td>
			</tr>
			<tr class="onesteporder-contact-tr">
				<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Подтвердите пароль'; ?>
:</td>
				<td class="onesteporder-contact-td2">
					<input name="customer_info[cust_password1]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['POST']['customer_info']['cust_password1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="password" class="onesteporder-contact-input" />
				</td>
			</tr>
		</tbody>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['fields']['first_name'] == 1): ?>
	<tr id="ShippingFirstNameTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
		<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Имя'; ?>
:</td>
		<td class="onesteporder-contact-td2"><input name="customer_info[first_name]" value="<?php if ($this->_tpl_vars['POST']['customer_info']['first_name']): 
 echo $this->_tpl_vars['POST']['customer_info']['first_name']; 
 elseif ($this->_tpl_vars['YandexAdress']['first_name']): 
 echo $this->_tpl_vars['YandexAdress']['first_name']; 
 elseif ($this->_tpl_vars['address']['first_name']): 
 echo $this->_tpl_vars['address']['first_name']; 
 else: 
 echo $this->_tpl_vars['customer_info_default']['first_name']; 
 endif; ?>" type="text" id="first_name<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-input" /></td>
	</tr>
	<?php else: ?>
		<input name="customer_info[first_name]" value="" type="hidden" id="first_name<?php echo $this->_tpl_vars['type']; ?>
"  />
	<?php endif; ?>
	
		
	
	
	<?php if ($this->_tpl_vars['fields']['last_name'] == 1): ?>
	<tr id="ShippingLastNameTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
		<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Фамилия'; ?>
:</td>
		<td class="onesteporder-contact-td2"><input name="customer_info[last_name]" value="<?php if ($this->_tpl_vars['POST']['customer_info']['last_name']): 
 echo $this->_tpl_vars['POST']['customer_info']['last_name']; 
 elseif ($this->_tpl_vars['YandexAdress']['last_name']): 
 echo $this->_tpl_vars['YandexAdress']['last_name']; 
 elseif ($this->_tpl_vars['address']['last_name']): 
 echo $this->_tpl_vars['address']['last_name']; 
 else: 
 echo $this->_tpl_vars['customer_info_default']['last_name']; 
 endif; ?>" type="text" id="last_name<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-input" /></td>
	</tr>
	<?php else: ?>
		<input name="customer_info[last_name]" value="" type="hidden"  id="last_name<?php echo $this->_tpl_vars['type']; ?>
"   />
	<?php endif; ?>
	
	
	
	<?php if ($this->_tpl_vars['fields']['Email'] == 1): ?>
	<tr class="onesteporder-contact-tr">
		<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Email'; ?>
:</td>
		<td class="onesteporder-contact-td2"><input name="customer_info[Email]" value="<?php if ($this->_tpl_vars['POST']['customer_info']['Email']): 
 echo $this->_tpl_vars['POST']['customer_info']['Email']; 
 elseif ($this->_tpl_vars['YandexAdress']['Email']): 
 echo $this->_tpl_vars['YandexAdress']['Email']; 
 elseif ($this->_tpl_vars['customer_info_default']['Email']): 
 echo $this->_tpl_vars['customer_info_default']['Email']; 
 endif; ?>" type="text" id="Email<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-input" /></td>
	</tr>
	<?php else: ?>
		<input name="customer_info[Email]" value="<?php if ($this->_tpl_vars['POST']['customer_info']['Email']): 
 echo $this->_tpl_vars['POST']['customer_info']['Email']; 
 elseif ($this->_tpl_vars['YandexAdress']['Email']): 
 echo $this->_tpl_vars['YandexAdress']['Email']; 
 elseif ($this->_tpl_vars['customer_info_default']['Email']): 
 echo $this->_tpl_vars['customer_info_default']['Email']; 
 endif; ?>" type="hidden"  />
	<?php endif; ?>
	
	
	<?php if ($this->_tpl_vars['fields']['Email'] == 1 && $this->_tpl_vars['fields']['subscribe'] == 1 && ! $this->_tpl_vars['log']): ?>
	<tr class="onesteporder-contact-tr">
		<td class="onesteporder-contact-td1"></td>
		<td class="onesteporder-contact-td2">
			<input name="customer_info[subscribed4news]" value="1"<?php if ($this->_tpl_vars['POST']['customer_info']['subscribed4news'] || ( $this->_tpl_vars['subscribed4news'] )): ?> checked<?php endif; ?> type="checkbox" style="width:auto;" id="subscribed4news<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-checkbox"/>
			<label for="subscribed4news<?php echo $this->_tpl_vars['type']; ?>
"><?php echo 'Подписаться на новости'; ?>
</label>
		</td>
	</tr>
	<?php endif; ?>
	
	
	
	<?php $_from = $this->_tpl_vars['additional_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_field']):
?>
	<?php $this->assign('_field_name', "additional_field_".($this->_tpl_vars['_field']['reg_field_ID'])); ?>
		<?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['_field_name']] == 1): ?>
		<tr class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><?php if ($this->_tpl_vars['_field']['reg_field_required']): ?><span>*</span><?php endif; 
 echo $this->_tpl_vars['_field']['reg_field_name']; ?>
:</td>
			<td class="onesteporder-contact-td2"><input type='text' name='customer_info[_custom_fields][<?php echo $this->_tpl_vars['_field']['reg_field_ID']; ?>
]' value='<?php if ($this->_tpl_vars['POST']['customer_info']['_custom_fields'][$this->_tpl_vars['_field']['reg_field_ID']] != ''): 
 echo ((is_array($_tmp=$this->_tpl_vars['POST']['customer_info']['_custom_fields'][$this->_tpl_vars['_field']['reg_field_ID']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 elseif ($this->_tpl_vars['YandexAdress']['additional_fields'][$this->_tpl_vars['_field']['reg_field_ID']] != ''): 
 echo $this->_tpl_vars['YandexAdress']['additional_fields'][$this->_tpl_vars['_field']['reg_field_ID']]; 
 else: 
 unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['customer_info_default']['additional_field_values']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);

 if ($this->_tpl_vars['customer_info_default']['additional_field_values'][$this->_sections['j']['index']]['reg_field_ID'] == $this->_tpl_vars['_field']['reg_field_ID']): 
 echo $this->_tpl_vars['customer_info_default']['additional_field_values'][$this->_sections['j']['index']]['reg_field_value']; 
 endif; 
 endfor; endif; 
 endif; ?>' class="onesteporder-contact-input <?php if (@CONF_ONESTEPORDER_QIWI_PHONE_FIELD == $this->_tpl_vars['_field']['reg_field_ID']): ?>phone<?php endif; ?>" /></td>
		</tr>
		<?php else: ?>
			<input type='hidden' name='customer_info[_custom_fields][<?php echo $this->_tpl_vars['_field']['reg_field_ID']; ?>
]' value="<?php if ($this->_tpl_vars['POST']['customer_info']['_custom_fields'][$this->_tpl_vars['_field']['reg_field_ID']] != ''): 
 echo ((is_array($_tmp=$this->_tpl_vars['POST']['customer_info']['_custom_fields'][$this->_tpl_vars['_field']['reg_field_ID']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 elseif ($this->_tpl_vars['YandexAdress']['additional_fields'][$this->_tpl_vars['_field']['reg_field_ID']] != ''): 
 echo $this->_tpl_vars['YandexAdress']['additional_fields'][$this->_tpl_vars['_field']['reg_field_ID']]; 
 else: 
 unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['customer_info_default']['additional_field_values']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);

 if ($this->_tpl_vars['customer_info_default']['additional_field_values'][$this->_sections['j']['index']]['reg_field_ID'] == $this->_tpl_vars['_field']['reg_field_ID']): 
 echo $this->_tpl_vars['customer_info_default']['additional_field_values'][$this->_sections['j']['index']]['reg_field_value']; 
 endif; 
 endfor; endif; 
 endif; ?>" />
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	
	<input  name="addressID" value="<?php if ($this->_tpl_vars['POST']['addressID'] != ''): 
 echo $this->_tpl_vars['POST']['addressID']; 
 elseif ($this->_tpl_vars['address']['addressID']): 
 echo $this->_tpl_vars['address']['addressID']; 
 else: ?>0<?php endif; ?>"  type="hidden" id="addressID<?php echo $this->_tpl_vars['type']; ?>
"  />
	<tbody id="ContactInformation<?php echo $this->_tpl_vars['type']; ?>
" >
	
	
	<?php if (@CONF_ADDRESSFORM_ADDRESS != 2): ?>
		<?php if ($this->_tpl_vars['fields']['address'] == 1): ?>
		<tr id="ShippingAdressTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_ADDRESS == 0): ?><span>*</span><?php endif; 
 echo 'Адрес'; ?>
:</td>
			<td class="onesteporder-contact-td2"><textarea name="shipping_address[address]" rows="4" id="address<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-textarea" ><?php if ($this->_tpl_vars['POST']['shipping_address']['address']): 
 echo $this->_tpl_vars['POST']['shipping_address']['address']; 
 elseif ($this->_tpl_vars['YandexAdress']['address']): 
 echo $this->_tpl_vars['YandexAdress']['address']; 
 else: 
 echo $this->_tpl_vars['address']['address']; 
 endif; ?></textarea></td>
		</tr>
		<?php else: ?>
			<input name="shipping_address[address]" value="" type="hidden"  id="address<?php echo $this->_tpl_vars['type']; ?>
"  />
		<?php endif; ?>
	<?php endif; ?>
	
	
	
	<?php if (@CONF_ADDRESSFORM_CITY != 2): ?>
		<?php if ($this->_tpl_vars['fields']['city'] == 1): ?>
		<tr id="ShippingCityTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_CITY == 0): ?><span>*</span><?php endif; 
 echo 'Город'; ?>
:</td>
			<td class="onesteporder-contact-td2"><input name="shipping_address[city]" value="<?php if ($this->_tpl_vars['POST']['shipping_address']['city']): 
 echo $this->_tpl_vars['POST']['shipping_address']['city']; 
 elseif ($this->_tpl_vars['YandexAdress']['city']): 
 echo $this->_tpl_vars['YandexAdress']['city']; 
 else: 
 echo $this->_tpl_vars['address']['city']; 
 endif; ?>" type="text" id="city<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-input" /></td>
		</tr>
		<?php else: ?>	
			<input name="shipping_address[city]" value="" type="hidden"  id="city<?php echo $this->_tpl_vars['type']; ?>
"  />
		<?php endif; ?>
	<?php endif; ?>
	
	
	
	<?php if (@CONF_ADDRESSFORM_STATE != 2): ?>
		<?php if ($this->_tpl_vars['fields']['state'] == 1): ?>
		<tr id="ShippingZoneTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_STATE == 0): ?><span>*</span><?php endif; 
 echo 'Область'; ?>
:</td>
			<td id="ShippingZoneTD<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-td2">
			<?php if (! $this->_tpl_vars['zones']): ?>
				<input name="shipping_address[state]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['POST']['shipping_address']['state'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['address']['state']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['address']['state'])); ?>
" type="text" id="stateStr<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-input"   />
			<?php else: ?>
				<select name="shipping_address[zoneID]" id="ShippingZone<?php echo $this->_tpl_vars['type']; ?>
" onChange="ChangeState(this, '<?php echo $this->_tpl_vars['type']; ?>
')" class="onesteporder-contact-select"  >
				<?php $_from = $this->_tpl_vars['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_zone']):
?>
					<option value="<?php echo $this->_tpl_vars['_zone']['zoneID']; ?>
" <?php if ($this->_tpl_vars['POST']['shipping_address']['zoneID'] != '' && $this->_tpl_vars['POST']['shipping_address']['zoneID'] == $this->_tpl_vars['_zone']['zoneID']): ?>selected<?php elseif ($this->_tpl_vars['_zone']['zoneID'] == $this->_tpl_vars['address']['zoneID']): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['_zone']['zone_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			<?php endif; ?>
			</td>
		</tr>
		<?php else: ?>
			<input name="shipping_address[state]" value="" type="hidden"  id="ShippingZone<?php echo $this->_tpl_vars['type']; ?>
"  />
		<?php endif; ?>
	<?php endif; ?>

	<?php if (@CONF_ADDRESSFORM_ZIP != 2): ?>
		<?php if ($this->_tpl_vars['fields']['zip'] == 1): ?>
		<tr id="ShippingZipTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_ZIP == 0): ?><span>*</span><?php endif; 
 echo 'Почтовый индекс'; ?>
:</td>
			<td class="onesteporder-contact-td2"><input name="shipping_address[zip]" value="<?php if ($this->_tpl_vars['POST']['shipping_address']['zip']): 
 echo $this->_tpl_vars['POST']['shipping_address']['zip']; 
 elseif ($this->_tpl_vars['YandexAdress']['zip']): 
 echo $this->_tpl_vars['YandexAdress']['zip']; 
 else: 
 echo $this->_tpl_vars['address']['zip']; 
 endif; ?>" id="zip<?php echo $this->_tpl_vars['type']; ?>
" type="text"  class="onesteporder-contact-input"  /></td>
		</tr>
		<?php else: ?>
			<input name="shipping_address[zip]" value="" type="hidden"  id="zip<?php echo $this->_tpl_vars['type']; ?>
"   />
		<?php endif; ?>
	<?php endif; ?>
	
	
	<?php if ($this->_tpl_vars['countries']): ?>
		<?php if ($this->_tpl_vars['fields']['country'] == 1): ?>
		<tr id="ShippingCountryTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr">
			<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Страна'; ?>
:</td>
			<td class="onesteporder-contact-td2">
				<select name="shipping_address[countryID]" onChange="ChangeCountry(this, '<?php echo $this->_tpl_vars['type']; ?>
')"  id="ShippingCountry<?php echo $this->_tpl_vars['type']; ?>
"  xAdress="<?php echo $this->_tpl_vars['address']['countryID']; ?>
" class="onesteporder-contact-select" >
				<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_country']):
?>
					<option value="<?php echo $this->_tpl_vars['_country']['countryID']; ?>
"
					<?php if ($this->_tpl_vars['POST']['shipping_address']['countryID'] != '' && $this->_tpl_vars['POST']['shipping_address']['countryID'] == $this->_tpl_vars['_country']['countryID']): ?>
						selected
					<?php elseif ($this->_tpl_vars['YandexAdress']['countryID'] && $this->_tpl_vars['YandexAdress']['countryID'] == $this->_tpl_vars['_country']['country_name']): ?>
						selected
					<?php elseif ($this->_tpl_vars['address']['countryID']): ?>
						<?php if ($this->_tpl_vars['_country']['countryID'] == $this->_tpl_vars['address']['countryID']): ?>selected<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['_country']['countryID'] == @CONF_DEFAULT_COUNTRY): ?>selected<?php endif; ?>
					<?php endif; ?>
					><?php echo ((is_array($_tmp=$this->_tpl_vars['_country']['country_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<?php else: ?>
			<input name="shipping_address[countryID]" value="" type="hidden"  id="ShippingCountry<?php echo $this->_tpl_vars['type']; ?>
"   xAdress="" />
		<?php endif; ?> 
	<?php endif; ?> 
	
	
	</tbody>
	
		<?php if ($this->_tpl_vars['fields']['billing_as_shipping'] == 1): ?>
		<?php if (@CONF_ORDERING_REQUEST_BILLING_ADDRESS == '1'): ?>
			<tr class="onesteporder-contact-tr">
				<td class="onesteporder-contact-td1"></td>
				<td class="onesteporder-contact-td2">
					<input name="billing_as_shipping" <?php if ($this->_tpl_vars['POST']['billing_as_shipping'] || ( $this->_tpl_vars['billing_as_shipping'] )): ?> checked<?php endif; ?> type="checkbox" style="width:auto;" id="billing_as_shipping<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-checkbox" onclick="BillingAdressForm('<?php echo $this->_tpl_vars['type']; ?>
');" />
					<label for="billing_as_shipping<?php echo $this->_tpl_vars['type']; ?>
">Плательщик совпадает с получателем</label>
				</td>
			</tr>

			
			<tbody id="BillingAdress<?php echo $this->_tpl_vars['type']; ?>
" class=" BillingAdress  <?php if ($this->_tpl_vars['POST']['billing_as_shipping'] || ( $this->_tpl_vars['billing_as_shipping'] )): ?> system_DisplayNone<?php endif; ?>" >
			
			<?php if ($this->_tpl_vars['fields']['first_name'] == 1): ?>
			<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
				<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Имя'; ?>
:</td>
				<td class="onesteporder-contact-td2"><input name="billing_address[first_name]" value="<?php if ($this->_tpl_vars['POST']['billing_address']['first_name']): 
 echo $this->_tpl_vars['POST']['billing_address']['first_name']; 
 endif; ?>" type="text"  class="onesteporder-contact-input" /></td>
			</tr>
			<?php else: ?>
				<input name="billing_address[first_name]" value="" type="hidden"  />
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['fields']['last_name'] == 1): ?>
			<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
				<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Фамилия'; ?>
:</td>
				<td class="onesteporder-contact-td2"><input name="billing_address[last_name]" value="<?php if ($this->_tpl_vars['POST']['billing_address']['last_name']): 
 echo $this->_tpl_vars['POST']['billing_address']['last_name']; 
 endif; ?>" type="text" class="onesteporder-contact-input" /></td>
			</tr>
			<?php else: ?>
				<input name="billing_address[last_name]" value="" type="hidden"   />
			<?php endif; ?>
			
			
			<?php if (@CONF_ADDRESSFORM_ADDRESS != 2): ?>
				<?php if ($this->_tpl_vars['fields']['address'] == 1): ?>
				<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
					<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_ADDRESS == 0): ?><span>*</span><?php endif; 
 echo 'Адрес'; ?>
:</td>
					<td class="onesteporder-contact-td2"><textarea name="billing_address[address]" rows="4" class="onesteporder-contact-textarea" ><?php if ($this->_tpl_vars['POST']['billing_address']['address']): 
 echo $this->_tpl_vars['POST']['billing_address']['address']; 
 endif; ?></textarea></td>
				</tr>
				<?php else: ?>
					<input name="billing_address[address]" value="" type="hidden"  id="address<?php echo $this->_tpl_vars['type']; ?>
"  />
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if (@CONF_ADDRESSFORM_CITY != 2): ?>
				<?php if ($this->_tpl_vars['fields']['city'] == 1): ?>
				<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
					<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_CITY == 0): ?><span>*</span><?php endif; 
 echo 'Город'; ?>
:</td>
					<td class="onesteporder-contact-td2"><input name="billing_address[city]" value="<?php if ($this->_tpl_vars['POST']['billing_address']['city']): 
 echo $this->_tpl_vars['POST']['billing_address']['city']; 
 endif; ?>" type="text" class="onesteporder-contact-input" /></td>
				</tr>
				<?php else: ?>	
					<input name="billing_address[city]" value="" type="hidden"  />
				<?php endif; ?>
			<?php endif; ?>
			
				
			<?php if (@CONF_ADDRESSFORM_STATE != 2): ?>
				<?php if ($this->_tpl_vars['fields']['state'] == 1): ?>
				<tr id="BillingZoneTR<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-tr onesteporder-contact-tr-billing">
					<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_STATE == 0): ?><span>*</span><?php endif; 
 echo 'Область'; ?>
:</td>
					<td id="BillingZoneTD<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-td2">
					<?php if (! $this->_tpl_vars['zones']): ?>
						<input name="billing_address[state]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['POST']['billing_address']['state'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['address']['state']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['address']['state'])); ?>
" type="text" class="onesteporder-contact-input"   />
					<?php else: ?>
						<select name="billing_address[zoneID]" id="BillingZone<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-select"  >
						<?php $_from = $this->_tpl_vars['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_zone']):
?>
							<option value="<?php echo $this->_tpl_vars['_zone']['zoneID']; ?>
" <?php if ($this->_tpl_vars['POST']['billing_address']['zoneID'] != '' && $this->_tpl_vars['POST']['billing_address']['zoneID'] == $this->_tpl_vars['_zone']['zoneID']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['_zone']['zone_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						</select>
					<?php endif; ?>
					</td>
				</tr>
				<?php else: ?>
					<input name="billing_address[state]" value="" type="hidden"  />
				<?php endif; ?>
			<?php endif; ?>

			<?php if (@CONF_ADDRESSFORM_ZIP != 2): ?>
				<?php if ($this->_tpl_vars['fields']['zip'] == 1): ?>
				<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
					<td class="onesteporder-contact-td1"><?php if (@CONF_ADDRESSFORM_ZIP == 0): ?><span>*</span><?php endif; 
 echo 'Почтовый индекс'; ?>
:</td>
					<td class="onesteporder-contact-td2"><input name="billing_address[zip]" value="<?php if ($this->_tpl_vars['POST']['billing_address']['zip']): 
 echo $this->_tpl_vars['POST']['billing_address']['zip']; 
 endif; ?>" type="text"  class="onesteporder-contact-input"  /></td>
				</tr>
				<?php else: ?>
					<input name="billing_address[zip]" value="" type="hidden"   />
				<?php endif; ?>
			<?php endif; ?>
			
			
			<?php if ($this->_tpl_vars['countries']): ?>
				<?php if ($this->_tpl_vars['fields']['country'] == 1): ?>
				<tr class="onesteporder-contact-tr onesteporder-contact-tr-billing">
					<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Страна'; ?>
:</td>
					<td class="onesteporder-contact-td2">
						<select name="billing_address[countryID]" onChange="ChangeBillingCountry(this, '<?php echo $this->_tpl_vars['type']; ?>
')"  xAdress="<?php echo $this->_tpl_vars['address']['countryID']; ?>
" class="onesteporder-contact-select" >
						<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_country']):
?>
							<option value="<?php echo $this->_tpl_vars['_country']['countryID']; ?>
"
							<?php if ($this->_tpl_vars['POST']['billing_address']['countryID'] != '' && $this->_tpl_vars['POST']['billing_address']['countryID'] == $this->_tpl_vars['_country']['countryID']): ?>
								selected
							<?php else: ?>
								<?php if ($this->_tpl_vars['_country']['countryID'] == @CONF_DEFAULT_COUNTRY): ?>selected<?php endif; ?>
							<?php endif; ?>
							><?php echo ((is_array($_tmp=$this->_tpl_vars['_country']['country_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
				<?php else: ?>
					<input name="billing_address[countryID]" value="" type="hidden"   xAdress="" />
				<?php endif; ?> 
			<?php endif; ?> 
			</tbody>
		<?php endif; ?>
		<?php endif; ?>

	
		
	<tr class="onesteporder-contact-tr<?php if (! @CONF_ENABLE_CONFIRMATION_CODE): ?>-last<?php endif; ?>">
		<td class="onesteporder-contact-td1">Комментарии к заказу:</td>
		<td class="onesteporder-contact-td2"><textarea name="order_comment"  id="OrderComment<?php echo $this->_tpl_vars['type']; ?>
" class="onesteporder-contact-textarea" ><?php if ($this->_tpl_vars['POST']['order_comment']): 
 echo $this->_tpl_vars['POST']['order_comment']; 
 else: 
 echo $this->_tpl_vars['YandexAdress']['comment']; 
 endif; ?></textarea></td>
	</tr>
	
	<?php if (@CONF_ENABLE_CONFIRMATION_CODE): ?>
	<tr class="onesteporder-contact-tr-last">
		<td class="onesteporder-contact-td1"><span>*</span><?php echo 'Введите число, изображенное на рисунке'; ?>
</td>
		<td class="onesteporder-contact-td2">
			<img src="<?php echo @URL_ROOT; ?>
/imgval.php" alt="code" class="onesteporder-code-img" />
			<input name="confirmation_code" value="" type="text" class="onesteporder-contact-input onesteporder-code-input"  >
		</td>
	</tr>
	<?php endif; ?>
	
	
	
	
	<tr class="onesteporder-contact-tr-last">
		<td colspan=2 class="onesteporder-contact-td-last"><span>*</span> - Поля обязательные для заполнения</td>
	</tr>
	
	<?php if ($this->_tpl_vars['fields']['useradresses'] == 1): ?>
	<?php if (smarty_modifier_count($this->_tpl_vars['addresses']) > 1 && $this->_tpl_vars['log']): ?>
		<tr class="onesteporder-contact-tr-last">
			<td colspan=2 class="onesteporder-contact-td-last"><a href="javascript:void(0);" onclick="SelectUserAdresses('<?php echo $this->_tpl_vars['type']; ?>
');">Показать все ваши адреса</a></td>
		</tr>
	<?php endif; ?>
	<?php endif; ?>

	<tr class="onesteporder-contact-tr-delay"><td colspan="2"></td></tr>
</table>





<?php if ($this->_tpl_vars['fields']['useradresses'] == 1): ?>
<?php if (smarty_modifier_count($this->_tpl_vars['addresses']) > 1 && $this->_tpl_vars['log']): ?>
	<div id="AllAdresses<?php echo $this->_tpl_vars['type']; ?>
" class="system_DisplayNone onesteporder-contact-adresses">

		<div class="onesteporder-block-title"><?php echo 'Ваши адреса'; ?>
:
		<a href='javascript:void(0);' onclick="SelectUserAdresses('<?php echo $this->_tpl_vars['type']; ?>
');" class="onesteporder-contact-adresses-remove"><span></span></a>
		</div>
		<table cellspacing="0" cellpadding="0" class="onesteporder-contact-adresses-table">
		<tr class="onesteporder-contact-adresses-tr-delay"><td colspan="2"></td></tr>
		<?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['addresses']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
			<tr class="onesteporder-contact-adresses-tr<?php if ($this->_sections['a']['last']): ?>-last<?php endif; ?>">
				<td class="onesteporder-contact-adresses-td1">
					<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['last_name']; ?>
 <?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['first_name']; ?>
<br>
					<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['address']; ?>
<br>
					<?php if ($this->_tpl_vars['addresses'][$this->_sections['a']['index']][6]): 
 echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']][6]; 
 else: 
 echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['state']; 
 endif; ?>
					<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['city']; ?>
 <?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['country']; ?>
 <?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['zip']; ?>

				</td>
				<td class="onesteporder-contact-adresses-td2">
				<input type="button" onclick="UpdateUserAdress(
				this, '<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['first_name']; ?>
', '<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['last_name']; ?>
', '<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['countryID']; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['zoneID']; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['zip']; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']][6]; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['city']; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['address']; ?>
','<?php echo $this->_tpl_vars['type']; ?>
','<?php echo $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['addressID']; ?>
');" value="<?php echo 'Выбрать данный адрес'; ?>
" class="system_ChangeAdressButtons onesteporder-contact-button <?php if ($this->_tpl_vars['POST']['addressID'] != '' && $this->_tpl_vars['POST']['addressID'] == $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['addressID']): ?>disabled<?php elseif ($this->_tpl_vars['address']['addressID'] != '' && $this->_tpl_vars['address']['addressID'] == $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['addressID']): ?>onesteporder-contact-button-disabled<?php endif; ?>" <?php if ($this->_tpl_vars['POST']['addressID'] != '' && $this->_tpl_vars['POST']['addressID'] == $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['addressID']): ?>disabled<?php elseif ($this->_tpl_vars['address']['addressID'] != '' && $this->_tpl_vars['address']['addressID'] == $this->_tpl_vars['addresses'][$this->_sections['a']['index']]['addressID']): ?>disabled<?php endif; ?> />
				</td>
			</tr>
		<?php endfor; endif; ?>
		<tr class="onesteporder-contact-adresses-tr-delay"><td colspan="2"></td></tr>
		</table>
	</div>
<?php endif; ?>
<?php endif; ?>