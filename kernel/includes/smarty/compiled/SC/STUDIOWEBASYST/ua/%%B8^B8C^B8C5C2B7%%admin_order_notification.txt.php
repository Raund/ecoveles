<?php /* Smarty version 2.6.26, created on 2016-09-11 17:12:13
         compiled from admin_order_notification.txt */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin_order_notification.txt', 8, false),)), $this); ?>
<h1><?php echo 'Номер замовлення'; ?>
: <?php echo $this->_tpl_vars['order']['orderID_view']; ?>
 (<?php echo $this->_tpl_vars['order_time']; ?>
)</h1>

<h2><?php echo @CONF_SHOP_NAME; ?>
</h2>

<p><?php echo 'Покупець'; ?>
: <?php echo $this->_tpl_vars['customer_firstname']; ?>
 <?php echo $this->_tpl_vars['customer_lastname']; ?>

<br /><?php echo 'Email'; ?>
 <?php echo $this->_tpl_vars['customer_email']; ?>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['customer_add_fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['customer_add_fields'][$this->_sections['i']['index']]['reg_field_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['customer_add_fields'][$this->_sections['i']['index']]['reg_field_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

<?php endfor; endif; ?>
<br /><?php echo 'IP покупця'; ?>
: <?php echo $this->_tpl_vars['customer_ip']; ?>

<br /><?php echo 'Ваші коментарі та побажання по замовленню'; ?>
: <?php echo $this->_tpl_vars['customer_comments']; ?>
</p>

<p><?php echo 'Замовлені продукти'; ?>
:</p>

<p style="padding-left:20px;"><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($this->_tpl_vars['content'][$this->_sections['i']['index']]['product_code']): ?>[<?php echo $this->_tpl_vars['content'][$this->_sections['i']['index']]['product_code']; ?>
] <?php endif; 
 echo ((is_array($_tmp=$this->_tpl_vars['content'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 (x<?php echo $this->_tpl_vars['content'][$this->_sections['i']['index']]['Quantity']; ?>
): <?php echo $this->_tpl_vars['content'][$this->_sections['i']['index']]['Price']; ?>
<br />
<?php endfor; endif; ?></p>

<p><?php echo 'Знижка, %'; ?>
: <?php echo $this->_tpl_vars['discount']; ?>

<br /><?php echo 'Доставка'; ?>
: <?php echo $this->_tpl_vars['shipping_type']; ?>

<br /><?php echo 'Вартість доставки'; ?>
: <?php echo $this->_tpl_vars['shipping_cost']; ?>

<br /><?php echo 'Отримувач'; ?>
: <?php echo $this->_tpl_vars['shipping_firstname']; ?>
 <?php echo $this->_tpl_vars['shipping_lastname']; ?>

<br /><?php echo 'Адреса доставки замовлення'; ?>
: <?php if ($this->_tpl_vars['shipping_address'] != ""): 
 echo $this->_tpl_vars['shipping_address']; ?>
, <?php endif; 
 if ($this->_tpl_vars['shipping_city'] != ""): 
 echo $this->_tpl_vars['shipping_city']; ?>
,<?php endif; 
 if ($this->_tpl_vars['shipping_state'] != ""): 
 echo $this->_tpl_vars['shipping_state']; ?>
 <?php endif; 
 if ($this->_tpl_vars['shipping_zip'] != ""): 
 echo $this->_tpl_vars['shipping_zip']; ?>
 <?php endif; 
 if ($this->_tpl_vars['shipping_country'] != ""): 
 echo $this->_tpl_vars['shipping_country']; 
 endif; ?></p>

<p><?php echo 'Оплата'; ?>
: <?php echo $this->_tpl_vars['payment_type']; ?>

<br /><?php echo 'Платник'; ?>
: <?php echo $this->_tpl_vars['billing_firstname']; ?>
 <?php echo $this->_tpl_vars['billing_lastname']; ?>

<br /><?php echo 'Адреса платника'; ?>
: <?php if ($this->_tpl_vars['billing_address'] != ""): 
 echo $this->_tpl_vars['billing_address']; ?>
, <?php endif; 
 if ($this->_tpl_vars['billing_city'] != ""): 
 echo $this->_tpl_vars['billing_city']; ?>
,<?php endif; 
 if ($this->_tpl_vars['billing_state'] != ""): 
 echo $this->_tpl_vars['billing_state']; ?>
 <?php endif; 
 if ($this->_tpl_vars['billing_zip'] != ""): 
 echo $this->_tpl_vars['billing_zip']; ?>
 <?php endif; 
 if ($this->_tpl_vars['billing_country'] != ""): 
 echo $this->_tpl_vars['billing_country']; 
 endif; ?></p>

<p><?php echo 'Податок'; ?>
: <?php echo $this->_tpl_vars['total_tax']; ?>
</p>

<h2><?php echo 'Всього'; ?>
: <?php echo $this->_tpl_vars['order_amount']; ?>
</h2>