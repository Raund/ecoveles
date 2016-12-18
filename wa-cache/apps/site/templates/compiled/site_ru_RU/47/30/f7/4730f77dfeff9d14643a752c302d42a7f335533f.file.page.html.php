<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:17:52
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\themes\default\page.html" */ ?>
<?php /*%%SmartyHeaderCode:12403525573a08326a6-02597078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4730f77dfeff9d14643a752c302d42a7f335533f' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\themes\\default\\page.html',
      1 => 1336982958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12403525573a08326a6-02597078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573a0867889_40192263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573a0867889_40192263')) {function content_525573a0867889_40192263($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="content left">
  <div id="page" role="main">
    <h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

  </div>
</div><?php }} ?>