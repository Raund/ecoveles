<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:15:56
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:43645255732c46b750-98177664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c414258d8cbd98825c426981fabdffaeeab23dd' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1336140648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43645255732c46b750-98177664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255732c4d1194_00965782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255732c4d1194_00965782')) {function content_5255732c4d1194_00965782($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>