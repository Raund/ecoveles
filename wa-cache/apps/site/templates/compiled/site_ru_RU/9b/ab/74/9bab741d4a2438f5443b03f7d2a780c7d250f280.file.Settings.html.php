<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:16:42
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\templates\actions\settings\Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:25855255735aa35a79-12938646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bab741d4a2438f5443b03f7d2a780c7d250f280' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\templates\\actions\\settings\\Settings.html',
      1 => 1375099748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25855255735aa35a79-12938646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
    'domain_id' => 0,
    'title' => 0,
    'domain_apps_type' => 0,
    'domain_apps' => 0,
    'row' => 0,
    'classes' => 0,
    'c' => 0,
    'style' => 0,
    'wa_url' => 0,
    'google_analytics' => 0,
    'head_js' => 0,
    'favicon' => 0,
    'favicon_message' => 0,
    'robots' => 0,
    'robots_message' => 0,
    'auth_apps' => 0,
    'auth_config' => 0,
    'app' => 0,
    'auth_adapters' => 0,
    'adapter_id' => 0,
    'adapter' => 0,
    'control_name' => 0,
    'control_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255735b07c4c6_19160895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255735b07c4c6_19160895')) {function content_5255735b07c4c6_19160895($_smarty_tpl) {?><script type="text/javascript">
    document.title = 'Настройка сайта — ' + <?php echo json_encode($_smarty_tpl->tpl_vars['domain']->value);?>
;
</script>
<div class="content">
<div class="s-editor s-white">
<div class="block s-grey-toolbar">
	<div class="float-right">
		<ul class="menu-h">
			<li><a id="s-delete" href="#"><i class="icon16 delete"></i>Удалить сайт</a></li>
		</ul>
	</div>

	<h4 style="margin-left: 4px; margin-top:2px;">Настройки</h4>
</div>

<div>
	<div class="block double-padded fields form">
		<form target="s-settings-iframe" id="s-settings-form" method="post" action="?module=settings&action=save&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
" enctype="multipart/form-data">

		<div class="field-group">
		<div class="field">
			<div class="name bold">Адрес сайта</div>
			<div class="value">
				<strong>http://</strong><input type="text" class="bold" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><br />
				<span class="hint">
					Действующий адрес (URL), который ведет на данную установку фреймворка Webasyst.<br />
					Например, <em>domain.ru</em>, если Webasyst устанавливается в корневую директорию домена domain.ru, или <em>domain.ru/wa</em>, если Webasyst устанавливается в поддиректорию /wa/ домена domain.ru. В конце URL добавлять косую черту (/) не нужно.</span>
			</div>
		</div>
		<div class="field">
			<div class="name bold">Название сайта</div>
			<div class="value no-shift">
				<input id="s-domain-title" type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['title']->value){?>checked="checked"<?php }?> /> <label for="s-domain-title">Совпадает с адресом сайта</label>
				<div <?php if (!$_smarty_tpl->tpl_vars['title']->value){?>style="display:none"<?php }?>>
					<input type="text" class="bold" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><br />
					<span class="hint">Псевдоним сайта, используемый в меню выбора сайтов (в верхнем левом углу) и в качестве текста ссылки в меню навигации фронтенда <em>$wa->apps()</em>.</span>
				</div>
			</div>
		</div>
		<div class="field">
			<div class="name">
				<strong>&#123;$wa-&gt;apps()&#125; меню</strong>
				<br />
				<span class="hint"> Массив, который определяет основное меню навигации на сайте</span>
			</div>
			<div class="value no-shift">
				<input type="radio" name="wa_apps_type" <?php if (!$_smarty_tpl->tpl_vars['domain_apps_type']->value){?>checked<?php }?> id="waapps-auto" value="0" /><label for="waapps-auto"> Все приложения <span class="hint">Меню навигации будет сформировано автоматически согласно правилам маршрутизации этого сайта</span></label>
			</div>
			<div class="value">
				<input type="radio" name="wa_apps_type" <?php if ($_smarty_tpl->tpl_vars['domain_apps_type']->value){?>checked<?php }?> id="waapps-select" value="1" /><label for="waapps-select"> Настроить</label>
				<div <?php if (!$_smarty_tpl->tpl_vars['domain_apps_type']->value){?>style="display:none"<?php }?>>
                    <table id="s-wa-apps" class="zebra s-settings-apps">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domain_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr>
	   					   <td class="s-app"><a style="display:inline" href="#" onclick="return false"><i class="icon16 sort"></i></a>
						      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
						      <input style="display:none" type="text" name="apps[name][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
						   </td>
						   <td>
						      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
</span>
						      <input style="display:none" type="text" name="apps[url][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" />
						   </td>
    		               <td class="s-actions">
			                    <a href="#" class="s-apps-edit" title="Редактировать"><i class="icon16 edit"></i></a>
			                    <a href="#" class="s-apps-delete" title="Удалить"><i class="icon16 delete"></i></a>
			               </td>
						</tr>
						<?php } ?>
					</table>
					<div style="display:none; float: right;"><em class="hint">После завершения редактирования не забудьте нажать на кнопку «Сохранить»</em></div>
					<a href="#" class="inline-link" id="s-apps-add"><i class="icon16 add"></i>
					   <b><i>Добавить ссылку</i></b>
					</a>

				</div>
			</div>
		</div>
		</div>

		<div class="field-group">
		<div class="field">
			<div class="name">Фон</div>
			<div class="value">
				<ul class="menu-h s-site-background-selector">
                    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(array('white','grey','blue','yellow','red','green','purple'), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <li class="s-<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><a href="javascript:void(0)"><input type="radio" name="background" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['style']->value==$_smarty_tpl->tpl_vars['c']->value){?> checked="checked"<?php }?>></a></li>
                    <?php } ?>
                    <li style="">
                        <a href="javascript:void(0)" style="margin-right: 5px;<?php if (substr($_smarty_tpl->tpl_vars['style']->value,0,1)=='.'){?>background:url(<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/site/background/<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
)<?php }?>">
                            <input name="background" type="radio" value="<?php if (substr($_smarty_tpl->tpl_vars['style']->value,0,1)=='.'){?><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
