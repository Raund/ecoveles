<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 18:34:10
         compiled from "Z:\home\studio.my\webasyst\wa-system\webasyst\templates\actions\backend\BackendDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:35435255696292e835-76929228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f808fde0f27ff7631f47872ad93fe078726703b8' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-system\\webasyst\\templates\\actions\\backend\\BackendDefault.html',
      1 => 1372077275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35435255696292e835-76929228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525569629de256_80216854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525569629de256_80216854')) {function content_525569629de256_80216854($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Добро пожаловать &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

<div id="wa-app" class="block double-padded">
	<h1><?php echo sprintf("Привет, %s!",htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true));?>
</h1>
	<div style="border:1px dashed #EAEAEA;padding:10px; margin:10px 0">
		<p>Это ваша Панель управления.</p>

		<p>Сейчас она пустая, но скоро на ней появится полезный контент.<br>
		А пока используйте значки наверху этой страницы для работы с доступными приложениями.</p>

		<p>Спасибо за использование Вебасист!</p>
	</div>
</div>
</body>
</html><?php }} ?>