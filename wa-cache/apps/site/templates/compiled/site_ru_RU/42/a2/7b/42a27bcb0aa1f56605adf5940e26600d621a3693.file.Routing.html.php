<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 19:16:01
         compiled from "Z:\home\studio.my\webasyst\wa-apps\site\templates\actions\routing\Routing.html" */ ?>
<?php /*%%SmartyHeaderCode:67415255733151e553-86735909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a27bcb0aa1f56605adf5940e26600d621a3693' => 
    array (
      0 => 'Z:\\home\\studio.my\\webasyst\\wa-apps\\site\\templates\\actions\\routing\\Routing.html',
      1 => 1380116972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67415255733151e553-86735909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'routes' => 0,
    'route_id' => 0,
    'url' => 0,
    'route' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'domain_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525573316a6640_52586753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525573316a6640_52586753')) {function content_525573316a6640_52586753($_smarty_tpl) {?><div class="content">
    <div class="s-editor s-white">
        <div class="block s-grey-toolbar">
            <h4 style="margin-left: 4px; margin-top:2px;">Маршрутизация</h4>
        </div>
        <div class="block s-routing-header">
            <a href="#" class="inline-link" id="s-routing-addrule"><i class="icon16 add"></i><b><i>Новое правило</i></b></a>
        </div>
        <div>
            <div class="sidebar" style="width:75%;">
                <table id="s-rules" class="zebra s-routing">
                    <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_smarty_tpl->tpl_vars['route_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['route_id']->value = $_smarty_tpl->tpl_vars['route']->key;
?>
                    <tr id="route-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
">
                        <td class="s-url">
                            <span><a style="display:inline" href="#"><i class="icon16 sort"></i></a></span> <span class="s-domain-url"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/</span><span class="s-editable-url" style="color:#000"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </td>
                        <td class="s-app">
                            <?php if (!empty($_smarty_tpl->tpl_vars['route']->value['app'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['route']->value['app']['icon'][24];?>
" class="s-app24x24icon-menu-v" alt=""><?php echo $_smarty_tpl->tpl_vars['route']->value['app']['name'];?>

                            <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/arrow.png" class="s-app24x24icon-menu-v" alt="">
                            <span class="redirect"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value['redirect'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php }?>
                        </td>
                        <td class="s-actions align-right">
                            <a href="#" class="s-route-action s-route-settings" title="Настройки"><i class="icon16 settings"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- /fields -->
                </table>
                <p class="block double-padded align-center hint">
               		Правила обрабатываются по одному в указанном порядке. Обработка начинается с первого правила в списке и заканчивается на правиле, которое соответствует текущему HTTP-запросу. Для обозначения любых символов в качестве маски используйте звездочку (*).
                	<a href="http://www.webasyst.ru/developers/docs/routing/site-app-routing/" target="_blank">Помощь</a> <i class="icon10 new-window"></i>
                </p>
            </div>
            <div id="s-route-params" class="content bordered-left" style="margin-left:75%;">
            	<div class="block double-padded align-center hint">
            		<br />
            		<img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/site/img/gear.png"><br /><br />
            		Выберите правило маршрутизации для редактирования его настроек
            		<div class="clear"></div>
            	</div>
            </div>
        </div>
        <div class="clear-left"></div>
    </div>
</div>
<script type="text/javascript">

function site_routing_full()
{
    $("#s-route-params").html('<div class="block double-padded align-center hint"><br />' +
            '<img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/site/img/gear.png"><br /><br />Выберите правило маршрутизации для редактирования его настроек' +
            '<div class="clear"></div></div>'
    ).animate({ 'margin-left': '75%'}, 'slow');
    $(".s-editor .sidebar").animate({ 'width':'75%'}, 'slow');
    $("#s-rules").removeClass('s-routing-minimized');
    $("#s-rules .s-domain-url").show();
    $("#s-rules tr.selected").removeClass('selected');
}


$("a#s-routing-addrule").click(function () {
    $("#s-rules tr.selected").removeClass('selected');
    $(".s-editor .sidebar").animate({ 'width':'25%'}, 'slow');
    $("#s-rules").addClass('s-routing-minimized');
    $("#s-route-params").animate({ 'margin-left':'25%'}, 'slow');
    $("#s-rules .s-domain-url").hide();
    $("#s-route-params").load('?module=routing&action=edit', 'domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
&route=', function () {
        $(".s-route-core input:first").focus();
    });
    return false;
});

$("#s-rules").on('click', "tr", function () {
    $("#s-rules tr.selected").removeClass('selected');
    $(this).addClass('selected');
    var route = $(this).attr('id').replace(/^route-/, '');
    $(".s-editor .sidebar").animate({ 'width':'25%'}, 'slow');
    $("#s-rules").addClass('s-routing-minimized');
    $("#s-route-params").animate({ 'margin-left':'25%'}, 'slow');
    $("#s-rules .s-domain-url").hide();
    $("#s-route-params").load('?module=routing&action=edit', 'domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
&route=' + route, function () {

    });
    return false;
});


$("#s-rules").sortable({
    distance: 5,
    helper: function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index){
            // Set helper cell sizes to match the original sizes
            $(this).width($originals.eq(index).width())
        });
        return $helper;
    },
    items: 'tr',
    handle: "i.sort",
    opacity: 0.75,
    tolerance: 'pointer',
    stop: function (event, ui) {
        var tr = $(ui.item);
        var id = tr.attr('id').replace(/route-/, '');
        var pos = tr.prevAll('tr').size();
        $.post("?module=routing&action=sort&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
" , { route: id, pos: pos}, function () {
        }, "json");
    }
});
</script><?php }} ?>