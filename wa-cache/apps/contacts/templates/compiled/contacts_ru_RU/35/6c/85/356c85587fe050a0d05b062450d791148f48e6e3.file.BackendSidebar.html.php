<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:18:15
         compiled from "Z:\home\studio.my\webasyst\wa-apps\contacts\templates\actions\backend\BackendSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:26374525573b7153d05-99273890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356c85587fe050a0d05b062450d791148f48e6e3' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\contacts\\templates\\actions\\backend\\BackendSidebar.html',
      1 => 1380118386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26374525573b7153d05-99273890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'show_create' => 0,
    'categories' => 0,
    'versionFull' => 0,
    'history' => 0,
    'totalContacts' => 0,
    'filters' => 0,
    'lists' => 0,
    'l' => 0,
    'superadmin' => 0,
    'c' => 0,
    'wa_url' => 0,
    'totalUsers' => 0,
    'groups' => 0,
    'id' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573b757a5f9_24053076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573b757a5f9_24053076')) {function content_525573b757a5f9_24053076($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['admin']->value)||(!empty($_smarty_tpl->tpl_vars['show_create']->value)&&!empty($_smarty_tpl->tpl_vars['categories']->value))){?>
    <div class="block">
        <?php if (empty($_smarty_tpl->tpl_vars['versionFull']->value)){?>
            <a href="#/contacts/add/" class="bold no-underline">
                <i class="icon16 add"></i>Новый контакт
            </a>
        <?php }else{ ?>
            <ul class="menu-h dropdown">
                <li style="display: block">
                    <a href="#/contacts/add/" class="bold no-underline">
                        <i class="icon16 add"></i>
                        <strong class="underline">Новый контакт</strong>
                        <i class="icon10 darr"></i>
                    </a>
                    <ul class="menu-v">
                        <li>
                            <a href="#/contacts/add/">
                                Персона
                            </a>
                        </li>
                        <li class="line-after">
                            <a href="#/contacts/add/company/">
                                Компания
                            </a>
                        </li>
                        <li>
                            <a href="#/contacts/import/">
                                Импорт...
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php }?>
    </div>
<?php }?>


<div class="block wrapper" style="display:none">
    <span class="count"><a href="#" class="hint c-search-close" onclick="return $.wa.history.clear('creation')" title="очистить"><i class="icon10 close"></i></a></span>
    <h5 class="heading">Недавно добавлены</h5>
    <ul class="menu-v with-icons compact" id="wa-creation-history">
        
    </ul>
</div>


<form id="search-form" onsubmit="$.wa.controller.simpleSearch(); return false">
    <div class="block">
        <input id="search-text" type="text" class="search-input-only" value="" />
        <?php if (!empty($_smarty_tpl->tpl_vars['versionFull']->value)){?>
            <a href="#/contacts/search/" class="hint">Расширенный поиск</a>
        <?php }?>
    </div>
</form>
<div class="block wrapper" style="display:none">
    <span class="count"><a href="#" class="hint c-search-close" onclick="return $.wa.history.clear('search')" title="очистить"><i class="icon10 close"></i></a></span>
    <h5 class="heading">Недавние поиски</h5>
    <ul class="menu-v with-icons compact" id="wa-search-history">
        
    </ul>
</div>
<script>
    $.wa.defaultInputValue($('#search-text'), "поиск по имени или email", 'empty');
    <?php if (!empty($_smarty_tpl->tpl_vars['history']->value)){?>
        $(function() {
            $.wa.history.updateHistory(<?php echo json_encode($_smarty_tpl->tpl_vars['history']->value);?>
);
        });
    <?php }?>
</script>

