<?php /* Smarty version 2.6.26, created on 2016-09-09 09:28:28
         compiled from backend/order_editor/order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'backend/order_editor/order.html', 17, false),array('modifier', 'escape', 'backend/order_editor/order.html', 26, false),array('modifier', 'translate', 'backend/order_editor/order.html', 27, false),array('modifier', 'lower', 'backend/order_editor/order.html', 27, false),array('modifier', 'replace', 'backend/order_editor/order.html', 43, false),array('modifier', 'string_format', 'backend/order_editor/order.html', 222, false),array('modifier', 'round', 'backend/order_editor/order.html', 225, false),array('modifier', 'strpos', 'backend/order_editor/order.html', 236, false),array('function', 'html_options', 'backend/order_editor/order.html', 111, false),array('function', 'cycle', 'backend/order_editor/order.html', 216, false),)), $this); ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/widget_checkout.js"></script>
<div style="padding: 6px;">

<h1 class="breadcrumbs"><a href='<?php echo $this->_tpl_vars['olist_url']; ?>
'><?php echo 'Список заказов'; ?>
</a>
&raquo;
<a href="<?php echo $this->_tpl_vars['odet_url']; ?>
"><?php echo 'Заказ'; ?>
 #<?php echo $this->_tpl_vars['order_info']['orderID_view']; ?>
</a>
&raquo;
<?php echo 'Редактирование заказа'; ?>

</h1>

<form name="OrderForm" method="post">
<input type="hidden" name="action" value="save_order_info">
<input type="hidden" name="order_id" value="<?php echo $this->_tpl_vars['order_info']['orderID']; ?>
">

<?php $this->assign('customer_full_name', ((is_array($_tmp=$this->_tpl_vars['order_info']['customer_firstname'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' '))); ?>
<table border="0" width="630" cellpadding="5" cellspacing="0" style="background-color: #FAFAE7;">
<colgroup>
    <col width="10%" />
    <col width="90%" />
</colgroup>
<tr>
    <td valign="top"><?php echo 'Покупатель'; ?>
:</td>
    <td>
        <a href="index.php?ukey=user_info&userID=<?php echo $this->_tpl_vars['order_info']['customerID']; ?>
"><span id="ord_customer_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer_full_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a>
        (<?php echo ((is_array($_tmp=((is_array($_tmp='usr_custinfo_login')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
:&nbsp;<?php if ($this->_tpl_vars['customer_login']): ?><strong><?php echo $this->_tpl_vars['customer_login']; ?>
</strong><?php else: 
 echo 'нет'; 
 endif; ?>)
        <br />
        <?php if (@CONF_BACKEND_SAFEMODE == 0): ?>
            <?php echo 'Email'; ?>
:&nbsp;<a href="mailto:<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['customer_email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['customer_email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
        <?php else: ?>
            <b><?php echo 'Заблокировано к показу в защищенном режиме'; ?>
</b>
        <?php endif; ?>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['order_info']['reg_fields_values']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
         ,&nbsp;
         <?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['reg_fields_values'][$this->_sections['i']['index']]['reg_field_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['reg_fields_values'][$this->_sections['i']['index']]['reg_field_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

        <?php endfor; endif; ?>
    </td>
</tr>
<tr>
    <td colspan="2">
        <button type="button" onClick="onAssignClick();"><?php echo 'Передать заказ другому покупателю'; ?>
</button>
        <?php echo 'или'; ?>
&nbsp;<a href="index.php?ukey=user_info&userID=<?php echo $this->_tpl_vars['order_info']['customerID']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp='lbl_edit_cust_info')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%0%", $this->_tpl_vars['customer_full_name']) : smarty_modifier_replace($_tmp, "%0%", $this->_tpl_vars['customer_full_name'])); ?>
</a>
    </td>
</tr>
</table>

<br />

<table border="0" cellpadding="2" cellspacing="1">
<tr>
    <td valign="top"><?php echo 'Комментарий'; ?>
:</td>
    <td><textarea name="order_comment" rows="3" cols="50"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['customers_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td>
</tr>
</table>

<br />

<table cellpadding="0" cellspacing="0" border="0" width="630">
    <colgroup>
        <col width="50%" />
        <col width="50%" />
    </colgroup>
<tr>
    <td style="padding-right: 15px;" valign="top">
        <h3><?php echo 'Доставка'; ?>
 &ndash; <input type="text" size="20" maxlength="255" name="shipping[type]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><?php if ($this->_tpl_vars['order_info']['shippingServiceInfo']): ?> (<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shippingServiceInfo'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)<?php endif; ?></h3>
        
        <table border="0" cellpadding="1" cellspacing="1" width="100%" class="order_edit_address_form">
            <colgroup>
                <col width="30%" />
                <col width="70%" />
            </colgroup>
            <tr>
                <td align="left" colspan="2"><?php echo 'Получатель'; ?>
:</td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Имя'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="shipping[firstname]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_firstname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr><tr>
                <td nowrap="nowrap" valign="top"><?php echo 'Адрес'; ?>
:</td>
                <td><textarea class="txt_or_sel" name="shipping[address]" rows="2" cols="17"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_address'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Телефон'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="shipping[lastname]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_lastname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr>

            <tr>
                <td nowrap="nowrap"><?php echo 'Город'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="shipping[city]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Область'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['states']['shipping']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/order_editor/states.html", 'smarty_include_vars' => array('states' => $this->_tpl_vars['states']['shipping'],'selected' => $this->_tpl_vars['shipping_state_id'],'name' => 'shipping[state_id]','class' => 'txt_or_sel')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <input class="txt_or_sel" type="text" name="shipping[state]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Почтовый индекс'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="shipping[zip]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_zip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Страна'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['countries']): ?>
                    <?php echo smarty_function_html_options(array('name' => "shipping[country_id]",'options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['shipping_country_id'],'onChange' => "changeStates('shipping')",'class' => 'txt_or_sel'), $this);?>

                <?php else: ?>
                    <input class="txt_or_sel" type="text" name="shipping[country]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['shipping_country'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                <?php endif; ?>
                </td>
            </tr>
        </table>
        <br />
    </td>
    <td valign="top">
        <h3><?php echo 'Оплата'; ?>
 &ndash; <input type="text" size="20" maxlength="255" name="payment_type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['payment_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></h3>
        
        <table border="0" cellpadding="1" cellspacing="1" width="100%" class="order_edit_address_form">
            <colgroup>
                <col width="30%" />
                <col width="70%" />
            </colgroup>
            <tr>
                <td align="left" colspan="2"><?php echo 'Плательщик'; ?>
:</td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Имя'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="billing[firstname]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_firstname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr><tr>
                <td nowrap="nowrap" valign="top"><?php echo 'Адрес'; ?>
:</td>
                <td><textarea class="txt_or_sel" name="billing[address]" rows="2" cols="17"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_address'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Телефон'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="billing[lastname]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_lastname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr>
            
            <tr>
                <td nowrap="nowrap"><?php echo 'Город'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="billing[city]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Область'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['states']['billing']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/order_editor/states.html", 'smarty_include_vars' => array('states' => $this->_tpl_vars['states']['billing'],'selected' => $this->_tpl_vars['billing_state_id'],'name' => 'billing[state_id]','class' => 'txt_or_sel')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <input class="txt_or_sel" type="text" name="billing[state]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Почтовый индекс'; ?>
:</td>
                <td><input class="txt_or_sel" type="text" name="billing[zip]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_zip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Страна'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['countries']): ?>
                    <?php echo smarty_function_html_options(array('name' => "billing[country_id]",'options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['billing_country_id'],'onChange' => "changeStates('billing')",'class' => 'txt_or_sel'), $this);?>

                <?php else: ?>
                    <input class="txt_or_sel" type="text" name="billing[country]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['billing_country'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
                <?php endif; ?>
                </td>
            </tr>
        </table>
        
        <?php if ($this->_tpl_vars['order_info']['cc_number'] || $this->_tpl_vars['order_info']['cc_holdername'] || $this->_tpl_vars['order_info']['cc_expires'] || $this->_tpl_vars['order_info']['cc_expires']): ?>
        <p>
            <strong><?php echo 'Информация о кредитной карте'; ?>
</strong>
            <br />
            <?php if (true): ?>                <table>
                <tr>
                    <td><?php echo 'Номер кредитной карты'; ?>
: <b><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['cc_number'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")); ?>
</b></td>
                </tr>
                <tr>
                    <td><?php echo 'Держатель карты'; ?>
: <b><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['cc_holdername'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")); ?>
</b></td>
                </tr>
                <tr>
                    <td><?php echo 'Истекает'; ?>
: <b><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['cc_expires'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")); ?>
</b></td>
                </tr>
                <tr>
                    <td><?php echo 'CVV'; ?>
: <b><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['cc_cvv'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")); ?>
</b></td>
                </tr>
                </table>
            <?php else: ?>
                <?php echo 'Эта информация доступна только при защищенном соединении (SSL). Для доступа к этой информации выйдите из аккаунта, и войдите вновь, используя безопасное SSL соединение (нужно включить соответствующую галочку).'; ?>

                <br /><br />
            <?php endif; ?>
        </p>
        <?php endif; ?>
    </td>
</tr>
</table>

<div style="padding-left: 10px;">
<table class="grid" id="ord_order_content" border="0" width="620">

<tr class="gridsheader"> 
    <td></td>
    <td nowrap="nowrap" ><?php echo 'Наименование'; ?>
</td>
    <td nowrap="nowrap" align="center"><?php echo 'Цена за штуку'; ?>
</td>
    <td nowrap="nowrap" align="center"><?php echo 'Кол-во'; ?>
</td>
    <td nowrap="nowrap" align="center"><?php echo 'Налог'; ?>
</td>
    <td nowrap="nowrap" align="right"><?php echo 'Стоимость (без налога)'; ?>
</td>
</tr>
<?php if ($this->_tpl_vars['order_content']): 
 unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['order_content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1','name' => 'ord_content'), $this);?>
">
    <td><a href="javascript: void(0);" onClick="onDeleteProductClick(this);"><img src="images_common/remove.gif" border="0"></a></td> 
    <td>
        <input type="hidden" name="order_content[<?php echo $this->_sections['i']['index']; ?>
][item_id]" value="<?php echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']]['itemID']; ?>
" />
        <input type="hidden" name="order_content[<?php echo $this->_sections['i']['index']; ?>
][name]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_content'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><?php echo ((is_array($_tmp=$this->_tpl_vars['order_content'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

    </td>
    <td><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<input type="text" name="order_content[<?php echo $this->_sections['i']['index']; ?>
][price]" size="12" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_content'][$this->_sections['i']['index']]['ItemBPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
" onBlur="onPriceChange(this);" /></td>
    <td align="center"><input type="text" name="order_content[<?php echo $this->_sections['i']['index']; ?>
][qty]" size="4" value="<?php echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']]['Quantity']; ?>
" onBlur="onQtyChange(this);" /></td>
    <td align="right"><input type="text" name="order_content[<?php echo $this->_sections['i']['index']; ?>
][tax]" size="4" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order_content'][$this->_sections['i']['index']]['tax'])) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
" onBlur="onPriceChange(this);" />%</td>
    <td align="right"><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<span id="item_price_<?php echo $this->_sections['i']['index']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_content'][$this->_sections['i']['index']]['ItemPrice'])) ? $this->_run_mod_handler('round', true, $_tmp, '2') : smarty_modifier_round($_tmp, '2')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
</span></td>
</tr>
<script language="JavaScript" type="text/javascript">var no_products = false;</script>
<?php endfor; endif; 
 else: ?>
<tr>
    <td colspan="6" style="color: #777777"><?php echo 'В этом заказе нет ни одного продукта.'; ?>
</td>
</tr>
<script language="JavaScript" type="text/javascript">var no_products = true;</script>
<?php endif; ?>

<?php if (((is_array($_tmp=$_SERVER['HTTP_USER_AGENT'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Safari') : smarty_modifier_strpos($_tmp, 'Safari'))): ?>
<tr style="height: 1px; background-color: #666666;"><td colspan="6" style="padding: 1px 0px 0px 0px;"></td></tr>
<?php else: ?>
<tr style="height: 1px; background-color: #666666;"><td colspan="6" style="padding: 0px;"></td></tr>
<?php endif; ?>

<tr style="background-color: #F5F0BB;">
    <td colspan="5"><?php echo 'Добавить продукты в заказ'; ?>
:&nbsp;<input type="text" id="search_products_field" size="24" value="" onkeypress="return find_noenter(event);" /></td>
    <td><button type="button" onClick="onFindProductsClick();"><?php echo 'Найти продукты'; ?>
</button></td>
</tr>

<tr class="gridline" id="finded_products" style="display: none;"><td colspan="6"></td></tr>

<?php if (((is_array($_tmp=$_SERVER['HTTP_USER_AGENT'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Safari') : smarty_modifier_strpos($_tmp, 'Safari'))): ?>
<tr style="height: 1px; background-color: #666666;"><td colspan="6" style="padding: 1px 0px 0px 0px;"></td></tr>
<?php else: ?>
<tr style="height: 1px; background-color: #666666;"><td colspan="6" style="padding: 0px;"></td></tr>
<?php endif; ?>

<tr class="gridline1">
    <td colspan="5">
        <table cellpadding="0" cellspacing="0" width="100%">
        <colgroup>
            <col width="8%" />
            <col width="92%" />
        </colgroup>
        <tr>
            <td style="padding: 0px;"><?php echo 'Скидка, %'; ?>
</td>
            <td style="padding: 0px;">
                <span style="border-bottom: dashed 1px black; cursor: pointer;" onClick="var el = document.getElementById('tr_discount_descr'); el.style.display = (el.style.display == 'none' ? '' : 'none');"><?php echo 'редактировать описание скидки'; ?>
</span>
            </td>
        </tr>
        </table>
    </td>
    <td align="right"><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<input type="text" size="6" name="order_discount" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_info']['cnv']['order_discount'])) ? $this->_run_mod_handler('round', true, $_tmp, '2') : smarty_modifier_round($_tmp, '2')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
" onBlur="onPriceChange(this);" /></td>
</tr>

<tr class="gridline1" id="tr_discount_descr" style="display: none;">
    <td colspan="6">
        <textarea name="order_discount_description" cols="50" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['discount_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
    </td>
    
</tr>

<tr class="gridline1">
    <td colspan="5"><?php echo 'Стоимость доставки'; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<input type="text" size="6" name="order_shipping_cost" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_info']['cnv']['shipping_cost'])) ? $this->_run_mod_handler('round', true, $_tmp, '2') : smarty_modifier_round($_tmp, '2')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
" onBlur="onPriceChange(this);" /></td>
</tr>

<tr class="gridline1">
    <td colspan="5"><?php echo 'Налог'; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<span id="order_tax"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_info']['tax'])) ? $this->_run_mod_handler('round', true, $_tmp, '2') : smarty_modifier_round($_tmp, '2')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
</span></td>
</tr>

<tr class="gridline1" id="ord_total_row">
    <td colspan="5"><?php echo 'Итого'; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['order_info']['currency_code']; ?>
&nbsp;<span id="order_total"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_info']['cnv']['order_amount'])) ? $this->_run_mod_handler('round', true, $_tmp, '2') : smarty_modifier_round($_tmp, '2')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
</span></td>
</tr>

</table>

</div>

<table border="0" cellpadding="2" cellspacing="2">
    <tr>
        <td><button type="submit" style="font-size:130%; font-weight:bold; margin:10px; padding:3px;"><?php echo 'Сохранить'; ?>
</button></td>
        <td><?php echo 'или'; ?>
</td>
        <td><a href='<?php echo $this->_tpl_vars['odet_url']; ?>
'><?php echo 'Отмена'; ?>
</a></td>
    </tr>
</table>

</form>

</div>

<script language="JavaScript" type="text/javascript">
<?php echo '

function formatFloat(string)
{
	var sign = string.match(/(-)[\\d]+\\.?[\\d]*/g);
	if(sign){
		sign=\'-\';
	}else{
		sign = \'\';
	}
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
    
    if(parts[1].length == 1)
    {
        parts[1] += \'0\';
    };
    
    return \'\'+ sign + parts.join(\'.\');
};

