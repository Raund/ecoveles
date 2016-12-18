<?php /* Smarty version 2.6.26, created on 2016-10-06 18:25:47
         compiled from backend/product_settings.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/product_settings.html', 29, false),array('modifier', 'translate', 'backend/product_settings.html', 32, false),array('modifier', 'escape', 'backend/product_settings.html', 32, false),array('modifier', 'replace', 'backend/product_settings.html', 417, false),array('modifier', 'set_query', 'backend/product_settings.html', 491, false),array('function', 'html_text', 'backend/product_settings.html', 60, false),array('function', 'html_textarea', 'backend/product_settings.html', 96, false),)), $this); ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/niftycube.js"></script>

<style type="text/css">
ul#product-pictures-container li table{
	width: <?php echo @CONF_PRDPICT_THUMBNAIL_SIZE+26; ?>
;
	height: <?php echo @CONF_PRDPICT_THUMBNAIL_SIZE+36; ?>
;
}
ul#product-pictures-container li table td.img_container{
	height: <?php echo @CONF_PRDPICT_THUMBNAIL_SIZE+6; ?>
;
}
</style>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/tiny_mce_config.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	translate.prdset_msg_choosen_relatedproduct = '<?php echo 'Добавлен %s'; ?>
';
	translate.prdset_msg_confirm_pict_delete = '<?php echo 'Удалить изображение продукта?'; ?>
';
	translate.prdset_btn_delete_pict = '<?php echo 'Удалить'; ?>
';
	translate.prdset_btn_setdefault_pict = '<?php echo 'Сделать основной'; ?>
';
	translate.prdset_msg_loading_products = '<?php echo 'Загружаю продукты'; ?>
';
	translate.prdset_btn_hide_products = '<?php echo 'Убрать список'; ?>
';
	translate.prdset_btn_next_products = '<?php echo 'Вперед'; ?>
';
	translate.prdset_btn_prev_products = '<?php echo 'Назад'; ?>
';
	translate.btn_delete = '<?php echo 'Удалить'; ?>
';
	translate.str_image_not_uploaded = '<?php echo 'Изображение не загружено'; ?>
';
</script>

<h1 class="breadcrumbs"><a href='<?php echo ((is_array($_tmp="ukey=categorygoods&productID=")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Продукты и категории'; ?>
</a>
&raquo;
<?php if ($this->_tpl_vars['product']['productID']): ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['CurrentDivision']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

<?php else: ?>
<?php echo 'Добавить продукт'; ?>

<?php endif; ?>
</h1>

<?php echo $this->_tpl_vars['MessageBlock']; ?>


<div>
<ul id="edmod">
	<li class="tab" id="tab-simple-options"><a href='#simple' id="lnk-simple-options"><?php echo 'Основное'; ?>
</a></li>
	<li class="tab" id="tab-advanced-options"><a href='#advanced' id="lnk-advanced-options"><?php echo 'Дополнительно'; ?>
</a></li>
	<li class="tab" id="tab-customparams-options"><a href='#customparams' id="lnk-custom-params"><?php echo 'Доп. характеристики'; ?>
</a></li>
</ul>
</div>
<br />

<form enctype="multipart/form-data" action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" name="MainForm" id="product-settings-form" target="_self">
<input type="hidden" name="action" id="action-name" value="save_product" />
<input type="hidden" name="productID" id="product-id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['productID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="make_slug" id="make-slug-id" value="<?php if ($this->_tpl_vars['product']['productID'] <= 0): ?>1<?php endif; ?>" />

<div id="container-simple-options" style="display:none;">
	
	<table width="50%">
	<tr>
		<td width="1%" nowrap><strong><?php echo 'Наименование'; ?>
: </strong></td>
		<td>
			<?php echo smarty_function_html_text(array('name' => 'name','values' => $this->_tpl_vars['product'],'table' => @PRODUCTS_TABLE,'style' => "width:100%"), $this);?>

		</td>
	</tr>
	
	<tr>
		<td nowrap><?php echo 'Цена'; ?>
: </td>
		<td>
			<input name="Price" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['Price'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="6" type="text" style="text-align:right;" /> <?php echo $this->_tpl_vars['default_currency']['currency_iso_3']; ?>

		</td>
	</tr>

	<?php if (@CONF_CHECKSTOCK == 1): ?>
	<tr>
		<td><?php echo 'На складе'; ?>
: </td>
		<td><input type="text" name="in_stock" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['is'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="6" /></td>
	</tr>
	<?php endif; ?>
	
	<tr>
		<td nowrap><?php echo 'Категория'; ?>
: </td>
		<td>
			<div id="product-category-name">
			<?php $_from = $this->_tpl_vars['product_category']['calculated_path']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['_frcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['_frcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_crumb']):
        $this->_foreach['_frcrumbs']['iteration']++;
?>
			<?php if ($this->_tpl_vars['_crumb']['categoryID'] != 1 && $this->_tpl_vars['product_category']['categoryID'] != $this->_tpl_vars['_crumb']['categoryID']): 
 echo ((is_array($_tmp=$this->_tpl_vars['_crumb']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&nbsp;&gt;<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['product_category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			</div>
			<input name="categoryID" id="product-category-categoryID" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product_category']['categoryID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden" />
			<a href="#choose_category" id="choose-parentcategory-handler"><?php echo 'Выбрать'; ?>
</a>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
	<!-- Description -->
			<?php echo 'Описание'; ?>
:<br />
			<?php echo smarty_function_html_textarea(array('name' => 'description','values' => $this->_tpl_vars['product'],'rows' => 3,'cols' => 40,'style' => "width:100%",'class' => 'mceEditor','id' => "prd-description"), $this);?>

	<!-- Brief description -->
			<br />
			<div>
			<?php echo 'Краткое описание'; ?>
:<br />
			<?php echo smarty_function_html_textarea(array('name' => 'brief_description','values' => $this->_tpl_vars['product'],'rows' => 3,'cols' => 40,'style' => "width:100%",'class' => 'mceEditor'), $this);?>

			</div>
	<!-- Tags -->
	
			<br />
			<div id="tags-container">
			<?php echo 'Тэги (разделитель - запятая)'; ?>
:
			<?php echo smarty_function_html_text(array('name' => 'tags','id' => 'tags','values' => $this->_tpl_vars['product_tags'],'style' => "width:100%"), $this);?>

			<?php echo $this->_tpl_vars['tags_cloud']; ?>

			</div>
	<!-- Meta settings -->
			<br />
	
			<fieldset>
				<legend><?php echo 'Мета'; ?>
</legend>
				<table width="100%">
				<tr>
					<td width="1%" nowrap="nowrap"><?php echo 'Заголовок страницы'; ?>
: </td>
					<td>
						<?php echo smarty_function_html_text(array('name' => 'meta_title','values' => $this->_tpl_vars['product'],'style' => "width:100%"), $this);?>

					</td>
				</tr>
				<tr>
					<td width="1%" nowrap="nowrap"><?php echo 'Ключевые слова'; ?>
: </td>
					<td>
						<?php echo smarty_function_html_text(array('name' => 'meta_keywords','values' => $this->_tpl_vars['product'],'style' => "width:100%",'class' => 'prd_metakeywords'), $this);?>

					</td>
				</tr>
				
				<tr>
					<td width="1%" nowrap="nowrap"><?php echo 'Описание'; ?>
: </td>
					<td>
						<?php echo smarty_function_html_textarea(array('name' => 'meta_description','values' => $this->_tpl_vars['product'],'rows' => 2,'cols' => 35,'style' => "width:100%;",'class' => 'prd_metadescription'), $this);?>

					</td>
				</tr>
				
				</table>
			</fieldset>
	<!-- Pictures -->
			<br />
			<fieldset>
				<legend><?php echo 'Фотографии продуктов'; ?>
</legend>
				<ul type="none">
					<li style="list-style-type:none"><?php echo 'Перетаскивайте мышью для изменения порядка.'; ?>
</li>
					<li style="list-style-type:none"><?php echo 'Первое изображение в списке — основное.'; ?>
</li>
				</ul>
				

				<table cellpadding="0" cellspacing="0" width="100%" id="product-pictures-container" class="grid" trheight="<?php echo @CONF_PRDPICT_THUMBNAIL_SIZE; ?>
">
				<tr class="gridsheader">
					<td><?php echo 'Изображения'; ?>

					<input name="__action" value="_update_pictures_priority" type="hidden" />
					</td>
					<td><?php echo 'Маленькая фотография'; ?>
</td>
					<td><?php echo 'Фотография'; ?>
</td>					
					<td><?php echo 'Большая фотография'; ?>
</td>
					<td>&nbsp;</td>
				</tr>
				
				<?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pictures']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tbody class="dragable">
				<tr id="picture-container-<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['photoID']; ?>
" height="<?php echo @CONF_PRDPICT_THUMBNAIL_SIZE; ?>
" class="<?php if ($this->_sections['i']['first']): ?>gridline1<?php else: ?>gridline1<?php endif; ?>">
					<td class="img_container handle" title="<?php echo 'Перетаскивайте мышью для изменения порядка.'; ?>
">
						<?php if ($this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_exists'] == 1): ?>
							<img src="<?php echo @URL_PRODUCTS_PICTURES; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" />
						<?php else: ?>
							<div class="error_block"><?php echo 'Изображение не загружено'; ?>
</div>
						<?php endif; ?>
						</td>
					<td style="padding-left:10px;" class="handle">
					<?php if ($this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_exists'] == 1): ?>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_picture']['file']; ?>
<br>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_picture']['width']; ?>
&times;<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_picture']['height']; ?>
&nbsp;px<br>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_picture']['size']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['thumbnail_picture']['file']; ?>
<br>
						<?php echo 'Изображение не загружено'; ?>

					<?php endif; ?>
					</td> 
					<td>
					<?php if ($this->_tpl_vars['pictures'][$this->_sections['i']['index']]['picture_exists'] == 1): ?>	
						<a href="<?php echo @URL_PRODUCTS_PICTURES; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" class="new_window bluehref" wnd_width="<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['width']; ?>
" wnd_height="<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['height']; ?>
">
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['file']; ?>
</a>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['width']; ?>
&times;<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['height']; ?>
&nbsp;px<br>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['size']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['large_picture']['file']; ?>
<br>
						<?php echo 'Изображение не загружено'; ?>

					<?php endif; ?>
					</td>					
					<td>
					<?php if ($this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_exists'] == 1): ?>	
						<a href="<?php echo @URL_PRODUCTS_PICTURES; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" class="new_window bluehref" wnd_width="<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['width']; ?>
" wnd_height="<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['height']; ?>
">
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['file']; ?>
</a>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['width']; ?>
&times;<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['height']; ?>
&nbsp;px<br>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['size']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['enlarged_picture']['file']; ?>
<br>
						<?php echo 'Изображение не загружено'; ?>

					<?php endif; ?>
					</td>
					<td>
						<a href="#delete_picture" class="delete_picture_handlers bluehref" photoID="<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['photoID']; ?>
"><img src="./images/remove.gif" alt="<?php echo ((is_array($_tmp='prdset_btn_delete_pict')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" /></a>
						<input type="hidden" class="field_priority" name="priority_<?php echo $this->_tpl_vars['pictures'][$this->_sections['i']['index']]['photoID']; ?>
" value="<?php echo $this->_sections['i']['index']; ?>
" />
					</td>
				</tr>
				</tbody>
				<?php endfor; endif; ?>
				</table>
				<table  cellpadding="0" cellspacing="0" width="100%" class="grid">
				<tbody class="gridsfooter">
				<tr id="upload-picture-container" style="clear: left; white-space: nowrap;"  >
				<td colspan="4">
				<br>
				<fieldset>
					<legend><?php echo 'Загрузить по одному'; ?>
&nbsp;</legend>
					<input id="set-default" name="set_default" type="hidden" value="<?php if ($this->_sections['i']['total']): ?>0<?php else: ?>1<?php endif; ?>" />
					<input id="upload-priority" name="upload_picture_priority" type="hidden" value="1" />
					<input id="field-skip-image-upload" name="skip_image_upload" type="hidden" value="0" />
					
					<ul type="none">					
						<li style="margin:10px 10px;list-style-type:none"><input type="radio" name="image_source" value="file" id="image-source-file" checked />&nbsp;<input id="upload-browse" name="upload_picture" type="file"size="45" /></li>
						<li style="margin:10px 10px;list-style-type:none"><input type="radio" name="image_source" value="url" id="image-source-url"  />&nbsp;<input id="upload-url" name="upload_picture_url" type="text" value="URL" disabled size="59" class="bluehref"/></li>
					</ul>
					<img src="images_common/processing.gif" id="processing-image" style="display:none;" />
					<input id="do-upload-handler" value="<?php echo 'Загрузить'; ?>
" type="button" class="button" />
					</p>
				</fieldset>
				</td>
				</tr>
				</tbody>
				</table>
			</fieldset>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/sortable_table.html", 'smarty_include_vars' => array('table_id' => "product-pictures-container",'action_name' => 'update_pictures_priority','action_id' => "action-name",'default_action' => 'save_product')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
</tr>
</table>
</div>

<div id="container-advanced-options" style="display:none;">

<table>

<?php if ($this->_tpl_vars['product']['date_added'] != ''): ?>
<tr>
	<td><?php echo 'Дата добавления'; ?>
: </td>
	<td><strong><?php echo $this->_tpl_vars['product']['date_added']; ?>
</strong></td>
</tr>
<?php endif; ?>
	
<?php if ($this->_tpl_vars['product']['date_modified'] != ''): ?>
<tr>
	<td><?php echo 'Дата изменения'; ?>
: </td>
	<td><strong><?php echo $this->_tpl_vars['product']['date_modified']; ?>
</strong></td>
</tr>
<?php endif; ?>

<tr>
	<td><?php echo 'Артикул'; ?>
: </td>
	<td><input type="text" name="product_code" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_code'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
</tr>

<tr>
	<td><?php echo 'ID страницы (часть URL; используется в ссылках на эту страницу)'; ?>
: </td>
	<td><input type="text" name="slug" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['slug'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
</tr>

<tr>
	<td><?php echo 'Скрытый'; ?>
: </td>
	<td><input type="checkbox" name="product_invisible" value="1" <?php if (! $this->_tpl_vars['product']['enabled']): ?>checked<?php endif; ?> /></td>
</tr>

<tr>
	<td><?php echo 'Можно купить'; ?>
: </td>
	<td><input type="checkbox" name="ordering_available" value="1" <?php if ($this->_tpl_vars['product']['ordering_available']): ?>checked<?php endif; ?> /></td>
</tr>

<tr>
	<td><?php echo 'Вид налога'; ?>
: </td>
	<td>
		<select name='classID'>
			<option value='null'><?php echo 'Не определено'; ?>
</option>
		<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['tax_classes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<option value="<?php echo $this->_tpl_vars['tax_classes'][$this->_sections['j']['index']]['classID']; ?>
"<?php if ($this->_tpl_vars['product']['classID'] == $this->_tpl_vars['tax_classes'][$this->_sections['j']['index']]['classID']): ?> selected="selected"<?php endif; ?>>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['tax_classes'][$this->_sections['j']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			</option>
		<?php endfor; endif; ?>
		</select>
	</td>
</tr>

<?php if (@CONF_VKONTAKTE_ENABLED == 1 && false): ?>
<tr>
	<td><?php echo 'Последний экспорт во «Вконтакт»'; ?>
: </td>
	<td><?php if ($this->_tpl_vars['product']['vkontakte_update_date']): ?><strong style="background-image:url('./images_common/vkontakte/vkontakte.ico');background-position:left center;background-repeat:no-repeat;padding:20px;"><?php echo $this->_tpl_vars['product']['vkontakte_update_timestamp']; ?>
</strong><?php else: ?>&mdash;<?php endif; ?></td>
</tr>
<?php endif; ?>

<?php if (@CONF_1C_ON == 1): ?>
<tr>
	<td><?php echo 'CommerceML-идентификатор'; ?>
: </td>
	<td><?php if ($this->_tpl_vars['product']['id_1c']): ?><strong style="background-image:url('./images_common/1c.png');background-position:left center;background-repeat:no-repeat;padding:20px;"><?php echo $this->_tpl_vars['product']['id_1c']; ?>
</strong><?php else: 
 echo 'Отсутствует'; 
 endif; ?></td>
</tr>
<?php endif; ?>

<?php if ($_GET['productID'] != ''): ?>
<tr>
	<td><?php echo 'Рейтинг'; ?>
: </td>
	<td><input type="text" name="customers_rating" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['customers_rating'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
</tr>
<tr>
	<td><?php echo 'Голосов'; ?>
: </td>
	<td><?php echo $this->_tpl_vars['product']['customer_votes']; ?>
</td>
</tr>
<tr>
	<td><?php echo 'Количество просмотров'; ?>
: </td>
	<td><?php echo $this->_tpl_vars['product']['viewed_times']; ?>
</td>
</tr>
<tr>
	<td><?php echo 'Добавлен в корзину'; ?>
: </td>
	<td><?php echo $this->_tpl_vars['product']['add2cart_counter']; ?>
</td>
</tr>
<tr>
	<td><?php echo 'Продано'; ?>
: </td>
	<td><?php echo $this->_tpl_vars['product']['items_sold']; ?>
</td>
</tr>

<?php endif; ?>

<tr>
	<td><?php echo 'Старая цена'; ?>
: 
	<div class="field_descr"><?php echo 'только число'; ?>
</div></td>
	<td><input name="list_price" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['list_price'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="6" type="text" style="text-align:right;" /> <?php echo $this->_tpl_vars['default_currency']['currency_iso_3']; ?>
</td>
</tr>

<tr>
	<td><?php echo 'Стоимость упаковки'; ?>
: </td>
	<td><input name="shipping_freight" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['shipping_freight'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="6" type="text" style="text-align:right;" /> <?php echo $this->_tpl_vars['default_currency']['currency_iso_3']; ?>
</td>
</tr>

<tr>
	<td><?php echo 'Вес продукта'; ?>
: </td>
	<td><input name='weight' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['weight'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' size="6" type="text" style="text-align:right;" /> <?php echo @CONF_WEIGHT_UNIT; ?>
</td>
</tr>

<tr>
	<td><?php echo 'Бесплатная доставка'; ?>
: 
	<div class="field_descr"><?php echo 'раз'; ?>
</div></td>
	<td><input type="checkbox" name='free_shipping'<?php if ($this->_tpl_vars['product']['free_shipping']): ?> checked="checked"<?php endif; ?> value='1' /></td>
</tr>

<tr>
	<td><?php echo 'Ограничение на минимальный заказ продукта (штук)'; ?>
: </td>
	<td><input type="text" name='min_order_amount' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['min_order_amount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' /></td>
</tr>

<tr>
	<td><?php echo 'Сортировка'; ?>
: </td>
	<td><input type="text" name='sort_order' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['sort_order'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' /></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
	<td valign="top"><?php echo 'Рекомендуем посмотреть'; ?>
: </td>
	<td>
		<div id="related-products-container">
		<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['RelatedItems']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div id="related-product-<?php echo ((is_array($_tmp=$this->_tpl_vars['RelatedItems'][$this->_sections['j']['index']]['productID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['RelatedItems'][$this->_sections['j']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

				<input name="related_products[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['RelatedItems'][$this->_sections['j']['index']]['productID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden" />
				<a href='#remove_relatedproduct' class="remove_relatedproduct_handler" productID="<?php echo ((is_array($_tmp=$this->_tpl_vars['RelatedItems'][$this->_sections['j']['index']]['productID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><img src="images/remove.gif" border="0" hspace="6" alt="<?php echo 'Удалить'; ?>
" /></a>
			</div>
		<?php endfor; endif; ?>
		</div>
		<div><a href="#add_related_product" id="add-related-product-handler"><?php echo 'Добавить'; ?>
</a></div>
	</td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
	<td valign="top"><?php echo 'Дополнительные родительские категории'; ?>
: </td>
	<td>
		<div id="appendedcategories-block">
		<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['appended_categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div id="appended-category-<?php echo ((is_array($_tmp=$this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['categoryID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
				<?php $_from = $this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['calculated_path']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['_frcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['_frcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_crumb']):
        $this->_foreach['_frcrumbs']['iteration']++;
?>
				<?php if ($this->_tpl_vars['_crumb']['categoryID'] != 1 && $this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['categoryID'] != $this->_tpl_vars['_crumb']['categoryID']): 
 echo ((is_array($_tmp=$this->_tpl_vars['_crumb']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&nbsp;&gt;<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php echo $this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['category_name']; ?>

				<input name="appended_categories[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['categoryID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden" />
				<a href='#remove_appendedcategory' class="remove_appendedcategory_handler" categoryID="<?php echo ((is_array($_tmp=$this->_tpl_vars['appended_categories'][$this->_sections['j']['index']]['categoryID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><img src="images/remove.gif" border="0" hspace="6" alt="<?php echo 'Удалить'; ?>
" /></a>
			</div>
		<?php endfor; endif; ?>
		</div>
		<div>
			<a href="#add_appended_parent" id="add-appended-parent-handler"><?php echo 'Добавить'; ?>
</a>
		</div>
	</td>
</tr>
</table>

<br />
<fieldset style="width:60%;">
	<legend>
		<input type="checkbox" name="ProductIsProgram" value="1" id="product-isprogram-handler"<?php if ($this->_tpl_vars['product']['eproduct_filename'] != ''): ?> checked="checked"<?php endif; ?> />
		<label for="product-isprogram-handler"><?php echo 'Продукт является программой'; ?>
</label>
	</legend>
	
	<div id='FileNameTable'<?php if ($this->_tpl_vars['product']['eproduct_filename'] == ''): ?> style="display:none;"<?php endif; ?>>
	<table cellspacing="5">
		<tr>
			<td valign="top"><?php echo 'Файл продукта'; ?>
: </td>
			<td>
				<input type="file" name="eproduct_filename" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['eproduct_filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
				<?php if ($this->_tpl_vars['product']['eproduct_exists'] == 1): 
 echo $this->_tpl_vars['product']['eproduct_filename']; 
 if ($this->_tpl_vars['product']['eproduct_filesize']): ?> (<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['eproduct_filesize_str'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '&nbsp;') : smarty_modifier_replace($_tmp, ' ', '&nbsp;')); ?>
)<?php endif; 
 else: 
 echo 'Файл не загружен'; 
 endif; ?>
			</td>
		</tr>
		<tr>
			<td valign="top"><?php echo 'Файл доступен '; ?>
: </td>
			<td>
				<select name="eproduct_available_days">
				<?php $_from = $this->_tpl_vars['eproduct_available_days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
					<option value='<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'<?php if ($this->_tpl_vars['product']['eproduct_available_days'] == $this->_tpl_vars['value']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top"><?php echo 'Количество загрузок (раз)'; ?>
: </td>
			<td><input type="text" size="4" name="eproduct_download_times" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['eproduct_download_times'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
		</tr>
	</table>
	</div>
</fieldset>
		
</div>

<div id="container-customparams-options" style="display:none;">
		
<!-- Extra options -->
	<?php if ($this->_tpl_vars['options'] != null): ?>
	
	<table cellpadding="4">
	<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fe_options'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_options']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['fe_options']['iteration']++;
?>
	<?php $this->assign('option_row', $this->_tpl_vars['option']['option_row']); ?>
	<?php $this->assign('value_row', $this->_tpl_vars['option']['option_value']); ?>
	<?php $this->assign('ValueCount', $this->_tpl_vars['option']['value_count']); ?>
		<tr>
			<td align="left"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['option_row']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</b></td>
			<td>
				<input name='option_radio_type_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
' id='opt_undef_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
' type='radio' value="UN_DEFINED" <?php if ($this->_tpl_vars['value_row']['option_value'] == '' && $this->_tpl_vars['value_row']['option_type'] == 0): ?> checked="checked"<?php endif; ?> />
			</td>
			<td>
				<label for="opt_undef_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
"><?php echo 'Не определено'; ?>
</label>
			</td>
		</tr>
		<tr> 
			<td>&nbsp;</td>
			<td valign='top'> 
				<input name='option_radio_type_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
' id="opt_any_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
" type='radio' value="ANY_VALUE" <?php if ($this->_tpl_vars['value_row']['option_type'] == 0 && $this->_tpl_vars['value_row']['option_value'] != ''): ?> checked="checked"<?php endif; ?> /> 
			</td>
			<td>
				<label for="opt_any_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
"><?php echo 'Произвольное значение (текст)'; ?>
 </label>
				<?php echo smarty_function_html_text(array('dbfield' => 'option_value','name' => "option_value_%lang%_".($this->_tpl_vars['option_row']['optionID']),'values' => $this->_tpl_vars['value_row'],'style' => "width:250px;"), $this);?>

			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign='top'>
				<input name='option_radio_type_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
' id="opt_nval_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
" type='radio' value="N_VALUES" <?php if ($this->_tpl_vars['value_row']['option_type'] == 1): ?> checked="checked"<?php endif; ?> />
			</td>
			<td>
				<label for="opt_nval_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
">
					<?php echo 'Выбор из предустановленных значений '; ?>
 (<span id="option-values-num-<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
"><?php echo $this->_tpl_vars['ValueCount']; ?>
</span> <?php echo 'возможных вариантов'; ?>
)<br />
					<a name="option_value_configurator_<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
" optionID='<?php echo $this->_tpl_vars['option_row']['optionID']; ?>
' href='<?php echo ((is_array($_tmp="?ukey=option_value_configurator&optionID=".($this->_tpl_vars['option_row']['optionID'])."&productID=".($_GET['productID']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' onclick="return optionsSettingsManager.showSettings(this);"><?php echo 'Выбрать варианты выбора'; ?>
...</a>
				</label>
			</td>
		</tr>
		<?php if (! ($this->_foreach['fe_options']['iteration'] == $this->_foreach['fe_options']['total'])): ?>
		<tr>
			<td colspan="3"><hr width="100%" /></td>
		</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	<?php else: ?>
		<p><?php echo 'Не определено ни одной дополнительной характеристи продуктов'; ?>
</p>
	<?php endif; ?>
	<p><a href="<?php echo ((is_array($_tmp="?did=18")) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
"><?php echo 'Добавить/удалить доп. характеристики'; ?>
</a></p>
</div>
<?php if (@CONF_CHECKSTOCK != 1): ?><input type="hidden" name="in_stock" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['is'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><?php endif; ?>
<br />
<input type="submit" class="button" id="btn-save-product" name="save_product" value="<?php echo 'Сохранить'; ?>
" />
</form>

<script type="text/javascript" src="<?php echo @URL_JS; ?>
/product_settings.js"></script>
<script type="text/javascript">
	var product_id = "<?php echo $this->_tpl_vars['product']['productID']; ?>
";
	var conf_full_shop_url = "<?php echo ((is_array($_tmp=@CONF_FULL_SHOP_URL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
";
<?php echo '
	if(getCookie(\'prdset_tab\') && getCookie(\'prdset_prd_id\') == product_id){
	
		prdset_selectTab(getCookie(\'prdset_tab\'));
	}else{
		
		prdset_selectTab(\'simple\');
	}
	setCookie(\'prdset_prd_id\', product_id);
	ProductIsProgramHandler();
'; ?>

</script>
<script type='text/javascript' src='<?php echo @URL_JS; ?>
/widget_checkout.js'></script>