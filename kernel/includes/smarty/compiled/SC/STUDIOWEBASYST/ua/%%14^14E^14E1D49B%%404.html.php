<?php /* Smarty version 2.6.26, created on 2016-09-08 22:51:37
         compiled from 404.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '404.html', 4, false),)), $this); ?>
<div id="all-container" style="padding:0px 20px;">
	<h1 style="font-size: 200%; margin-top: 10px;">
	<span style="background-color: #ddeeff;font-size: 150%; padding: 20px 10px 5px 10px;">404</span> &mdash; <?php echo 'Не знайдено'; ?>
</h1>
	<h4><?php echo 'Requested page was not found'; ?>
: <span><?php echo ((is_array($_tmp=$this->_tpl_vars['link404'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></h4>
	<p><?php echo 'Перейдіть по ссилці:'; ?>
</p>
	<ul>
<li style="padding-bottom: 5px;"><a href="<?php echo @CONF_FULL_SHOP_URL; ?>
" style="font-weight: bold; font-size: 110%"><?php echo ((is_array($_tmp=@CONF_SHOP_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a> <span style="color: #999; font-weight: bold"> — <?php echo 'Головна сторінка'; ?>
</span></li>
</ul>
</div>