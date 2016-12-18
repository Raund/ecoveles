<?php /* Smarty version 2.6.26, created on 2016-09-09 12:09:21
         compiled from backend/order_editor/search_customer_on.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'backend/order_editor/search_customer_on.html', 35, false),)), $this); ?>
<h3><u><?php echo 'Поиск покупателей'; ?>
</u></h3>

<form name="CustomerSearchForm" method="post">
<input type="hidden" name="search" value="go">

<p><?php echo 'Пожалуйста, введите критерии поиска покупателя.<br> Для того, чтобы просмотреть всех покупателей, оставьте все поля пустыми (незаполненные поля не учитываются).'; ?>
</p>
<table border="0" cellspacing="1" cellpadding="3" width="100%">
    <tr>
        <td><?php echo 'Поиск покупателя по email, логину, фамилии и имени.'; ?>
:</td>
    </tr>
    <tr>
        <td><input type="text" name="search_string" id="search_string" value='<?php echo $this->_tpl_vars['search_string']; ?>
' style="width: 380px;" /></td>
        <td align="center"><button type="submit"><?php echo 'Поиск'; ?>
</button></td>
    </tr>
</table>

</form>

<?php if ($this->_tpl_vars['customers']): ?>
<form name="customers_form">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="grid">
    <colgroup>
        <col width="5%" />
        <col width="25%" />
        <col width="30%" />
        <col width="40%" />
    </colgroup>
    <tr class="gridsheader">
        <td></td>
        <td><?php echo 'Логин'; ?>
</td>
        <td><?php echo 'Email'; ?>
</td>
        <td><?php echo 'Название'; ?>
</td>
    </tr>
    <?php $_from = $this->_tpl_vars['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customer']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
" onClick="this.cells[0].childNodes[0].click();" style="cursor: default;">
        <td><input type="radio" name="customer_id" value="<?php echo $this->_tpl_vars['customer']['customerid']; ?>
" onClick="document.getElementById('select_button').disabled = false;" /></td>
        <td><?php echo $this->_tpl_vars['customer']['login']; ?>
</td>
        <td><?php echo $this->_tpl_vars['customer']['email']; ?>
</td>
        <td><?php echo $this->_tpl_vars['customer']['first_name']; ?>
&nbsp;<?php echo $this->_tpl_vars['customer']['last_name']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
	<tr class="gridsfooter">
	    <td colspan="4"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/share/pagination.html", 'smarty_include_vars' => array('current_page' => $this->_tpl_vars['pagination']['page'],'pages_count' => $this->_tpl_vars['pagination']['pages'],'base_vars' => $this->_tpl_vars['pagination']['base_vars'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	</tr>
    <tr>
        <td colspan="4" align="left"><button type="button" disabled="disabled" id="select_button" onClick="onSelectBtnClick();"><?php echo 'Выбрать'; ?>
</button></td>
    </tr>
</table>
</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['empty_result']): ?>
<center><b><?php echo 'Ничего не найдено'; ?>
</b></center>
<?php endif; ?>

<script language="JavaScript" type="text/javascript">
<?php echo '

setTimeout("document.getElementById(\'search_string\').focus();", 1000);

function onSelectBtnClick()
{
    var customer_id = 0 ;
    var els = document.forms[\'customers_form\'];
    for(i=0; i<els.length; i++)
    {
        if(els[i].name == \'customer_id\' && els[i].checked)
        {
            customer_id = els[i].value;
            break;
        };
    };
    
    if(customer_id == 0) return;
    
//    top.document.getElementById(\'sc_frame\').contentWindow.closeFadeIFrame();
    parent.window.closeFadeIFrame();
//    top.document.getElementById(\'sc_frame\').contentWindow.loadCustomerInfo(customer_id);
    parent.window.loadCustomerInfo(customer_id);
};

'; ?>

</script>