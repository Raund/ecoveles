<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:15:54
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\templates\layouts\Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:27795255732ad4cf49-93224186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d479dc241a24feaa7ff24927e9ff8adb026cb6a' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\templates\\layouts\\Sidebar.html',
      1 => 1380116972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27795255732ad4cf49-93224186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domains' => 0,
    'd_id' => 0,
    'domain_id' => 0,
    'd' => 0,
    'rights' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255732ae35fa3_36925630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255732ae35fa3_36925630')) {function content_5255732ae35fa3_36925630($_smarty_tpl) {?><div class="block double-padded">
    <ul class="menu-v with-icons">
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['d_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['d_id']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['d_id']->value==$_smarty_tpl->tpl_vars['domain_id']->value){?> class="selected"<?php }?>>
            <a href="?domain_id=<?php echo $_smarty_tpl->tpl_vars['d_id']->value;?>
">
                <i class="icon16 favicon" style="background-image:url(http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
/favicon.ico)"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<div style="display:none" id="addsite-dialog">
	<form method="post" action="?module=domains&amp;action=save">
		<div class="dialog-content">
			<h1>Новый сайт</h1>
			<p>
				<strong class="large">http://</strong><input type="text" id="domain-name" name="name" class="bold large long" value="" placeholder="www.mydomain.ru" />
				<br /><span class="hint">Например, mydomain.ru, www.mydomain.ru, subdomain.mydomain.ru</span>
			</p>

			<p>Введите URL нового сайта. Вы должны быть владельцем доменного имени и предварительно настроить домен так, чтобы он указывал на данную установку Webasyst. Для настройки доменного имени обратитесь за помощью к вашему хостинг-провайдеру. <a href="http://www.webasyst.ru/developers/docs/routing/site-app-routing/" target="_blank">Помощь</a> <i class="icon10 new-window"></i></p>
		</div>
		<div class="dialog-buttons">
			<input type="submit" class="button green" value="Создать сайт">
			или <a href="#" class="inline-link cancel"><b><i>отмена</i></b></a>
		</div>
	</form>
</div>


<div class="s-site-mgmt-tab">
	<div class="block">
    	<h5 class="heading">
			<div class="s-site-mgmt-current-url"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domains']->value[$_smarty_tpl->tpl_vars['domain_id']->value]['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
            <span class="count"><a id="s-domain" href="http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domains']->value[$_smarty_tpl->tpl_vars['domain_id']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
/" title="Открыть в новом окне" target="_blank"><i class="icon16 new-window"></i></a></span>
        </h5>
    </div>
    <ul class="menu-v s-links with-icons">
        <li id="s-link-pages"><a href="#/pages/"><i class="icon16 notebook"></i>Страницы</a></li>
        <li id="s-link-design"><a href="#/design/"><i class="icon16 palette"></i>Дизайн</a></li>
        <li id="s-link-routing"><a href="#/routing/"><i class="icon16 split"></i>Маршрутизация</a></li>
        <li id="s-link-settings"><a href="#/settings/"><i class="icon16 settings"></i>Настройки</a></li>
    </ul>
</div>


<div class="block double-padded">
	<ul class="menu-v with-icons s-links">
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['blocks']){?><li id="s-link-blocks"><a href="#/blocks/"><i class="icon16 zone"></i>Блоки</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['files']){?><li id="s-link-files"><a href="#/files/"><i class="icon16 upload"></i>Файлы</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['admin']){?>
    	    	<li class="s-add-new-site top-padded"><a href="#" class="small"><i class="icon10 add"></i>Новый сайт</a> </li>
        	<?php }?>
	</ul>
</div>
<?php }} ?>