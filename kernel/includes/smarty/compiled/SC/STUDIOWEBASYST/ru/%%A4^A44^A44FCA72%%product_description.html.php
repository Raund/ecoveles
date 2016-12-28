<?php /* Smarty version 2.6.26, created on 2016-12-20 14:27:02
         compiled from product_description.html */ ?>
<div>
<?php if (! $this->_tpl_vars['CPT_CONSTRUCTOR_MODE']): ?>
	<?php echo $this->_tpl_vars['product_info']['description']; ?>

<?php else: ?>
	<?php echo 'Описание продукта будет здесь'; ?>

<?php endif; ?>
</div>