<?php if (!empty($_smarty_tpl->tpl_vars['versionFull']->value)){?>
    
    <div class="block">
        <ul class="menu-v with-icons compact">
            <li id="sb-all-contacts-li">
                <span class="count"><?php echo $_smarty_tpl->tpl_vars['totalContacts']->value;?>
</span>
                <a class="bold" href="#/"><i class="icon16 contact"></i><b class="c-item-bold">Все контакты</b></a>
            </li>
        </ul>
    </div>

    
    <div class="block">
        <h5 class="heading collapse-handler" id="c-sb-filters-header"><i class="icon16 darr"></i><b>Мои фильтры</b></h5>
        <div class="collapsible1 hierarchical views" id="my-filters-list">
            <?php echo $_smarty_tpl->tpl_vars['filters']->value;?>

        </div>
    </div>

    
    <div class="block">
        <h5 class="heading collapse-handler" id="c-sb-lists-header"><i class="icon16 darr"></i><b>Списки</b></h5>
        <ul class="menu-v with-icons collapsible">
            <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                 <li rel="list<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">
                     <span class="count"><?php echo $_smarty_tpl->tpl_vars['l']->value['count'];?>
</span>
                     <a href="#/contacts/list/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
/"><i class="icon16 folder"></i><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></a>
                 </li>
            <?php } ?>
        </ul>
    </div>
<?php }?>

<div class="block">
    
    <?php if (empty($_smarty_tpl->tpl_vars['versionFull']->value)){?>
        <ul class="menu-v with-icons compact">
            <li id="sb-all-contacts-li">
                <span class="count"><?php echo $_smarty_tpl->tpl_vars['totalContacts']->value;?>
</span>
                <a class="bold" href="#/"><i class="icon16 contact"></i><b class="c-item-bold">Все контакты</b></a>
            </li>
        </ul>
    <?php }?>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)||!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
            <span class="count c-action-link"><a href="#/categories/create/" title="Новая категория"><i class="icon16 add"></i></a></span>
        <?php }?>
        <h5 class="heading collapse-handler" id="c-sb-categories-header"><i class="icon16 darr"></i><b>Категории</b></h5>
        <ul class="menu-v with-icons collapsible" id="list-category">
            <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                     <li rel="category<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                         <span class="count"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnt'];?>
</span>
                         <a href="#/contacts/category/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
/">
                            <?php if (!empty($_smarty_tpl->tpl_vars['c']->value['icon'])&&strpos($_smarty_tpl->tpl_vars['c']->value['icon'],'/')!==false){?>
                                <img class="c-app16x16icon-menu-v" src="<?php if (substr($_smarty_tpl->tpl_vars['c']->value['icon'],0,4)=='http'){?><?php echo $_smarty_tpl->tpl_vars['c']->value['icon'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value['icon'];?>
<?php }?>" />
                            <?php }else{ ?>
                                <i class="icon16 <?php echo ifempty($_smarty_tpl->tpl_vars['c']->value['icon'],'contact');?>
"></i>
                            <?php }?>
                            <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b>
                        </a>
                     </li>
                <?php } ?>
            <?php }else{ ?>
                <li class="hint" style="padding:0">
                    Категории служат для классификации контактов, например: клиенты, поставщики, партнеры и т.д. Пользователям Вебасиста можно настроить доступ только к определенным категориям контактов.
                </li>
            <?php }?>
        </ul>
    <?php }?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
    <div class="block">
        
        <ul class="menu-v with-icons compact">
            <li id="sb-all-users-li">
                <span class="count"><?php if (!empty($_smarty_tpl->tpl_vars['totalUsers']->value)){?><?php echo $_smarty_tpl->tpl_vars['totalUsers']->value;?>
<?php }else{ ?>0<?php }?></span>
                <a class="bold" href="#/users/all/"><i class="icon16 user"></i><b class="c-item-bold">Все пользователи</b></a>
            </li>
        </ul>

        
        <span class="count"><a href="#/groups/create/" title="Новая группа пользователей"><i class="icon16 add"></i></a></span>
        <h5 class="heading collapse-handler" id="c-sb-groups-header"><i class="icon16 darr"></i><b>Группы</b></h5>
        <ul class="menu-v with-icons collapsible" id="list-group">
            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['g']->key;
?>
                    <li rel="group<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <span class="count"><?php echo $_smarty_tpl->tpl_vars['g']->value['cnt'];?>
</span>
                        <a href="#/contacts/group/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/"><i class="icon16 user"></i><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></a>
                    </li>
                <?php } ?>
            <?php }else{ ?>
                <li class="hint" style="padding:0">
                    Группы служат для объединения пользователей Вебасиста и предоставления им общих прав доступа.
                </li>
            <?php }?>
        </ul>
    </div>
<?php }?>

<div class="block c-sidebar-indent"></div>
<?php }} ?>