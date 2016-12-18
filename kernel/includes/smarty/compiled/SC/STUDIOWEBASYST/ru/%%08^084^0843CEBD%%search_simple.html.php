<?php /* Smarty version 2.6.26, created on 2016-09-08 21:18:39
         compiled from search_simple.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'search_simple.html', 24, false),)), $this); ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/category.js"></script>
<center>
<?php if ($this->_tpl_vars['products_to_show_count'] > 0): ?>

	<p><?php echo 'Найдено '; ?>
 <b><?php echo $this->_tpl_vars['products_found']; ?>
</b> <?php echo 'продукт(ов)'; ?>
</p>

	<?php if ($this->_tpl_vars['string_product_sort']): ?><p id="cat_product_sort"><?php echo $this->_tpl_vars['string_product_sort']; ?>
</p><?php endif; ?>
	<?php if (@CONF_ALLOW_COMPARISON_FOR_SIMPLE_SEARCH): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "comparison_products_button.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['search_navigator']): ?><p><?php echo $this->_tpl_vars['search_navigator']; ?>
</p><?php endif; ?>

	<table cellpadding=6 border=0 width=95%>
		<?php unset($this->_sections['i1']);
$this->_sections['i1']['name'] = 'i1';
$this->_sections['i1']['loop'] = is_array($_loop=$this->_tpl_vars['products_to_show']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i1']['max'] = (int)$this->_tpl_vars['products_to_show_count'];
$this->_sections['i1']['show'] = true;
if ($this->_sections['i1']['max'] < 0)
    $this->_sections['i1']['max'] = $this->_sections['i1']['loop'];
$this->_sections['i1']['step'] = 1;
$this->_sections['i1']['start'] = $this->_sections['i1']['step'] > 0 ? 0 : $this->_sections['i1']['loop']-1;
if ($this->_sections['i1']['show']) {
    $this->_sections['i1']['total'] = min(ceil(($this->_sections['i1']['step'] > 0 ? $this->_sections['i1']['loop'] - $this->_sections['i1']['start'] : $this->_sections['i1']['start']+1)/abs($this->_sections['i1']['step'])), $this->_sections['i1']['max']);
    if ($this->_sections['i1']['total'] == 0)
        $this->_sections['i1']['show'] = false;
} else
    $this->_sections['i1']['total'] = 0;
if ($this->_sections['i1']['show']):

            for ($this->_sections['i1']['index'] = $this->_sections['i1']['start'], $this->_sections['i1']['iteration'] = 1;
                 $this->_sections['i1']['iteration'] <= $this->_sections['i1']['total'];
                 $this->_sections['i1']['index'] += $this->_sections['i1']['step'], $this->_sections['i1']['iteration']++):
$this->_sections['i1']['rownum'] = $this->_sections['i1']['iteration'];
$this->_sections['i1']['index_prev'] = $this->_sections['i1']['index'] - $this->_sections['i1']['step'];
$this->_sections['i1']['index_next'] = $this->_sections['i1']['index'] + $this->_sections['i1']['step'];
$this->_sections['i1']['first']      = ($this->_sections['i1']['iteration'] == 1);
$this->_sections['i1']['last']       = ($this->_sections['i1']['iteration'] == $this->_sections['i1']['total']);
?>
			<?php if (!($this->_sections['i1']['index'] % @CONF_COLUMNS_PER_PAGE)): ?><tr><?php endif; ?>
				<td valign=top width="<?php echo smarty_function_math(array('equation' => "100 / x",'x' => @CONF_COLUMNS_PER_PAGE,'format' => "%d%%"), $this);?>
">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "product_brief.html", 'smarty_include_vars' => array('product_info' => $this->_tpl_vars['products_to_show'][$this->_sections['i1']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
			<?php if (!(( $this->_sections['i1']['index']+1 ) % @CONF_COLUMNS_PER_PAGE)): ?></tr><?php endif; ?>
		<?php endfor; endif; ?>
	</table>

	<?php if ($this->_tpl_vars['search_navigator']): ?><p><?php echo $this->_tpl_vars['search_navigator']; ?>
</p><?php endif; ?>

	<?php if (@CONF_ALLOW_COMPARISON_FOR_SIMPLE_SEARCH): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "comparison_products_button.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

<?php else: ?>
	<p><?php echo 'Ничего не найдено'; ?>

<?php endif; ?>
</center>