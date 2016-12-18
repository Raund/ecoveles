<?php /* Smarty version 2.6.26, created on 2016-09-11 11:30:55
         compiled from print_button.html */ ?>
<form action="" class="noprint">
<input id="print_button" <?php if ($this->_tpl_vars['btn_image']): ?>type="image" src="<?php echo @URL_IMAGES; ?>
/printer-icon.gif"<?php else: ?>type="button"<?php endif; ?> value="<?php echo 'Печать'; ?>
" alt="<?php echo 'Печать'; ?>
" title="<?php echo 'Печать'; ?>
" onclick="window.print();return false;"/>
</form>