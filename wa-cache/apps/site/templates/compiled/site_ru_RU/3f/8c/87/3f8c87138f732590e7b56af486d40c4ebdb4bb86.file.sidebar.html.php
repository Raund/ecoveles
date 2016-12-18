<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:17:52
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\themes\default\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:23344525573a087d973-11025396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8c87138f732590e7b56af486d40c4ebdb4bb86' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\themes\\default\\sidebar.html',
      1 => 1364568932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23344525573a087d973-11025396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'page' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573a08c8107_36642295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573a08c8107_36642295')) {function content_525573a08c8107_36642295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_print_tree.php';
?><div class="sidebar left top-padded" role="navigation">
  <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['wa']->value->site->pages(),'attrs'=>'id="page-list"','class'=>"menu-v",'elem'=>'<a href=":url">:name</a>','selected'=>$_smarty_tpl->tpl_vars['page']->value['id']),$_smarty_tpl);?>

  <hr>
  <p class="hint">Оформление сайта настраивается <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
">в бекенде</a> с помощью приложения «Сайт».</p>
</div><?php }} ?>