<?php }?>"<?php if (substr($_smarty_tpl->tpl_vars['style']->value,0,1)=='.'){?> checked="checked"<?php }?>>
                        </a>
                        <span class="small">Загрузить:</span>
                        <input id="background_file" type="file" name="background_file">
                    </li>
                </ul>
                <script type="text/javascript">
                    $(".s-site-background-selector a").click(function (e) {
                        if (e.target.tagName != 'INPUT') {
                            $(this).children('input').click();
                        }
                    });
                    $(".s-site-background-selector input:radio").click(function (e) {
                        var c = $(this).val();
                        if (c) {
                            if (c.substr(0, 1) == '.') {
                                $("#wa").removeAttr('class');
                                $("#wa").css('background', 'url(<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/site/background/<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
' + c + ')');
                            } else {
                                $("#wa").removeAttr('style');
                                $("#wa").attr('class', 's-' + c);
                            }
                        } else {
                            $("#wa").removeAttr('class');
                        }
                        return true;
                    });
                    $("#background_file").change(function () {
                       $(this).parent().children('a').click();
                    });
                </script>
				<span class="hint">Фон используется для индивидуальной настройки бекенда приложения «Сайт» — это удобно, если вы управляете несколькими сайтами внутри одной установки фреймворка Вебасист. Выбранный фон не виден во фронтенде.</span>
			</div>
		</div>
        <div class="field">
            <div class="name">Пользовательский JavaScript-код внутри &lt;head&gt;</div>
            <div class="value">
            	Google Analytics Property ID: 
                <input type="text" name="google_analytics" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_analytics']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <br />
                <span class="hint">Например, <strong>UA-123456-1</strong><br />Если вы используете <a href="https://www.google.com/analytics/">Google Analytics</a> для отслеживания статистики посещений и конверсии вашего сайта, то вместо внедрения кода Google Analytics вручную достаточно просто ввести здесь ваш Google Analytics Property ID. Правильный код Google Analytics автоматически вставится во все темы оформления всех приложений перед закрывающим тегом &lt;/head&gt;.</span>
                <br /><br />
            </div>
            <div class="value no-shift">
            	Дополнительный JavaScript-код для вставки перед закрывающим тегом &lt;/head&gt;:<br />
                <textarea name="head_js" placeholder="&lt;script&gt;&lt;/script&gt;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['head_js']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><br />
                <span class="hint">
                	&lt;/head&gt;
                </span>
            </div>
        </div>
        </div>

        <div class="field-group">
        <div class="field">
            <div class="name">Favicon</div>
            <div class="value">
                <i class="icon16 favicon"
                    style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
