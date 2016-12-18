<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:16:00
         compiled from "Z:\home\studio.my\webasyst\wa-system\page\templates\PageEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:321785255733026ba43-45069037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e036e2b88669fe477a92d21b8f33d2cf15a133' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-system\\page\\templates\\PageEdit.html',
      1 => 1380116707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321785255733026ba43-45069037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'options' => 0,
    'k' => 0,
    'v' => 0,
    'url' => 0,
    'preview_hash' => 0,
    'page_route' => 0,
    'params' => 0,
    'n' => 0,
    'vars' => 0,
    'p' => 0,
    'page_edit' => 0,
    '_' => 0,
    'other_params' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'upload_url' => 0,
    'lang' => 0,
    'page_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573308eac99_68551199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573308eac99_68551199')) {function content_525573308eac99_68551199($_smarty_tpl) {?><div class="wa-page-editor">
<form id="wa-page-form" method="post" action="?module=pages&action=save<?php if ($_smarty_tpl->tpl_vars['page']->value){?>&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } ?>
    <div class="block wa-page-gray-toolbar">
        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
        <div class="float-right ie-menu-h-fix">
            <ul class="menu-h">
                <li><a href="#" class="inline-link" id="wa-page-settings-toggle"><i class="icon16 edit"></i><b><i>Настройки страницы</i></b></a></li>
                <li><a class="wa-page-delete" href="?module=pages&action=delete"><i class="icon16 delete"></i>Удалить</a></li>
            </ul>
        </div>
        <script type="text/javascript">
            $(".wa-page-delete").click(function () {
                if (confirm('Будет удалена вся страница. Продолжить?')) {
                    $.post($(this).attr('href'), { id:<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
}, function () {
                        
                        var li = $("#page-<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
");
                        var prev = li.prevAll('.dr:first');
                        if (prev.length > 0) {
                            location.href = prev.addClass('selected').find('a').attr('href');
                            li.remove();
                        } else {
                            next = li.nextAll('.dr:first');
                            if (next.length > 0) {
                                location.href = next.addClass('selected').find('a').attr('href');
                                li.remove();
                            } else {
                                location.reload(true);
                            }
                        }
                    }, "json");
                }
                return false;
            });
        </script>
        <?php }?>
        <div>
            <h2><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?> <span class="wa-page-draft">черновик</span><?php }?><?php }else{ ?>Новая страница<?php }?></h2>
            <div class="wa-page-urls small">
                <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
" title="Предпросмотр" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
" target="_blank"><i class="icon10 new-window"></i></a>
                    <?php }elseif($_smarty_tpl->tpl_vars['page']->value['domain']&&$_smarty_tpl->tpl_vars['page']->value['route']!==null){?>
                        <?php $_smarty_tpl->tpl_vars['page_route'] = new Smarty_variable(waRouting::clearUrl($_smarty_tpl->tpl_vars['page']->value['route']), null, 0);?>
                        <a style="text-decoration: line-through;" href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
" title="Предпросмотр" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
</a>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
"><i class="icon10 new-window"></i></a>
                    <?php }else{ ?>
                    Страница не опубликована, потому что не прикреплена ни к одному поселению приложения (правилу маршрутизации). Перетащите страницу из секции «Неопубликованные», чтобы подключить ее к существующему правилу маршрутизации.
                    <?php }?>
                <?php }?>
                <br />
            </div>
        </div>
        <div id="wa-page-settings" style="<?php if ($_smarty_tpl->tpl_vars['page']->value){?>display: none;<?php }?>">
            <div class="fields form">
                <div class="field-group">
                    <div class="field">
                        <div class="name bold">Название страницы</div>
                        <div class="value">
                            <input type="text" class="bold large" name="info[name]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="value wa-ibutton-checkbox">
                            <ul class="menu-h">
                                <li><span id="wa-page-v-open-label" class="wa-page-gray">Черновик</span></li>
                                <li><input type="checkbox" id="wa-page-v" name="info[status]" <?php if (!$_smarty_tpl->tpl_vars['page']->value||$_smarty_tpl->tpl_vars['page']->value['status']){?>checked="checked"<?php }?> /></li>
                                <li><span id="wa-page-v-private-label">Опубликовано</span></li>
                            </ul>

                        </div>
                    </div>

                    <div class="field wa-page-url">
                        <div class="name bold">URL страницы</div>
                        <div class="value wa-page-app-url">
                            <input type="text" name="info[url]" class="bold" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <div class="value small wa-page-app-url">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
