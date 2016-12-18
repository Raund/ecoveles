<?php /* Smarty version 2.6.26, created on 2016-10-21 17:42:50
         compiled from email/customer.order.change_status.txt */ ?>
<p><?php echo 'Здравствуйте'; ?>
, <?php echo $this->_tpl_vars['customer_firstname']; ?>
</p>
<?php if ($this->_tpl_vars['_MSG_CHANGE_ORDER_STATUS']): ?>
<p><?php echo $this->_tpl_vars['_MSG_CHANGE_ORDER_STATUS']; ?>
</p>

<?php endif; 
 if ($this->_tpl_vars['_ADMIN_COMMENT']): ?><p><?php echo $this->_tpl_vars['_ADMIN_COMMENT']; ?>
</p>
<?php endif; ?>
<p><?php echo $this->_tpl_vars['order_status_url']; ?>
</p>
<p><?php echo 'С наилучшими пожеланиями'; ?>
, <?php echo @CONF_SHOP_NAME; ?>

<br/><a href="http://<?php echo @CONF_SHOP_URL; ?>
">http://<?php echo @CONF_SHOP_URL; ?>
</a></p>