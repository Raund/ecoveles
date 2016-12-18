<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:18:22
         compiled from "Z:\home\studio.my\webasyst\wa-apps\contacts\templates\actions\contacts\ContactsInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:24685525573be4a1c32-32873833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa032c3c572b099911f12ff13bd03455a4b85f61' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\contacts\\templates\\actions\\contacts\\ContactsInfo.html',
      1 => 1380203326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24685525573be4a1c32-32873833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'readonly' => 0,
    'photo_editor_url' => 0,
    'photo_upload_url' => 0,
    'own_profile' => 0,
    'top' => 0,
    'top_field' => 0,
    'superadmin' => 0,
    'versionFull' => 0,
    'admin' => 0,
    'limited_own_profile' => 0,
    'contact_create_time' => 0,
    'author' => 0,
    'links' => 0,
    'wa_view' => 0,
    'current_user_id' => 0,
    'limitedCategories' => 0,
    'save_url' => 0,
    'password_save_url' => 0,
    'tab' => 0,
    'contactFields' => 0,
    'fieldValues' => 0,
    'history' => 0,
    'photo_editor_uploaded_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573be8b5f23_00050893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573be8b5f23_00050893')) {function content_525573be8b5f23_00050893($_smarty_tpl) {?><div class="contacts-background">
    <div class="block padded c-core-header" style="display:none">
        <a href="javascript:void(0)" id="c-e-last-view" class="no-underline"></a>
    </div>
    <!-- content -->
    <div class="block not-padded c-core-content">
        <div class="block">
            
            <div id="contact-top-block" class="wa-box" style="display:none"></div>

            <div class="profile image96px" style="min-height: 120px">
                
                <div class="photo image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['contact']->value->getPhoto();?>
" alt="<?php if ($_smarty_tpl->tpl_vars['contact']->value['photo']){?>Фото<?php }else{ ?>Нет фотографии<?php }?>" />
                    <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)){?>
                        <div class="wa-contact-photo-buttons">
                            <div class="photo-change-link">
                                <a href="<?php echo ifset($_smarty_tpl->tpl_vars['photo_editor_url']->value,"#/contact/photo/".((string)$_smarty_tpl->tpl_vars['contact']->value->getId()));?>
">Изменить фото</a>
                            </div>
                            <div class="photo-upload-form" style="display:none">
                                <div id="photo-iframe-wrapper" style="display:none"><iframe id="photo-iframe" name="sendfile" width="1" height="1"></iframe></div>
                                <form id="imageform" target="sendfile" action="<?php echo ifset($_smarty_tpl->tpl_vars['photo_upload_url']->value,'?module=photo&action=tmpimage');?>
" method="post" enctype="multipart/form-data">
                                    <div class="c-image-form-file">
                                        Загрузить фотографию (JPG, GIF или PNG):
                                        <input id="fileselect" type="file" name="photo" />
                                        <i id="photo-loading-image" class="icon16 loading" style="margin-left:16px;display:none"></i>
                                        <input id="photo-id-input" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->getId();?>
">
                                        или <a href="#" onclick="$('.wa-contact-photo-buttons .photo-upload-form').hide();$('.wa-contact-photo-buttons .photo-change-link').show();return false;">отменить</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="details">
                    <ul class="menu-h c-actions">
                        <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)){?>
                            <li id="c-editor-edit-link"><a href="javascript:void(0);" id="edit-contact">
                                <i class="icon16 edit"></i> Редактировать контакт</a>
                            </li>
                        <?php }?>
                        <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                            <li>
                                <a href="javascript:void(0);" id="delete-contact"><i class="icon16 delete"></i> Удалить</a>
                            </li>
                        <?php }?>
                    </ul>

                    <h1 id="contact-fullname"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                    <p class="status"></p>
                    <ul id="contact-info-top" class="menu-v compact">
                        <?php if ($_smarty_tpl->tpl_vars['top']->value){?>
                            <?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?>
                                <li><?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!='im'){?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['top_field']->value['value'];?>
</li>
                            <?php } ?>
                        <?php }?>
                    </ul>

                </div>
            </div>
        </div>

        
        <ul class="tabs" id="c-info-tabs">
            <li id="t-contact" class="selected"><a href="javascript:void(0)">Контакт</a></li>

            
            <?php if ($_smarty_tpl->tpl_vars['superadmin']->value||!empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                <li id="t-user">
                    <a href="javascript:void(0)">
                        <?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_user']){?>
                            Создать аккаунт пользователя
                        <?php }else{ ?>
                            Пользователь
                        <?php }?>
                    </a>
                </li>
            <?php }?>
        </ul>

        
        <div id="tc-contact" class="tab-content">
            <div class="block double-padded">
                <?php if ($_smarty_tpl->tpl_vars['versionFull']->value&&$_smarty_tpl->tpl_vars['admin']->value){?>
                    <ul class="menu-h c-actions">
                        <li><a href="#/fconstructor/"><i class="icon16 fav"></i> Конструктор полей</a></li>
                    </ul>
                <?php }?>
                <div class="fields">
                    <div id="contact-info-block">
                        <!-- Contents generated by JS later -->
                    </div>

                    
                    <?php if (empty($_smarty_tpl->tpl_vars['limited_own_profile']->value)){?>
                        <ul class="hint" style="list-style-type: none; margin: 30px 0 0 0">
                            <li>Номер контакта: <?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
</li>
                            <li>Добавлен: <?php echo $_smarty_tpl->tpl_vars['contact_create_time']->value;?>
</li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['author']->value)){?>
                                <li>Автор: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['author']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <?php }?>
                            <li>Метод: <?php echo $_smarty_tpl->tpl_vars['contact']->value['create_method'];?>
