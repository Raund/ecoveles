<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:18:22
         compiled from "Z:\home\studio.my\webasyst\wa-apps\contacts\templates\actions\contacts\ContactsUser.html" */ ?>
<?php /*%%SmartyHeaderCode:29858525573be8db1a5-00539215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd86f15f680656ed3ece01f8ef35c6df649dbf4' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\contacts\\templates\\actions\\contacts\\ContactsUser.html',
      1 => 1380118386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29858525573be8db1a5-00539215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'own_profile' => 0,
    'status' => 0,
    'superadmin' => 0,
    'groups' => 0,
    'id' => 0,
    'name' => 0,
    'all_groups' => 0,
    'gFullAccess' => 0,
    'fullAccess' => 0,
    'noAccess' => 0,
    'gNoAccess' => 0,
    'apps' => 0,
    'app_id' => 0,
    'wa_url' => 0,
    'app' => 0,
    'versionFull' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573bed3c8b6_49412911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573bed3c8b6_49412911')) {function content_525573bed3c8b6_49412911($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include 'Z:\\home\\studio.my\\webasyst\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?>

<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']&&empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
    <ul class="menu-h c-actions">
        <li><a href="javascript:void(0);" id="delete-user"><i class="icon16 delete"></i> Удалить аккаунт пользователя</a></li>
    </ul>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_user']){?>
    
    <form id="form-user-account" method="post" action="?module=contacts&action=user&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
        <div class="fields">
            <div class="field">
                <div class="name">Логин</div>
                <div class="value"><input type="text" name="login" /></div>
            </div>
            <div class="field">
                <div class="name">Пароль</div>
                <div class="value">
                    <input type="password" name="password" />
                    <?php if ($_smarty_tpl->tpl_vars['contact']->value['password']){?>
                        <span class="hint">Оставьте поле пустым, чтобы сохранить существующий пароль.</span>
                    <?php }?>
                </div>
            </div>
            <div class="field">
                <div class="name">Подтверждение пароля</div>
                <div class="value"><input type="password" name="confirm_password" /></div>
            </div>
            <div class="field">
                <div class="value">
                    <input type="submit" class="button green" value="Сохранить">
                </div>
            </div>
        </div>
    </form>
<?php }else{ ?>
    <div class="fields" style="min-width:51%">
        <div class="field">
            <div class="name">Логин</div>
            <div class="value">
                <strong class="large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                <a href="javascript:void(0)" id="show-passwd-form" style="margin-left: 1.2em" class="small inline-link"><b><i>изменить пароль</i></b></a>
            </div>
        </div>

        
        <form id="form-edit-user-password" style="display:none;clear:left" method="post" action="?module=contacts&action=user&a=passwd&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
            <div class="field ">
                <div class="name">Новый пароль</div>
                <div class="value">
                    <input name="password" type="password" id="newpass">
                </div>
            </div>
            <div class="field">
                <div class="name">Подтверждение пароля</div>
                <div class="value">
                    <input name="confirm_password" type="password" id="newpass-comfirm">
                </div>
            </div>
            <div class="field">
                <div class="value">
                    <input type="submit" class="button green" value="Сохранить"> или <a class="inline-link" href="javascript:void(0)" id="cancel-passwd-change"><b><i>отменить</i></b></a>
                    <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                </div>
            </div>
        </form>

        <div class="field">
            <div class="name">Статус</div>
            <div class="value bold">
                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact']->value->getStatus(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['status']->value=='online'){?>
                    <i class="icon10 online"></i> <span class="c-user-status-online">Онлайн</span>
                <?php }else{ ?>
                    <?php if (!$_smarty_tpl->tpl_vars['contact']->value['last_datetime']){?>
                        <span style="color:red">Никогда не входил в систему</span>
                    <?php }else{ ?>
                        Последний вход: <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['contact']->value['last_datetime'],"datetime");?>

                    <?php }?>
                <?php }?>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['superadmin']->value){?>
            
            <div class="field">
                <div class="name">Принадлежит к группам</div>
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['groups']->value){?>
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['u_groups']['last'] = $_smarty_tpl->tpl_vars['name']->last;
?>
                            <a href="#/contacts/group/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php if (strlen($_smarty_tpl->tpl_vars['name']->value)>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&lt;без названия&gt;<?php }?></a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['u_groups']['last']){?>,<?php }?>
                        <?php } ?>
                    <?php }else{ ?>
                        &lt;нет&gt;
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
                        <a href="javascript:void(0)" style="margin-left: 1.2em" class="small inline-link" id="open-customize-groups"><b><i>настроить группы</i></b></a>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
                <form id="form-customize-groups" style="display:none;clear:left" method="post" action="?module=groups&action=contactSave&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
                    <div class="field">
                        <div class="value">
                            <div class="c-checkbox-menu-container"><div>
                                <ul class="menu-v compact with-icons c-checkbox-menu">
                                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                                        <li><label><input type="checkbox" name="groups[]" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['id']->value])){?> checked="checked"<?php }?> /><?php if (strlen($_smarty_tpl->tpl_vars['name']->value)>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&lt;без названия&gt;<?php }?></label></li>
                                    <?php } ?>
                                </ul>
                            </div></div>
                        </div>
                        <div class="value">
                            <input type="submit" class="button green" value="Сохранить">
                            или <a class="inline-link" href="javascript:void(0)" id="cancel-customize-groups"><b><i>отменить</i></b></a>
                            <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                        </div>
                    </div>
                </form>
            <?php }?>
        <?php }?>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['superadmin']->value){?>
        <div class="fields" style="min-width:51%">
            <div class="field" style="min-width:500px">
                <div class="name">Доступ</div>
                <div class="value c-access-rights" id="c-access-rights-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['gFullAccess']->value){?>
                        <strong class="large">Администратор</strong>
                        <span style="margin-left:1em">Этот уровень доступа унаследован от групп. Для изменения необходимо изменить настройки этих групп или вхождение данного пользователя в группы.</span>
                    <?php }elseif($_smarty_tpl->tpl_vars['fullAccess']->value&&!empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                        <strong class="large">Администратор</strong>
                        <span style="margin-left:1em">Вы не можете аннулировать административный уровень доступа для самого себя. Только другой Администратор может это сделать.</span>
                    <?php }else{ ?>
                        <select id="c-access-rights-toggle" style="float:left;margin:0 1.2em 0 3px">
                            <option value="remove"<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&$_smarty_tpl->tpl_vars['noAccess']->value){?> selected="selected"<?php }?>>Нет доступа</option>
                            <option value="0"<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&!$_smarty_tpl->tpl_vars['noAccess']->value){?> selected="selected"<?php }?>>Ограниченный доступ</option>
                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['fullAccess']->value){?> selected="selected"<?php }?>>Администратор</option>
                        </select>

                        <?php if (!$_smarty_tpl->tpl_vars['gNoAccess']->value){?>
                            <span id="c-access-rights-hint-warning" class="c-access-not-allowed-hint" style="display:none;color:red"><span>Нельзя установить &laquo;Нет доступа&raquo;, потому что некоторые права доступа унаследованы от групп. Для лишения прав доступа, измените настройки групп или вхождение данного пользователя в группы.</span></span>
                        <?php }else{ ?>
                            <span id="c-access-rights-hint-customize" class="c-access-not-allowed-hint" style="font-weight:bold;display:none;color:red"><span>Настройте права доступа для каждого приложения</span></span>
                        <?php }?>
                        <i class="icon16 loading" style="margin-left:16px;display:none;white-space:normal"></i>
                        <span class="c-access-rights-hint c-access-saved-hint" style="display:none"><i class="icon10 yes"></i> Сохранено</span>

                        <table id="c-access-rights-by-app"><tbody>
                            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                                <tr id="c-ar-tr-<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" class="c-ar-app-row">
                                    <td class="c-app-icon">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['img'];?>
">
                                    </td>
                                    <td class="c-app-name">
                                        <span class="c-access-color-noaccess"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </td>
                                    <td class="c-app-access" style="min-width:400px;white-space:normal">
                                        <?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']>=2){?>
                                            Полный доступ унаследован от групп.
                                        <?php }else{ ?>
                                            <select name="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" style="float: left;margin:0 1.2em 12px 0">
                                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']){?> class="not-allowed"<?php }elseif(!$_smarty_tpl->tpl_vars['app']->value['customizable']){?> selected="selected"<?php }?>>Нет доступа</option>
                                                <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']){?> selected="selected"<?php }?>>Ограниченный доступ</option>
                                                <?php }?>
                                                <option value="2">Полный доступ</option>
                                            </select>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                                <a href="javascript:void(0)" class="small customize-link" style="display: none">Настроить</a>
                                            <?php }?>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app_id']->value=='contacts'){?>
                                                <i class="icon16 info c-ar-tooltip"></i>
                                                <div style="display:none" class="c-ar-tooltip-html"><i></i>
                                                    <strong>Внимание:</strong> Уровни доступа &laquo;Ограниченный&raquo; и &laquo;Полный&raquo; в приложении &laquo;Контакты&raquo; НЕ дают прав управления аккаунтами пользователей и категориями. Такие права имеет только Администратор.
                                                </div>
                                            <?php }?>

                                            
                                            <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                                            <span class="c-access-saved-hint" style="display: none"><i class="icon10 yes"></i> Сохранено</span>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']>0){?>
                                                <span class="c-access-not-allowed-hint" style="display:none;color:red"><span>Нельзя установить &laquo;Нет доступа&raquo;, потому что некоторые права доступа унаследованы от групп. Для лишения прав доступа, измените настройки групп или вхождение данного пользователя в группы.</span></span>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody></table>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>
<?php }?>
<div class="clear-left"></div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tooltip/jquery.tooltip.patched.min.js"></script>
<script type="text/javascript">
<?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_user']){?>
    // Create new user form submit
    $("#form-user-account").submit(function () {
        var form = $(this);
        form.find('input.error').removeClass('error');
        form.find('.errormsg').remove();
        if (!$.trim(this.login.value)) {
            $(this.login).addClass('error').after('<em class="errormsg">'+"Логин обязателен."+'</em>');
            return false;
        }

        if (this.password.value != this.confirm_password.value) {
            form.find('input[type="password"]').addClass('error');
            $(this.confirm_password).after().after('<em class="errormsg">'+"Пароли не совпадают."+'</em>');
            return false;
        }

        $.post(form.attr('action'), form.serialize(), function (response) {
            if (response.status == 'ok') {
                $.wa.controller.contactAction([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
, 'user']);
                $.wa.controller.reloadSidebar();
            } else if (response.status == 'fail') {
                form.find('input[type="submit"]').parent().prepend($('<em class="errormsg" style="margin-bottom:10px">'+response.errors.join('<br>')+'</em>'));
            }
        }, 'json');
        return false;
    });

    // 'Create user account' actions menu item
    $(function () {
        $("#create-user-account").click(function () {
            $.wa.controller.switchToTab('#t-user');
            <?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?>
                $(this).parent().hide();
            <?php }?>
            return false;
        });
        $("#close-user-account").click(function () {
            $.wa.controller.switchToTab('#t-contact');
            <?php if ($_smarty_tpl->tpl_vars['versionFull']->value){?>
                $("#create-user-account").parent().show();

                // sliding tab animation
                $('#t-user').hide('slideDIB', {direction: 'down'}, 300, function() {
                    $(this).addClass('hidden')
                });
            <?php }?>
            return false;
        });
    });
<?php }else{ ?>

    <?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
        // Groups checklist
        $.wa.controller.initCheckboxList('#form-customize-groups .c-checkbox-menu');
        $('#open-customize-groups').click(function() {
            $('#form-customize-groups').toggle();
        });
        $('#cancel-customize-groups').click(function() {
            var form = $('#form-customize-groups').hide();
            form.find('.loading').hide();
            form.find('.errormsg').remove();
            return false;
        });
        $('#form-customize-groups').submit(function() {
            var form = $(this);
            form.find('.errormsg').remove();
            form.find('.loading').show();
            $.post(form.attr('action'), form.serialize(), function(response) {
                if (response.status == 'ok') {
                    $.wa.controller.contactAction([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
, 'user']);
                } else if (response.status == 'fail') {
                    form.find('.c-checkbox-menu-container').after($('<em class="errormsg">'+response.errors.join('<br />')+'</em>'));
                }
            }, 'json');
            return false;
        });
    <?php }?>

    // Delete user dialog
    $('#delete-user').click(function() {
        $.wa.dialogCreate('user-delete-dialog', {
            small: true,
            content: "<h2>Вы уверены?</h2><p>Контакт не будет удален, но пользователь больше не сможет входить в систему.</p>",
            buttons: $('<div></div>').append(
                    $('<input type="submit" class="button red" value="'+"Удалить аккаунт пользователя"+'">').click(function() {
                        $.post('?module=contacts&action=user&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
&a=delete', {nojoke: '1'}, function() {
                            // reload the tab
                            $.wa.controller.contactAction([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
]);
                            $.wa.controller.reloadSidebar();
                            $.wa.dialogHide();
                        });
                    })
                ).append(" или ").append(
                    $('<a href="#" class="inline-link" id="close-dialog-delete"><b><i>'+"отменить"+'</i></b></a>')
                        .click($.wa.dialogHide)
                )
        });
    });

    // Change password form
    $('#cancel-passwd-change').click(function() {
        var form = $('#form-edit-user-password').hide();
        form.find('input[type="password"]').removeClass('error').val('');
        form.find('.errormsg').remove();
        form.find('.loading').hide();
        return false;
    });
    $('#show-passwd-form').click(function() {
            $('#form-edit-user-password').toggle().find('input:visible:first').focus();
    });
    $('#form-edit-user-password').submit(function() {
        var form = $(this);
        form.find('input.error').removeClass('error');
        form.find('.errormsg').remove();
        var pass = $('#newpass').val();

        // do passwords match?
        if (pass !== $('#newpass-comfirm').val()) {
            form.find('input[type="password"]').addClass('error');
            $(this.confirm_password).after().after('<em class="errormsg">'+"Пароли не совпадают."+'</em>');
            return false;
        }

        form.find('.loading').show();
        $.post($.wa.contactEditor.passwdSaveUrl || form.attr('action'), form.serialize(), function(response) {
            if (response.status == 'ok') {
                form.hide();
                form.find('input[type="password"]').removeClass('error').val('');
                form.find('.errormsg').remove();
                form.find('.loading').hide();
            } else if (response.status == 'fail') {
                $(form[0].confirm_password).after('<em class="errormsg">'+response.errors.join('<br />')+'</em>');
            }
        }, 'json');
        return false;
    });

    //
    // Access control logic
    //
    $(function() {
        // apps data, including personal and group rights
        var apps = <?php echo json_encode($_smarty_tpl->tpl_vars['apps']->value);?>
;

        // true if user groups don't have any rights set up
        var gNoAccess = <?php echo $_smarty_tpl->tpl_vars['gNoAccess']->value;?>
;

        // Dialog to customize app access
        var openCustomizeDialog = function(cancelCallback) {
            if (typeof cancelCallback !== 'function') {
                cancelCallback = null;
            }
            var tr = $(this).parents('.c-ar-app-row');
            var app = apps[tr.find('select').attr('name')];

            $.wa.dialogCreate('c-ar-dialog', {
                url: '?module=rights&app='+app.id+'&id='+$.wa.contactEditor.contact_id,
                small: false,
                onload: function() {
                    var dialog = $(this);

                    // Change buttons
                    dialog.find('.dialog-buttons-gradient').empty()
                        .append(
                            $('<input type="submit" class="button green" value="Сохранить">').click(function() {
                                $(this).attr('disabled', true);
                                dialog.find('.loading').show();
                                var form = dialog.find('form');
                                $.post(form.attr('action'), form.serialize(), $.wa.dialogHide, 'json');
                            })
                        )
                        .append(' '+$_('or')+' ')
                        .append(
                            $('<a href="javascript:void(0)" class="inline-link"><b><i>отменить</i></b></a>').click(function() {
                                $.wa.dialogHide();
                                if (cancelCallback) {
                                    cancelCallback();
                                }
                            })
                        )
                        .append('<i class="icon16 loading" style="margin-left:16px;display:none;"></i>');
                },
                oncancel: cancelCallback
            });
            return false;
        };
        $('#c-access-rights-wrapper .customize-link').click(openCustomizeDialog);

        // Helper to show given element and fade slowly (default duration is 2 seconds)
        var blinkHint = function(el, duration) {
            $(el).stop().css('opacity', 1).show().animate({
                opacity: 0
            }, duration || 2000, function() {
                $(this).hide();
            });
        };

        // Helper to setup UI colors and everything for one app and save it via AJAX
        var updateApp = function(app, nosave) {
            if(!app) {
                return;
            }
            var tr = $('#c-ar-tr-'+app.id);

            // group access cannot be greater than personal access
            if (app.gaccess > app.access) {
                app.access = app.gaccess;
                tr.find('select').val(app.access);
            }

            if (!app.access) {
                // no access
                tr.find('.c-app-name span').attr('class', 'c-access-color-noaccess');
                tr.find('select').val(0);
                tr.find('.customize-link').hide();
                tr.find('.c-ar-tooltip').hide();
            } else if(app.access == 1) {
                // limited access
                tr.find('.c-app-name span').attr('class', 'c-access-color-limited');
                tr.find('select').val(1);
                // when saving, they're shown later, when customize dialog is open
                if (nosave) {
                    tr.find('.customize-link').show();
                    tr.find('.c-ar-tooltip').show();
                }
            } else { // app.access > 1
                // Full access
                tr.find('.c-app-name span').attr('class', 'c-access-color-full');
                tr.find('select').val(2);
                tr.find('.customize-link').hide();
                tr.find('.c-ar-tooltip').show();
            }

            if (!nosave) {
                tr.find('.loading').show();
                $('#c-access-rights-wrapper select').attr('disabled', true);
                $.post('?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                    app_id: app.id,
                    name: 'backend',
                    value: app.access
                }, function() {
                    $('#c-access-rights-wrapper select').attr('disabled', false);
                    tr.find('.loading').hide();
                    if (nosave !== 'sneaky') {
                        blinkHint(tr.find('.c-access-saved-hint'));
                    }

                    // if access rights are set to 'limited', open a customize dialog
                    if(app.access == 1) {
                        openCustomizeDialog.call(tr.find('.customize-link'), function() {
                            app.access = app.oldAccess;
                            updateApp(app, 'sneaky');
                        });
                        tr.find('.customize-link').show();
                        tr.find('.c-ar-tooltip').show();
                    }
                }, 'json');
            }
        };

        // Global admin status control logic
        var arToggle = $('#c-access-rights-toggle');
        var lastToggleValue = arToggle.val();
        var arToggleOnchange = function(nosave){
            $('#c-access-rights-hint-warning').hide();
            $('#c-access-rights-hint-customize').hide();
            var fullAccess;
            var newToggleValue = arToggle.val();
            switch(newToggleValue) {
                case 'remove':
                    if (gNoAccess) {
                        fullAccess = 0;
                        $('#c-access-rights-by-app').hide();
                        break;
                    }

                    arToggle.val(lastToggleValue || '0');
                    $('#c-access-rights-hint-warning').show();
                    return;
                case '0':
                    fullAccess = 0;
                    $('#c-access-rights-by-app').show();
                    break;
                case '1':
                    fullAccess = 1;
                    $('#c-access-rights-by-app').hide();
                    break;
            }

            // Reset personal app rights to match group rights
            for(var id in apps) {
                if (newToggleValue != lastToggleValue) {
                    apps[id].access = apps[id].gaccess;
                }
                updateApp(apps[id], true);
            }

            lastToggleValue = newToggleValue;

            if (!nosave) {
                var wr = $('#c-access-rights-wrapper');
                wr.children('.loading').show();
                $('#c-access-rights-wrapper select').attr('disabled', true);

                $.post('?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                    app_id: 'webasyst',
                    name: 'backend',
                    value: fullAccess ? 1 : 0
                }, function() {
                    $('#c-access-rights-wrapper select').attr('disabled', false);
                    wr.children('.loading').hide();
                    if (gNoAccess && newToggleValue == '0') {
                        $('#c-access-rights-hint-customize').show();
                    } else {
                        $('#c-access-rights-hint-warning').hide();
                        blinkHint(wr.children('.c-access-rights-hint.c-access-saved-hint'));
                    }
                });
            }
        };
        arToggleOnchange(true);
        arToggle.change(function() {
            arToggleOnchange();
        });

        // On select change update app access
        $('#c-access-rights-wrapper td select').change(function() {
            var self = $(this);
            var app = apps[self.attr('name')];
            var newAccess = parseInt(self.val());

            // personal access cannot be less than group access
            if (app.gaccess > newAccess) {
                self.val(app.access);
                self.parents('tr').find('.loading,.c-access-saved-hint').hide();
                self.parents('tr').find('.c-access-not-allowed-hint').show();
                return;
            }
            self.parents('tr').find('.c-access-not-allowed-hint').hide();
            app.oldAccess = app.access;
            app.access = newAccess;
            updateApp(app);
        });

        // Tooltips on info icons
        $('#c-access-rights-wrapper .c-ar-tooltip').tooltip({
            bodyHandler: function() {
                return $(this).parent().find('.c-ar-tooltip-html').html();
            },
            extraClass: "tooltip",
            noHideOnClick: true,
            showURL: false
        });
    });
<?php }?>
</script><?php }} ?>