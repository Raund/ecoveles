<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:18:17
         compiled from "Z:\home\studio.my\webasyst\wa-apps\contacts\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:11676525573b903f3d0-11935509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8a1b5ee543c89813b5700571c6918be4b5dcbe' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\contacts\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1336140626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11676525573b903f3d0-11935509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573b90a9b23_08066124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573b90a9b23_08066124')) {function content_525573b90a9b23_08066124($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>