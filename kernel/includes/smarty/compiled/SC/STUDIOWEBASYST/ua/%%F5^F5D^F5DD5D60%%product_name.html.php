<?php /* Smarty version 2.6.26, created on 2016-09-08 20:53:13
         compiled from product_name.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'product_name.html', 3, false),)), $this); ?>
<?php if (! $this->_tpl_vars['CPT_CONSTRUCTOR_MODE']): ?>

	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['product_info']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</h1>
	<?php if ($this->_tpl_vars['product_info']['eproduct_filename'] != ""): ?>
		<?php echo '<p><strong>This product is downloadable.</strong> You will be able to download it right after you place the order and submit payment'; ?>
 (<b><?php echo $this->_tpl_vars['product_info']['eproduct_filesize_str']; ?>
</b>)
	<?php endif; ?>
<?php else: ?>
	<h1><?php echo 'Демо-продукт'; ?>
</h1>
<?php endif; ?>