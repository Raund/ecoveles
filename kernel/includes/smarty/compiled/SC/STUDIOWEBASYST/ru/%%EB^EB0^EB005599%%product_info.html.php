<?php /* Smarty version 2.6.26, created on 2016-09-08 20:48:53
         compiled from product_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'component', 'product_info.html', 3, false),)), $this); ?>
<table style="width: 100%; padding: 0px;">
<tr>
<td><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'product_name','overridestyle' => ''), $this);?>
<!-- cpt_container_end --></td>
</tr>
<tr>
<td id="prddeatailed_container">
<?php echo smarty_function_component(array('cpt_id' => 'product_images'), $this);?>

<!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'product_params_selectable','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_params_fixed','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_rate_form','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_price','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_add2cart_button','request_product_count' => 'request_product_count','overridestyle' => ':nzuorx'), $this);
 echo smarty_function_component(array('cpt_id' => 'product_description','overridestyle' => ''), $this);?>
<!-- cpt_container_end -->
</td>
</tr>
<tr>
<td><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'product_discuss_link','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_related_products','overridestyle' => ''), $this);
 echo smarty_function_component(array('cpt_id' => 'product_details_request','overridestyle' => ''), $this);?>
<!-- cpt_container_end --></td>
</tr>
</table>