');"></i>
                Загрузить другую иконку (.ico, 16x16): <input name="favicon" type="file" />
                <?php if (isset($_smarty_tpl->tpl_vars['favicon_message']->value)){?><br /><span class="small" style="color: #f00;"><?php echo $_smarty_tpl->tpl_vars['favicon_message']->value;?>
</span><?php }?>
            </div>
        </div>
        <div class="field">
            <div class="name">robots.txt</div>
            <div class="value">
                <textarea name="robots"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['robots']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <br />
                <?php if (isset($_smarty_tpl->tpl_vars['robots_message']->value)){?><span class="small" style="color: #f00;"><?php echo $_smarty_tpl->tpl_vars['robots_message']->value;?>
</span><?php }else{ ?><span class="hint">Содержимое файла robots.txt этого сайта</span><?php }?>
            </div>
        </div>
        </div>

        <div class="field-group">
            <div class="field">
                <div class="name">Авторизация</div>
                <div class="value no-shift">
                    <input id="s-auth-enabled" name="auth_enabled" type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['auth_apps']->value){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['auth_config']->value['auth']){?>checked="checked"<?php }?> />
                    <label for="s-auth-enabled">Включить формы регистрации и входа для этого сайта</label>
                    <?php if ($_smarty_tpl->tpl_vars['auth_apps']->value){?>
                    <div id="s-auth-app" <?php if (!$_smarty_tpl->tpl_vars['auth_config']->value['auth']){?> style="display:none"<?php }?>>
                        <br>
                        Выберите приложение, которое будет отвечать за функционал форм регистрации и входа для этого сайта:
                        <ul class="menu-v">
                            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
                            <li>
                                <input id="s-auth-app-<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
" type="radio" name="auth_app" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['app']->value['id']==$_smarty_tpl->tpl_vars['auth_config']->value['app']){?>checked="checked"<?php }?>>
                                &nbsp;
                                <label for="s-auth-app-<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
"><img class="s-app16x16icon-menu-v" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][16];?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                            </li>
                            <?php } ?>
                        </ul>
                        <br>
                    <input id="s-auth-captcha" name="auth_captcha" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['auth_config']->value['signup_captcha']){?>checked="checked"<?php }?> />
                    <label for="s-auth-captcha">Требовать ввод капчи (captcha) в форме регистрации</label>
                    
                    <hr>
                    
                    <input id="s-auth-adapters" name="auth_adapters" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'])){?>checked="checked"<?php }?>>
                    <label for="s-auth-adapters">
                    	Авторизация через внешние сервисы
                    	<span class="hint">Позволяет посетителям вашего сайта быстро зарегистрироваться или авторизоваться через аккаунты в популярных сторонних сервисах, например, через «Фейсбук» или «Твиттер». <a href="http://www.webasyst.ru/developers/docs/auth/auth-adapters/" target="_blank">Документация по настройке</a> <i class="icon10 new-window"></i></span>
                    </label>
                    <br>
                    <div id="s-auth-adapters-list" style="padding-left: 20px;<?php if (empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'])){?>display:none<?php }?>">
                        <ul class="menu-v">
                        <?php  $_smarty_tpl->tpl_vars['adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adapter']->_loop = false;
 $_smarty_tpl->tpl_vars['adapter_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adapter']->key => $_smarty_tpl->tpl_vars['adapter']->value){
$_smarty_tpl->tpl_vars['adapter']->_loop = true;
 $_smarty_tpl->tpl_vars['adapter_id']->value = $_smarty_tpl->tpl_vars['adapter']->key;
?>
                        <li>
                            <input class="adapter" id="s-auth-adapter-<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" name="adapter_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?>checked="checked"<?php }?>>
                            <label for="s-auth-adapter-<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
">
                                <img style="vertical-align: middle; padding-bottom: 3px;" alt="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getIcon();?>
">
                                <?php echo $_smarty_tpl->tpl_vars['adapter']->value->getName();?>

                            </label>
                            <div class="adapter-controls"<?php if (empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?> style="display:none"<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['control_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['control_name']->_loop = false;
 $_smarty_tpl->tpl_vars['control_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adapter']->value->getControls(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['control_name']->key => $_smarty_tpl->tpl_vars['control_name']->value){
$_smarty_tpl->tpl_vars['control_name']->_loop = true;
 $_smarty_tpl->tpl_vars['control_id']->value = $_smarty_tpl->tpl_vars['control_name']->key;
?>
                            <div class="field">
                                <div class="name" style="width: 120px;">
                                	<span class="small"><?php echo $_smarty_tpl->tpl_vars['control_name']->value;?>
</span>
                                </div>
                                <div class="value" style="margin-left: 130px;"><input type="text" name="adapters[<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['control_id']->value;?>
]" value="<?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?><?php echo $_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value][$_smarty_tpl->tpl_vars['control_id']->value];?>
<?php }?>" style="font-size: 0.9em;"></div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
                    <?php }else{ ?>
                    <br><br>
                    <em>Чтобы сделать доступной авторизацию на этом сайте, установите хотя бы одно приложение, которое поддерживает формы авторизации,  и настройте для него маршрутизацию.</em>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="field">
                <div class="value">
                    <input type="submit" name="save" class="button green" value="Сохранить">
                    <span id="s-settings-form-status" style="display:none">Сохранено</span>
                </div>
        </div>
        </form>
        <iframe style="display:none" name="s-settings-iframe" id="s-settings-iframe"></iframe>
    </div>

</div>
<div class="clear"></div>
</div>
</div>
<script type="text/javascript">

    $("input.adapter").click(function () {
        var el = $(this).parent().find('div.adapter-controls');
        if ($(this).is(':checked')) {
            el.show();
        } else {
            el.hide();
        }
    });

    $("#s-auth-adapters").click(function () {
        if ($(this).is(':checked')) {
            $("#s-auth-adapters-list").show();
        } else {
            $("#s-auth-adapters-list").hide();
        }
    });

    $("#s-auth-enabled").click(function () {
        if ($(this).is(":checked")) {
            $("#s-auth-app").show();
        } else {
            $("#s-auth-app").hide();
        }
    });


    $("a#s-apps-add").click(function () {
        $('#s-wa-apps').append('<tr><td><a style="display:inline" href="#" onclick="return false"><i class="icon16 sort"></i></a>' +
                              '<span></span><input type="text" name="apps[name][]" value="" /></td>' +
                              '<td><span></span><input type="text" name="apps[url][]" value="" /></td>' +
                              '<td class="s-actions">' +
                                '<a href="#" class="s-apps-edit" title="Редактировать"><i class="icon16 edit"></i></a>' +
                                '<a href="#" class="s-apps-delete" title="Удалить"><i class="icon16 delete"></i></a>' +
                              '</td></tr>');
    	$('#s-wa-apps').next('div').show();
    	return false;
    });

    $("#s-wa-apps a.s-apps-edit").live('click', function () {
    	var tr = $(this).parents('tr');
    	tr.find('span').hide();
    	tr.find('input').show();
    	$('#s-wa-apps').next('div').show();
    	return false;
    });

    $("#s-wa-apps a.s-apps-delete").live('click', function () {
        if (confirm('Ссылка будет удалена из меню. Продолжить?')) {
        	$(this).parents('tr').remove();
        }
        $('#s-wa-apps').next('div').show();
        return false;
    });

    $("#s-wa-apps").sortable({
        distance: 5,
        helper: 'clone',
        items: 'tr',
        opacity: 0.75,
        tolerance: 'pointer',
        stop: function (event, ui) {
            $("#s-wa-apps").next('div').show();
        }
    });

    $("input[name=wa_apps_type]").change(function () {
        if ($("#waapps-select").is(":checked")) {
            $("#waapps-select").parent().children('div').show();
        } else {
            $("#waapps-select").parent().children('div').hide();
        }
    });

	$("#s-domain-title").click(function () {
		if ($(this).is(":checked")) {
			$(this).parent().children('div').hide().children('input').attr('disabled', 'disabled');
		} else {
			$(this).parent().children('div').show().children('input').removeAttr('disabled');
		}
	});

	$("#s-settings-form").submit(function () {
		$("#s-settings-iframe").one('load', function () {
			var response = $.parseJSON($(this).contents().find('body').html());
			if (response.status == 'ok') {
				$("#s-settings-form-status").html("Сохранено").css('color', '#000');
				$("#s-settings-form-status").fadeIn("slow", function () {
					$("#s-settings-form-status").fadeOut(3000);
				});
				location.reload();
			} else {
				$("#s-settings-form-status").html(response.errors ? response.errors : response).css('color', 'red');
				$("#s-settings-form-status").fadeIn("slow");
			}
		});
	});

	$("#s-delete").click(function () {
		if (!confirm('Будет удален весь сайт со всеми страницами без возможности восстановления. Удалить?')) {
			return false;
		}
		$.post('?module=settings&action=delete', "domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
", function (response) {
			if (response.status == 'ok') {
				if ($.wa.site.domain == <?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
) {
					location.href = '?';
				} else {
					var l = $("#s-settings-domains li.selected");
					if (l.prev().length) {
						$.wa.setHash(l.prev().children('a').attr('href'));
					} else if (l.next().length) {
						$.wa.setHash(l.next().children('a').attr('href'));
					}
					l.remove();
					$("a[href='?domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
']").parent().remove();
				}
			}
		}, "json")
		return false;
	});
</script><?php }} ?>