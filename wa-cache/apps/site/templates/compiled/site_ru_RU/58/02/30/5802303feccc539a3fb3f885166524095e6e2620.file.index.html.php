<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:17:52
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9129525573a0906052-59851204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5802303feccc539a3fb3f885166524095e6e2620' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\themes\\default\\index.html',
      1 => 1374142443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9129525573a0906052-59851204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_theme_url' => 0,
    'wa_url' => 0,
    'a' => 0,
    'wa_app_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573a0ae36b1_18065421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573a0ae36b1_18065421')) {function content_525573a0ae36b1_18065421($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
  <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
  <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
  
  <!-- css -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
default.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
mobile.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" media="screen and (max-width: 760px)" rel="stylesheet" type="text/css">
  <?php if ($_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>
      <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
  <?php }?>
  <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 
  
  <!-- js -->
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
  <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 
    
  <?php echo $_smarty_tpl->tpl_vars['wa']->value->headJs();?>
 
</head>
<body>
  <div id="header" role="navigation">
    <div class="container">
      <ul id="wa-apps">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->apps(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
          <li<?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</a></li>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
          <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
            <li class="float-right small"><a href="?logout">Log out</a></li>
            <li class="float-right small"><strong><?php echo $_smarty_tpl->tpl_vars['wa']->value->user('name');?>
</strong></li>
          <?php }else{ ?>
            <li class="float-right small"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Sign up</a></li>
            <li class="float-right small"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Log in</a></li>
          <?php }?>
        <?php }?>
      </ul>
      <div class="clear-both"></div>
    </div>
  </div>
  <div id="main">
    <div class="container app-header"></div>
      <div class="container">  
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <div class="clear-both"></div>
      </div>  
  </div>
  <div id="footer">
    <div class="container">
      <div id="poweredby" class="float-right hint">
        Мы используем <a href="http://www.webasyst.com/ru/">Webasyst</a> <span class="dots" title="Webasyst"></span>
      </div>
      <div id="copyright">
        &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
      </div>
      <!-- <div id="sub-links">
        suggested place for your footer links
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Terms Of Service</a></li>
        </ul>
      </div> -->
    </div>
  </div>
</body>
</html><?php }} ?>