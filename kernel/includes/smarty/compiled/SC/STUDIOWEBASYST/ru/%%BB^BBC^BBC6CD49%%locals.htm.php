<?php /* Smarty version 2.6.26, created on 2016-12-19 01:30:30
         compiled from backend/locals.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/locals.htm', 2, false),array('modifier', 'translate', 'backend/locals.htm', 4, false),array('modifier', 'escape', 'backend/locals.htm', 4, false),array('modifier', 'default', 'backend/locals.htm', 11, false),array('modifier', 'transcape', 'backend/locals.htm', 11, false),array('modifier', 'count_characters', 'backend/locals.htm', 81, false),array('modifier', 'string_format', 'backend/locals.htm', 85, false),array('modifier', 'set_query', 'backend/locals.htm', 122, false),array('function', 'cycle', 'backend/locals.htm', 53, false),)), $this); ?>
	<h1 class="breadcrumbs">
		<a href="<?php echo ((is_array($_tmp='?ukey=languages')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo 'Языки и перевод'; ?>
</a>
		&raquo;
		<?php echo ((is_array($_tmp=$this->_tpl_vars['CurrentDivision']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['Language']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

	</h1>
	
	<?php echo $this->_tpl_vars['MessageBlock']; ?>

	<link rel="stylesheet" href="<?php echo @URL_CSS; ?>
/tabber.css" type="text/css" media="screen" />

	<form method="post" action="<?php echo ((is_array($_tmp='ukey=find_local')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
">
		<input type="text" size="20" name="searchstr" rel="<?php echo 'Найти строку'; ?>
" class="input_message" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['searchstr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, 'loc_find_string') : smarty_modifier_default($_tmp, 'loc_find_string')))) ? $this->_run_mod_handler('transcape', true, $_tmp) : smarty_modifier_transcape($_tmp)); ?>
" />
		<input type="submit" name="find" value="<?php echo 'Найти'; ?>
" />
	</form>
	
	<div class="tabber" id="tabber01" style="display: none;">
	<?php $_from = $this->_tpl_vars['local_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['local_group']):
?>
	<div class="tabbertab<?php if ($this->_tpl_vars['locals_type'] == $this->_tpl_vars['local_group']['id']): ?> tabbertabdefault<?php endif; ?>">
	
		<h3><?php echo $this->_tpl_vars['local_group']['name']; ?>
</h3>
		<?php if ($this->_tpl_vars['locals_type'] == $this->_tpl_vars['local_group']['id']): ?>
		<table cellpadding="4" cellspacing="0" style="width:100%">
			<tr>
				<td>
				<select id="hndl-change-subgroup">
				<?php $_from = $this->_tpl_vars['local_groups'][$this->_tpl_vars['locals_type']]['sub_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fename'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fename']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_sub_group']):
        $this->_foreach['fename']['iteration']++;
?>
				<option value='<?php echo ((is_array($_tmp="&sub_group=".($this->_tpl_vars['_sub_group']['id']))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
'<?php if ($this->_tpl_vars['sub_group'] == $this->_tpl_vars['_sub_group']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_sub_group']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>				
				</select>
				&nbsp;
				<input type="button" value="<?php echo 'Добавить новую строку'; ?>
" onclick="addLocalRow('<?php echo $this->_tpl_vars['sub_group']; ?>
');" />
				&nbsp;
				<input type="button" onclick="loc_highlightNotTranslatedLocals()" value="<?php echo 'Подсветить непереведенные строки'; ?>
" /><br />
				</td>
				<td align="right">
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<form method="post" action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
">
					<input type="hidden" name="local_group" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['locals_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
					<table cellpadding="4" cellspacing="0" id="locals_tbl" style="width:100%" class="grid">
					<tr id="<?php echo $this->_tpl_vars['sub_group']; ?>
_row" class="gridsheader">
						<td style="width:1%;"><?php echo 'ID'; ?>
</td>
						<?php if (! $this->_tpl_vars['is_deflang']): ?><td nowrap="nowrap">
						<?php echo 'Основной'; ?>
 ( <?php if ($this->_tpl_vars['DefLanguage']->getThumbnailURL()): ?><img alt="<?php echo 'Флаг'; ?>
" src="<?php echo $this->_tpl_vars['DefLanguage']->getThumbnailURL(); ?>
" /><?php endif; 
 echo ((is_array($_tmp=$this->_tpl_vars['DefLanguage']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 )
						</td><?php endif; ?>
						<td style="width: 50%">
						<?php echo 'Перевод'; ?>
 ( <?php if ($this->_tpl_vars['Language']->getThumbnailURL()): ?><img alt="<?php echo 'Флаг'; ?>
" src="<?php echo $this->_tpl_vars['Language']->getThumbnailURL(); ?>
" /><?php endif; 
 echo ((is_array($_tmp=$this->_tpl_vars['Language']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 )
						</td>
						<td width="1%">&nbsp;</td>
					</tr>
					<?php $_from = $this->_tpl_vars['newlocal_key'][$this->_tpl_vars['sub_group']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['_newlocal_key']):
?>
					<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1','name' => $this->_tpl_vars['sub_group']), $this);?>
"<?php if ($this->_tpl_vars['reserved_loc_id'] == $this->_tpl_vars['_newlocal_key'] || ( $this->_tpl_vars['reserved_loc_id'] == '_all_empty_loc_id' && ! $this->_tpl_vars['_newlocal_key'] )): 
 $this->assign('reserved_loc_id', ""); ?> style="background:red!important;"<?php endif; ?>>
						<td>
						<input type="text" name="newlocal_key[<?php echo $this->_tpl_vars['sub_group']; ?>
][]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['_newlocal_key'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="30" />
						</td>
						<?php if (! $this->_tpl_vars['is_deflang']): ?><td>
						<input class="loc_local_defvalue" type="text" name="newlocal_defvalue[<?php echo $this->_tpl_vars['sub_group']; ?>
][]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['newlocal_defvalue'][$this->_tpl_vars['sub_group']][$this->_tpl_vars['i']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="40" />
						</td><?php endif; ?>
						<td>
						<input class="loc_local_value" type="text" name="newlocal_value[<?php echo $this->_tpl_vars['sub_group']; ?>
][]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['newlocal_value'][$this->_tpl_vars['sub_group']][$this->_tpl_vars['i']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="40" />
						</td>
						<td>&nbsp;</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['DefLocalStrings'][$this->_tpl_vars['sub_group']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['local']):
?>
					<tr class="<?php echo smarty_function_cycle(array('values' => 'gridline,gridline1','name' => $this->_tpl_vars['sub_group']), $this);?>
"<?php if ($this->_tpl_vars['reserved_loc_id'] == $this->_tpl_vars['local']['id']): ?> style="background:red!important;"<?php endif; ?>>
						<td>
						<?php if ($this->_tpl_vars['reserved_loc_id'] == $this->_tpl_vars['local']['id']): ?><a name="ef_<?php echo $this->_tpl_vars['local']['id']; ?>
"></a><?php endif; ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['local']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

						</td>
						<?php if (! $this->_tpl_vars['is_deflang']): ?><td>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['local']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

						</td><?php endif; ?>
						<td>
						<?php if ($this->_tpl_vars['locals']): ?>
						<?php $this->assign('_locval', $this->_tpl_vars['locals'][$this->_tpl_vars['local']['id']]); ?>
						<?php else: ?>
						<?php $this->assign('_locval', $this->_tpl_vars['LocalStrings'][$this->_tpl_vars['local']['id']]); ?>
						<?php endif; ?>
						<?php if (( ((is_array($_tmp=$this->_tpl_vars['LocalStrings'][$this->_tpl_vars['local']['id']])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true)) ) > 50): ?>
						<?php $this->assign('rows', ((is_array($_tmp=$this->_tpl_vars['local']['value'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true))); ?>
						<?php $this->assign('rows', $this->_tpl_vars['rows']/60); ?>
						<?php if ($this->_tpl_vars['rows'] > 3): ?>
							<?php $this->assign('rows', ((is_array($_tmp=$this->_tpl_vars['rows'])) ? $this->_run_mod_handler('string_format', true, $_tmp, '%d') : smarty_modifier_string_format($_tmp, '%d'))); ?>
						<?php else: ?>
							<?php $this->assign('rows', 3); ?>
						<?php endif; ?>
						
						<textarea name="locals[<?php echo $this->_tpl_vars['local']['id']; ?>
]" class="loc_local_value" rows="<?php echo $this->_tpl_vars['rows']; ?>
" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['_locval'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
						<?php else: ?>
						<input class="loc_local_value" type="text" size="40" name="locals[<?php echo $this->_tpl_vars['local']['id']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['_locval'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
						<?php endif; ?>
						</td>
						<td>
							<a href='<?php echo ((is_array($_tmp="local_id=".($this->_tpl_vars['local']['id'])."&act=delloc")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' title="<?php echo 'Удалить строку'; ?>
" onclick="return window.confirm('<?php echo 'Вы уверены, что хотите удалить запись?'; ?>
');"><img align="left" alt="<?php echo 'Удалить строку'; ?>
" src="<?php echo @URL_IMAGES; ?>
/remove.gif" /></a>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
					<tr class="gridsfooter">
						<td colspan="<?php if (! $this->_tpl_vars['is_deflang']): ?>4<?php else: ?>3<?php endif; ?>">
							<br />
							<input type="submit" id="btn-save-locals" value="<?php echo 'Сохранить'; ?>
" name="save_locals" />
						</td>
					</tr>
					</table>
				</form>
				</td>
			</tr>
		</table>
		<?php endif; ?>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	</div>

<?php echo '<script type="text/javascript">
	var tabberOptions = {
	
	  \'onClick\': function(argsObj) {
	
	  	'; ?>
if(this.GroupIDs[argsObj.index]!="<?php echo $this->_tpl_vars['locals_type']; ?>
"){
	  		document.location.href = "<?php echo ((is_array($_tmp='locals_type=')) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
&locals_type="+this.GroupIDs[argsObj.index];
		  	return false;
	  	}
	  	<?php echo '
	  },
	
	  \'onLoad\': function(argsObj) {
	    /* Load the first tab */
	    this.GroupIDs = ['; 
 $_from = $this->_tpl_vars['local_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foreachname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foreachname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['local_group']):
        $this->_foreach['foreachname']['iteration']++;
?>'<?php echo $this->_tpl_vars['local_group']['id']; ?>
'<?php if (! ($this->_foreach['foreachname']['iteration'] == $this->_foreach['foreachname']['total'])): ?>,<?php endif; 
 endforeach; endif; unset($_from); 
 echo '];
		},
		manualStartup:true
	}
