<?php /* Smarty version 2.6.26, created on 2016-09-08 21:24:15
         compiled from onesteporder/main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query', 'onesteporder/main.html', 25, false),array('modifier', 'escape', 'onesteporder/main.html', 65, false),array('modifier', 'set_query_html', 'onesteporder/main.html', 67, false),array('modifier', 'string_format', 'onesteporder/main.html', 173, false),array('function', 'counter', 'onesteporder/main.html', 79, false),)), $this); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script>
	var cart_content_empty = '<?php echo '(пусто)'; ?>
';
	var srch_products_plural = '<?php echo 'продукт(ов)'; ?>
';
	var noframe = '<?php echo $this->_tpl_vars['PAGE_VIEW']; ?>
';
	var conf_onesteporder_informer_type = '<?php echo @CONF_ONESTEPORDER_INFORMER_TYPE; ?>
';
	var ordering = '<?php echo $_GET['ordering']; ?>
';
	var url_root = '<?php echo @URL_ROOT; ?>
';
</script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/onesteporder.js"></script>
<link rel="stylesheet" href="<?php echo @URL_CSS; ?>
/onesteporder.css" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php echo @URL_CSS; ?>
/onesteporderIE.css" type="text/css" media="screen" /><![endif]-->

<?php if (@CONF_ONESTEPORDER_INFORMER_TYPE == 'inform' && $_GET['ordering'] == '' && $this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>
	<div class="onesteporder-center-IFrame">
	<div class="onesteporder-width350-IFrame"  id="blck-content">

		<?php $this->assign('ProductsNum', 0); ?>
		<?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
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
		<?php $this->assign('ProductsNum', $this->_tpl_vars['ProductsNum']+$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity']); ?>
		<?php endfor; endif; ?>
		<div class="onesteporder-informer">

			<a id="oforml" href='#' onclick="parent.location.href='<?php echo ((is_array($_tmp="?ukey=cart&ordering=yep")) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
'"/>Оформить<br />заказ</a>
			<a id="prod_pokup" href='javascript:void(0);' <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe' && $_GET['ordering'] != 'yep'): ?>onclick='javascript:parent.sswgt_CartManager.hide(true);return false;'<?php else: ?>onclick='history.go(-1);'<?php endif; ?> >Продолжить покупки</a>
		</div>
	</div>
	</div>

	
<?php else: ?>

<div class="onesteporder-center<?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>-IFrame<?php endif; ?>">
<div class="onesteporder-width1000<?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>-IFrame<?php endif; ?>"  id="blck-content">

<?php if ($this->_tpl_vars['cart_content']): ?>
<div id="CartContent">
		
	<?php if ($this->_tpl_vars['make_more_exact_cart_content']): ?>
		<?php echo 'В вашей корзине обнаружены продукты, добавленные при предыдущем пользовании нашего магазина. Пожалуйста, уточните содержимое заказа перед оформлением.'; ?>

	<?php endif; ?>
	<div class="<?php if ($this->_tpl_vars['isErrorMinimalAmount'] && ! $this->_tpl_vars['MessageBlock']): 
 else: ?>system_DisplayNone<?php endif; ?>" id="CartMinimalAmount">
		<div class='error_block'><span class="error_message"><?php echo 'Сумма заказа должна быть не менее '; ?>
 <?php echo $this->_tpl_vars['cart_min']; ?>
</span></div>
	</div>
	

	<div class="onesteporder-remove-all-elements" id="RemoveCart" ><a href='javascript:void(0);' title='<?php echo 'Удалить'; ?>
' onclick="RemoveAllElements();" ><?php echo 'Удалить все'; ?>
<span></span></a></div>
	<div class="onesteporder-remove-all-elements"><a href='javascript:void(0);' <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe' && $_GET['ordering'] != 'yep'): ?>onclick='javascript:parent.sswgt_CartManager.hide(true);return false;'<?php else: ?>onclick='history.go(-1);'<?php endif; ?> ><?php echo 'Вернуться к покупкам'; ?>
</a></div>
	<div class="onesteporder-block-title"><?php echo 'Выбранные товары'; ?>
:</div>

	<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-products-table">
		
		<tr class="onesteporder-products-tr-first">
			<td colspan=3></td>
			<td class="onesteporder-products-price"></td>
			<td ></td>
		</tr>
		<?php $this->assign('ProductsNum', 0); ?>
		<?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
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
		<?php if ($this->_tpl_vars['session_items']): 
 $this->assign('_prdid', $this->_tpl_vars['session_items'][$this->_sections['i']['index']]); 
 else: 
 $this->assign('_prdid', $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['id']); 
 endif; ?>	
		
		<tr id="CartElement<?php echo $this->_tpl_vars['_prdid']; ?>
" class="onesteporder-products-tr<?php if ($this->_sections['i']['last']): ?>-prelast<?php endif; ?>">
		<form method="POST" id="configuration-item-<?php echo $this->_tpl_vars['_prdid']; ?>
">
			<td class="onesteporder-products-image"><?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['thumbnail_url']): ?><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['thumbnail_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" width="<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['thumbnail_width']; ?>
" /><?php else: ?>&nbsp;<?php endif; ?></td>
			<td class="onesteporder-products-name">
				<a href='<?php echo ((is_array($_tmp="?ukey=product&productID=".($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['productID'])."&product_slug=".($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['slug']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>TARGET="_parent"<?php endif; ?>><?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['name']; ?>
</a>
				<?php if (@CONF_ENABLE_PRODUCT_SKU && $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['product_code']): ?><br><i><?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['product_code']; ?>
</i> <?php endif; ?>
				
				
				<?php $this->assign('extraCount', 0); 
 if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra']): 
 unset($this->_sections['e']);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);

 if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['option_type'] != 0): 
 $this->assign('extraCount', $this->_tpl_vars['extraCount']+1); 
 endif; 
 endfor; endif; 
 endif; ?>
				<?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'] && $this->_tpl_vars['extraCount'] > 0): ?>	
				<div class="onesteporder-configuration-item-url"><a href="javascript:void(0);" onClick="ShowConfigurationField('<?php echo $this->_tpl_vars['_prdid']; ?>
');"><?php echo 'Изменить'; ?>
 характеристики</a></div>
				<div class="onesteporder-configuration-item-div" id="onesteporder-configuration-item-div-<?php echo $this->_tpl_vars['_prdid']; ?>
" >
					<input type="hidden" name="save_configuration" value="yep" />
					<input type="hidden" name="itemID" value="<?php echo $this->_tpl_vars['_prdid']; ?>
" />
					<input type="hidden" name="productID" value="<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['productID']; ?>
" />
					<table>		
					<?php echo smarty_function_counter(array('name' => 'select_counter','start' => 0,'skip' => 1,'print' => false,'assign' => 'select_counter_var'), $this);?>

					<?php unset($this->_sections['e']);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
						<?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['option_type'] != 0): ?>
						<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['option_show_times']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
						<tr>					
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['option_show_times'] > 1): ?>(<?php echo smarty_function_counter(array('name' => 'option_show_times'), $this);?>
):<?php else: ?>:<?php endif; ?>
							</td>
							<td>
								<?php echo smarty_function_counter(array('name' => 'select_counter','assign' => '_cnt'), $this);?>

								<select name='option_<?php echo $this->_tpl_vars['_cnt']; ?>
'>
								<option value='' rel="0" <?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['configurations'][$this->_tpl_vars['optionID_current']] == ""): ?>selected="selected"<?php endif; ?>><?php echo 'Не определено'; ?>
</option>
								<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['values_to_select']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
									<?php $this->assign('optionID_current', $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['optionID']); ?>
									<option value='<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['values_to_select'][$this->_sections['j']['index']]['variantID']; ?>
' rel='<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['values_to_select'][$this->_sections['j']['index']]['price_surplus']; ?>
'
									<?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['configurations'][$this->_tpl_vars['optionID_current']] == $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['values_to_select'][$this->_sections['j']['index']]['variantID']): ?>selected="selected"<?php endif; ?>
									>
										<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['extra'][$this->_sections['e']['index']]['values_to_select'][$this->_sections['j']['index']]['option_value']; ?>

									</option>
								<?php endfor; endif; ?>
								</select>
							</td>
						</tr>
						<?php endfor; endif; ?>
						<?php endif; ?>
					<?php endfor; endif; ?>
					</table>
					<div  class="onesteporder-configuration-item-hide"><a href="javascript:void(0);" onClick="HideConfigurationField();"><?php echo 'my_hide'; ?>
</a></div>
					<input type="button" value='<?php echo 'Применить'; ?>
' class="onesteporder-contact-button configuration-item-submit" onclick="ChangeConfigurationItem('<?php echo $this->_tpl_vars['_prdid']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']; ?>
');" />
				</div>
				<?php endif; ?>	
				
				
				
			</td>
			<td class="onesteporder-products-count">
				<?php $this->assign('ProductsNum', $this->_tpl_vars['ProductsNum']+$this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity']); ?>
				<input type="button"  onClick="RecalculateCartIcons(true, '<?php echo $this->_tpl_vars['_prdid']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['costUC']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']; ?>
');" value=" + " class="system_RecalculateCartIconP<?php echo $this->_tpl_vars['_prdid']; ?>
 RecalculateCartIcons onesteporder-products-count-icon-p <?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity'] == $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']): ?>onesteporder-products-count-icon-p-disabled<?php endif; ?>" <?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity'] == $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']): ?>disabled<?php endif; ?> />
				
				<input type="text" maxlength="10" name="count_<?php echo $this->_tpl_vars['_prdid']; ?>
" value="<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity']; ?>
"
				id="ProductQty<?php echo $this->_tpl_vars['_prdid']; ?>
" onBlur="RecalculateCart(this,'<?php echo $this->_tpl_vars['_prdid']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['costUC']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']; ?>
');" size=5 class="onesteporder-products-count-input"/>
				
				<input type="button"  onClick="RecalculateCartIcons(false, '<?php echo $this->_tpl_vars['_prdid']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['costUC']; ?>
','<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['in_stock']; ?>
');" value=" - " class="system_RecalculateCartIconM<?php echo $this->_tpl_vars['_prdid']; ?>
 RecalculateCartIcons onesteporder-products-count-icon-m <?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity'] == '1'): ?>onesteporder-products-count-icon-m-disabled<?php endif; ?>" <?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['quantity'] == '1'): ?>disabled<?php endif; ?> />
				
				<?php if ($this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['min_order_amount']): 
 echo 'Минимальный заказ'; 
 echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['min_order_amount']; 
 echo 'шт.'; 
 endif; ?>
			</td>
			<td id="ProductPrice<?php echo $this->_tpl_vars['_prdid']; ?>
" class="onesteporder-products-price">
				<?php echo $this->_tpl_vars['cart_content'][$this->_sections['i']['index']]['cost']; ?>

			</td>
			<td class="onesteporder-products-delete">
				<a href='javascript:void(0);' title='<?php echo 'Удалить'; ?>
' onclick="RemoveElement('<?php echo $this->_tpl_vars['_prdid']; ?>
');" class="onesteporder-products-remove" id="RemoveElement<?php echo $this->_tpl_vars['_prdid']; ?>
"><span></span></a>
			</td>
			</form>
		</tr>
		
		<?php endfor; endif; ?>
		<tr class="onesteporder-products-tr-last">
			<td colspan=3></td>
			<td class="onesteporder-products-price"></td>
			<td ></td>
		</tr>
	</table>
		
	<div class="onesteporder-products-pre-total-div">
	
	
	<table class="onesteporder-products-pre-total-table" cellpadding="0" cellspacing="0">
	
		<?php if (@CONF_DSC_COUPONS_ENABLED == 'Y'): ?>
		<tr id="CouponTR" class="onesteporder-products-pre-total-tr-discount">
			<td class="onesteporder-products-pre-total-td1">
				<div class="<?php if ($this->_tpl_vars['current_coupon'] != '0'): ?>system_DisplayNone<?php endif; ?> system_CouponDivForm">
					Купон на скидку: <a href="javascript:void(0);" onClick="ShowCouponField();"><?php echo 'Добавить'; ?>
</a>
					<div class="onesteporder-coupon-field">
						<input type="text" name="CouponCodeInput" id="CouponCodeInput" value="" onBlur="ApplyCoupon();" size="12" maxlength="10" class="onesteporder-coupon-field-input" />
						<input type="button" onClick="ApplyCoupon();" id="CouponCodeButton" value='<?php echo 'Применить'; ?>
' class="onesteporder-contact-button" />
					</div>
				</div>
				<div class="<?php if ($this->_tpl_vars['current_coupon'] == '0'): ?>system_DisplayNone<?php endif; ?> system_CouponDivResult">
					Купон на скидку: <span id="CouponCode"><?php echo $this->_tpl_vars['current_coupon']; ?>
</span> <a href="javascript:void(0);" onClick="DeleteCoupon();"><?php echo 'Изменить'; ?>
</a>
				</div>
			</td>
			<td class="onesteporder-products-pre-total-td2">
				<span id="CouponWrong" class="system_DisplayNone"><?php echo 'Купон не найден'; ?>
</span>
				<span id="CouponProcessing" class="system_DisplayNone"><?php echo 'Проверка'; ?>
</span>
				<div class="<?php if ($this->_tpl_vars['current_coupon'] == '0'): ?>system_DisplayNone<?php endif; ?> system_CouponDivResult"> - <span id="CouponPrice"><?php echo $this->_tpl_vars['coupon_discount']; ?>
</span></div>
			</td>
			<td class="onesteporder-products-pre-total-td3"></td>
		</tr>
		<?php endif; ?>
		<tr class="onesteporder-products-pre-total-tr-discount">
			<td class="onesteporder-products-pre-total-td1"><?php echo 'Скидка'; ?>
:</td>
			<td class="onesteporder-products-pre-total-td2">
				<div <?php if ($this->_tpl_vars['cart_discount'] == ''): ?>class="system_DisplayNone"<?php endif; ?> id="CartDiscountDiv">
					<span id="CartDiscountPersent"><?php echo ((is_array($_tmp=$this->_tpl_vars['discount_percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, '%0.1f%%') : smarty_modifier_string_format($_tmp, '%0.1f%%')); ?>
</span> - <span id="CartDiscount"><?php echo $this->_tpl_vars['cart_discount']; ?>
</span>
				</div>
			</td>
			<td class="onesteporder-products-pre-total-td3"></td>
		</tr>
			
		<tr class="onesteporder-products-pre-total-tr-total">
			<td class="onesteporder-products-pre-total-td1"><?php echo 'Итого за товары'; ?>
:</td>
			<td class="onesteporder-products-pre-total-td2"><span id="TotalItemPrice"><?php echo $this->_tpl_vars['cart_total']; ?>
</span></td>
			<td class="onesteporder-products-pre-total-td3"></td>
		</tr>
	</table>
	
	<?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe' && $_GET['ordering'] != 'yep'): ?>
		<input type="submit" id="SubmitOrdering<?php echo $this->_tpl_vars['type']; ?>
"  value="<?php echo 'Оформить заказ'; ?>
" class="onesteporder-noframe-ordering-button" onclick="parent.location.href='?ukey=cart&view=noframe&ordering=yep'"/>
	<?php endif; ?>		
	</div>

	
	
	
	<?php if ($_GET['ordering'] == 'yep' || $this->_tpl_vars['PAGE_VIEW'] != 'noframe'): ?>
	<?php if (( @CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' ) && $this->_tpl_vars['log']): ?>
		<?php $this->assign('liwidth', '100'); ?>	
		<?php $this->assign('infwidth', '100'); ?>
	<?php elseif (( @CONF_ONESTEPORDER_TYPES_ORDERING == 'all' && $this->_tpl_vars['log'] ) || ( ( @CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' ) && ! $this->_tpl_vars['log'] )): ?>
		<?php $this->assign('liwidth', '50'); ?>
		<?php $this->assign('infwidth', "49.5"); ?>
		
	<?php elseif (@CONF_ONESTEPORDER_TYPES_ORDERING == 'all' && ! $this->_tpl_vars['log']): ?>
		<?php $this->assign('liwidth', "33.3333"); ?>
		<?php $this->assign('infwidth', "32.3333"); ?>
	<?php endif; ?>
	
	<?php if (( @CONF_ONESTEPORDER_TYPES_ORDERING == 'all' || ! $this->_tpl_vars['log'] ) || @CONF_ONESTEPORDER_SHOW_DEFAULT == 'no'): ?>
		<table cellpadding="0" cellspacing="0" border="0" width=100%>
			<tr>
			<td style="width:210px;" class="onesteporder-order-types-leftside">
				<div class="onesteporder-block-title"><?php echo 'my_sposob_oformlenia'; ?>
:</div>
			</td>
			<td>
				<div class="onesteporder-order-types" >
					<ul>
					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<li style="width:<?php echo $this->_tpl_vars['liwidth']; ?>
%;"><a href="javascript:void(0);" onclick="SelectOrderingType(this, '1');" class="system_TabOrderingType <?php if ($this->_tpl_vars['POST']['ordering'] == 'fast'): ?>system_TabOrderingTypeCurrent<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'standart' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] ) || $this->_tpl_vars['YandexAdress']): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'fast'): ?>system_TabOrderingTypeCurrent<?php endif; ?>" >
						<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'fast'): 
 echo 'Оформить заказ'; 
 else: 
 echo 'Быстрое оформление'; 
 endif; ?>
						</a></li>
					<?php endif; ?>
					
					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<li style="width:<?php echo $this->_tpl_vars['liwidth']; ?>
%;"><a href="javascript:void(0);" onclick="SelectOrderingType(this, '2');" class="system_TabOrderingType <?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['YandexAdress']): ?>system_TabOrderingTypeCurrent<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'fast' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] )): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'standart'): ?>system_TabOrderingTypeCurrent<?php endif; ?>" >
						<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'standart'): 
 echo 'Оформить заказ'; 
 else: 
 echo 'Полное оформление'; 
 endif; ?>
						</a></li>
					<?php endif; ?>
					
					<?php if (! $this->_tpl_vars['log']): ?>
						<li style="width:<?php echo $this->_tpl_vars['liwidth']; ?>
%;"><a href="javascript:void(0);" onclick="SelectOrderingType(this, '3');" class="system_TabOrderingType <?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['POST']['ordering'] == 'fast' || $this->_tpl_vars['YandexAdress']): 
 elseif ($_GET['login_form'] == '1' && ! $this->_tpl_vars['log']): ?>system_TabOrderingTypeCurrent<?php else: 
 endif; ?>"><?php echo 'Войти с паролем'; ?>
</a></li>
					<?php endif; ?>
					</ul>
				</div>	
			</td></tr>
		</table>
		<div class="onesteporder-order-types-information" >
			<table cellpadding="0" cellspacing="0" border="0" width=100%>
			<tr>
				<td style="width:210px;"  class="onesteporder-order-types-leftside">
					<div class="onesteporder-order-types-information0" ></div>
				</td>
				<td>
					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<div class="onesteporder-order-types-information1" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;"><div class="onesteporder-order-types-information-padding">
							<span class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'fast'): ?>current<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'standart' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] ) || $this->_tpl_vars['YandexAdress']): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'fast'): ?>current<?php endif; ?>"></span><div class="onesteporder-order-desc"><?php echo 'Вы можете оформить заказ заполнив только Ваши контактные данные, а все остальные данные сообщить по телефону.'; ?>
</div>
						</div></div>
					<?php endif; ?>

					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<div class="onesteporder-order-types-information2" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;"><div class="onesteporder-order-types-information-padding">
							<span class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['YandexAdress']): ?>current<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'fast' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] )): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'standart'): ?>current<?php endif; ?>"></span>
							<div class="onesteporder-order-desc"><?php echo 'Вы можете оформить заказ заполнив все необходимые котнактные данные или загрузить данные из Яндекс.Адреса'; ?>
</div>
						</div></div>
					<?php endif; ?>

					<?php if (! $this->_tpl_vars['log']): ?>
						<div class="onesteporder-order-types-information3" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;" ><div class="onesteporder-order-types-information-padding">
							<span class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['POST']['ordering'] == 'fast' || $this->_tpl_vars['YandexAdress']): 
 elseif ($_GET['login_form'] == '1' && ! $this->_tpl_vars['log']): ?>current<?php else: 
 endif; ?>"></span><div class="onesteporder-order-desc"><?php echo 'Вы можете авторизоваться и воспользоваться своими ранее введеными контакнтыми данными и адресом доставки'; ?>
</div>
						</div></div>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="onesteporder-order-types-information-array-tr">
				<td style="width:210px;"  class="onesteporder-order-types-leftside">
					<div class="onesteporder-order-types-information0" ></div>
				</td>
				<td>
					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<div class="onesteporder-order-types-information-array <?php if ($this->_tpl_vars['POST']['ordering'] == 'fast'): ?>onesteporder-order-types-information-array-visible<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'standart' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] ) || $this->_tpl_vars['YandexAdress']): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'fast'): ?>onesteporder-order-types-information-array-visible<?php endif; ?>" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;" id="onesteporder-order-types-information-array1"></div>
					<?php endif; ?>

					<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
						<div class="onesteporder-order-types-information-array <?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['YandexAdress']): ?>onesteporder-order-types-information-array-visible<?php elseif ($this->_tpl_vars['POST']['ordering'] == 'fast' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] )): 
 elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'standart'): ?>onesteporder-order-types-information-array-visible<?php endif; ?>" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;"  id="onesteporder-order-types-information-array2"></div>
					<?php endif; ?>

					<?php if (! $this->_tpl_vars['log']): ?>
						<div class="onesteporder-order-types-information-array <?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['POST']['ordering'] == 'fast' || $this->_tpl_vars['YandexAdress']): 
 elseif ($_GET['login_form'] == '1' && ! $this->_tpl_vars['log']): ?>onesteporder-order-types-information-array-visible<?php else: 
 endif; ?>" style="width:<?php echo $this->_tpl_vars['infwidth']; ?>
%;"  id="onesteporder-order-types-information-array3"></div>
					<?php endif; ?>
				</td>
			</tr>
			</table>
		</div>
	<?php endif; ?>


	<?php echo $this->_tpl_vars['MessageBlock']; ?>



	<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'fast' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
	<div id="FastOrdering" class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'fast'): 
 elseif ($this->_tpl_vars['POST']['ordering'] == 'standart' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] ) || $this->_tpl_vars['YandexAdress']): ?>system_DisplayNone<?php elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'standart' || @CONF_ONESTEPORDER_SHOW_DEFAULT == 'no'): ?>system_DisplayNone<?php endif; ?>">
		<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" name="ShoppingCartFormFast" method="post" target="_self" id="ShoppingCartFormFast">
		<input type="hidden" name="ordering" value="fast" />
			<div class="onesteporder-contact-div">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "onesteporder/contact.html", 'smarty_include_vars' => array('type' => 'Fast','fields' => $this->_tpl_vars['FieldsFast'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="onesteporder-fast-div">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "onesteporder/footer.html", 'smarty_include_vars' => array('type' => 'Fast')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
			</div>
		</form>
	</div>
	<?php endif; ?>
	
	<?php if (@CONF_ONESTEPORDER_TYPES_ORDERING == 'standart' || @CONF_ONESTEPORDER_TYPES_ORDERING == 'all'): ?>
	<div id="StandartOrdering" class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['YandexAdress']): 
 elseif ($this->_tpl_vars['POST']['ordering'] == 'fast' || ( $_GET['login_form'] == '1' && ! $this->_tpl_vars['log'] ) || $this->_tpl_vars['YandexAdress']): ?>system_DisplayNone<?php elseif (@CONF_ONESTEPORDER_SHOW_DEFAULT == 'fast' || @CONF_ONESTEPORDER_SHOW_DEFAULT == 'no'): ?>system_DisplayNone<?php endif; ?>" >
		<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" name="ShoppingCartFormStandart" method="post" target="_self" id="ShoppingCartFormStandart">
		<input type="hidden" name="ordering" value="standart" />
			<div class="onesteporder-contact-div"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "onesteporder/contact.html", 'smarty_include_vars' => array('type' => 'Standart','fields' => $this->_tpl_vars['FieldsStandart'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
			<div class="onesteporder-delivery-n-payment-div">
				<div id="ShippingMethods">
					<div class="onesteporder-loading">Загрузка</div>
				</div>
				<div id="BillingMethods"></div>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "onesteporder/footer.html", 'smarty_include_vars' => array('type' => 'Standart')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
		</form>
	</div>
	<?php endif; ?>
	

	<?php if (! $this->_tpl_vars['log']): ?>	
	<div id="LoginOrdering" class="<?php if ($this->_tpl_vars['POST']['ordering'] == 'standart' || $this->_tpl_vars['POST']['ordering'] == 'fast'): ?>system_DisplayNone<?php elseif ($_GET['login_form'] == '1' && ! $this->_tpl_vars['log']): 
 else: ?>system_DisplayNone<?php endif; ?>">
		<?php echo $this->_tpl_vars['MessageBlock__auth']; ?>

		<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post">
			<input name="auth" value="yep" type="hidden" />
			<div class="onesteporder-block-title"><?php echo 'Авторизация'; ?>
:</div>

			<table cellspacing="0" cellpadding="0" border="0" class="onesteporder-contact-table">
				<tr class="onesteporder-contact-tr-delay"><td colspan="2"></td></tr>
				<tr class="onesteporder-contact-tr">
					<td class="onesteporder-contact-td1">Логин:</td>
					<td class="onesteporder-contact-td2"><input type="text" name="auth[Login]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['auth']['Login'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"  class="onesteporder-contact-input" /></td>
				</tr>
				<tr class="onesteporder-contact-tr">
					<td class="onesteporder-contact-td1">Пароль:</td>
					<td class="onesteporder-contact-td2"><input name="auth[cust_password]" type="password"  class="onesteporder-contact-input" /></td>
				</tr>
				<tr class="onesteporder-contact-tr-last">
					<td colspan=2 class="onesteporder-contact-td2" style="text-align:right;"><input value='<?php echo 'Авторизация'; ?>
' type="submit" class="onesteporder-contact-button" /></td>
				</tr>
				<tr class="onesteporder-contact-tr-delay"><td colspan="2"></td></tr>
			</table>
		</form>
	</div>
	<?php endif; ?>	
	<?php endif; ?>
	
</div>
<?php else: ?>
	<div class="message_empty"><?php echo 'Ваша корзина пуста'; ?>
<br><a href='javascript:void(0);' <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe' && $_GET['ordering'] != 'yep'): ?>onclick='javascript:parent.sswgt_CartManager.hide(true);return false;'<?php else: ?>onclick='history.go(-1);'<?php endif; ?>><?php echo 'Вернуться к покупкам'; ?>
</a></div>
<?php endif; ?>
</div>
<div class="system_DisplayNone message_empty" id="EmptyCartMessage"><?php echo 'Ваша корзина пуста'; ?>
<br><a href='javascript:void(0);' <?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe' && $_GET['ordering'] != 'yep'): ?>onclick='javascript:parent.sswgt_CartManager.hide(true);return false;'<?php else: ?>onclick='history.go(-1);'<?php endif; ?>><?php echo 'Вернуться к покупкам'; ?>
</a></div>
</div>

<?php endif; ?>

<script type="text/javascript" language="javascript">
<?php if ($this->_tpl_vars['PAGE_VIEW'] == 'noframe'): ?>
	<?php if ($this->_tpl_vars['ProductsNum']): ?>
		$('#shpcrtgc', window.parent.document).html('<?php echo $this->_tpl_vars['ProductsNum']; ?>
 <?php echo 'продукт(ов)'; ?>
');
		$('#shpcrtca', window.parent.document).html('<?php echo $this->_tpl_vars['cart_total']; ?>
');
	<?php else: ?>
		$('#shpcrtgc', window.parent.document).html('<?php echo '(пусто)'; ?>
');
		$('#shpcrtca', window.parent.document).html('&nbsp;');
	<?php endif; 
 endif; ?>
</script>
