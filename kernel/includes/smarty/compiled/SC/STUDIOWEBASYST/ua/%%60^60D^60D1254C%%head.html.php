<?php /* Smarty version 2.6.26, created on 2016-12-18 21:00:59
         compiled from head.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'head.html', 1, false),array('modifier', 'escape', 'head.html', 1, false),)), $this); ?>
<title><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('default', true, $_tmp, @CONF_DEFAULT_TITLE) : smarty_modifier_default($_tmp, @CONF_DEFAULT_TITLE)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
<?php echo $this->_tpl_vars['page_meta_tags']; ?>

<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="/published/publicdata/STUDIOWEBASYST/attachments/SC/images/favicon.ico">
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/niftycube.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="/kdm/slider/css/default.css" rel="stylesheet" type="text/css" />
<script src="/kdm/slider/js/mobilyslider.js" type="text/javascript"></script>
<script src="/kdm/slider/js/init.js" type="text/javascript"></script>