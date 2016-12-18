<?php /* Smarty version 2.6.26, created on 2016-09-15 10:12:13
         compiled from backend/user_contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'backend/user_contact.html', 13, false),)), $this); ?>
<form method="post" name="EditCustomerForm">
<input type="hidden" name="action" value="save_contact_info" />
<table class="address_form" cellspacing="0" cellpadding="3">
	<tr>
		<td><strong><?php echo 'Логин'; ?>
</strong></td>
		<td><?php if ($this->_tpl_vars['customerInfo']['Login'] != ''): 
 echo $this->_tpl_vars['customerInfo']['Login']; 
 else: ?><i><?php echo 'Этот пользователь не ввел логин и пароль во время оформления заказа.'; ?>
</i><?php endif; ?></td>
	</tr>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td><strong><?php echo 'Имя'; ?>
</strong></td>
		<td>
            <span id="first_name_txt"><?php echo $this->_tpl_vars['customerInfo']['first_name']; ?>
</span>
            <input class="txt_or_sel" type="text" name="ci[first_name]" id="first_name_inp" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customerInfo']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="display: none;" />
        </td>
	</tr>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td><strong><?php echo 'Фамилия'; ?>
</strong></td>
		<td>
            <span id="last_name_txt"><?php echo $this->_tpl_vars['customerInfo']['last_name']; ?>
</span>
            <input class="txt_or_sel" type="text" name="ci[last_name]" id="last_name_inp" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customerInfo']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="display: none;" />
        </td>
	</tr>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td><strong><?php echo 'Email'; ?>
</strong></td>
		<td>
            <?php if (@CONF_BACKEND_SAFEMODE == 0): ?>
                <span id="email_txt"><?php echo $this->_tpl_vars['customerInfo']['Email']; ?>
</span>
                <input class="txt_or_sel" type="text" name="ci[Email]" id="email_inp" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customerInfo']['Email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="display: none;" />
            <?php else: ?>
                <?php echo 'Заблокировано к показу в защищенном режиме'; ?>

            <?php endif; ?>
        </td>
	</tr>
    <?php $_from = $this->_tpl_vars['reg_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reg_fld']):
?>
    <tr><td colspan="2"><div class="divider_grey"></div></td></tr>
    <tr>
        <td><strong><?php echo $this->_tpl_vars['reg_fld']['reg_field_name']; ?>
</strong></td>
        <td>
            <span id="rf_<?php echo $this->_tpl_vars['reg_fld']['reg_field_ID']; ?>
_txt"><?php echo $this->_tpl_vars['reg_fld']['reg_field_value']; ?>
</span>
            <input class="txt_or_sel" type="text" name="ci[reg_field][<?php echo $this->_tpl_vars['reg_fld']['reg_field_ID']; ?>
]" id="rf_<?php echo $this->_tpl_vars['reg_fld']['reg_field_ID']; ?>
_txt" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reg_fld']['reg_field_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="display: none;" />
        </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td valign="top"><strong><?php echo 'Подписаться на новости'; ?>
</strong></td>
		<td>
            <span id="subscribed4news_txt"><?php if ($this->_tpl_vars['customerInfo']['subscribed4news']): 
 echo 'да'; 
 else: 
 echo 'нет'; 
 endif; ?></span>
			<input id="subscribed4news_inp" type="checkbox" <?php if ($this->_tpl_vars['customerInfo']['subscribed4news']): ?>checked<?php endif; ?> name = 'ci[subscribed4news]' value='1' style="display: none;" />
		</td>
	</tr>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td valign="top">
			<strong><?php echo 'Группа'; ?>
</strong>
		</td>
		<td>
            <span id="custgroupID_txt"><?php echo $this->_tpl_vars['cust_group_name']; ?>
</span>
			<select class="txt_or_sel" name='ci[custgroupID]' id="custgroupID_inp" style="display: none;">
				<option value='null'>-</option>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['customer_groups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<option value='<?php echo $this->_tpl_vars['customer_groups'][$this->_sections['i']['index']]['custgroupID']; ?>
' <?php if ($this->_tpl_vars['customer_groups'][$this->_sections['i']['index']]['custgroupID'] == $this->_tpl_vars['customerInfo']['custgroupID']): ?>selected<?php endif; ?>>
						<?php echo $this->_tpl_vars['customer_groups'][$this->_sections['i']['index']]['custgroup_name']; ?>

					</option> 
				<?php endfor; endif; ?>
			</select>
		</td>
	</tr>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td valign="top"><strong><?php echo 'Статус учетной записи'; ?>
</strong></td>
		<td>
            <span id="activated_txt"><?php if ($this->_tpl_vars['customerInfo']['ActivationCode']): 
 echo 'Не активирована'; 
 else: 
 echo 'Активирована'; 
 endif; ?></span>
            <select class="txt_or_sel" name="ci[activated]" id="activated_inp" style="display: none">
                <option value="0" <?php if ($this->_tpl_vars['customerInfo']['ActivationCode'] != ''): ?>selected="selected"<?php endif; ?>><?php echo 'Не активирована'; ?>
</option>
                <option value="1" <?php if ($this->_tpl_vars['customerInfo']['ActivationCode'] == ''): ?>selected="selected"<?php endif; ?>><?php echo 'Активирована'; ?>
</option>
            </select>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['customerInfo']['ActivationCode']): ?>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr>
		<td><strong><?php echo 'Ключ активации'; ?>
</strong></td>
		<td><?php echo $this->_tpl_vars['customerInfo']['ActivationCode']; ?>
</td>
	</tr>
	<?php endif; ?>
	<tr><td colspan="2"><div class="divider_grey"></div></td></tr>
	<tr id="form_buttons" style="display: none;">
		<td></td>
		<td>
			<input value="<?php echo 'Сохранить'; ?>
" name="save" type="submit" />
            <button type="button" onClick="hideEditForm();"><?php echo 'Отмена'; ?>
</button>
					</td>
	</tr>
</table>
</form>

<script type="text/javascript" language="JavaScript">
<?php echo '

function showEditForm()
{
    var frm = document.forms[\'EditCustomerForm\'];
    var j = 0;
    for(i=0; i<frm.elements.length; i++)
    {
        if(frm.elements[i].type == \'submit\' || frm.elements[i].type == \'button\' || frm.elements[i].type == \'hidden\') continue;
        var txt_id = frm.elements[i].id.replace(\'_inp\',\'_txt\');
        frm.elements[i].style.display = \'\';
        document.getElementById(txt_id).style.display = \'none\';
        if(j % 2 == 0)
        {
            frm.elements[i].parentNode.parentNode.style.backgroundColor = \'#FAFAE7\';
        };
        j++;
    };
    document.getElementById(\'form_buttons\').style.display = \'\';
    document.getElementById(\'elink\').style.display = \'none\';
};

function hideEditForm()
{
    var frm = document.forms[\'EditCustomerForm\'];
    for(i=0; i<frm.elements.length; i++)
    {
        if(frm.elements[i].type == \'submit\' || frm.elements[i].type == \'button\' || frm.elements[i].type == \'hidden\') continue;
        var txt_id = frm.elements[i].id.replace(\'_inp\',\'_txt\');
        frm.elements[i].style.display = \'none\';
        document.getElementById(txt_id).style.display = \'\';
        frm.elements[i].parentNode.parentNode.style.backgroundColor = \'#FFFFFF\';
    };
    document.getElementById(\'form_buttons\').style.display = \'none\';
    document.getElementById(\'elink\').style.display = \'\';
};

'; ?>

</script>