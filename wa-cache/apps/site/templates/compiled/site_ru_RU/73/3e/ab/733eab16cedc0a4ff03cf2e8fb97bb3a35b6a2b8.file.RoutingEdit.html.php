<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:16:13
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\templates\actions\routing\RoutingEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:203595255733dc77f25-45702572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733eab16cedc0a4ff03cf2e8fb97bb3a35b6a2b8' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\templates\\actions\\routing\\RoutingEdit.html',
      1 => 1380116972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203595255733dc77f25-45702572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'domain' => 0,
    'wa' => 0,
    'domain_id' => 0,
    'route_id' => 0,
    'route' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'apps' => 0,
    'app_id' => 0,
    'route_name' => 0,
    'themes' => 0,
    'locales' => 0,
    'params' => 0,
    'p' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5255733e1c0678_71088877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255733e1c0678_71088877')) {function content_5255733e1c0678_71088877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'Z:\\home\\studio.my\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\function.html_options.php';
?><script type="text/javascript">
    document.title = <?php if ($_smarty_tpl->tpl_vars['app']->value){?><?php echo json_encode($_smarty_tpl->tpl_vars['app']->value['name']);?>
 + ' настройки'<?php }else{ ?>'Перенаправление'<?php }?> + ' — ' + <?php echo json_encode($_smarty_tpl->tpl_vars['domain']->value);?>
;
</script>
<?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('details')){?>
<div class="s-editor s-white s-app-settings">
	<form id="s-settings-form" method="post" action="?module=routing&action=save&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
&route=<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
">
	<div class="float-left s-route">
		<div class="block s-route-core">
            <div class="block half-padded float-right">
    			<ul class="menu-h">
    				<li><a href="#" class="cancel gray inline-link" title="Закрыть"><i class="icon10 no-bw"></i> <b><i>Отмена</i></b></a></li>
    			</ul>
    		</div>			
			<div class="fields">
                <div class="field">
    				<div class="name">
    				   <input type="text" name="params[url]" value="<?php if (strlen($_smarty_tpl->tpl_vars['route_id']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="bold large" placeholder="*" />
    				</div>
    				<div class="value">
                        <?php if (strlen($_smarty_tpl->tpl_vars['route_id']->value)){?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['route']->value['app'])){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][24];?>
" />
                                <h3><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</h3>
                            <?php }else{ ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/arrow.png" class="s-app24x24icon-menu-v" alt="">
                                <span class="redirect"> <input name="params[redirect]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value['redirect'], ENT_QUOTES, 'UTF-8', true);?>
" class="long" /></span>
                            <?php }?>
                        <?php }else{ ?>
    				    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][24];?>
" />
    					<select class="s-select-app" name="params[app]">
                            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][24];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</option>
                            <?php } ?>
                            <option value="" data-img="wa-apps/site/img/arrow.png">Перенаправление...</option>
                        </select>
                        <?php }?>
    				</div>
    			</div>
			</div>
			<div class="clear-both"></div>

		</div>
<?php }?>
		<div class="block padded s-route-details">
			<div class="fields form">
				<?php $_smarty_tpl->tpl_vars['themes'] = new Smarty_variable(siteHelper::getThemes($_smarty_tpl->tpl_vars['app_id']->value,true), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['app']->value){?>
				<div class="field-group">
    				<div class="field">
    					<div class="name">Название поселения</div>
    					<div class="value">
    						<input type="text" name="params[_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="bold" /><br />
    						<span class="hint">Название используется в меню навигации <em>$wa->apps</em> этого сайта</span>
    					</div>
    				</div>
                    <?php if ($_smarty_tpl->tpl_vars['themes']->value){?>
    				<div class="field">
    					<div class="name">Тема оформления</div>
    					<div class="value">
    						<?php echo smarty_function_html_options(array('name'=>"params[theme]",'options'=>$_smarty_tpl->tpl_vars['themes']->value,'selected'=>ifempty($_smarty_tpl->tpl_vars['route']->value['theme'],'default')),$_smarty_tpl);?>

    					</div>
    				</div>
    				<div class="field">
    					<div class="name">Мобильная тема оформления</div>
    					<div class="value">
    						<?php echo smarty_function_html_options(array('name'=>"params[theme_mobile]",'options'=>$_smarty_tpl->tpl_vars['themes']->value,'selected'=>ifempty($_smarty_tpl->tpl_vars['route']->value['theme_mobile'],'default')),$_smarty_tpl);?>

    						<br />
    						<span class="hint">Тема оформления для мобильных multi-touch устройств (iPhone, Android и пр.)</span>
    					</div>
    				</div>
                    <div class="field">
                        <div class="name">Локаль</div>
                        <div class="value">
                            <?php echo smarty_function_html_options(array('name'=>"params[locale]",'options'=>$_smarty_tpl->tpl_vars['locales']->value,'selected'=>ifset($_smarty_tpl->tpl_vars['route']->value['locale'],$_smarty_tpl->tpl_vars['wa']->value->locale())),$_smarty_tpl);?>

                        </div>
                    </div>
                    <?php }?>
                    <div class="field">
                        <div class="name">Публичность</div>
                        <div class="value">
                        	<label>
                        	<input type="checkbox" value="1" name="params[private]"<?php if (!empty($_smarty_tpl->tpl_vars['route']->value['private'])){?> checked<?php }?>> Скрытое поселение<br />
                            <span class="hint">При включении этой настройки поселение будет считаться скрытым (не публичным). Оно будет доступно по своему прямому адресу, но не будет включено в массив $wa->apps и основной Sitemap-файл. Скрытыми удобно делать временные поселения, например, страницы «Сайт находится в разработке», и поселения, которые не должны быть включены в основное меню навигации либо индексироваться поисковыми системами.</span>
                            </label>
                        </div>
                    </div>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['params']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
					<div class="field">
						<div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="value"><?php echo $_smarty_tpl->tpl_vars['p']->value['value'];?>
</div>
					</div>
					<?php } ?>
				<?php }?>				
				<div class="field">
					<div class="name">Дополнительные параметры</div>
					<div class="value">
						<textarea name="other_params"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['route']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,array('app','url','theme','theme_mobile','locale','private'))&&substr($_smarty_tpl->tpl_vars['key']->value,0,1)!='_'&&!isset($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['key']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
=<?php if ($_smarty_tpl->tpl_vars['value']->value===false){?>0<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>

<?php }?><?php } ?></textarea>
						<br />
						<span class="hint">Необязательный набор параметров вида <em>key=value</em>, к значениям которых можно обращаться шаблонах дизайна и страницах этого поселения как <em>&#123;$wa->globals("key")&#125;</em>. Каждая пара key=value должна быть указана на отдельной строке. <a href="http://www.webasyst.ru/developers/docs/design/" target="_blank">Помощь</a> <i class="icon10 new-window"></i></span>
					</div>
				</div>
                <?php }?>
				<div class="field">
					<div class="value">

                        <?php if (strlen($_smarty_tpl->tpl_vars['route_id']->value)){?>
                        <div class="block half-padded float-right">
                			<ul class="menu-h">
                				<li><a href="#" class="s-route-action s-route-delete" title="Удалить правило"><i class="icon16 delete"></i>Удалить правило</a></li>
                			</ul>
                		</div>
                        <?php }?>
					
						<input type="submit" name="save" class="button green" value="Сохранить" />
						<span id="s-settings-form-status"></span>
					</div>
				</div>					
			</div>
		</div>