function formatInt(string, zero_avail)
{
    string = string.replace(/[^0123456789]/g,\'\');
    if(string == \'\')
    {
        string = \'0\';
    };
    
    if(string == \'0\' && !zero_avail)
    {
        string = \'1\';
    };
    
    return string;
};

function onPriceChange(el)
{
    var val = parseFloat(formatFloat(el.value));
    val = Math.round(val * 100) / 100;
    el.value = formatFloat(val.toString());
    recalcAll();
};

function onQtyChange(el)
{
    el.value = formatInt(el.value);
    recalcAll();
};

function recalcAll()
{
    var order_total = 0;
    var total_tax = 0;
    var frm = document.forms[\'OrderForm\'];
    
    for(i=0; i<frm.elements.length; i++)
    {
        if(frm.elements[i].name.indexOf(\'order_content\') == 0)
        {
            var el = frm.elements[i];
            if(el.name.indexOf(\'price\') != -1)
            {
                var item_id = el.name.replace(\'order_content[\',\'\').replace(\'][price]\',\'\');
                var item_price = parseFloat(el.value) * parseInt(frm.elements[\'order_content[\'+item_id+\'][qty]\'].value);
                item_price = Math.round(item_price * 100) / 100;
                document.getElementById(\'item_price_\'+item_id).innerHTML = formatFloat(item_price.toString());
                order_total += item_price;
                var item_tax_percent = parseFloat(frm.elements[\'order_content[\'+item_id+\'][tax]\'].value);
                var item_tax_value = item_price * item_tax_percent / 100;
                total_tax += item_tax_value;
            };
        }
        else if(frm.elements[i].name == \'order_discount\')
        {
            order_total -= parseFloat(frm.elements[i].value);
        }
        else if(frm.elements[i].name == \'order_shipping_cost\')
        {
            order_total += parseFloat(frm.elements[i].value);
        };
    };
    
    order_total += total_tax;
    order_total = Math.round(order_total * 100) / 100;
    document.getElementById(\'order_total\').innerHTML = formatFloat(order_total.toString());
    
    total_tax = Math.round(total_tax * 100) / 100;
    document.getElementById(\'order_tax\').innerHTML = formatFloat(total_tax.toString());
};

function getProductsCount()
{
    var frm = document.forms[\'OrderForm\'];
    var count = 0;
    
    for(i=0; i<frm.elements.length; i++)
    {
        if(frm.elements[i].name.indexOf(\'order_content\') == 0 && frm.elements[i].name.indexOf(\'price\') != -1)
        {
            count++;
        };
    };
    
    return count;
};

var item_count = getProductsCount();

function onDeleteProductClick(el)
{
    if(getProductsCount() == 1)
    {
        alert(\''; 
 echo 'Нельзя удалить все продукты из заказа.'; 
 echo '\');
        return;
    };
    el.parentNode.parentNode.parentNode.deleteRow(el.parentNode.parentNode.rowIndex);
    recalcAll();
};

function onFindProductsClick()
{
    var search_string = document.getElementById(\'search_products_field\').value;
    if(search_string.length < 2) // TODO: make constant
    {
        document.getElementById(\'finded_products\').style.display = \'\';
        document.getElementById(\'finded_products\').childNodes[0].innerHTML = \''; 
 echo 'Слишком короткая строка поиска'; 
 echo '\';
        return;
    };
    
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4) return;
        if(req.responseText) alert(req.responseText);
        
        var products = req.responseJS.products;
        if(products.length == 0)
        {
            document.getElementById(\'finded_products\').style.display = \'\';
            document.getElementById(\'finded_products\').childNodes[0].innerHTML = \''; 
 echo 'Не найдено ни одного продукта'; 
 echo '\';
            return;
        };
        
        var _html = \'<table border="0" cellpadding="2" cellspacing="1" width="100%">\';
        _html += \'<colgroup><col width="50%" /><col width="30%" /><col width="20%" /></colgroup>\';
        
        for(i=0; i<products.length; i++)
        {
            _html += \'<tr>\';
            if(products[i].in_stock <= 0 && '; 
 echo @CONF_CHECKSTOCK; 
 echo ')
            {
                _html += \'<td>\'+products[i].name+\'</td>\';
            }
            else
            {
            _html += \'<td><a href="javascript: void(0);" onClick="addProduct({\\\'name\\\': \\\'\'+escape(products[i].name.replace(/\\"/g,\'\\\\\\"\'))+\'\\\', \\\'price\\\': \\\'\'+products[i].price+\'\\\', \\\'product_id\\\': \\\'\'+products[i].product_id+\'\\\', \\\'have_options\\\': \\\'\'+products[i].have_options+\'\\\'});" style="text-decoration: underline;">\'+products[i].name+\'</a></td>\';
            };
            _html += \'<td>'; 
 echo $this->_tpl_vars['order_info']['currency_code']; 
 echo '&nbsp;\'+formatFloat(products[i].price)+\'</td>\';
            '; ?>

            <?php if (@CONF_CHECKSTOCK): ?>
            _html += '<td nowrap="nowrap"><?php echo 'На складе'; ?>
:&nbsp;'+products[i].in_stock+'</td>';
            <?php else: ?>
            _html += '<td>&nbsp;</td>';
            <?php endif; ?>
            <?php echo '
            _html += \'</tr>\';
        };
        
        _html += \'</table>\';
        
        var results_container = document.getElementById(\'finded_products\');
        results_container.style.display = \'\';
        results_container.childNodes[0].innerHTML = _html;
    };

    try
    {
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({\'action\': \'search_products\', \'search_string\': search_string, order_id: '; 
 echo $this->_tpl_vars['order_info']['orderID']; 
 echo '});
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
};

function addProduct(product_info)
{
    if(product_info.have_options == \'1\')
    {
        openFadeIFrame(set_query(\'&action=show_options_form&product_id=\'+product_info.product_id));
        resizeFadeIFrame(500, 400);
        return;
    };

    var tbl = document.getElementById(\'ord_order_content\');
    
    if(no_products)
    {
        tbl.deleteRow(1);
        var new_row_index = 1;
        no_products = false;
    }
    else
    {
        var new_row_index = getProductsCount()+1;
    };

    item_count++;
    
    var row = tbl.insertRow(new_row_index);
    row.className = (tbl.rows[new_row_index-1].className == \'gridline\' ? \'gridline1\' : \'gridline\');
    
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    cell0.innerHTML = \'<a href="javascript: void(0);" onClick="onDeleteProductClick(this);"><img src="images_common/remove.gif" border="0"></a>\';
    cell1.innerHTML = \'<input type="hidden" name="order_content[\'+item_count+\'][product_id]" value="\'+product_info.product_id+\'" /><input id="order_content_name_\'+item_count+\'" type="hidden" name="order_content[\'+item_count+\'][name]" value="_" />\'+unescape(product_info.name).replace(/\\\\\\"/g,\'\\"\');
    cell2.innerHTML = \''; 
 echo $this->_tpl_vars['order_info']['currency_code']; 
 echo '&nbsp;<input type="text" name="order_content[\'+item_count+\'][price]" size="12" value="\'+formatFloat(product_info.price)+\'" onBlur="onPriceChange(this);" />\'
    cell3.innerHTML = \'<input type="text" name="order_content[\'+item_count+\'][qty]" size="4" value="1" onBlur="onQtyChange(this);" />\';
    cell4.innerHTML = \'<input type="text" name="order_content[\'+item_count+\'][tax]" size="4" value="0.00" onBlur="onPriceChange(this);" />%\';
    cell5.innerHTML = \''; 
 echo $this->_tpl_vars['order_info']['currency_code']; 
 echo '&nbsp;<span id="item_price_\'+item_count+\'">\'+formatFloat(product_info.price)+\'</span>\';
    var cell_value = document.getElementById(\'order_content_name_\'+item_count);
    if(cell_value){
    	cell_value.value=unescape(product_info.name).replace(/\\\\\\"/g,\'\\"\');
    }
    
    cell3.style.textAlign = \'center\';
    cell4.style.textAlign = \'right\';
    cell5.style.textAlign = \'right\';
    
    recalcAll();
};

'; ?>

var ORIG_URL = '<?php echo @CONF_FULL_SHOP_URL; ?>
';
<?php echo '

function onAssignClick()
{
    openFadeIFrame(set_query(\'&action=show_customer_search\'));
    resizeFadeIFrame(500, 400);
};

function changeStates(states_type)
{
    var frm = document.forms[\'OrderForm\'];
    var country_id  = frm.elements[states_type+\'[country_id]\'].value;
    
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4) return;
        if(req.responseText) alert(req.responseText);
        
        var states = req.responseJS.states;
        
        var states_el = frm.elements[states_type+\'[state_id]\'];
        if(states.length > 0)
        {
            if(!states_el)
            {
                states_el = frm.elements[states_type+\'[state]\'];
                var pn = states_el.parentNode;
                pn.removeChild(states_el);
                
                var dd = document.createElement(\'SELECT\');
                dd.name = states_type+\'[state_id]\';
                dd.className = \'txt_or_sel\';
                
                pn.appendChild(dd);
                states_el = frm.elements[states_type+\'[state_id]\'];
            }
            else
            {
                while(states_el.options.length > 0)
                {
                    states_el.remove(0);
                };
            };
        }
        else
        {
            if(states_el)
            {
                var pn = states_el.parentNode;
                pn.removeChild(states_el);
                
                var inp = document.createElement(\'INPUT\');
                inp.type = \'text\';
                inp.className = \'txt_or_sel\';
                inp.name = states_type+\'[state]\';
                
                pn.appendChild(inp);
                states_el = frm.elements[states_type+\'[state]\'];
            }
        };
        
        for(i=0; i<states.length; i++)
        {
            var opt = new Option();
            opt.value = states[i].zoneID;
            opt.text = states[i].zone_name;
            try
            {
                states_el.add(opt,null); // standards compliant
            }
            catch(ex)
            {
                states_el.add(opt); // IE only
            };        
        };
    };

    try
    {
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({\'action\': \'ajax_get_states\', \'country_id\': country_id});
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
};

function find_noenter(event)
{
    if(event.keyCode == 13)
    {
        onFindProductsClick();
        return false;
    };
};

document.getElementById(\'content\').style.backgroundColor = \'white\';
'; ?>

</script>