<?php /* Smarty version 2.6.26, created on 2016-11-15 20:39:34
         compiled from /home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/subscribers.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/subscribers.html', 2, false),array('modifier', 'replace', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/subscribers.html', 34, false),array('function', 'cycle', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/subscribers.html', 32, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['CurrentDivision']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<p><?php echo 'Здесь вы можете просматривать и удалять подписчиков на новости (блог) вашего интернет-магазина, импортировать новые записи в список и экспортировать их в файл (текстовый файл, в котором каждый электронный адрес указан на отдельной строке).'; ?>

<br />
<?php if ($this->_tpl_vars['Message'] != ''): ?>
	<div class="<?php if ($this->_tpl_vars['MessageCode'] == '1'): ?>ok_msg_f<?php else: ?>error_msg_f<?php endif; ?>"><?php echo $this->_tpl_vars['Message']; ?>
</div>
<?php endif; ?>

<table cellpadding="15" cellspacing="0" width="100%">
<tr>
	<td valign="top">
		<table class="grid" width=100%>
		<tr class="gridsheader">
			<td><?php echo 'Подписчики на новости'; 
 if ($this->_tpl_vars['subscribers_count'] > 0): ?> (<?php echo $this->_tpl_vars['subscribers_count']; ?>
)<?php endif; ?></td>
			<td></td>
		</tr>
		
		<?php if (@CONF_BACKEND_SAFEMODE == 1): ?>
		<tr>
			<td align="center" colspan="2"><?php echo 'Заблокировано к показу в защищенном режиме'; ?>
</td>
		</tr>
		<?php else: ?>
		
		<?php if ($this->_tpl_vars['subscribers_count'] == 0): ?>
		<tr>
			<td align="center" colspan="2">&lt; <?php echo 'нет'; ?>
 &gt;</td>
		</tr>
		<?php else: ?>
		
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['subscribers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<a class=standard href="mailto:<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['Email'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")))) ? $this->_run_mod_handler('replace', true, $_tmp, ">", "&gt;") : smarty_modifier_replace($_tmp, ">", "&gt;")))) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "&amp;") : smarty_modifier_replace($_tmp, "'", "&amp;")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '&quot;') : smarty_modifier_replace($_tmp, '"', '&quot;')))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', "20%") : smarty_modifier_replace($_tmp, ' ', "20%")); ?>
">
					<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['Email'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<", "&lt;") : smarty_modifier_replace($_tmp, "<", "&lt;")))) ? $this->_run_mod_handler('replace', true, $_tmp, ">", "&gt;") : smarty_modifier_replace($_tmp, ">", "&gt;")))) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "&amp;") : smarty_modifier_replace($_tmp, "'", "&amp;")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '&quot;') : smarty_modifier_replace($_tmp, '"', '&quot;')); ?>

				</a>
			</td>
			<td width=1%>
				<a href="<?php echo $this->_tpl_vars['urlToSubscibe']; ?>
&unsub=<?php echo $this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['Email64']; ?>
" onclick="if(window.confirm('<?php echo 'Вы уверены?'; ?>
'))return true;else return false;">
					<img src="images_common/remove.gif" border=0 alt="<?php echo 'Удалить'; ?>
" border=0>
				</a>
			</td>
		</tr>
		<?php endfor; endif; ?>
		
		<?php if ($this->_tpl_vars['navigator']): ?>
		<tr class="gridsfooter">
			<td colspan=2>
				<?php echo $this->_tpl_vars['navigator']; ?>

			</td>
		</tr>
		<?php endif; ?>
		
		<?php endif; ?>
		<?php endif; ?>
		
		</table>
		
	</td>
	<td style="padding:0px;background-color: #666666;width:1px;"><hr style="height:100%; width:1px;" /></td>
	<td valign="top">
		<form method="post" action="" enctype="multipart/form-data" name="formsubscrlist" style="padding: 15px; margin:0px;">
			<?php if ($this->_tpl_vars['allow_upload']): ?>
			<input type="radio" name="fACTION" value="fLoadSubscribersListFile" id="subscr_act_upload" />
			<label for="subscr_act_upload"><?php echo 'Импорт подписчиков из текстового файла'; ?>
</label>
			<br />
			<input type="file" name="fSubscribersListFile" />
			<hr />
			<?php endif; ?>
			<input type="radio" name="fACTION" value="fExportSubscribersList" id="subscr_act_export" />
			<label for="subscr_act_export"><?php echo 'Экспорт списка подписчиков в текстовый файл'; ?>
</label>
			<hr />
			<input type="radio" name="fACTION" value="fEraseSubscribersList" id="subscr_act_erase" />
			<label for="subscr_act_erase"><?php echo 'Удалить все'; ?>
</label>
			<hr />
			<input type="submit" onclick="if(document.formsubscrlist.fACTION[2].checked)return window.confirm('<?php echo 'Вы уверены?'; ?>
');" value="<?php echo 'OK'; ?>
" />
		</form>
	</td>
</tr>
</table>