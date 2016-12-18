<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 18:34:19
         compiled from "Z:\home\studio.my\webasyst\wa-apps\installer\templates\actions\apps\Apps.html" */ ?>
<?php /*%%SmartyHeaderCode:227995255696b5ce032-60486205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cf9b5de1e1a1d7179e1deac920db986187cbfca' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\installer\\templates\\actions\\apps\\Apps.html',
      1 => 1380116682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227995255696b5ce032-60486205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'vendor_name' => 0,
    'apps' => 0,
    'app' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255696b819e59_90851381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255696b819e59_90851381')) {function content_5255696b819e59_90851381($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'Z:\\home\\studio.my\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>
<div class="block" id="list-apps">

    <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
            <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?><i class="icon16 yes"></i>
                <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                <i class="icon16 no"></i>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

            </div>
        <?php } ?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><h1><?php echo htmlspecialchars(sprintf('Приложения %s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</h1><?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)){?>
        <ul class="thumbs li300px">

            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
                <li>
                    <div class="profile image96px">
                        <div class="image">
                            <a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][96];?>
" alt="<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
">
                            </a>
                        </div>
                        <div class="details">
                            <h5><a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['app']->value['description'];?>
</p>
                            <?php if (empty($_smarty_tpl->tpl_vars['app']->value['installed'])){?>
                                <?php if (empty($_smarty_tpl->tpl_vars['app']->value['price'])){?>
                                    <strong>Бесплатно</strong>
                                <?php }else{ ?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strong>
                                    
                                <?php }?>
                            <?php }else{ ?>
                                <em>Установлено</em>
                            <?php }?>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>
    <?php }?>

</div>
<script type="text/javascript">
<!--
$.layout.window.setTitle('Приложения — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
');
//-->
</script>
<?php }} ?>