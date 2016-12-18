<?php /* Smarty version 2.6.26, created on 2016-11-24 10:24:59
         compiled from backend/category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/category.html', 1, false),array('modifier', 'translate', 'backend/category.html', 4, false),array('modifier', 'replace', 'backend/category.html', 4, false),array('modifier', 'escape', 'backend/category.html', 4, false),array('modifier', 'default', 'backend/category.html', 34, false),array('modifier', 'set_query', 'backend/category.html', 52, false),array('function', 'html_text', 'backend/category.html', 42, false),array('function', 'html_textarea', 'backend/category.html', 61, false),array('function', 'count', 'backend/category.html', 133, false),)), $this); ?>
<h1 class="breadcrumbs"><a href='<?php echo ((is_array($_tmp="?ukey=categorygoods&categoryID=")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'><?php echo 'Продукты и категории'; ?>
</a>
&raquo;
<?php if ($this->_tpl_vars['categoryID']): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='prdcat_edit_category')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '%CATEGORY_NAME%', $this->_tpl_vars['Title']) : smarty_modifier_replace($_tmp, '%CATEGORY_NAME%', $this->_tpl_vars['Title'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

<?php else: ?>
<?php echo 'Новая категория'; ?>

<?php endif; ?>
</h1>
<?php echo $this->_tpl_vars['MessageBlock']; ?>

		
		<form enctype="multipart/form-data" action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" name="MainForm">
		<input name="action" value="save_category" type="hidden" />
<!--
@features "Trial product"
-->
<?php if ($_GET['overflowCategories']): ?>
<div class="error_msg_f" style="text-align:center;">
<?php echo ((is_array($_tmp=@TRIAL_STRING_CATEGORIES_OVERFLOW)) ? $this->_run_mod_handler('replace', true, $_tmp, '[NUM]', @TRIAL_MAX_CATEGORIES_NUM) : smarty_modifier_replace($_tmp, '[NUM]', @TRIAL_MAX_CATEGORIES_NUM)); ?>

</div>
<p><?php echo @TRIAL_STRING_LIMITATIONS; ?>

<?php endif; ?>
<!--
@features
-->
		<table style="table-layout:fixed;" cellpadding="5" cellspacing="0">
		<!-- general parent -->
		<tr>
			<td class="lcolumnr"><?php echo 'Родительская категория'; ?>
</td>
			<td>
				<div id="parent-category-name">
				<?php $_from = $this->_tpl_vars['parent_category']['calculated_path']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['_frcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['_frcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_crumb']):
        $this->_foreach['_frcrumbs']['iteration']++;
?>
				<?php if ($this->_tpl_vars['_crumb']['categoryID'] != 1 && $this->_tpl_vars['parent_category']['categoryID'] != $this->_tpl_vars['_crumb']['categoryID']): 
 echo ((is_array($_tmp=$this->_tpl_vars['_crumb']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&nbsp;&gt;<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['parent_category']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Root') : smarty_modifier_default($_tmp, 'Root')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

				</div>
				<input name="parent" id="parent-category-categoryID" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['parent_category']['categoryID'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
" type="hidden" />
				<a href="#choose_category" id="choose-parentcategory-handler"><?php echo 'Выбрать'; ?>
</a>
			</td>
		</tr>
		<tr>
			<td class="lcolumnr"><strong><?php echo 'Название категории'; ?>
</strong></td>
			<td><?php echo smarty_function_html_text(array('name' => 'name','values' => $this->_tpl_vars['CategoryInfo'],'style' => "width:350px;"), $this);?>
</td>
		</tr>

		<tr>
			<td class="lcolumnr"><?php echo 'Логотип категории'; ?>
</td>
			<td>
				<input type="file" name="picture" />
				<br />
			<?php if ($this->_tpl_vars['CategoryInfo']['picture']): ?>
				<font class="average"></font> <a class="small" href="#" onclick="<?php echo $this->_tpl_vars['CategoryInfo']['picture_href']; ?>
"><?php echo $this->_tpl_vars['CategoryInfo']['picture']; ?>
</a> - 
				<a href='<?php echo ((is_array($_tmp="categoryID=".($this->_tpl_vars['CategoryInfo']['categoryID'])."&action=remove_picture")) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
' title='<?php echo 'Удалить изображение?'; ?>
' class="confirm_action"><?php echo 'Удалить'; ?>
</a>
			<?php elseif ($this->_tpl_vars['categoryID']): ?>
				<font class="average"><?php echo 'Изображение не загружено'; ?>
</font>
			<?php endif; ?>
			</td>
		</tr>

		<tr>
			<td class="lcolumnr"><?php echo 'Описание категории'; ?>
:</td>
			<td><?php echo smarty_function_html_textarea(array('name' => 'description','rows' => '7','class' => 'mceEditor','cols' => '40','values' => $this->_tpl_vars['CategoryInfo']), $this);?>
</td>
		</tr>
		
		<tr>
			<td class="lcolumnr"><?php echo 'Заголовок страницы'; ?>
:</td>
			<td><?php echo smarty_function_html_text(array('name' => 'meta_title','style' => "width:350px;",'values' => $this->_tpl_vars['CategoryInfo']), $this);?>
</td>
		</tr>
		
		<tr>
			<td  class="lcolumnr"><?php echo 'Тэг META keywords'; ?>
:</td>
			<td><?php echo smarty_function_html_text(array('name' => 'meta_keywords','style' => "width:350px",'values' => $this->_tpl_vars['CategoryInfo']), $this);?>
</td>
		</tr>

		<tr>
			<td class="lcolumnr"><?php echo 'Тэг META description'; ?>
:</td>
			<td><?php echo smarty_function_html_textarea(array('name' => 'meta_description','style' => "width:350px;",'rows' => 2,'cols' => 35,'values' => $this->_tpl_vars['CategoryInfo']), $this);?>
</td>
		</tr>

		<tr>
			<td class="lcolumnr"><?php echo 'Сортировка'; ?>
:</td>
			<td><input type="text" name="sort_order" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CategoryInfo']['sort_order'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="13" /></td>
		</tr>
		<tr>
			<td class="lcolumnr"><?php echo 'ID страницы (часть URL; используется в ссылках на эту страницу)'; ?>
</td>
			<td><input name="slug" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CategoryInfo']['slug'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="text" style="width:350px;" /></td>
		</tr>
<!--
@features "Products comparison"
 -->

			<tr>
				<td class="lcolumnr"><?php echo 'Предоставлять ли возможность пользователю сравнивать продукты в этой категории или нет'; ?>
:</td>
				<td><input type="checkbox" class="checknomarging" name="allow_products_comparison" value="1"<?php if ($this->_tpl_vars['CategoryInfo']['allow_products_comparison'] == 1): ?> checked="checked"<?php endif; ?> />	</td>
			</tr>
<!--
@features
-->
<!--
@features "Search products by params"
-->

			<tr>
				<td class="lcolumnr" valign="top"><?php echo 'Расширенный поиск'; ?>
:</td>
				<td>
					<a href="JavaScript:SelectParametrsHideTable();"><?php echo 'Возможные варианты выбора'; ?>
...</a>
					<br />
					<?php echo 'Пожалуйста, выберите параметры, по которым возможен расширенный поиск продуктов в данной категории'; ?>

					<input type="hidden" name="SelectParametrsHideTable_hidden" value="<?php echo $this->_tpl_vars['showSelectParametrsTable']; ?>
" />

					<script language='javascript' type="text/javascript"><!--<?php echo '
						function SelectParametrsHideTable(){
							
							var obj = document.getElementById(\'SelectParametrsTable\');
							if ( obj.style.display == \'none\' ){
								obj.style.display = \'block\';
								document.MainForm.SelectParametrsHideTable_hidden.value=\'1\';
							}else{
								obj.style.display = \'none\';
								document.MainForm.SelectParametrsHideTable_hidden.value=\'0\';
							}
						}
					'; ?>
//-->
					</script>
					<br />
					<table id="SelectParametrsTable">
					<?php $_from = $this->_tpl_vars['Options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Option']):
?>
						<tr>
							<td>
								<table>
									<tr>
										<td colspan="3"><label><input type="checkbox" class="checknomarging" name="checkbox_param_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
"<?php if ($this->_tpl_vars['_Option']['isSet']): ?> checked="checked"<?php endif; ?> onclick="Checkbox_param_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
()" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['_Option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</label></td>
									</tr>
								<?php echo smarty_function_count(array('array' => $this->_tpl_vars['_Option']['variants'],'item' => '_VarNum'), $this);?>

								<?php if ($this->_tpl_vars['_VarNum']): ?>
									<tr>
										<td>&nbsp;</td>
										<td colspan="2">
											<label>
											<input type="radio" class="inlradio" name="select_arbitrarily_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
" id="select_arbitrarily1_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
"<?php if ($this->_tpl_vars['_Option']['set_arbitrarily'] == 1): ?> checked="checked"<?php endif; ?> value="1" onclick="Select_arbitrarily_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
()" />
											<?php echo 'Задается произвольно'; ?>

											</label>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td colspan="2">
											<label>
											<input type="radio" class="inlradio" name="select_arbitrarily_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
" id="select_arbitrarily2_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
"<?php if ($this->_tpl_vars['_Option']['set_arbitrarily'] == 0): ?> checked="checked"<?php endif; ?> value="0" onclick="Select_arbitrarily_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
()" />
											<?php echo 'Выбор из значений'; ?>

											</label>
										</td>
									</tr>
								<?php $_from = $this->_tpl_vars['_Option']['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Variant']):
?>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
											<label>
											<input type="checkbox" class="checknomarging" name="checkbox_variant_<?php echo $this->_tpl_vars['_Variant']['variantID']; ?>
"<?php if ($this->_tpl_vars['_Variant']['isSet']): ?> checked="checked"<?php endif; ?> />
											<?php echo ((is_array($_tmp=$this->_tpl_vars['_Variant']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

											</label>
										</td>
									</tr>
								<?php endforeach; endif; unset($_from); ?>								<?php endif; ?>								</table>
								<script language="javascript" type="text/javascript"><!--
									function Checkbox_param_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
()
									<?php echo '{'; ?>

										
										_checked = document.MainForm.checkbox_param_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
.checked;
	
									<?php if ($this->_tpl_vars['_VarNum']): ?>
											document.MainForm.select_arbitrarily1_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
.disabled = !_checked;
											document.MainForm.select_arbitrarily2_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
.disabled =!_checked;
									<?php endif; ?>
										Select_arbitrarily_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
();									
									<?php echo '}'; ?>

	
									function Select_arbitrarily_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
()
									<?php echo '{'; ?>

									
									<?php if ($this->_tpl_vars['_VarNum']): ?>
										_enabled = document.MainForm.select_arbitrarily2_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
.checked && document.MainForm.checkbox_param_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
.checked;
									<?php endif; ?>
									<?php $_from = $this->_tpl_vars['_Option']['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_Variant']):
?>
										document.MainForm.checkbox_variant_<?php echo $this->_tpl_vars['_Variant']['variantID']; ?>
.disabled = !_enabled;
									<?php endforeach; endif; unset($_from); ?>									<?php echo '}'; ?>

	
									Checkbox_param_Change_<?php echo $this->_tpl_vars['_Option']['optionID']; ?>
();
								//-->
								</script>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
					<?php if ($this->_tpl_vars['showSelectParametrsTable'] == 0): 
 echo '
					<script language="javascript" type="text/javascript"><!--
						document.getElementById(\'SelectParametrsTable\').style.display = \'none\';
					//-->
					</script>
					'; 
 endif; ?>
				</td>
			</tr>

			<tr>
				<td class="lcolumnr"><?php echo 'Разрешить подборку продуктов при просмотре категории'; ?>
:
					<div class="notice"><?php echo 'включите этот параметр, если Вы хотите предоставить пользователю возможность подбора продуктов в этой категории не только при расширенном поиске, но и при обычном просмотре этой категории'; ?>
</div>
				</td>
				<td><input type="checkbox" class="checknomarging" name="allow_products_search"	value="1"<?php if ($this->_tpl_vars['CategoryInfo']['allow_products_search'] == 1): ?> checked="checked"<?php endif; ?> /></td>
			</tr>
<!--
@features
-->

			<tr>
				<td class="lcolumnr"><?php echo 'Показывать пользователю продукты из подкатегорий при просмотре этой категории'; ?>
:</td>
				<td><input type="checkbox" class="checknomarging" name="show_subcategories_products" value="1"<?php if ($this->_tpl_vars['CategoryInfo']['show_subcategories_products'] == 1): ?> checked="checked"<?php endif; ?> /></td>
			</tr>
<?php if (@CONF_VKONTAKTE_ENABLED == 1 && false): ?>
		<tr>
				<td class="lcolumnr"><?php echo 'Раздел каталога продуктов «Вконтакта», в который экспортировать продукты этой категории'; ?>
:</td>
				<td>
					<select name="vkontakte_type">
					<?php $_from = $this->_tpl_vars['vkontakte_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category_type'] => $this->_tpl_vars['category_type_title']):
?>
						<option value="<?php echo $this->_tpl_vars['category_type']; ?>
" <?php if ($this->_tpl_vars['CategoryInfo']['vkontakte_type'] == $this->_tpl_vars['category_type']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['category_type_title']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
		</tr>
<?php endif; ?>

		</table>

		<p>
		<input type="submit" value="<?php echo 'Сохранить'; ?>
" class="cancel_contentchanged" />
		<?php if ($this->_tpl_vars['categoryID']): ?>
		<input type="button" value="<?php echo 'Удалить'; ?>
" onclick="if(window.confirm('<?php echo 'Удалить?'; ?>
'))document.location.href='<?php echo ((is_array($_tmp='action=delete_category')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
';" />
		<?php endif; ?>
		</p>
	</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/tiny_mce_config.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
var categoryID = '<?php echo $this->_tpl_vars['categoryID']; ?>
';
<?php echo '
getLayer(\'choose-parentcategory-handler\').onclick = function(){categoryTreeManager.show_tree(\'choose_parentcategory\');}
var categoryTreeManager = {
	
	\'show_tree\': function(action){
		
		var url = set_query(\'?ukey=category_tree&js_action=\'+action+\'&productID=\');
		sswgt_CartManager.shop_url = "'; 
 echo ((is_array($_tmp=@CONF_FULL_SHOP_URL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); 
 echo '";
		sswgt_CartManager.show(url, 550, 500); 	
	},
	\'hide_tree\': function(){
		
		sswgt_CartManager.hide();
	},
	\'actions\': {
		\'choose_parentcategory\': {
			\'onclick\': function(node){
				
				if(categoryID == node.getSetting(\'categoryID\')){
					return;
				}
				var breadCrumbs = node.getSetting(\'name\');
				var p = node.ParentNode;
				while(p){
					breadCrumbs = p.getSetting(\'name\')+"&nbsp;&gt;&nbsp;"+breadCrumbs;
					p = p.ParentNode;
				}
				getLayer(\'parent-category-categoryID\').value = node.getSetting(\'categoryID\');
				getLayer(\'parent-category-name\').innerHTML = breadCrumbs;
				beforeUnloadHandler_contentChanged = true;
				
				categoryTreeManager.hide_tree();
			}
		}
	},
	
	\'eval\': function(action, handler, node, wnd){
		
		this.actions[action][handler](node, wnd);
	}
}
</script>
'; ?>

<script type='text/javascript' src='<?php echo @URL_JS; ?>
/widget_checkout.js'></script>