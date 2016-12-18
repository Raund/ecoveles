<?php /* Smarty version 2.6.26, created on 2016-10-04 14:43:56
         compiled from backend/userinfo_editor/address_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'backend/userinfo_editor/address_form.html', 10, false),array('modifier', 'cat', 'backend/userinfo_editor/address_form.html', 28, false),array('function', 'html_options', 'backend/userinfo_editor/address_form.html', 42, false),)), $this); ?>
<form name="AddrForm_<?php echo $this->_tpl_vars['addr_id']; ?>
" method="post">
<input type="hidden" name="action" value="save_address" />
<table class="address_form" id="addr_<?php echo $this->_tpl_vars['addr_id']; ?>
_frm" border="0" cellspacing="0" style="display: none;" width="100%">
    <colgroup>
        <col width="30%" />
        <col width="70%" />
    </colgroup>
    <tr class="odd_line">
        <td nowrap="nowrap"><?php echo 'Имя'; ?>
:</td>
        <td><input class="txt_or_sel" type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[first_name]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
    </tr>
    <tr>
        <td nowrap="nowrap"><?php echo 'Фамилия'; ?>
:</td>
        <td><input class="txt_or_sel"  type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[last_name]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
    </tr>
    <tr class="odd_line">
        <td nowrap="nowrap" valign="top"><?php echo 'Адрес'; ?>
:</td>
        <td><textarea class="txt_or_sel"  name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[address]" rows="2" cols="17"><?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['address'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td>
    </tr>
    <tr>
        <td nowrap="nowrap"><?php echo 'Город'; ?>
:</td>
        <td><input class="txt_or_sel" type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[city]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
    </tr>
    <tr class="odd_line">
        <td nowrap="nowrap"><?php echo 'Область'; ?>
:</td>
        <td>
        <?php if ($this->_tpl_vars['states'][$this->_tpl_vars['addr_id']]): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/order_editor/states.html", 'smarty_include_vars' => array('states' => $this->_tpl_vars['states'][$this->_tpl_vars['addr_id']],'selected' => $this->_tpl_vars['addr_info']['zoneID'],'name' => ((is_array($_tmp=$this->_tpl_vars['els_prefix'])) ? $this->_run_mod_handler('cat', true, $_tmp, '[zoneID]') : smarty_modifier_cat($_tmp, '[zoneID]')),'class' => 'txt_or_sel')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <input class="txt_or_sel" type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[state]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
        <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td nowrap="nowrap"><?php echo 'Почтовый индекс'; ?>
:</td>
        <td><input class="txt_or_sel" type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[zip]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['zip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></td>
    </tr>
    <tr class="odd_line">
        <td nowrap="nowrap"><?php echo 'Страна'; ?>
:</td>
        <td>
        <?php if ($this->_tpl_vars['countries']): ?>
            <?php echo smarty_function_html_options(array('name' => ((is_array($_tmp=$this->_tpl_vars['els_prefix'])) ? $this->_run_mod_handler('cat', true, $_tmp, "[countryID]") : smarty_modifier_cat($_tmp, "[countryID]")),'options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['addr_info']['countryID'],'onChange' => "changeStates(this)",'class' => 'txt_or_sel'), $this);?>

        <?php else: ?>
            <input class="txt_or_sel" type="text" name="<?php echo $this->_tpl_vars['els_prefix']; ?>
[country]" size="17" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['addr_info']['country'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
        <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td align="right"><button type="submit"><?php echo 'Сохранить'; ?>
</button></td>
        <td align="left"><button type="button" onClick="hideEditForm(<?php echo $this->_tpl_vars['addr_id']; ?>
);"><?php echo 'Отмена'; ?>
</button></td>
    </tr>
</table>
</form>