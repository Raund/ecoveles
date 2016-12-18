<?php /* Smarty version 2.6.26, created on 2016-09-09 09:28:02
         compiled from onesteporder/shipping.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'count', 'onesteporder/shipping.html', 17, false),array('modifier', 'escape', 'onesteporder/shipping.html', 36, false),)), $this); ?>
<div class="onesteporder-block-title">Способы доставки:</div>

<?php if ($this->_tpl_vars['count_shipping_methods'] > 0): ?>
	<?php if ($this->_tpl_vars['shipping_methods']): ?>

		<?php echo '
		<script>
			RadioStyle(\'shipping\');
		</script>
		'; ?>

	
		<?php $this->assign('countShipping', 0); ?>
		<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-shipping-n-payment-table">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['shipping_methods']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']] != "n/a"): ?>
			<?php $this->assign('countShipping', $this->_tpl_vars['countShipping']+1); ?>
			<?php echo smarty_function_count(array('item' => '_CostsNum','array' => $this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']]), $this);?>

			<tr class="onesteporder-shipping-n-payment-tr">
				<td class="onesteporder-shipping-n-payment-td<?php if ($this->_sections['i']['last']): ?>-last<?php endif; ?>">
						
					<div class="onesteporder-shipping-n-payment-rate" id="ShippingCostSpan<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
">
					<?php if ($this->_tpl_vars['_CostsNum'] < 2): ?>
						<?php if ($this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['name']): 
 echo $this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['name']; 
 if ($this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['rate']): ?> - <?php endif; 
 endif; ?>
						<?php if ($this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['rate']): ?><span id="shippingCost<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
" xRate="<?php echo $this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['rateWithOutUnit']; ?>
"><?php echo $this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']][0]['rateWithUnit']; ?>
</span><?php endif; ?>
					<?php endif; ?>
					</div>
				
					<div class="onesteporder-shipping-n-payment-radio">
						<input name="shippingMethodID" value="<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
" id="shipping-method-<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
"  type="radio" onclick="BillingMethods();" <?php if ($this->_tpl_vars['POST']['shippingMethodID'] == $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']): ?>checked<?php endif; ?> />
						<label for="shipping-method-<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
"></label>
					</div>
					
					<?php if ($this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['logo']): ?>	
					<div class="onesteporder-shipping-n-payment-logo">
						<label for="shipping-method-<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
">
							<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['logo'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['Name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['Name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
						</label>
					</div>
					<?php endif; ?>
					
					<div class="onesteporder-shipping-n-payment-name">
						<label for="shipping-method-<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
"><?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['Name']; ?>
</label>
					</div>
				
					<?php if ($this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['description']): ?>
					<div class="onesteporder-shipping-n-payment-desc">
						<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['description']; ?>

					</div>
					<?php endif; ?>
					
					
					<div class="onesteporder-shipping-n-payment-rate2" id="ShippingCostSelect<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
" >
					<?php if ($this->_tpl_vars['_CostsNum'] > 1): ?>
						<div class="ShippingCostTD">
						<select name="shippingServiceID[<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
]" id="shippingServiceID<?php echo $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']; ?>
" onchange="UpdateTotalPrice();">
							<?php $this->assign('_SID', $this->_tpl_vars['shipping_methods'][$this->_sections['i']['index']]['SID']); ?>
							<?php $_from = $this->_tpl_vars['shipping_costs'][$this->_sections['i']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Rate']):
?>
								<option value="<?php echo $this->_tpl_vars['_Rate']['id']; ?>
" <?php if ($this->_tpl_vars['POST']['shippingServiceID'][$this->_tpl_vars['_SID']] == $this->_tpl_vars['_Rate']['id']): ?>selected<?php endif; ?> xRate="<?php echo $this->_tpl_vars['_Rate']['rateWithOutUnit']; ?>
"><?php echo $this->_tpl_vars['_Rate']['name']; ?>
 - <?php echo $this->_tpl_vars['_Rate']['rateWithUnit']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
						</div>
						<div class="onesteporder-shipping-n-payment-rate2-text">Варианты доставки:</div>
					<?php endif; ?>
					</div>
					
				<td>
			</tr>
			<?php endif; ?>
			<?php endfor; endif; ?>
			<?php if ($this->_tpl_vars['countShipping'] == 0): ?>
			<tr class="onesteporder-shipping-n-payment-tr">
				<td class="onesteporder-shipping-n-payment-td-last">
					<div class="message_empty"><?php echo 'No shipping types available'; ?>
</div>
				</td>
			</tr>
			<?php endif; ?>
		</table>
	<?php else: ?>
		<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-shipping-n-payment-table">
		<tr class="onesteporder-shipping-n-payment-tr">
			<td class="onesteporder-shipping-n-payment-td-last">
				<div class="message_empty"><?php echo 'No shipping types available'; ?>
</div>
			</td>
		</tr>
		</table>
	<?php endif; ?>
<?php endif; ?>