<?php /* Smarty version 2.6.26, created on 2016-11-06 21:26:44
         compiled from backend/product_list.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/product_list.edit.html', 1, false),array('modifier', 'translate', 'backend/product_list.edit.html', 3, false),array('modifier', 'replace', 'backend/product_list.edit.html', 3, false),array('modifier', 'escape', 'backend/product_list.edit.html', 3, false),)), $this); ?>
<h1 class="breadcrumbs"><a href="<?php echo ((is_array($_tmp='?ukey=product_lists')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo 'Списки'; ?>
</a>
&raquo;
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='prdlist_edit_list_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '%LIST_NAME%', $this->_tpl_vars['productList']->name) : smarty_modifier_replace($_tmp, '%LIST_NAME%', $this->_tpl_vars['productList']->name)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</h1>

<p><?php echo 'Для изменения порядка сортировки продуктов просто перетаскивайте их внутри списка с помощью мышки.'; ?>
</p>

<?php echo $this->_tpl_vars['MessageBlock']; ?>


<?php if ($this->_tpl_vars['products']): ?>

	<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" class="ajaxform" method="post" id="form-save-order" style="display: inline;" enctype="multipart/form-data">
	<input name="action" value="save_order" type="hidden" />
	<input name="list_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['productList']->id)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden" />
	
	<table id="products-tbl" class="grid">
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['_fe'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['_fe']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['_fe']['iteration']++;
?>
	<tbody class="dragable">
	<tr>
		<td class="handle">
			<?php echo $this->_tpl_vars['_product']['name']; 
 if (! $this->_tpl_vars['_product']['enabled']): ?> <span class="notice"><?php echo '(не представлен в пользовательской части)'; ?>
</span><?php endif; ?>
			<input name="priority_<?php echo $this->_tpl_vars['_product']['productID']; ?>
" value="<?php echo ($this->_foreach['_fe']['iteration']-1); ?>
" class="field_priority" type="hidden" />
		</td>
		<td><a href='<?php echo ((is_array($_tmp="action=delete_product&productID=".($this->_tpl_vars['_product']['productID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' class="confirm_action" title="<?php echo 'Вы уверены?'; ?>
"><img src="images_common/remove.gif" alt="<?php echo 'Удалить'; ?>
" border="0" /></a></td>
	</tr>
	</tbody>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	</form>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/sortable_table.html", 'smarty_include_vars' => array('table_id' => "products-tbl")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
<?php else: ?>
	<p><?php echo 'В списке нет продуктов'; ?>
</p>
<?php endif; ?>

<p><a href="#add_product" id="prdlist-add-product-hndl"><?php echo 'Добавить продукт в список'; ?>
</a></p>

<div id="prdlist-add-product-block" <?php if ($this->_tpl_vars['searchstring'] == null): ?>style="display: none;"<?php endif; ?>>

	<div>
	<form method="post" action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
">
	<input name="searchstring" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchstring'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" size="30" />
	<input value="<?php echo 'Найти продукт'; ?>
" type="submit" />
	</form>
	</div>
	<?php if ($this->_tpl_vars['GridRows']): ?>
		<br />
		<div><strong><?php echo 'Результаты поиска'; ?>
</strong></div>	
		
		<table class="grid">	
		<?php $_from = $this->_tpl_vars['GridRows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_row']):
?>
		<tr>
			<td><a href='<?php echo ((is_array($_tmp="action=add_product&productID=".($this->_tpl_vars['_row']['productID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['_row']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
			<?php if (! $this->_tpl_vars['_row']['enabled']): ?> <span class="notice"><?php echo '(не представлен в пользовательской части)'; ?>
</span><?php endif; ?>
			</td>
			<td><?php echo $this->_tpl_vars['_row']['price_str']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
		<p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/lister.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p>
	<?php elseif ($this->_tpl_vars['searchstring'] != null): ?>
		<p><?php echo 'Ничего не найдено'; ?>
</p>
	<?php endif; ?>
</div>

<script type="text/javascript">
<?php echo '
	getLayer(\'prdlist-add-product-hndl\').onclick = function(){
	
		var block = getLayer(\'prdlist-add-product-block\');
		block.style.display = block.style.display==\'none\'?\'block\':\'none\';
	}
'; ?>

</script>