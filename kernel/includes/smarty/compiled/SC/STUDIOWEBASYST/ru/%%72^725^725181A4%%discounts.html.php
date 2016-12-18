<?php /* Smarty version 2.6.26, created on 2016-11-04 15:15:00
         compiled from backend/discounts.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'backend/discounts.html', 78, false),array('modifier', 'escape', 'backend/discounts.html', 80, false),array('modifier', 'set_query_html', 'backend/discounts.html', 86, false),)), $this); ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
<h1><?php echo 'Настроить скидки'; ?>
</h1>

<div style="background-color: #fafae7; padding: 10px; width: 50%; margin: 5px;">
    <table cellpadding="1" cellspacing="1" width="100%" border="0">
        <colgroup>
            <col width="50%" />
            <col width="30%" />
            <col width="20%" />
        </colgroup>
        <tr>
            <td align="left" style="font-weight: bold;"><?php echo 'По'; ?>
 <a href="<?php echo $this->_tpl_vars['mng_coupons_url']; ?>
"><?php echo 'lbl_dsc_by_coupons'; ?>
</a></td>
            <td align="right"><b id="state_label_coupons" style="color: <?php if ($this->_tpl_vars['dsc_states']['by_coupons'] == 'N'): ?>red<?php else: ?>green<?php endif; ?>;"><?php if ($this->_tpl_vars['dsc_states']['by_coupons'] == 'N'): 
 echo 'Выкл.'; 
 else: 
 echo 'Включен'; 
 endif; ?></b></td>
            <td align="right">
                <button type="button" id="state_button_coupons" onClick="toogleDSC('coupons');"><?php if ($this->_tpl_vars['dsc_states']['by_coupons'] == 'N'): 
 echo 'Включить'; 
 else: 
 echo 'Выключить'; 
 endif; ?></button>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="3"><?php echo 'msg_dsc_by_coupons'; ?>
</td>
        </tr>
    </table>
</div>

<div style="background-color: #fafae7; padding: 10px; width: 50%; margin: 5px;">
    <table cellpadding="1" cellspacing="1" width="100%">
        <colgroup>
            <col width="50%" />
            <col width="30%" />
            <col width="20%" />
        </colgroup>
        <tr>
            <td align="left" style="font-weight: bold;"><?php echo 'По'; ?>
 <a href="<?php echo $this->_tpl_vars['mng_usergroups_url']; ?>
"><?php echo 'lbl_dsc_by_usergroup'; ?>
</a></td>
            <td align="right"><b id="state_label_usergroup" style="color: <?php if ($this->_tpl_vars['dsc_states']['by_usergroup'] == 'N'): ?>red<?php else: ?>green<?php endif; ?>;"><?php if ($this->_tpl_vars['dsc_states']['by_usergroup'] == 'N'): 
 echo 'Выкл.'; 
 else: 
 echo 'Включен'; 
 endif; ?></b></td>
            <td align="right">
                <button type="button" id="state_button_usergroup" onClick="toogleDSC('usergroup');"><?php if ($this->_tpl_vars['dsc_states']['by_usergroup'] == 'N'): 
 echo 'Включить'; 
 else: 
 echo 'Выключить'; 
 endif; ?></button>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="3"><?php echo 'msg_dsc_by_usergroup'; ?>
</td>
        </tr>
    </table>
</div>

<div style="background-color: #fafae7; padding: 10px; width: 50%; margin: 5px;">
    <table cellpadding="1" cellspacing="1" width="100%">
        <colgroup>
            <col width="50%" />
            <col width="30%" />
            <col width="20%" />
        </colgroup>
        <tr>
            <td align="left" style="font-weight: bold;"><?php echo 'lbl_dsc_by_amount'; ?>
</td>
            <td align="right"><b id="state_label_amount" style="color: <?php if ($this->_tpl_vars['dsc_states']['by_amount'] == 'N'): ?>red<?php else: ?>green<?php endif; ?>;"><?php if ($this->_tpl_vars['dsc_states']['by_amount'] == 'N'): 
 echo 'Выкл.'; 
 else: 
 echo 'Включен'; 
 endif; ?></b></td>
            <td align="right">
                <button type="button" id="state_button_amount" onClick="toogleDSC('amount');"><?php if ($this->_tpl_vars['dsc_states']['by_amount'] == 'N'): 
 echo 'Включить'; 
 else: 
 echo 'Выключить'; 
 endif; ?></button>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="3"><?php echo 'msg_dsc_by_amount'; ?>
</td>
        </tr>
        <tr id="sets_amount" style="display: <?php if ($this->_tpl_vars['dsc_states']['by_amount'] == 'N'): ?>none<?php endif; ?>;">
            <td colspan="3">
            
                    <form name='MainForm' method="post">
                    <input type="hidden" name="action" value="save_order_price_discounts">
                    <input type="hidden" name="discount_type" value="A">
                        <p><?php echo 'В следующей таблице вы можете задать критерий расчета скидки на заказ в зависимости от общей стоимости заказа. Укажите в левой колонке какая скидка будет действовать, если стоимость заказа привысит значение, указанное в правом столбце.'; ?>
</p>
                        
                        <table class="grid">
                        <tr class="gridsheader">
                            <td><?php echo 'Сумма заказа (в основной валюте)'; ?>
</td>
                            <td><?php echo 'Действующая скидка, если стоимость заказа выше указанной левее суммы, %'; ?>
</td>
                            <td><?php echo 'Удалить'; ?>
</td>
                        </tr>
                        
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['discounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
                            <td>
                                <input type="text" name='price_range_<?php echo $this->_tpl_vars['discounts'][$this->_sections['i']['index']]['discount_id']; ?>
' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['discounts'][$this->_sections['i']['index']]['price_range'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' style="width:100%" />
                            </td>
                            <td>
                                <input type="text" name='percent_discount_<?php echo $this->_tpl_vars['discounts'][$this->_sections['i']['index']]['discount_id']; ?>
' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['discounts'][$this->_sections['i']['index']]['percent_discount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' style="width:100%" />
                            </td>
                            <td align="center">
                                <a href='<?php echo ((is_array($_tmp="action=del_discount&dsc_id=".($this->_tpl_vars['discounts'][$this->_sections['i']['index']]['discount_id']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' title='<?php echo 'Удалить?'; ?>
' class="confirm_action">
                                    <img src="images_common/remove.gif" alt="<?php echo 'Удалить'; ?>
" />
                                </a>
                            </td>
                        </tr>
                        <?php endfor; endif; ?>
                        
                        <tr class="gridsheader_simple">
                            <td colspan="3"><b><?php echo 'Добавить'; ?>
</b></td>
                        </tr>
                        <tr class="gridsheader">
                            <td><?php echo 'Сумма заказа (в основной валюте)'; ?>
</td>
                            <td><?php echo 'Действующая скидка, если стоимость заказа выше указанной левее суммы, %'; ?>
</td>
                            <td></td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="text" name='new_price_range' style="width:100%" />
                            </td>
                            <td>
                                <input type="text" name='new_percent_discount' style="width:100%" />
                            </td>
                            <td></td>
                        </tr>
                        
                        </table>
                        
                        <p>
                            <input name="save_order_price_discounts" type="submit" value='<?php echo 'Сохранить'; ?>
' />
                        </p>
                    </form>            
            
            </td>
        </tr>
    </table>
</div>

<div style="background-color: #fafae7; padding: 10px; width: 50%; margin: 5px;">
    <table cellpadding="1" cellspacing="1" width="100%">
        <colgroup>
            <col width="50%" />
            <col width="30%" />
            <col width="20%" />
        </colgroup>
        <tr>
            <td align="left" style="font-weight: bold;"><?php echo 'lbl_dsc_by_orders'; ?>
</td>
            <td align="right"><b id="state_label_orders" style="color: <?php if ($this->_tpl_vars['dsc_states']['by_orders'] == 'N'): ?>red<?php else: ?>green<?php endif; ?>;"><?php if ($this->_tpl_vars['dsc_states']['by_orders'] == 'N'): 
 echo 'Выкл.'; 
 else: 
 echo 'Включен'; 
 endif; ?></b></td>
            <td align="right">
                <button type="button" id="state_button_orders" onClick="toogleDSC('orders');"><?php if ($this->_tpl_vars['dsc_states']['by_orders'] == 'N'): 
 echo 'Включить'; 
 else: 
 echo 'Выключить'; 
 endif; ?></button>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="3"><?php echo 'msg_dsc_by_orders'; ?>
</td>
        </tr>
        <tr id="sets_orders" style="display: <?php if ($this->_tpl_vars['dsc_states']['by_orders'] == 'N'): ?>none<?php endif; ?>;">
            <td colspan="3">
            
                    <form name='DscOrdersSumForm' method="post">
                    <input type="hidden" name="action" value="save_order_price_discounts">
                    <input type="hidden" name="discount_type" value="O">
                    <br />    
                        <table class="grid">
                        <tr class="gridsheader">
                            <td><?php echo 'lbl_dsc_order_sum'; ?>
</td>
                            <td><?php echo 'lbl_dsc_order_percent'; ?>
</td>
                            <td><?php echo 'Удалить'; ?>
</td>
                        </tr>
                        
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['so_discounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1'), $this);?>
">
                            <td>
                                <input type="text" name='price_range_<?php echo $this->_tpl_vars['so_discounts'][$this->_sections['i']['index']]['discount_id']; ?>
' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['so_discounts'][$this->_sections['i']['index']]['price_range'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' style="width:100%" />
                            </td>
                            <td>
                                <input type="text" name='percent_discount_<?php echo $this->_tpl_vars['so_discounts'][$this->_sections['i']['index']]['discount_id']; ?>
' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['so_discounts'][$this->_sections['i']['index']]['percent_discount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' style="width:100%" />
                            </td>
                            <td align="center">
                                <a href='<?php echo ((is_array($_tmp="action=del_discount&dsc_id=".($this->_tpl_vars['so_discounts'][$this->_sections['i']['index']]['discount_id']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' title='<?php echo 'Удалить?'; ?>
' class="confirm_action">
                                    <img src="images_common/remove.gif" alt="<?php echo 'Удалить'; ?>
" />
                                </a>
                            </td>
                        </tr>
                        <?php endfor; endif; ?>
                        
                        <tr class="gridsheader_simple">
                            <td colspan="3"><b><?php echo 'Добавить'; ?>
</b></td>
                        </tr>
                        <tr class="gridsheader">
                            <td><?php echo 'lbl_dsc_order_sum'; ?>
</td>
                            <td><?php echo 'lbl_dsc_order_percent'; ?>
</td>
                            <td></td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="text" name='new_price_range' style="width:100%" />
                            </td>
                            <td>
                                <input type="text" name='new_percent_discount' style="width:100%" />
                            </td>
                            <td></td>
                        </tr>
                        
                        </table>
                        
                        <p>
                            <input name="save_order_price_discounts" type="submit" value='<?php echo 'Сохранить'; ?>
' />
                        </p>
                    </form>            
            
            </td>
        </tr>
    </table>
</div>

<form name="CfgCalcDscForm" method="post">
<input type="hidden" name="action" value="set_cfg" />
    <table cellpadding="2" cellspacing="1" width="50%">
        <colgroup>
            <col width="2%" />
            <col width="98%" />
        </colgroup>
        <tr>
            <td colspan="2"><?php echo 'Как считать общую скидку, если одновременно действуют несколько правил, определенных выше?'; ?>
</td>
        </tr>
        <tr valign="top">
            <td><input type="radio" name="cfg_dsc_calc" id="cfg_dsc_calc_as_sum" value="as_sum" <?php if ($this->_tpl_vars['cfg_dsc_calc'] == 'as_sum'): ?>checked="checked"<?php endif; ?> /></td>
            <td><label for="cfg_dsc_calc_as_sum"l><?php echo 'cfg_calc_dsc_summ'; ?>
</label></td>
        </tr>
        <tr valign="top">
            <td><input type="radio" name="cfg_dsc_calc" id="cfg_dsc_calc_as_max" value="as_max" <?php if ($this->_tpl_vars['cfg_dsc_calc'] == 'as_max'): ?>checked="checked"<?php endif; ?> /></td>
            <td><label for="cfg_dsc_calc_as_max"><?php echo 'cfg_calc_dsc_max'; ?>
</label></td>
        </tr>
        <tr>
            <td colspan="2" align="left"><input type="submit" value="<?php echo 'Сохранить'; ?>
"></td>
        </tr>
    </table>
</form>

<script language="JavaScript" type="text/javascript">
<?php echo '

var dsc_states = {
    coupons: \''; 
 echo $this->_tpl_vars['dsc_states']['by_coupons']; 
 echo '\'
   ,usergroup: \''; 
 echo $this->_tpl_vars['dsc_states']['by_usergroup']; 
 echo '\'
   ,amount: \''; 
 echo $this->_tpl_vars['dsc_states']['by_amount']; 
 echo '\'
   ,orders: \''; 
 echo $this->_tpl_vars['dsc_states']['by_orders']; 
 echo '\'
};

function toogleDSC(dsc_type)
{
    var cur_state = dsc_states[dsc_type];
    var new_state = (cur_state == \'Y\' ? \'N\' : \'Y\');
    var state_button = document.getElementById(\'state_button_\'+dsc_type);
    var state_label = document.getElementById(\'state_label_\'+dsc_type);
    
    var req = new JsHttpRequest();
    
    req.onreadystatechange = function()
    {
        if (req.readyState != 4)return;
        if(req.responseText)alert(req.responseText);
        
        dsc_states[dsc_type] = new_state;
        state_button_label = (new_state == \'Y\' ? \''; 
 echo 'Выключить'; 
 echo '\' : \''; 
 echo 'Включить'; 
 echo '\');
        state_button.innerHTML = state_button_label;
        state_label.innerHTML = (new_state == \'Y\' ? \''; 
 echo 'Включен'; 
 echo '\' : \''; 
 echo 'Выкл.'; 
 echo '\');
        state_label.style.color = (new_state == \'Y\' ? \'green\' : \'red\');
        
        if(document.getElementById(\'sets_\'+dsc_type))
        {
            toogleVisibility(\'sets_\'+dsc_type);
        };
    };
    
    state_button.disabled = true;
    try
    {
        req.open(null, set_query(\'&caller=1&initscript=ajaxservice\'), true);
        req.send({\'action\': \'set_dsc_state\', \'dsc_type\':dsc_type, \'dsc_state\': new_state});
    }
    catch ( e )
    {
      catchResult(e);
    }
    finally { ;}
    state_button.disabled = false;
};

function toogleVisibility(el_id)
{
    var el = document.getElementById(el_id);
    el.style.display = (el.style.display == \'none\' ? \'\' : \'none\');
};

'; ?>

</script>