</li>
                            <li>Приложение: <?php echo $_smarty_tpl->tpl_vars['contact']->value['create_app_id'];?>
</li>
                        </ul>
                    <?php }?>
                </div>
                <div class="clear-left"></div>
            </div>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['superadmin']->value||!empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
            <div id="tc-user" class="tab-content hidden">
                <div class="block double-padded">
                    <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/contacts/ContactsUser.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
            </div>
        <?php }?>

        

        <?php if (!empty($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['wa_view']->value->templateExists("templates/actions/contacts/ContactsInfoTabs.html")){?>
            <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/contacts/ContactsInfoTabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>

        <div class="clear-left"></div>
    </div>
</div>

<script type="text/javascript">
    // 'Back to' link
    if($.wa.controller.lastView && $.wa.controller.lastView.title) {
        if (window.location.hash.indexOf('/no-bc') < 0) {
            $('#c-e-last-view')
                .text($.wa.controller.lastView.title)
                .prepend('<i class="icon10 larr"></i>')
                .attr('href', $.wa.controller.lastView.hash || '#/')
                .parent()
                .show();
        } else {
            $('#c-e-last-view').parent().show().hide(); // chromium bug workaround O_o
        }
    }

    var edit_mode = window.location.hash.indexOf('/contact/edit') >= 0;
    var delete_mode = !edit_mode && window.location.hash.indexOf('/contact/delete') >= 0;

    // attach tab controls to tabs
    $('#c-info-tabs li').each(function(k, tab) {
        tab = $(tab);
        tab.click(function() {
            $.wa.controller.switchToTab(tab, function() {
                var id = tab.attr('id').substr(2);
                var hash = $.wa.controller.cleanHash('#/contact/' + $.wa.contactEditor.contact_id + '/' + (id == 'contact' ? '' : id+'/'));
                if (id == 'contact' || $.wa.controller.cleanHash().indexOf(hash) != 0) {
                    if (hash != $.wa.controller.cleanHash()) {
                        $.wa.controller.stopDispatch(1);
                        $.wa.setHash(hash);
                    }
                }
                var input = $('#tc-'+id+' input:visible')[0];
                if (input) {
                    input.focus();
                }
            });
        });
    });

    $.wa.contactEditor.contact_id = <?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
;
    $.wa.contactEditor.current_user_id = <?php echo $_smarty_tpl->tpl_vars['current_user_id']->value;?>
;
    $.wa.contactEditor.contactType = '<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_company']){?>company<?php }else{ ?>person<?php }?>';
    $.wa.contactEditor.limitedCategories = <?php echo $_smarty_tpl->tpl_vars['limitedCategories']->value;?>
