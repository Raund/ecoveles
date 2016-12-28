<?php /* Smarty version 2.6.26, created on 2016-12-20 17:40:01
         compiled from news.frontend.shortlist.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'news.frontend.shortlist.tpl.html', 2, false),array('modifier', 'cat', 'news.frontend.shortlist.tpl.html', 5, false),array('modifier', 'set_query', 'news.frontend.shortlist.tpl.html', 9, false),array('modifier', 'escape', 'news.frontend.shortlist.tpl.html', 21, false),array('modifier', 'default', 'news.frontend.shortlist.tpl.html', 21, false),)), $this); ?>
<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" name="subscription_form" method="post" onSubmit="return validate(this);">
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['news_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<div class="news_date"><?php echo $this->_tpl_vars['news_array'][$this->_sections['i']['index']]['add_date']; ?>
</div>
	<div class="news_title"><a style="color: inherit; text-decoration: none; font-weight: inherit;" href="<?php echo ((is_array($_tmp=((is_array($_tmp="?ukey=news&blog_id=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['news_array'][$this->_sections['i']['index']]['NID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['news_array'][$this->_sections['i']['index']]['NID'])))) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
"><?php echo $this->_tpl_vars['news_array'][$this->_sections['i']['index']]['title']; ?>
</a></div>
	<?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['news_array']): ?>
	<div class="news_viewall">
		<a href="<?php echo ((is_array($_tmp="?ukey=news")) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
"><?php echo 'Дивитись все'; ?>
...</a>
	</div>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['subscribe'] == NULL): ?> 	<div class="news_subscribe">
		<?php if ($this->_tpl_vars['error_message']): ?>
		<div class="error_block"> 
		<?php echo $this->_tpl_vars['error_message']; ?>

		</div>
		<?php endif; ?>
		<?php echo 'Підписатись на новини'; ?>
:
		<div><input type="text" name="email" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['email_to_subscribe'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" title="Email" class="input_message" ></div>
		<div><input type="submit" value="<?php echo 'OK'; ?>
" >
		<?php if ($this->_tpl_vars['news_rss_link']): 
 echo 'або'; ?>
 <a href="<?php echo @URL_ROOT; ?>
/<?php echo $this->_tpl_vars['news_rss_link']; ?>
"><img src="<?php echo @URL_IMAGES_COMMON; ?>
/rss-feed.png" alt="RSS 2.0"  style="padding-left:10px;"></a><?php endif; ?>
		</div>
	</div>
	
	<input type="hidden" name="subscribe" value="yes" >

	<?php else: ?> 	
		<div class="news_thankyou"><?php echo 'Thank you for subscription!'; ?>
</div>
	<?php endif; ?>
</form>