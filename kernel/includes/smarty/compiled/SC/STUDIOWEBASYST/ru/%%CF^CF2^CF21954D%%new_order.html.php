<?php /* Smarty version 2.6.26, created on 2016-09-09 10:49:20
         compiled from backend/order_editor/new_order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'backend/order_editor/new_order.html', 81, false),array('modifier', 'translate', 'backend/order_editor/new_order.html', 155, false),array('modifier', 'lower', 'backend/order_editor/new_order.html', 155, false),)), $this); ?>
<script src='../../../common/html/res/ext/pr-prototype.js' type="text/javascript"></script>
<script src='../../../common/html/res/ext/pr-adapter.js' type="text/javascript"></script>
<script src='../../../common/html/res/ext/pr-effects.js' type="text/javascript"></script>
<script src='../../../common/html/res/ext/ext-all.js' type="text/javascript"></script>
<script type="text/javascript" src="../../../common/html/cssbased/domready.js"></script>
<link rel='stylesheet' type='text/css' href='../../../common/html/res/ext/resources/css/sc-my-ext-all.css'>
<link rel='stylesheet' type='text/css' href='../../../common/html/res/ext/resources/css/xtheme-vista.css'>
<link rel='stylesheet' type='text/css' href='../../../common/html/res/ext/resources/css/menu.css'>
<link rel='stylesheet' type='text/css' href='../../../common/html/res/ext/resources/css/layout.css'>
<script type="text/javascript">Ext.BLANK_IMAGE_URL = '../../../common/html/res/ext/resources/images/default/s.gif'</script>

<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/widget_checkout.js"></script>

<h1><a href="<?php echo $this->_tpl_vars['olist_url']; ?>
"><?php echo 'Список заказов'; ?>
</a>&nbsp;&raquo;&nbsp;<?php echo 'Создать новый заказ'; ?>
</h1>

<table border="0" width="630" cellpadding="0" cellspacing="0" style="background-color: #FAFAE7;">
<colgroup>
    <col width="2%" />
    <col width="98%" />
</colgroup>
<tr style="cursor: default;">
    <td style="padding: 5px;"><input type="radio" name="customer_source" id="customer_src_exist" onClick="onExistSrcClick();"></td>
    <td style="padding: 5px;"><span onClick="onExistSrcClick();"><?php echo 'Оформить заказ на уже зарегистрированного покупателя'; ?>
</span></td>
</tr>
<tr id="ex_customer_info" style="display: none;">
    <td></td>
    <td style="padding-left: 30px;"></td>
</tr>
<tr style="cursor: default;">
    <td style="padding: 5px;"><input type="radio" name="customer_source" id="customer_src_reg" onClick="onRegSrcClick();"></td>
    <td style="padding: 5px;"><span onClick="onRegSrcClick();"><?php echo 'Зарегистрировать нового покупателя'; ?>
</span></td>
</tr>
<tr id="reg_frm_tbl" style="display: none;">
    <td></td>
    <td valign="top" style="padding-left: 29px;">
        <form name="CustomerInfoForm" onsubmit="JavaScript:return false;">
        <table border="0" cellpadding="1" cellspacing="1" class="order_edit_address_form">
            <colgroup>
                <col width="30%" />
                <col width="70%" />
            </colgroup>
            <tr>
                <td nowrap="nowrap"><?php echo 'Имя'; ?>
:</td>
                <td><input class="txt_or_sel black_solid_border" type="text" name="customer_info[first_name]" maxlength="255" value="" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Email'; ?>
:</td>
                <td><input class="txt_or_sel black_solid_border" type="text" name="customer_info[email]" maxlength="255" value="nomagazinmail@gmail.com" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap" valign="top"><?php echo 'Адрес'; ?>
:</td>
                <td><textarea class="txt_or_sel black_solid_border" name="customer_info[address]" rows="2"></textarea></td>
            </tr>
            <tr>
                <td nowrap="nowrap">* <?php echo 'Телефон'; ?>
:</td>
                <td><input class="txt_or_sel black_solid_border" type="text" name="customer_info[last_name]" maxlength="255" value="" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Город'; ?>
:</td>
                <td><input class="txt_or_sel black_solid_border" type="text" name="customer_info[city]" size="17" maxlength="255" value="" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Область'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['states']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/order_editor/states.html", 'smarty_include_vars' => array('states' => $this->_tpl_vars['states'],'name' => 'customer_info[state_id]','class' => 'txt_or_sel black_solid_border','id' => 'customer_info_state_id')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <input class="txt_or_sel black_solid_border" type="text" name="customer_info[state]" id="customer_info_state" maxlength="255" value="" />
                <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Почтовый индекс'; ?>
:</td>
                <td><input class="txt_or_sel black_solid_border" type="text" name="customer_info[zip]" maxlength="255" value="" /></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><?php echo 'Страна'; ?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['countries']): ?>
                    <?php echo smarty_function_html_options(array('name' => "customer_info[country_id]",'options' => $this->_tpl_vars['countries'],'selected' => @CONF_DEFAULT_COUNTRY,'onChange' => "changeStates()",'class' => 'txt_or_sel black_solid_border'), $this);?>

                <?php else: ?>
                    <input class="txt_or_sel black_solid_border" type="text" name="customer_info[country]" maxlength="255" value="" />
                <?php endif; ?>
                </td>
            </tr>
        </table>
        </form>
    </td>
</tr>
</table>
<br />
<table border="0" cellpadding="0" cellspacing="0">
<tr>
    <td valign="top" width="100">
        <button type="button" id="proceed_button" disabled="disabled"><?php echo 'Продолжить'; ?>
&gt;&gt;</button>
    </td>
</tr>
</table>

<script language="JavaScript" type="text/javascript">
var ORIG_URL = '<?php echo @CONF_FULL_SHOP_URL; ?>
';
<?php echo '
var exist_src_ok = false;
var reg_src_ok = false;

function onExistSrcClick()
{
    hideRegisterForm();

    document.getElementById(\'customer_src_exist\').checked = true;
    if(!exist_src_ok)
    {
        document.getElementById(\'customer_src_exist\').checked = false;
        openFadeIFrame(set_query(\'&ukey=order_editor&action=show_customer_search&suff=_on\'));
        resizeFadeIFrame(500, 400);
    };
    
    setProceedButton();
};

function onRegSrcClick()
{
    document.getElementById(\'customer_src_reg\').checked = true;
    showRegisterForm();
    setProceedButton();
};

var no_customer_id = 0; 

function loadCustomerInfo(customer_id)
{
    Ext.Msg.show({
           title: \''; 
 echo 'Загрузка информации о покупателе'; 
 echo '\',
           progressText: \''; 
 echo 'Загрузка'; 
 echo '...\',
           width:300,
           wait:true,
           buttons: false
   });    
   
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4) return;
        if(req.responseText) alert(req.responseText);
        
        var cnt_tr = document.getElementById(\'ex_customer_info\');
        var cnt_td = cnt_tr.cells[1];
        
        var customer_info = req.responseJS.customer_info;
        var customer_full_name = customer_info.first_name+\' \'+customer_info.last_name;
        '; ?>

        var _html = '<a href="index.php?ukey=user_info&userID='+customer_id+'"><span id="ord_customer_name">'+customer_full_name+'</span></a>';
        _html += '&nbsp;(<?php echo ((is_array($_tmp=((is_array($_tmp='usr_custinfo_login')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
:&nbsp;';
        if(customer_info.Login != '')
            _html += '<strong>'+customer_info.Login+'</strong>)';
        else
            _html += '<?php echo 'нет'; ?>
)';
        _html += '<br />';
        <?php if (@CONF_BACKEND_SAFEMODE == 0): ?>
            _html += '<?php echo 'Email'; ?>
:&nbsp;<a href="mailto:'+customer_info.Email+'">'+customer_info.Email+'</a>';
        <?php else: ?>
            _html += '<b><?php echo 'Заблокировано к показу в защищенном режиме'; ?>
</b>';
        <?php endif; ?>
        <?php echo '
        for(i=0; i<customer_info.reg_fields.length; i++)
        {
            _html += \',&nbsp;\';
            _html += customer_info.reg_fields[i].reg_field_name+\': \'+customer_info.reg_fields[i].reg_field_value;
        };
        
        cnt_td.innerHTML = _html;
        cnt_tr.style.display = \'\';
        
        exist_src_ok = true;
        no_customer_id = customer_id;
        document.getElementById(\'customer_src_exist\').checked = true;
        Ext.Msg.hide();
        setProceedButton();
    };

    try
    {
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({\'action\': \'ajax_get_customer_info\', \'customer_id\': customer_id});
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
};

function changeStates()
{
    var frm = document.forms[\'CustomerInfoForm\'];
    var country_id  = frm.elements[\'customer_info[country_id]\'].value;
    
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4) return;
        if(req.responseText) alert(req.responseText);
        
        var states = req.responseJS.states;
        
        var states_el = document.getElementById(\'customer_info_state_id\');
        
        if(states.length > 0)
        {
            if(states_el == undefined || !states_el)
            {
                states_el = document.getElementById(\'customer_info_state\');
                
                var pn = states_el.parentNode;
                pn.removeChild(states_el);
                
                var dd = document.createElement(\'SELECT\');
                dd.id = \'customer_info_state_id\';
                dd.name = \'customer_info[state_id]\';
                dd.className = \'txt_or_sel black_solid_border\';
                
                pn.appendChild(dd);
                states_el = dd;
            }
            else
            {
                while(states_el.options.length > 0)
                {
                    states_el.remove(0);
                };
            };
        }
        else
        {
            if(states_el)
            {
                var pn = states_el.parentNode;
                pn.removeChild(states_el);
                
                var inp = document.createElement(\'INPUT\');
                inp.type = \'text\';
                inp.name = \'customer_info[state]\';
                inp.id = \'customer_info_state\';
                inp.className = \'txt_or_sel black_solid_border\';
                
                pn.appendChild(inp);
                states_el = inp;
            }
        };
        
        for(i=0; i<states.length; i++)
        {
            var opt = new Option();
            opt.value = states[i].zoneID;
            opt.text = states[i].zone_name;
            try
            {
                states_el.add(opt,null); // standards compliant
            }
            catch(ex)
            {
                states_el.add(opt); // IE only
            };        
        };
    };

    try
    {
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({\'action\': \'ajax_get_states\', \'country_id\': country_id});
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
};

function showRegisterForm()
{
    document.getElementById(\'reg_frm_tbl\').style.display = \'\';
};

function hideRegisterForm()
{
    document.getElementById(\'reg_frm_tbl\').style.display = \'none\';
};

function setProceedButton()
{
    if(!document.getElementById(\'customer_src_reg\').checked && !document.getElementById(\'customer_src_exist\').checked)
    {
        document.getElementById(\'proceed_button\').disabled = true;
        document.getElementById(\'proceed_button\').onclick = function() {};
    }
    else
    {
        document.getElementById(\'proceed_button\').disabled = false;
        document.getElementById(\'proceed_button\').onclick = onProceedClick;
    };
};

function onProceedClick()
{
    if(document.getElementById(\'customer_src_reg\').checked)
    {
        validateRegisterForm();
        if(!reg_src_ok) return;
    };

    Ext.Msg.show({
           title: \''; 
 echo 'Создание заказа'; 
 echo '\',
           progressText: \''; 
 echo 'Пожалуйста, подождите'; 
 echo '...\',
           width:300,
           wait:true,
           buttons: false
   });    
    
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4) return;
        if(req.responseText) alert(req.responseText);
        
        window.location = \'index.php?ukey=order_editor&order_id=\'+req.responseJS.order_id;
        //Ext.Msg.hide();
    };
    
    try
    {
        var els = document.forms[\'CustomerInfoForm\'].elements;
        var new_customer_info = {
            first_name: els[\'customer_info[first_name]\'].value
           ,last_name: els[\'customer_info[last_name]\'].value
           ,email: els[\'customer_info[email]\'].value
           ,address: els[\'customer_info[address]\'].value
           ,city: els[\'customer_info[city]\'].value
           ,\'zip\' : els[\'customer_info[zip]\'].value
           ,country_id: els[\'customer_info[country_id]\'] ? els[\'customer_info[country_id]\'].value : \'\'
           ,state_id: els[\'customer_info[state_id]\'] ? els[\'customer_info[state_id]\'].value : 0
           ,state: els[\'customer_info[state]\'] ? els[\'customer_info[state]\'].value : \'\' 
           ,country: els[\'customer_info[country]\'] ? els[\'customer_info[country]\'].value : \'\'
        };
    
        var _src = (exist_src_ok && document.getElementById(\'customer_src_exist\').checked ? \'ex\' : \'new\');
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({
            action: \'ajax_create_order\'
           ,customer_id: no_customer_id
           ,customer_info: new_customer_info
           ,customer_src: _src
        });
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
};

function validateRegisterForm()
{
    var frm = document.forms[\'CustomerInfoForm\'];
    reg_src_ok = true;
    for(i=0; i<frm.elements.length; i++)
    {
        var fld_name = frm.elements[i].name.replace(\'customer_info[\',\'\').replace(\']\',\'\');
        switch(fld_name)
        {
            case \'first_name\':
            case \'last_name\':
                    checkForEmpty(frm.elements[i]);
                    break;
            case \'email\':
                    checkEmail(frm.elements[i]);
                    break;
        };
    };
};

function checkForEmpty(el)
{
    if(el.value == \'\')
    {
        reg_src_ok = false;
        el.style.border = \'solid 1px red\';
    }
    else
    {
        el.style.border = \'solid 1px black\';
    }
};

function checkEmail(el)
{
    var filter = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(el.value))
    {
        reg_src_ok = false;
        el.style.border = \'solid 1px red\';
    }
    else
    {
        el.style.border = \'solid 1px black\';
    }
};

'; ?>

</script>