<span class="wa-page-url-part"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></span>
                        </div>
                        <?php }else{ ?>
                        <div class="value small wa-page-app-url">
                            <span style="color: red;">Страница не опубликована, потому что не прикреплена ни к одному поселению приложения (правилу маршрутизации). Перетащите страницу из секции «Неопубликованные», чтобы подключить ее к существующему правилу маршрутизации.</span>
                        </div>
                        <?php }?>
                    </div>

                </div>

                <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                <a id="wa-page-advanced-params-link" href="#" class="hint inline-link"><b><i>еще</i></b><i class="icon10 darr"></i></a>
                <div id="wa-page-advanced-params" style="display:none">
                    <?php }?>
                    <div class="field-group">
                        <div class="field">
                            <div class="name"><strong class="title">Заголовок</strong> <span class="hint">&lt;title&gt;</span></div>
                            <div class="value"><input type="text" name="info[title]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="bold" /></div>
                        </div>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                        <div class="field">
                            <div class="name"><?php echo $_smarty_tpl->tpl_vars['vars']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['n']->value=='description'){?>
                            <div class="value"><textarea name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
                            <?php }else{ ?>
                            <div class="value"><input type="text" name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                            <?php }?>
                        </div>
                        <?php } ?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['page_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }?>
                    </div>

                    <div class="field">
                        <div class="name">Дополнительные параметры страницы</div>
                        <div class="value">
                            <textarea name="other_params"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php } ?><?php }?></textarea><br />
                            <span class="hint">Необязательный набор параметров вида <em>key=value</em>, к значениям которых можно обращаться в шаблоне page.html или в содержимом текущей страницы как <em>&#123;$page.key&#125;</em>. Каждая пара key=value должна быть указана на отдельной строке. <a href="http://www.webasyst.ru/developers/docs/features/page-parameters/" target="_blank">Помощь</a> <i class="icon10 new-window"></i></span>
                        </div>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                </div>
                <script type="text/javascript">
                    $("#wa-page-advanced-params-link").click(function () {
                        $("#wa-page-advanced-params").show();
                        $(this).remove();
                        return false;
                    });
                </script>
                <?php }?>
            </div>
            <br clear="left" />
        </div>
    </div>
    <div class="wa-editor-core-wrapper">
        <ul class="wa-page-wysiwyg-html-toggle">
            <li><a id="wysiwyg" href="#">Визуальный редактор</a></li>
            <li class="selected"><a id="html" href="#">HTML</a></li>
        </ul>
        <div style="clear:both">
            <textarea style="display:none" id="wa-page-content" name="info[content]"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
            <div class="ace">
                <div id="wa-ace-editor-container"></div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['options']->value['save_panel']){?>
    <div class="wa-page-save-panel block bordered-top">
        <div class="wa-dropdown">
            <div class="wa-drop-link">
                <a class="inline-link" id="wa-editor-help-link" href="#">
                    <i class="icon16 cheatsheet"></i><b><i>Шпаргалка</i></b>
                    <i class="icon10 uarr no-overhanging"></i>
                </a>
                <div id="wa-editor-help" class="wa-dropdown-block"></div>
                <script type="text/javascript">
                    $("#wa-editor-help-link").click(function () {
                        if ($("#wa-editor-help").is(":visible")) {
                            $("#wa-editor-help").hide();
                            return false;
                        }
                        $("#wa-editor-help").load('?module=pages&action=help', "app=<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
&id=<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>", function () {
                            $(this).show();
                            var f = function (e) {
                                if ($(e.target).attr('id') == 'wa-editor-help' || $(e.target).parents('#wa-editor-help').length) {
                                    $(document).one('click', f);
                                } else {
                                    $("#wa-editor-help").hide();
                                }
                            };
                            $(document).one('click', f);
                        });
                        return false;
                    });

                    $("#wa-editor-help").on('click', "div.fields a.inline-link", function () {
                        var el = $(this).find('i');
                        if (el.children('b').length) {
                            el = el.children('b');
                        }
                        if ($(".el-rte").length && $(".el-rte").is(':visible')) {
                            try {
                                $("#wa-page-content").elrte()[0].elrte.selection.insertHtml(el.text());
                            } catch (e) {}
                        } else {
                            wa_editor.insert(el.text());
                        }
                        return false;
                    });
                </script>
            </div>
        </div>
        
        <input id="wa-page-button" type="submit" class="button green" value="Сохранить" />
        <em class="hint">Ctrl + S</em>
        <span id="wa-editor-status" style="margin-left: 25px; display: none"></span>

    </div>
    <?php }?>
</form>
<div class="clear"></div>
</div>

<script type="text/javascript">
    var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
    var wa_app = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
