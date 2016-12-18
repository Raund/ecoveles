<?php /* Smarty version 2.6.26, created on 2016-10-10 14:58:07
         compiled from address_editor.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'set_query_html', 'address_editor.tpl.html', 5, false),)), $this); ?>

<?php echo $this->_tpl_vars['MessageBlock']; ?>


<form action="<?php echo ((is_array($_tmp='')) ? $this->_run_mod_handler('set_query_html', true, $_tmp) : smarty_modifier_set_query_html($_tmp)); ?>
" method="post" name="editAddress">
<input type="hidden" name="action" id="address-action" value="save" >

<p><?php echo '<font color=red>*</font> обязательны для заполнения'; ?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "address_form.html", 'smarty_include_vars' => array('name_space' => 'address','address' => $this->_tpl_vars['address'],'form_name' => 'editAddress','ukey' => 'address_editor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<input type="hidden" name="action" value="save">
		
<p><input type=submit name='save' value='<?php echo 'Сохранить'; ?>
'></p>

</form>

<script type="text/javascript">
<?php echo '
/*var hndls = {
	\'.country_box\': function(e){
		e.onchange = function(){

			var objForm = getFormByElem(this);
			getLayer(\'address-action\').value = \'change_country\';
			objForm.submit();
		}
	}
};*/
//Behaviour.register(hndls);
'; ?>

</script>