<?php /* Smarty version 2.6.26, created on 2016-12-18 15:50:44
         compiled from /home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 7, false),array('modifier', 'division_id', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 18, false),array('modifier', 'escape', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 91, false),array('modifier', 'cat', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 160, false),array('modifier', 'set_query', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 160, false),array('function', 'cycle', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/discount_coupons/manage_coupons.html', 123, false),)), $this); ?>
<h1><?php echo 'Купоны на скидку'; ?>
</h1>

<?php if ($this->_tpl_vars['_errors']): ?>
    <div class="error_block">
	<ul>
	<?php $_from = $this->_tpl_vars['_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_error']):
?>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['_error'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
    </div>
	<?php $this->assign('new_coupon_form_display', ''); ?>
<?php else: ?>
	<?php $this->assign('new_coupon_form_display', 'none'); ?>	
<?php endif; ?>

<?php if (@CONF_DSC_COUPONS_ENABLED == 'N'): ?>
<div class="comment_block">
<?php echo 'Скидки по купонам отключены. Включите эту возможность'; ?>
 <a href="javascript: void(0);" onClick="top.location='frame.php?did=<?php echo ((is_array($_tmp='discount_settings')) ? $this->_run_mod_handler('division_id', true, $_tmp) : smarty_modifier_division_id($_tmp)); ?>
'"><?php echo 'в настройках скидок'; ?>
</a>
</div>
<?php endif; ?>

<form name="NewDiscountCouponForm" method="post">
<input type="hidden" name="coupon_action" value="add_new" />

<div style="background-color: #fafae7; padding: 10px; width: 550;">
<table id="new_coupon_form" cellpadding="2" cellspacing="1" border="0" width="100%">
	<colgroup>
		<col width="20%" />
		<col width="80%" />
	</colgroup>
	<tr>
		<td colspan="2"><button type="button" onClick="javascript: toogleNewCouponForm();"><?php echo 'Создать купон'; ?>
</button></td>
	</tr>
    <tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
; height: 10px;"></tr>
	<tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
		<td align="left"><?php echo 'Код купона'; ?>
:</td>
		<td><input type="text" name="new_coupon[code]" value="<?php echo $this->_tpl_vars['new_coupon_data']['code']; ?>
" maxlength="10" /></td>
	</tr>
	<tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
		<td align="left"><?php echo 'Действующий'; ?>
:</td>
		<td><input type="checkbox" name="new_coupon[is_active]" <?php if ($this->_tpl_vars['new_coupon_data']['is_active'] == 'Y'): ?>checked="checked"<?php endif; ?> /></td>
	</tr>
	<tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
		<td align="left" valign="top"><?php echo 'Тип'; ?>
:</td>
		<td>
			<table cellpadding="2" cellspacing="1" width="100%">
				<colgroup>
					<col width="2%" />
					<col width="98%" />
				</colgroup>
				<tr>
					<td><input id="new_coupon_su" type="radio" name="new_coupon[type]" value="SU" <?php if ($this->_tpl_vars['new_coupon_data']['type'] == 'SU'): ?>checked="checked"<?php endif; ?> /></td>
					<td><label for="new_coupon_su"><?php echo 'Одноразовый'; ?>
</label></td>
				</tr>
				<tr>
					<td><input id="new_coupon_mx"  type="radio" name="new_coupon[type]" value="MX" <?php if ($this->_tpl_vars['new_coupon_data']['type'] == 'MX'): ?>checked="checked"<?php endif; ?> /></td>
					<td><label for="new_coupon_mx"><?php echo 'Многоразовый, истекает'; ?>
</label> <input type="text" name="new_coupon[expire_date]" value="<?php echo $this->_tpl_vars['new_coupon_data']['expire_date']; ?>
" /></td>
				</tr>
				<tr>
					<td><input id="new_coupon_mn"  type="radio" name="new_coupon[type]" value="MN" <?php if ($this->_tpl_vars['new_coupon_data']['type'] == 'MN'): ?>checked="checked"<?php endif; ?> /></td>
					<td><label for="new_coupon_mn"><?php echo 'Многоразовый, не истекает'; ?>
</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
		<td align="left" valign="top"><?php echo 'Скидка'; ?>
:</td>
		<td>
			<table cellpadding="2" cellspacing="1" width="100%" border="0">
				<colgroup>
					<col width="2%" />
					<col width="25%" />
					<col width="73%" />
				</colgroup>
				<tr>
					<td><input type="radio" name="new_coupon[discount_type]" value="P" <?php if ($this->_tpl_vars['new_coupon_data']['discount_type'] == 'P'): ?>checked="checked"<?php endif; ?> /></td>
					<td><input type="text" name="new_coupon[discount_percent]" value="<?php echo $this->_tpl_vars['new_coupon_data']['discount_percent']; ?>
" /></td>
					<td>%</td>
				</tr>
				<tr>
					<td><input type="radio" name="new_coupon[discount_type]" value="A" <?php if ($this->_tpl_vars['new_coupon_data']['discount_type'] == 'A'): ?>checked="checked"<?php endif; ?> /></td>
					<td><input type="text" name="new_coupon[discount_absolute]" value="<?php echo $this->_tpl_vars['new_coupon_data']['discount_absolute']; ?>
" /></td>
					<td><?php echo $this->_tpl_vars['currency_sign']; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
    <tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
        <td align="left" valign="top"><?php echo 'Описание купона'; ?>
:</td>
        <td>
            <input type="text" name="new_coupon[comment]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_coupon_data']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" maxlength="255" style="width: 400px;" />
        </td>
    </tr>
	<tr style="display: <?php echo $this->_tpl_vars['new_coupon_form_display']; ?>
;">
		<td align="left" colspan="2"><input type="submit" value="<?php echo 'Создать'; ?>
" /></td>
	</tr>
</table>
</div>

</form>

<?php echo $this->_tpl_vars['coupons_nav']; ?>

<table class="grid" width="90%" border="0">
	<colgroup>
		<col width="15%" />
		<col width="25%" />
		<col width="17%" />
        <col width="17%" />
        <col width="25%" />
        <col width="1%" />
	</colgroup>
	<tr class="gridsheader">
		<td><?php echo 'Код купона'; ?>
</td>
		<td align="center"><?php echo 'Тип'; ?>
</td>
		<td align="center"><?php echo 'Скидка'; ?>
</td>
        <td align="center"><?php echo 'Действующий'; ?>
</td>
        <td align="center"><?php echo 'Описание купона'; ?>
</td>
        <td align="center"><input type="checkbox" id="toogle_coupons_check" <?php if (! $this->_tpl_vars['coupons_list']): ?>disabled="disabled"<?php else: ?>onClick="toogleCheckboxes('coupon_check', this.checked)"<?php endif; ?> /></td>
	</tr>
	<?php if ($this->_tpl_vars['coupons_list']): ?>
		<?php $_from = $this->_tpl_vars['coupons_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['coupon_item']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
			<td <?php if ($this->_tpl_vars['coupon_item']['is_disabled']): ?>style="color: #888888;"<?php endif; ?>><?php echo $this->_tpl_vars['coupon_item']['coupon_code']; ?>
</td>
			<td align="center" <?php if ($this->_tpl_vars['coupon_item']['is_disabled']): ?>style="color: #888888;"<?php endif; ?>>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr><td align="center">
				<?php if ($this->_tpl_vars['coupon_item']['coupon_type'] == 'SU'): ?>
					<?php echo 'Одноразовый'; ?>

				<?php else: ?>
					<?php echo 'Многоразовый'; ?>

				<?php endif; ?>
                </td></tr>
                <?php if ($this->_tpl_vars['coupon_item']['coupon_type'] == 'MX'): ?>
                    <tr><td align="center" nowrap="nowrap"><?php echo $this->_tpl_vars['coupon_item']['expire_info']; ?>
</td></tr>
                <?php endif; ?>
                <tr><td nowrap="nowrap" align="center">
                <?php if ($this->_tpl_vars['coupon_item']['coupon_type'] == 'SU'): ?>
                    <?php if ($this->_tpl_vars['coupon_item']['orders_count'] > 0): ?>
                        <span style="cursor: pointer; border-bottom: dashed 1px;" onClick="toogleElementVisibility('co_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
');"><?php echo 'Использовался'; ?>
</span>
                    <?php else: ?>
                        <?php echo 'не использовался'; ?>

                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['coupon_item']['orders_count'] > 0): ?>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="right" style="padding: 1px;"><?php echo 'Использовался'; ?>
</td>
                            <td align="left" style="padding: 1px;"><span style="cursor: pointer; border-bottom: dashed 1px;" onClick="toogleElementVisibility('co_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
');"><?php echo $this->_tpl_vars['coupon_item']['orders_count']; ?>
&nbsp;<?php echo 'раз(а)'; ?>
</span></td>
                        </tr>
                        </table>
                    <?php else: ?>
                        <?php echo 'не использовался'; ?>

                    <?php endif; ?>
                <?php endif; ?>
                </td></tr>
                
                <?php if ($this->_tpl_vars['coupon_item']['orders_count'] > 0): ?>
                <tr id="co_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
" style="display: none;"><td align="center">
                <?php $_from = $this->_tpl_vars['coupon_item']['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['coupon_orders'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['coupon_orders']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_id']):
        $this->_foreach['coupon_orders']['iteration']++;

 if (! ($this->_foreach['coupon_orders']['iteration'] <= 1)): ?>, <?php endif; ?><span style="cursor: pointer;" onClick="window.location='<?php echo ((is_array($_tmp=((is_array($_tmp='&ukey=admin_order_detailed&orderID=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['order_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['order_id'])))) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
'"><?php echo @CONF_ORDERID_PREFIX; 
 echo $this->_tpl_vars['order_id']; ?>
</span><?php endforeach; endif; unset($_from); ?>
                </td></tr>
                <?php endif; ?>
                
                </table>
			</td>
			<td align="center" style="border-left: solid 1px #F5F0BB;">
                <input type="text" size="6" name="coupon_discount" id="cd_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
" value="<?php if ($this->_tpl_vars['coupon_item']['discount_type'] == 'P'): 
 echo $this->_tpl_vars['coupon_item']['discount_percent']; 
 else: 
 echo $this->_tpl_vars['coupon_item']['discount_absolute']; 
 endif; ?>" onBlur="checkDiscount(this.id);" />
                <select name="coupon_discount_type" id="cdt_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
" onChange="checkDiscount(this.id.replace('cdt_','cd_'));">
                    <option value="P" <?php if ($this->_tpl_vars['coupon_item']['discount_type'] == 'P'): ?>selected="selected"<?php endif; ?>>%</option>
                    <option value="A" <?php if ($this->_tpl_vars['coupon_item']['discount_type'] == 'A'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['currency_sign']; ?>
</option>
                </select>
			</td>
            <td align="center" style="border-right: solid 1px #F5F0BB;">
                <input type="checkbox" name="coupon_status" id="cs_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
"
                    <?php if ($this->_tpl_vars['coupon_item']['is_disabled']): ?>
                        disabled="disabled"
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['coupon_item']['is_active'] == 'Y'): ?>checked="checked"<?php endif; ?>
                    <?php endif; ?>
                />
            </td>
            <td align="left" <?php if ($this->_tpl_vars['coupon_item']['is_disabled']): ?>style="color: #888888;"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['coupon_item']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
            <td align="center">
                <input type="checkbox" name="coupon_check" id="cc_<?php echo $this->_tpl_vars['coupon_item']['coupon_id']; ?>
" onClick="setDelButton();" />
            </td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
        <tr style="height: 40px;">
            <td colspan="2">&nbsp;</td>
            <td colspan="2" align="center" style="border: solid 1px #F5F0BB; background-color: #FFFFFF; border-top: none;"><button type="button" id="upd_coupons_button" onClick="submitUpdateForm();"><?php echo 'Обновить'; ?>
</button></td>
            <td></td>
            <td align="right" style="padding: 0px;"><button type="button" id="del_coupons_button" disabled="disabled"><?php echo 'Удалить'; ?>
</button></td>
        </tr>
	<?php else: ?>
        <tr>
            <td colspan="5" align="center"><?php echo 'Нет ни одного купона на скидку.'; ?>
</td>
        </tr>
	<?php endif; ?>
</table>
<?php echo $this->_tpl_vars['coupons_nav']; ?>


<form name="CouponsForm" method="post">
<input type="hidden" name="coupon_action" value="" />
<input type="hidden" name="coupons_ids" value="" />
<input type="hidden" name="coupons_discounts" value="" />
<input type="hidden" name="discount_types" value="" />
</form>

<script language="JavaScript" type="text/javascript">
<?php echo '

function toogleNewCouponForm()
{
	var tbl = document.getElementById(\'new_coupon_form\');
	var state = (tbl.rows[1].style.display != \'none\');
	
	for(i=1; i < tbl.rows.length; i++)
	{
		tbl.rows[i].style.display = (state ? \'none\' : \'\');
	};
	
	return;
};

function toogleCheckboxes(cb_name, state)
{
    var els = document.getElementsByName(cb_name);
    
    for(i=0; i < els.length; i++)
    {
        els[i].checked = state;
    };
    
    setDelButton();
};

function toogleElementVisibility(el_id)
{
    if(document.getElementById(el_id))
    {
        document.getElementById(el_id).style.display = (document.getElementById(el_id).style.display == \'\' ? \'none\' : \'\'); 
    };
};

function getCheckedCheckboxes(cb_name, id_prefix)
{
    return getCheckboxes(cb_name, id_prefix, true);
};

function getUncheckedCheckboxes(cb_name, id_prefix)
{
    return getCheckboxes(cb_name, id_prefix, false);
};

function getCheckboxes(cb_name, id_prefix, cb_status)
{
    var els = document.getElementsByName(cb_name);
    var ids = new Array();
    
    for(i=0; i < els.length; i++)
    {
        if(els[i].checked == cb_status)
        {
            ids[ids.length] = els[i].id.replace(id_prefix,\'\');
        };
    };
    
    return ids;
};

function setDelButton()
{
    var cb_ids = getCheckedCheckboxes(\'coupon_check\', \'cc_\');
    var del_button = document.getElementById(\'del_coupons_button\');
    del_button.disabled = (cb_ids.length == 0);
    del_button.onclick = (cb_ids.length == 0 ? function() {} : submitDelForm);
};

function submitDelForm()
{
    if(!confirm(\''; 
 echo 'Удалить выбранные купоны?'; 
 echo '\'))
    {
        return;
    };
    
    var ids = getCheckedCheckboxes(\'coupon_check\', \'cc_\');
    submitCouponForm(\'del_coupons\', ids.join(\'|\'));
};

function getCouponsDiscounts()
{
    return getElementsValues(\'coupon_discount\', \'cd_\');
};

function getDiscountTypes()
{
    return getElementsValues(\'coupon_discount_type\', \'cdt_\');
};

function getElementsValues(el_names, id_prefix)
{
    var elements = document.getElementsByName(el_names);
    var values = new Array();
    for(i=0; i < elements.length; i++)
    {
        values.push((elements[i].id.replace(id_prefix,\'\').concat(\'-\').concat(elements[i].value)));
    };
    return values;
}

function submitUpdateForm()
{
    var ids_active = getCheckedCheckboxes(\'coupon_status\', \'cs_\');
    var ids_inactive = getUncheckedCheckboxes(\'coupon_status\', \'cs_\');
    document.forms[\'CouponsForm\'].coupons_discounts.value = getCouponsDiscounts().join(\'|\');
    document.forms[\'CouponsForm\'].discount_types.value = getDiscountTypes().join(\'|\');
    submitCouponForm(\'upd_coupons\', ids_active.join(\'|\')+\'-\'+ids_inactive.join(\'|\'));
};

function submitCouponForm(action, ids_value)
{
    var frm = document.forms[\'CouponsForm\'];
    frm.coupon_action.value = action;
    frm.coupons_ids.value = ids_value;
    frm.submit();
};

function checkDiscount(element_id)
{
    var element = document.getElementById(element_id);
    element.value = formatFloat(element.value);
    var dsc_value = parseFloat(element.value);
    var coupon_id = element.id.replace(\'cd_\',\'\');
    var dsc_type = document.getElementById(\'cdt_\'+coupon_id).value;
    if(dsc_type == \'P\' && dsc_value > 100)
    {
        element.value = \'100.00\';
    };
};

function formatFloat(string)
{
    string = string.replace(/[^0123456789.]/g,\'\');
    var parts = string.split(\'.\');
    
    while(parts.length > 2)
    {
        parts[1] = parts[1].concat(parts[2]);
        parts.splice(2,1);
    };
    
    if(parts[0] == \'\')
    {
        parts[0] = \'0\';
    };
    
    if(parts.length !=2 || parts[1] == \'\')
    {
        parts[1] = \'00\';
    };
    
    return parts.join(\'.\');
}

'; ?>

</script>