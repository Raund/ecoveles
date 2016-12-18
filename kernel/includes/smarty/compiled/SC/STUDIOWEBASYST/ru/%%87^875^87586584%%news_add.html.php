<?php /* Smarty version 2.6.26, created on 2016-09-28 10:11:00
         compiled from /home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/news_add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/news_add.html', 2, false),array('modifier', 'translate', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/news_add.html', 4, false),array('function', 'html_text', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/news_add.html', 29, false),array('function', 'html_textarea', '/home/ecoveles/ecoveles.com.ua/www/published/SC/html/scripts/templates/backend/news_add.html', 36, false),)), $this); ?>
<h1 class="breadcrumbs">
	<a href="<?php echo ((is_array($_tmp='?ukey=manage_news')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo 'Блог / Новости'; ?>
</a>	
	&raquo;
	<?php echo ((is_array($_tmp=$this->_tpl_vars['CurrentDivision']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

</h1>

<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="POST" name='MainForm'>
<input type="hidden" name="fACTION" value="ADD_NEWS" />

<table cellspacing="6">
<tr>
	<td><?php echo 'Приоритет сортировки'; ?>
:</td>
	<td>
		<input type=text name='DATA[priority]' value="<?php if ($this->_tpl_vars['NewsInfo']['priority']): 
 echo $this->_tpl_vars['NewsInfo']['priority']; 
 else: ?>0<?php endif; ?>" size="12" />
	</td>
</tr>
<tr>
	<td><?php echo 'Дата'; ?>
:
	</td>
	<td>
		<input type=text name='DATA[add_date]' value="<?php if ($this->_tpl_vars['NewsInfo']['add_date']): 
 echo $this->_tpl_vars['NewsInfo']['add_date']; 
 else: 
 echo $this->_tpl_vars['current_date']; 
 endif; ?>" size="12" />
	</td>
</tr>

<tr>
	<td><?php echo 'Заголовок'; ?>
 <span class="notice">(<?php echo 'не HTML'; ?>
)</span>:</td>
	<td>
				<?php echo smarty_function_html_text(array('namespace' => 'DATA','name' => 'title','values' => $this->_tpl_vars['NewsInfo'],'table' => @PRODUCTS_TABLE,'style' => "width:100%"), $this);?>

	</td>
</tr>
<tr>
	<td colspan="2">
		<?php echo 'Запись'; ?>
:<br />
				<?php echo smarty_function_html_textarea(array('namespace' => 'DATA','name' => 'textToPublication','values' => $this->_tpl_vars['NewsInfo'],'rows' => 3,'cols' => 40,'table' => @PRODUCTS_TABLE,'style' => "width:100%",'class' => 'mceEditor'), $this);?>

	
	</td>
</tr>
<tr>
	<td colspan="2">
		<?php echo 'Текст для отправки подписчикам'; ?>
:<br /> 
		<textarea cols=40 rows=6 class="mceEditor" name='DATA[textToMail]' style="width:100%;"><?php echo $this->_tpl_vars['NewsInfo']['textToMail']; ?>
</textarea>
	</td>
</tr>
<tr>
	<td align="right" valign="top"><?php echo 'Разослать эту новость подписчикам'; ?>
</td>
	<td>
		<input type="checkbox" name="DATA[emailed]" value="1"<?php if ($this->_tpl_vars['NewsInfo']['emailed']): ?> checked="checked"<?php endif; ?> />
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type=submit value="<?php echo 'Добавить'; ?>
" />
	</td>
</tr>
</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/tiny_mce_config.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>