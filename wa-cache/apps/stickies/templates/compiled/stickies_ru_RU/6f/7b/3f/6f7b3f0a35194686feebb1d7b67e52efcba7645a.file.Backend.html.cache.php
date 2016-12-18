<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:17:18
         compiled from "Z:\home\studio.my\webasyst\wa-apps\stickies\templates\actions\backend\Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:294055255737e6c0369-76371470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7b3f0a35194686feebb1d7b67e52efcba7645a' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\stickies\\templates\\actions\\backend\\Backend.html',
      1 => 1378389507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294055255737e6c0369-76371470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'stick_colors_css' => 0,
    'color_key' => 0,
    'color' => 0,
    'sheet_backgrounds' => 0,
    'background_key' => 0,
    'background' => 0,
    'wa_url' => 0,
    'stick_min_size' => 0,
    'stick_max_size' => 0,
    'wa_app_url' => 0,
    'stick_colors' => 0,
    'color_value' => 0,
    'rights_add_sheet' => 0,
    'name' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255737eb42704_14128871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255737eb42704_14128871')) {function content_5255737eb42704_14128871($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'Z:\\home\\studio.my\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
if (!is_callable('smarty_block_wa_js')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
if (!is_callable('smarty_function_wa_header')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_header.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Стикеры — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/stickies.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">

<style type="text/css">

<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_smarty_tpl->tpl_vars['color_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stick_colors_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
 $_smarty_tpl->tpl_vars['color_key']->value = $_smarty_tpl->tpl_vars['color']->key;
?>/* <?php echo $_smarty_tpl->tpl_vars['color_key']->value;?>
 */
.sticky-<?php echo $_smarty_tpl->tpl_vars['color_key']->value;?>
 .sticky-inner { background-color:<?php echo $_smarty_tpl->tpl_vars['color']->value['body'];?>
; border-color: <?php echo $_smarty_tpl->tpl_vars['color']->value['border'];?>
; }
.sticky-<?php echo $_smarty_tpl->tpl_vars['color_key']->value;?>
 .sticky-header {  background-color:<?php echo $_smarty_tpl->tpl_vars['color']->value['header'];?>
 ; border-color: <?php echo $_smarty_tpl->tpl_vars['color']->value['border'];?>
;}
i.sticky-<?php echo $_smarty_tpl->tpl_vars['color_key']->value;?>
 { background:<?php echo $_smarty_tpl->tpl_vars['color']->value['body'];?>
}

<?php } ?>
<?php  $_smarty_tpl->tpl_vars['background'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['background']->_loop = false;
 $_smarty_tpl->tpl_vars['background_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sheet_backgrounds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['background']->key => $_smarty_tpl->tpl_vars['background']->value){
$_smarty_tpl->tpl_vars['background']->_loop = true;
 $_smarty_tpl->tpl_vars['background_key']->value = $_smarty_tpl->tpl_vars['background']->key;
?>/* <?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
 */
i.bg-<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
 {background: <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['background']->value,'wa_app_static_url/',$_smarty_tpl->tpl_vars['wa_app_static_url']->value);?>
; }
#stickies.<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
 {background: <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['background']->value,'wa_app_static_url/',$_smarty_tpl->tpl_vars['wa_app_static_url']->value);?>
 !important; }

<?php } ?>
</style>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.7.1.min.js"></script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/wa.stickiescontroller.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/wa.stickiescontroller.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.resizable.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js

	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.tmpl.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js

	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.stickiescontroller.js
	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/generic.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/wa.stickiescontroller.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



</head>

<body id="stickies">

<div id="wa">


		<div id="wa-app-stickies-stickies" class="stickies-content">
<!-- sticky <?php $_smarty_tpl->_capture_stack[0][] = array("sticky-template-js", null, null); ob_start(); ?> -->
			<div class="sticky{{if sticky.color}} sticky-${sticky.color}{{/if}} sticky-${sticky.color}"
				id="sticky_${sticky.id}"
				style="top: ${sticky.position_top}%;
					left: ${sticky.position_left}%;
					height:${Math.max(<?php echo $_smarty_tpl->tpl_vars['stick_min_size']->value+22;?>
,Math.min(<?php echo $_smarty_tpl->tpl_vars['stick_max_size']->value+22;?>
,parseInt(sticky.size_height)+22))}px;
					width:${Math.max(<?php echo $_smarty_tpl->tpl_vars['stick_min_size']->value+5;?>
,Math.min(<?php echo $_smarty_tpl->tpl_vars['stick_max_size']->value+5;?>
,parseInt(sticky.size_width)+5))}px;
					z-index: ${zindex||1};">
				<div class="sticky-inner" style="display:block;height: 100%; width:100%;">
					<div class="sticky-header">
						<a
							href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sticky/delete/${sticky.id}"
							class="stick-delete js-menu-item js-menu-no-proceed"
							title="Удалить"
						>
							<i class="icon10 close"></i>
						</a>
						<a
							href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sticky/settings/${sticky.id}"
							title="Параметры"
							class="sticky-setting js-menu-item js-menu-no-proceed"
						>
							<i class="icon10 settings"></i>
						</a>
						<span class="sticky-status" id="sticky_status_${sticky.id}" title="Статус стикера"></span>
					</div>
					<div class="sticky-content" style="display:block;  height:${sticky.size_height-20}px; width:${sticky.size_width-6}px;">
						<textarea name="content"
							class="sticky-content"
							id="sticky_content_${sticky.id}"
							cols="40" rows="5"
							style="font-size: ${sticky.font_size}px; line-height: ${sticky.font_size}px;">${sticky.content}</textarea>
					</div>
					<div class="sticky-resizable-se"></div>
				</div>
			</div>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>placeholder -->
<!-- sticky settings <?php $_smarty_tpl->_capture_stack[0][] = array("sticky-settings-template-js", null, null); ob_start(); ?> -->
			<div  class="stickies-settings-form" id="sticky-settings-${sticky.id}" style="display:none;height: 100%; width: 100%;">
				<div class="wa-ui-form-content">
<?php if ($_smarty_tpl->tpl_vars['stick_colors']->value){?>
					<h5>Цвет</h5>
					<ul class="thumbs color-vars" id="color-vars-${sticky.id}">
<!-- <?php  $_smarty_tpl->tpl_vars['color_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stick_colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color_value']->key => $_smarty_tpl->tpl_vars['color_value']->value){
$_smarty_tpl->tpl_vars['color_value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
 -->
						<li
							id="color-vars-${sticky.id}-<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
"
							class="{{if sticky.color == '<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sticky/color/${sticky.id}/<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
"
								title="<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
"
							>
								<i class="sticky-<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
"></i>
							</a>
						</li>
<!-- <?php } ?> end  color variants -->
					</ul>
<?php }else{ ?>
<?php }?>
				</div>
			</div>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>placeholder -->
		</div><!-- wa-app-stickies-stickies -->


<!-- account & navigation -->
		<?php echo smarty_function_wa_header(array(),$_smarty_tpl);?>



<!-- app toolbar, menu & body -->

	<div id="wa-app">

		<div class="stickies-sidebar" id="stickies-events">
			<div class="block sticky-createnew">
				<ul class="menu-v" id="wa-app-stickies-add">
<!-- add sticky <?php $_smarty_tpl->_capture_stack[0][] = array("add-sticky-template-js", null, null); ob_start(); ?> -->
					<li>
					  	<a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sticky/add/${sheet_id}" class="wa-ui-icon-link js-menu-item js-menu-no-proceed">
							<i class="icon16 add"></i>
							Новый стикер
						</a>
					</li>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>placeholder -->
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="stickies-sidebar-scrolable">

			<div class="block" id="stickies-sheets">
				<ul class="menu-v" id="wa-app-stickies-sheets">
<!-- sheet list <?php $_smarty_tpl->_capture_stack[0][] = array("sheet-template-js", null, null); ob_start(); ?> -->
					<li id="sheet_item_${sheet.id}" class="js-sheet-item {{if current_sheet_id == sheet.id}}selected{{else}}{{/if}}">
						<span class="count">
							<i class="icon16 loading" style="display: none;"></i>
<!-- 						{{if current_sheet_id == sheet.id}} -->
							<a
								href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/edit/${sheet.id}"
								class="inline-icon js-menu-item js-menu-no-proceed"
								title="Параметры"
							>
								<i class="icon16 settings"></i>
							</a>
<!-- 							{{else}} -->
								${sheet.qty}
<!--							{{/if}} -->
						</span>
						<a
							id="sheet_item_name_${sheet.id}"
							href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/${sheet.id}"
						>{{if sheet.name}}${sheet.name}{{else}}&lt;без названия&gt;{{/if}} </a>
<!--						{{if current_sheet_id == sheet.id}} -->
						<div class="stickies-settings-form">
							<form
								id="sheet_item__settings_${sheet.id}"
								class="js-form-submit"
								action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/save/${sheet.id}"
							>
							<p><label for="sticky-name-${sheet.id}">Название</label></p>
							<p><input name="name" type="text" value="${sheet.name}" id="sticky-name-${sheet.id}"></p>
<!-- <?php if ($_smarty_tpl->tpl_vars['sheet_backgrounds']->value){?> avaliable backgrounds list -->
							<p>Фон</p>
							<ul class="thumbs background-vars" id="background-vars-${sheet.id}">
<!-- <?php  $_smarty_tpl->tpl_vars['background'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['background']->_loop = false;
 $_smarty_tpl->tpl_vars['background_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sheet_backgrounds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['background']->key => $_smarty_tpl->tpl_vars['background']->value){
$_smarty_tpl->tpl_vars['background']->_loop = true;
 $_smarty_tpl->tpl_vars['background_key']->value = $_smarty_tpl->tpl_vars['background']->key;
?><?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
 -->

								<li id="background-vars-${sheet.id}-<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
" {{if sheet.background_id=='<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/background/${sheet.id}/<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
"
										title="<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
"
									>
										<i class="bg-<?php echo $_smarty_tpl->tpl_vars['background_key']->value;?>
"></i>
									</a>
								</li>
<!-- <?php } ?>end variants -->
							</ul>
<!-- end avaliable backgrounds list<?php }else{ ?>empty backround list<?php }?> -->
							<p>
								<input type="hidden" name="sheet_id" value="${sheet.id}" />
								<input type="submit" value="Сохранить"/>
								<a class="js-menu-item js-menu-no-proceed" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/delete/${sheet.id}">Удалить доску</a>
							</p>
							</form>
						</div>
<!--					{{/if}} -->
					</li>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>placeholder -->
<!-- sheet add <?php $_smarty_tpl->_capture_stack[0][] = array("sheet-add-template-js", null, null); ob_start(); ?> -->
<!-- <?php if ($_smarty_tpl->tpl_vars['rights_add_sheet']->value){?> Allow add new board -->
					<li class="top-padded">
						<a class="small inline-link js-menu-item js-menu-no-proceed" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
#/sheet/add">
							<i class="icon10 add"></i>
							<b><i>Новая доска</i></b>
						</a>
					</li>
<!-- <?php }else{ ?> not enougph rights to add New board -->
<!-- <?php }?> -->
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>placeholder -->
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>


		<div id="wa-system-notice" style="display: none;">
		</div>
		</div>

	</div><!-- wa -->
</div><!-- wa-app -->

<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
<script type="text/x-jquery-tmpl" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<!-- begin <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value,'</','<\/');?>
 end <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->
</script>
<?php } ?>

<script type="text/javascript">
translate['Empty server responce'] = 'Пустой ответ сервера';
translate['AJAX request error'] = 'Ошибка AJAX-запроса';
translate['Invalid server responce'] = 'Нераспознанный ответ сервера';
translate['Delete board with all stickies?'] = 'Удалить доску вместе со всеми стикерами на ней?';
translate['Error occurred while sorting boards'] = 'Произошла ошибка в процессе сортировки досок';
translate['no name'] = 'без названия';
translate['Stickies'] = 'Стикеры';

var accountName = '<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
';
var default_background = '<?php echo key($_smarty_tpl->tpl_vars['sheet_backgrounds']->value);?>
';
$(document).ready( function() {

	$( function() {
		$.wa.stickiescontroller.init();
	});

});
</script>
</body>
</html>
<?php }} ?>