</script>
'; ?>

<script type="text/javascript" src="<?php echo @URL_JS; ?>
/tabber.js">
</script>	
<script type="text/javascript"><!--
<?php echo '
	tabberAutomatic(tabberOptions);
	getLayer(\'tabber01\').style.display = "block";
	
	function loc_highlightNotTranslatedLocals(className){
		
		var inputEntries = getElementsByClass(className?className:\'loc_local_value\', getLayer(\'locals_tbl\'));
		for(var i=0; i<inputEntries.length; i++){
			
			if(!inputEntries[i].value){
				inputEntries[i].style.backgroundColor = \'#FFBFBF\';
			}
		}
	}
	
	function addLocalRow(subgroup_id){
		
		var rowIndex = getLayer(subgroup_id+\'_row\').rowIndex+1;
		
		var TableObj = document.getElementById(\'locals_tbl\');
		var RowObj = TableObj.insertRow(rowIndex);
		RowObj.className = \'row local\';
		var CellObj;
		
		CellObj = RowObj.insertCell(RowObj.cells.length);
		CellObj.innerHTML = \'<input onchange="beforeUnloadHandler_contentChanged = true;" type="text" name="newlocal_key[\'+subgroup_id+\'][]" value="" size="30" />\';
		'; ?>

		<?php if ($this->_tpl_vars['Language']->id != $this->_tpl_vars['DefLanguage']->id): ?>
		CellObj = RowObj.insertCell(RowObj.cells.length);
		CellObj.innerHTML = '<input onchange="beforeUnloadHandler_contentChanged = true;" type="text" name="newlocal_defvalue['+subgroup_id+'][]" value="" size="40" />';
		<?php endif; ?>
		<?php echo '
		CellObj = RowObj.insertCell(RowObj.cells.length);
		CellObj.innerHTML = \'<input onchange="beforeUnloadHandler_contentChanged = true;" class="loc_local_value" type="text" name="newlocal_value[\'+subgroup_id+\'][]" value="" size="40" />\';
		CellObj = RowObj.insertCell(RowObj.cells.length);
	}
	Behaviour.register({
		\'.loc_local_value\': function(e){
			e.onchange = function(){
				beforeUnloadHandler_contentChanged = true;
			}
		},
		\'#btn-save-locals\': function(e){
			e.onclick = function(){
				beforeUnloadHandler_contentChanged = false;
			}
		}
		
		});
		
	getLayer(\'hndl-change-subgroup\').onchange = function(){
		
		document.location.href = select_getCurrValue(this);
	}
'; ?>

	<?php if ($this->_tpl_vars['highlight_empty_defstrings']): ?>
		loc_highlightNotTranslatedLocals(<?php if (! $this->_tpl_vars['is_deflang']): ?>'loc_local_defvalue'<?php endif; ?>);
	<?php endif; ?>
//--->
</script>