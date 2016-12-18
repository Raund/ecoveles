<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:18:15
         compiled from "Z:\home\studio.my\webasyst\wa-apps\contacts\templates\layouts\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:25031525573b760fa26-74685206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d66af3229ae4b0268867e73345299b0fa58cb48' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\contacts\\templates\\layouts\\Default.html',
      1 => 1350906451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25031525573b760fa26-74685206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'versionFull' => 0,
    'wa_app' => 0,
    'sidebar' => 0,
    'content' => 0,
    'fields' => 0,
    'global_admin' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573b79736a5_20792670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573b79736a5_20792670')) {function content_525573b79736a5_20792670($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
if (!is_callable('smarty_function_wa_header')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_header.php';
if (!is_callable('smarty_modifier_replace')) include 'Z:\\home\\studio.my\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-imageareaselect/imgareaselect-default.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" />
<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" media="screen" />
<!--[if IE 7]>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.ie7.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
<![endif]-->
<!--[if IE 8]>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.ie8.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
<![endif]-->


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/compiled/contacts-jquery.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts-jquery.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js

	<?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.button.min.js
		<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.dialog.min.js
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.formalize.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-imageareaselect/jquery.imgareaselect.min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.json.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.scrollTo-min.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/json2.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.hoverIntent.minified.js
	<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts-jquery.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="?action=loc&v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>


<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?><?php echo "-full";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/compiled/contacts".$_tmp1.".js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts".$_tmp1.".js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.controller.js
	<?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.controller.full.js
		<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.controller.settings.js
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.grid.js
	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.history.js
	<?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.history.full.js
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.contactEditor.js
	<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/fieldTypes.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts".$_tmp1.".js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['wa']->value->js(false);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
"><div id="wa">
	<?php echo smarty_function_wa_header(array(),$_smarty_tpl);?>

	<div id="wa-app">
		<div class="sidebar left200px"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
</div>
		<div class="content left200px" id="c-core">
			<div class="contacts-background">
				<div class="block not-padded c-core-content">
				<?php if (isset($_smarty_tpl->tpl_vars['content']->value)&&$_smarty_tpl->tpl_vars['content']->value){?>
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				<?php }else{ ?>
					<div class="block">
						<h1 class="wa-page-heading">Загрузка...</h1>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div id="wa-cache" style="display:none"></div>
</div></body>
<script type="text/javascript">
$.wa.controller.init({
	url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
",
	backend_url: "<?php echo wa_backend_url();?>
"
});
$.wa.grid.init({fields: <?php echo json_encode($_smarty_tpl->tpl_vars['fields']->value);?>
, app_url: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
"});
$.wa.controller.global_admin = <?php if (empty($_smarty_tpl->tpl_vars['global_admin']->value)){?>0<?php }else{ ?>1<?php }?>;
$.wa.controller.admin = <?php if (empty($_smarty_tpl->tpl_vars['admin']->value)){?>0<?php }else{ ?>1<?php }?>;
$.wa.controller.accountName = "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['wa']->value->accountName(),'"','\"');?>
";
<?php if (empty($_smarty_tpl->tpl_vars['content']->value)){?>
	if($.wa.controller.getHash()) {
		$.wa.controller.dispatch();
	} else {
		$.wa.controller.lastPage();
	}
<?php }?>
</script>
</html><?php }} ?>