;
    $.wa.contactEditor.justCreated = false;
    <?php if (!empty($_smarty_tpl->tpl_vars['save_url']->value)){?>
        $.wa.contactEditor.saveUrl = "<?php echo $_smarty_tpl->tpl_vars['save_url']->value;?>
";
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['password_save_url']->value)){?>
        $.wa.contactEditor.passwdSaveUrl = "<?php echo $_smarty_tpl->tpl_vars['password_save_url']->value;?>
";
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['tab']->value){?>
        // Switch to active tab
        $('#t-<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
').click();
    <?php }?>

    $.wa.contactEditor.initFactories(<?php echo json_encode($_smarty_tpl->tpl_vars['contactFields']->value);?>
);
    $.wa.contactEditor.initAllEditors();
    $.wa.contactEditor.initFieldEditors(<?php echo json_encode($_smarty_tpl->tpl_vars['fieldValues']->value);?>
);
    $.wa.contactEditor.initContactInfoBlock('view');

    <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)){?>
        // Edit button onclick
        $('#edit-contact').click(function() {
            $.wa.controller.switchToTab('contact');
            $.wa.contactEditor.switchMode('edit');
            return false;
        });
        if (edit_mode) {
            $.wa.contactEditor.switchMode('edit');
        }
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
        // AJAX checking dialog before user deletion
        $("#delete-contact").click(function () {
            $.wa.controller.contactsDelete([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
]);
            return false;
        });
        if (delete_mode) {
            $.wa.controller.contactsDelete([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
]);
        }
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['history']->value)&&$_smarty_tpl->tpl_vars['history']->value){?>
        // Update history
        $.wa.history.updateHistory(<?php echo json_encode($_smarty_tpl->tpl_vars['history']->value);?>
);
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['contact']->value['photo']){?>
        // show photo upload form
        $(".wa-contact-photo-buttons .photo-change-link a").click(function() {
            $(".wa-contact-photo-buttons .photo-upload-form").show();
            $(".wa-contact-photo-buttons .photo-change-link").hide();
            return false;
        });

        // auto submit for file uploading form
        $('#fileselect').change(function(){
            // show 'loading...' image
            $('#photo-loading-image').show();
            $('#imageform').submit();
        });

        // upload handler
        $('iframe#photo-iframe').load(function(){
            var url = $('iframe#photo-iframe').contents().find("body").html();
            if (!url) {
                // this is the initial iframe load event, we don't need it
                return;
            }

            $('#photo-loading-image').hide();
            if (url.substr(0, 6) == 'error:') {
                alert('Error uploading image: '+url.substr(6));
                $(".wa-contact-photo-buttons .photo-upload-form").hide();
                $(".wa-contact-photo-buttons .photo-change-link").show();

                // Reset the file upload selector
                $('#imageform')[0].reset();
                return;
            }

            <?php if (!empty($_smarty_tpl->tpl_vars['photo_editor_uploaded_url']->value)){?>
                window.location = "<?php echo $_smarty_tpl->tpl_vars['photo_editor_uploaded_url']->value;?>
";
            <?php }else{ ?>
                $.wa.setHash('#/contact/photo/<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
/uploaded/');
            <?php }?>
        });
    <?php }?>
</script>

<?php }} ?>