<?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('details')){?>
    </div>
	</form>
<div class="clear"></div>
</div>

<script type="text/javascript">

    $("select.s-select-app").on('change', function () {
        if ($(this).val()) {
            $('.s-route-details').html('<i class="icon16 loading"></i>').load('?module=routing&action=edit', 'domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
&app=' + $(this).val() + '&details=1', function () {
            });
            if ($(this).next('.redirect').length) {
                $(this).next('.redirect').remove();
            }
        } else {
            $('.s-route-details').find('div.field,div.field-group').not('div.field:last').remove();
            if ($(this).next('.redirect').length) {
                $(this).next().find('input').val('');
            } else {
                $('<span class="redirect"> <input name="params[redirect]" class="long" type="text" /></span>').insertAfter(this);
                $(this).hide();
            }
            $(this).next().find('input').focus();
        }
        $(this).prev().attr('src', "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" + $(this).find(':selected').attr('data-img')).show();
    });

    $("a.s-route-delete").click(function () {
        if (confirm('Правило будет удалено из структуры сайта. Продолжить?')) {
            $.post("?module=routing&action=delete&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
", { "route": "<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
"}, function (response) {
                if (response.status == 'ok') {
                    $("#route-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
").remove();
                    $("#s-route-params").html('<div class="block double-padded align-center hint"><br />' +
                        '<img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/site/img/gear.png"><br /><br />Выберите правило маршрутизации для редактирования его настроек' +
                        '<div class="clear"></div></div>'
                    ).animate({ 'margin-left': '75%'}, 'slow');
                    $(".s-editor .sidebar").animate({ 'width':'75%'}, 'slow');
                    $("#s-rules").removeClass('s-routing-minimized');
                    $("#s-rules .s-domain-url").show();
                }
            }, "json");
        }
        return false;
    });
	$("#s-settings-form").submit(function () {
		var f = $(this);
		$("#s-settings-form-status").html('<i style="vertical-align:middle" class="icon16 loading"></i> Сохранение...').fadeIn("slow");
		$.post(f.attr('action'), f.serialize(), function (response) {
            if (response.status == 'ok') {
                <?php if (strlen($_smarty_tpl->tpl_vars['route_id']->value)){?>
                    $('#route-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
 .s-editable-url').text(response.data.url);
                <?php }?>
                if (response.data.add) {
                    if (response.data.add == 'top') {
                        $('#s-rules').prepend(response.data.html);
                    } else {
                        $('#s-rules').append(response.data.html);
                    }
                }
                $("#s-settings-form-status").html('<i style="vertical-align:middle" class="icon16 yes"></i>Сохранено').fadeOut('slow', function () {
                    site_routing_full();
                });
            } else if (response.status == 'fail') {
                $("#s-settings-form-status").html('<span class="small" style="color: #f00;">' + response.errors + '</span>');
                f.find('input.button:submit').removeClass('green').addClass('red');
            }
		}, "json");
		return false;
	});
    $("#s-settings-form .cancel").click(function () {
        site_routing_full();
        return false;
    });
</script>
<?php }?><?php }} ?>