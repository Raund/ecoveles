<?php /* Smarty version 2.6.26, created on 2016-09-28 10:10:57
         compiled from backend/news.admin_list.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'backend/news.admin_list.tpl.html', 16, false),array('modifier', 'set_query', 'backend/news.admin_list.tpl.html', 19, false),array('function', 'html_text', 'backend/news.admin_list.tpl.html', 98, false),array('function', 'html_textarea', 'backend/news.admin_list.tpl.html', 118, false),)), $this); ?>
<?php echo '
<style type="text/css">

#addnews_block{
	display: none;
}
</style>
'; ?>

<?php if (! $this->_tpl_vars['NewsEdit']): ?>

	<h1><?php echo 'Блог / Новости'; ?>
</h1>	
	
	<?php echo $this->_tpl_vars['MessageBlock']; ?>

	
	<input rel='<?php echo ((is_array($_tmp="?ukey=add_news")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' value='<?php echo 'Написать сообщение'; ?>
' type="button" class="goto" />
	<?php if ($this->_tpl_vars['LastPage'] > 1): ?>
		<?php if ($this->_tpl_vars['CurrentPage'] > 1): ?>
			&nbsp; <a class="no_underline" href ="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['CurrentPage']-1))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
">&lt;&lt; <?php echo 'пред'; ?>
</a>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['ListerRange']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_page']):
?>
			&nbsp; <?php if ($this->_tpl_vars['_page'] != $this->_tpl_vars['CurrentPage']): ?><a class="no_underline" href="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['_page']))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
"><?php echo $this->_tpl_vars['_page']; ?>
</a> <?php else: 
 echo $this->_tpl_vars['_page']; 
 endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['CurrentPage'] < $this->_tpl_vars['LastPage']): ?>
			&nbsp; <a class="no_underline" href ="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['CurrentPage']+1))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
"><?php echo 'след'; ?>
 &gt;&gt;</a>
		<?php endif; ?>
	<?php endif; ?>	
<?php $_from = $this->_tpl_vars['news_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_news']):
?>
<div class="post_block">

	<h2 class="post_title"><?php echo $this->_tpl_vars['_news']['title']; ?>
</h2>
	
	<div class="post_date"><?php echo $this->_tpl_vars['_news']['add_date']; ?>
 (<?php echo 'Приоритет сортировки'; ?>
: <?php echo $this->_tpl_vars['_news']['priority']; ?>
)
	&nbsp;
	<a href="<?php echo ((is_array($_tmp="news_number=".($this->_tpl_vars['_news']['NID']))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
"><?php echo 'Редактировать'; ?>
</a> | <a href="<?php echo ((is_array($_tmp="&delete=".($this->_tpl_vars['_news']['NID']))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
" onclick="return window.confirm('<?php echo 'Удалить?'; ?>
');"><?php echo 'Удалить'; ?>
</a>
	</div>

		
	<div class="post_content">
	<?php if ($this->_tpl_vars['news_posts'][$this->_sections['i']['index']]['picture_exists']): ?>
		<img src="<?php echo @URL_PRODUCTS_PICTURES; ?>
/<?php echo $this->_tpl_vars['_news']['picture']; ?>
" hspace="20" vspace="20" align="left" />
	<?php endif; ?>
	<?php echo $this->_tpl_vars['_news']['textToPublication']; ?>

	</div>
	
</div>
<?php endforeach; else: ?>

<?php echo 'пустой список'; ?>


<?php endif; unset($_from); ?>

<?php if ($this->_tpl_vars['LastPage'] > 1): ?>
	<input rel='<?php echo ((is_array($_tmp="?ukey=add_news")) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
' value='<?php echo 'Написать сообщение'; ?>
' type="button" class="goto" />
	<?php if ($this->_tpl_vars['CurrentPage'] > 1): ?>
		&nbsp; <a class="no_underline" href ="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['CurrentPage']-1))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
">&lt;&lt; <?php echo 'пред'; ?>
</a>
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['ListerRange']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_page']):
?>
		&nbsp; <?php if ($this->_tpl_vars['_page'] != $this->_tpl_vars['CurrentPage']): ?><a class="no_underline" href="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['_page']))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
"><?php echo $this->_tpl_vars['_page']; ?>
</a> <?php else: 
 echo $this->_tpl_vars['_page']; 
 endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['CurrentPage'] < $this->_tpl_vars['LastPage']): ?>
		&nbsp; <a class="no_underline" href ="<?php echo ((is_array($_tmp="news_page=".($this->_tpl_vars['CurrentPage']+1))) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
"><?php echo 'след'; ?>
 &gt;&gt;</a>
	<?php endif; ?>
<?php endif; ?>
<?php else: ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/tiny_mce_config.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1 class="breadcrumbs">
	<a href='<?php echo ((is_array($_tmp="news_number=")) ? $this->_run_mod_handler('set_query', true, $_tmp, $this->_tpl_vars['xRequestURI']) : smarty_modifier_set_query($_tmp, $this->_tpl_vars['xRequestURI'])); ?>
'><?php echo 'Блог / Новости'; ?>
</a>
	&raquo;
	<?php echo 'Редактирование сообщения:'; 
 if ($this->_tpl_vars['NewsInfo']['title']): ?>: <?php echo $this->_tpl_vars['NewsInfo']['title']; 
 endif; ?>
&nbsp;
</h1>

<form action="<?php echo $this->_tpl_vars['xRequestURI']; ?>
" method="POST" enctype="multipart/form-data" name='MainForm'>
	<input type=hidden name="fACTION" value="SAVE_NEWS" />
	<input type=hidden name="DATA[NID]" value="<?php echo $this->_tpl_vars['NewsInfo']['NID']; ?>
" />
	<table cellspacing="6">
	<tr>
		<td><?php echo 'Приоритет сортировки'; ?>
:</td>
		<td>
			<input type="text" name='DATA[priority]' value="<?php echo $this->_tpl_vars['NewsInfo']['priority']; ?>
" size="12" />
		</td>
	</tr>
		<tr>
			<td><?php echo 'Дата'; ?>
:</td>
			<td>
				<input type=text name='DATA[add_date]' value="<?php echo $this->_tpl_vars['NewsInfo']['add_date']; ?>
" size="12" />
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
			<td width="200"><?php echo 'Запись была отправлена подписчикам'; ?>
:</td>
			<td><b><?php if ($this->_tpl_vars['NewsInfo']['emailed']): 
 echo 'да'; 
 else: 
 echo 'нет'; 
 endif; ?></b></td>
		</tr>
		<?php if ($this->_tpl_vars['NewsInfo']['emailed']): ?>
		<tr>
			<td colspan="2"><?php echo 'Текст для отправки подписчикам'; ?>
:<br />
				<div style="background-color: white; margin-bottom:7px;padding:10px; border-width:1px;border-style:inset;border-color:black;">
				<?php echo $this->_tpl_vars['NewsInfo']['textToMail']; ?>

				</div>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td colspan="2">
				<?php echo 'Запись'; ?>
:<br />
								<?php echo smarty_function_html_textarea(array('namespace' => 'DATA','name' => 'textToPublication','values' => $this->_tpl_vars['NewsInfo'],'rows' => 3,'cols' => 40,'style' => "width:100%",'class' => 'mceEditor'), $this);?>

			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type=submit value="<?php echo 'Сохранить'; ?>
" />
			</td>
		</tr>
	</table>
</form>
<?php endif; ?>