<?php /* Smarty version 2.6.26, created on 2016-09-08 21:40:20
         compiled from onesteporder/footer.html */ ?>


<?php if ($this->_tpl_vars['type'] == 'Standart'): ?>
	
	<div class="<?php if ($this->_tpl_vars['type'] == 'Standart'): ?>system_DisplayNone<?php endif; ?>  onesteporder-products-total-div" id="SubmitOrderingDiv<?php echo $this->_tpl_vars['type']; ?>
">
		<div class="onesteporder-products-total">
			<div class="onesteporder-products-total-div2" id="TotalOrderPrice"><?php echo $this->_tpl_vars['cart_total']; ?>
</div>
			<div class="onesteporder-products-total-div1"><?php echo 'Общая сумма'; ?>
:</div>
		</div>
		
		<input type="hidden" value="<?php echo $this->_tpl_vars['TotalItemPriceWhthoutUnits']; ?>
" id="TotalOrderPriceInput">
		
		<input type="button" id="SubmitOrdering<?php echo $this->_tpl_vars['type']; ?>
"  onClick="CheckBeforeSubmit('#ShoppingCartForm<?php echo $this->_tpl_vars['type']; ?>
');" value="<?php echo 'Оформить заказ'; ?>
" class="onesteporder-products-total-submit" />
	</div>
	
<?php elseif ($this->_tpl_vars['type'] == 'Fast'): ?>
	
	<div class="onesteporder-products-total-div-fast" id="SubmitOrderingDiv<?php echo $this->_tpl_vars['type']; ?>
">
		<div class="onesteporder-products-total-fast">
			<div class="onesteporder-products-total-div2-fast" id="TotalOrderPriceFast"><?php echo $this->_tpl_vars['cart_total']; ?>
</div>
			<div class="onesteporder-products-total-div1-fast"><?php echo 'Итого без учета стоимости доставки'; ?>
:</div>
		</div>
		
		<input type="hidden" value="<?php echo $this->_tpl_vars['TotalItemPriceWhthoutUnits']; ?>
" id="TotalOrderPriceInput">
		
		<input type="button" id="SubmitOrdering<?php echo $this->_tpl_vars['type']; ?>
"  onClick="CheckBeforeSubmit('#ShoppingCartForm<?php echo $this->_tpl_vars['type']; ?>
');" value="<?php echo 'Оформить заказ'; ?>
" class="onesteporder-products-total-submit-fast" />
	</div>
<?php endif; ?>