";

    $(function () {
        <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
            document.title = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
";
            <?php }else{ ?>
            document.title = "Новая страница — <?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
";
            <?php }?>
        <?php }?>
        waEditorInit({
            upload_url: "<?php echo $_smarty_tpl->tpl_vars['upload_url']->value;?>
",
            lang: "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
        });

        $("div.wa-page-app-url input[type=text]").keyup(function () {
            $("div.wa-page-app-url span.wa-page-url-part").html($(this).val());
        });

        var iButtonInit = function () {
            $("#wa-page-v").iButton({
                labelOn: "",
                labelOff: "",
                classContainer: 'ibutton-container mini'
            });
        };
        if ($("#wa-page-settings").is(":visible")) {
            setTimeout(iButtonInit, 200);
        } else {
            $("#wa-page-settings-toggle").one('click', function () {
                setTimeout(iButtonInit, 100);
            });
        }
        var status_check = function(item) {
            if ($(item).is(':checked')) {
                $('#wa-page-v-open-label').addClass('wa-page-gray');
                $('#wa-page-v-private-label').removeClass('wa-page-gray');
            } else {
                $('#wa-page-v-open-label').removeClass('wa-page-gray');
                $('#wa-page-v-private-label').addClass('wa-page-gray');
            }
        };
        status_check($('#wa-page-v'));
        $('#wa-page-v').change(function(){
            $('#wa-page-button').removeClass('green').addClass('yellow');
            status_check(this);
        });

        $('#wa-page-settings-toggle').click(function(){
            $('#wa-page-settings').toggle();
            return false;
        });

        <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
            $("#wa-page-settings input:first").focus();
            $('#wa-page-settings input[name="info[name]"]').blur(function () {
                if (!$("#wa-page-form-translit").length) {
                    $("#wa-page-form").append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
                }
                var url = $('#wa-page-settings input[name="info[url]"]');
                if ($(this).val() && !url.val()) {
                    $.post("?module=pages&action=translit", { str: $(this).val()}, function (response) {
                        $("#wa-page-form-translit").remove();
                        if (response.status == 'ok') {
                            if (!url.val()) {
                                url.val(response.data.str);
                            }
                        }
                    }, "json");
                }
            });
        <?php }?>

        $("#wa-page-form").submit(function () {
            if ($('#wa-page-settings input[name="info[name]"]').is(":focus")) {
                if (!$("#wa-page-form-translit").length) {
                    $("#wa-page-form").append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
                }
            }
            waEditorUpdateSource();
            var form = $(this);
            var li = $(".block-pages ul li.selected");
            $("#wa-editor-status").html("<i class='icon16 loading'></i> Сохранение...").fadeIn("slow");
            $.post(form.attr('action'), form.serialize(), function (response) {
            if (response.status == 'ok') {
                $(".error").removeClass('error');
                $("#wa-editor-status").html('<i class="icon16 yes"></i> Сохранено').fadeOut('slow');
                $('#wa-page-button').removeClass('yellow').removeClass('red').addClass('green');
                var p = response.data;
                if (!p.status) {
                    p.name += ' <span class="wa-page-draft">черновик</span>';
                }
                var html = $('<li id="page-' + p.id + '" class="dr selected">' +
                '<a class="wa-page-link" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
' + p.id + '">' +
                '<span class="count"><i class="icon10 add wa-page-add"></i></span>' +
                '<i class="icon16 notebook"></i>' + p.name + ' <span class="hint">/' + p.full_url +'</span>' + '</a></li>');
                if (p.add) {
                    li.replaceWith(html);
                } else {
                    $("#page-" + p.id).children('a.wa-page-link').replaceWith($(html).find('a.wa-page-link'));
                    $("#page-" + p.id + ' > ul li span.hint').each(function () {
                        $(this).text('/' + p.full_url + (p.full_url.length > 0 && p.full_url.substr(-1) != '/' ? '/' : '') + $(this).text().substr(p.old_full_url.length + 1));
                    });
                }
                if (response.data.add) {
                    waLoadPage(p.id);
                } else {
                    $(".wa-page-editor h2").html(p.name);
                }
                <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                var page_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
' + p.url;
                <?php }elseif(isset($_smarty_tpl->tpl_vars['page_route']->value)){?>
                var page_url = 'http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
' + p.full_url;
                <?php }?>

                if ($(".wa-page-urls a").length) {
                    $(".wa-page-urls a").attr('href', page_url + '?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
');
                    $(".wa-page-urls a:first").html(page_url);
                }
            } else if (response.status == 'fail') {
                if ($.isArray(response.errors)) {
                    var e = response.errors[0];
                    $(response.errors[1]).addClass('error');
                } else {
                    var e = response.errors;
                }
                $("#wa-editor-status").html('<b style="color:red">' + (e ? e : $_('An error occurred while saving')) + '</b>');
                $('#wa-page-button').removeClass('yellow').removeClass('green').addClass('red');
            }
            }, "json");
            return false;
        });
    });
</script>

<?php }} ?>