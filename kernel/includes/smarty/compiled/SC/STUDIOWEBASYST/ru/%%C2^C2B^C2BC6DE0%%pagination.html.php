<?php /* Smarty version 2.6.26, created on 2016-09-09 12:09:41
         compiled from backend/share/pagination.html */ ?>
<?php if ($this->_tpl_vars['pages_count'] > 1): ?>
<?php if ($this->_tpl_vars['current_page'] > 1): ?>
&nbsp;<a class="listhref" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; 
 if ($this->_tpl_vars['base_vars']): ?>?<?php echo $this->_tpl_vars['base_vars']; ?>
&<?php else: ?>?<?php endif; ?>page=<?php echo $this->_tpl_vars['current_page']-1; ?>
">&lt;&lt;<?php echo 'пред'; ?>
</a>
<?php endif; ?>
<?php unset($this->_sections['pagination']);
$this->_sections['pagination']['name'] = 'pagination';
$this->_sections['pagination']['start'] = (int)1;
$this->_sections['pagination']['loop'] = is_array($_loop=$this->_tpl_vars['pages_count']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pagination']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['pagination']['show'] = true;
$this->_sections['pagination']['max'] = $this->_sections['pagination']['loop'];
if ($this->_sections['pagination']['start'] < 0)
    $this->_sections['pagination']['start'] = max($this->_sections['pagination']['step'] > 0 ? 0 : -1, $this->_sections['pagination']['loop'] + $this->_sections['pagination']['start']);
else
    $this->_sections['pagination']['start'] = min($this->_sections['pagination']['start'], $this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] : $this->_sections['pagination']['loop']-1);
if ($this->_sections['pagination']['show']) {
    $this->_sections['pagination']['total'] = min(ceil(($this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] - $this->_sections['pagination']['start'] : $this->_sections['pagination']['start']+1)/abs($this->_sections['pagination']['step'])), $this->_sections['pagination']['max']);
    if ($this->_sections['pagination']['total'] == 0)
        $this->_sections['pagination']['show'] = false;
} else
    $this->_sections['pagination']['total'] = 0;
if ($this->_sections['pagination']['show']):

            for ($this->_sections['pagination']['index'] = $this->_sections['pagination']['start'], $this->_sections['pagination']['iteration'] = 1;
                 $this->_sections['pagination']['iteration'] <= $this->_sections['pagination']['total'];
                 $this->_sections['pagination']['index'] += $this->_sections['pagination']['step'], $this->_sections['pagination']['iteration']++):
$this->_sections['pagination']['rownum'] = $this->_sections['pagination']['iteration'];
$this->_sections['pagination']['index_prev'] = $this->_sections['pagination']['index'] - $this->_sections['pagination']['step'];
$this->_sections['pagination']['index_next'] = $this->_sections['pagination']['index'] + $this->_sections['pagination']['step'];
$this->_sections['pagination']['first']      = ($this->_sections['pagination']['iteration'] == 1);
$this->_sections['pagination']['last']       = ($this->_sections['pagination']['iteration'] == $this->_sections['pagination']['total']);
?>
<?php if ($this->_tpl_vars['current_page'] != $this->_sections['pagination']['index']): ?>
&nbsp;<a class=listerhref"" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; 
 if ($this->_tpl_vars['base_vars']): ?>?<?php echo $this->_tpl_vars['base_vars']; ?>
&<?php else: ?>?<?php endif; ?>page=<?php echo $this->_sections['pagination']['index']; ?>
"><?php echo $this->_sections['pagination']['index']; ?>
</a>
<?php else: ?>
&nbsp;<span style="color: navy;"><?php echo $this->_sections['pagination']['index']; ?>
</span>
<?php endif; ?>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['current_page'] < $this->_tpl_vars['pages_count']): ?>
&nbsp;<a class="listhref" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; 
 if ($this->_tpl_vars['base_vars']): ?>?<?php echo $this->_tpl_vars['base_vars']; ?>
&<?php else: ?>?<?php endif; ?>page=<?php echo $this->_tpl_vars['current_page']+1; ?>
"><?php echo 'след'; ?>
&gt;&gt;</a>
<?php endif; ?>
<?php endif; ?>