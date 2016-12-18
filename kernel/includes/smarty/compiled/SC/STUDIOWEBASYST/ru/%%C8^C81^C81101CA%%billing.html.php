<?php /* Smarty version 2.6.26, created on 2016-09-08 21:24:16
         compiled from onesteporder/billing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'onesteporder/billing.html', 25, false),)), $this); ?>
<div class="onesteporder-block-title">Способы оплаты:</div>	

<?php if ($this->_tpl_vars['payment_methods']): ?>
	<?php echo '
	<script>
		RadioStyle(\'payment\');
	</script>
	'; ?>


	<?php $this->assign('countPayment', 0); ?>
	<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-shipping-n-payment-table">
	<?php $_from = $this->_tpl_vars['payment_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pm'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pm']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_payment_method']):
        $this->_foreach['pm']['iteration']++;
?>
	<?php $this->assign('countPayment', $this->_tpl_vars['countPayment']+1); ?>
	<tr class="onesteporder-shipping-n-payment-tr">
		<td class="onesteporder-shipping-n-payment-td<?php if (($this->_foreach['pm']['iteration'] == $this->_foreach['pm']['total'])): ?>-last<?php endif; ?>">
		
			<div class="onesteporder-shipping-n-payment-radio">
				<input name="paymentMethodID" id="payment-method-<?php echo $this->_tpl_vars['_payment_method']['PID']; ?>
" value="<?php echo $this->_tpl_vars['_payment_method']['PID']; ?>
"  type="radio" <?php if ($this->_tpl_vars['POST']['paymentMethodID'] == $this->_tpl_vars['_payment_method']['PID']): ?>checked<?php endif; ?>>
				<label for="payment-method-<?php echo $this->_tpl_vars['_payment_method']['PID']; ?>
"></label>
			</div>
			
			<?php if ($this->_tpl_vars['_payment_method']['logo']): ?>
			<div class="onesteporder-shipping-n-payment-logo">
				<label for="payment-method-<?php echo $this->_tpl_vars['_payment_method']['PID']; ?>
">
					<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['_payment_method']['logo'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['_payment_method']['Name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['_payment_method']['Name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
				</label>
			</div>
			<?php endif; ?>
			
			<div class="onesteporder-shipping-n-payment-name">
				<label for="payment-method-<?php echo $this->_tpl_vars['_payment_method']['PID']; ?>
"><?php echo $this->_tpl_vars['_payment_method']['Name']; ?>
</label>
			</div>
			
			<?php if ($this->_tpl_vars['_payment_method']['description']): ?>
			<div class="onesteporder-shipping-n-payment-desc">
				<?php echo $this->_tpl_vars['_payment_method']['description']; ?>

			</div>
			<?php endif; ?>	
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	
	<?php if ($this->_tpl_vars['countPayment'] == 0): ?>
	<tr class="onesteporder-shipping-n-payment-tr">
		<td class="onesteporder-shipping-n-payment-td-last">
		<div class="message_empty"><?php echo 'Нет доступных способов для оплаты'; ?>
</div>
		</td>
	</tr>
	<?php endif; ?>
	</table>	
<?php else: ?>
	<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-shipping-n-payment-table">
	<tr class="onesteporder-shipping-n-payment-tr">
		<td class="onesteporder-shipping-n-payment-td-last">
			<div class="message_empty"><?php echo 'Нет доступных способов для оплаты'; ?>
</div>
		</td>
	</tr>
	</table>
<?php endif; ?>