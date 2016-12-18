<?php /* Smarty version 2.6.26, created on 2014-08-12 12:31:51
         compiled from UsersIndex.html */ ?>
<script type="text/javascript">
var contact_new = {user_id: "<?php echo $this->_tpl_vars['user_id']; ?>
", user_status: "<?php echo $this->_tpl_vars['user_status']; ?>
", status: "<?php echo $this->_tpl_vars['status']; ?>
", contact_id: '<?php echo $this->_tpl_vars['contact_id']; ?>
', last_time: "<?php echo $this->_tpl_vars['last_time']; ?>
"};
if (contact_new.user_id != contact.user_id) {
	location.href = location.href;
}
$("#last_time").html(contact_new.last_time);

var UserControl;
$(document).ready(function () {	
	UserControl = new WbsEditUser({compose_mail: 1, editable: <?php if ($this->_tpl_vars['right']['contact'] >= 3 || $this->_tpl_vars['right']['admin']): ?>1<?php else: ?>0<?php endif; ?>, type: <?php echo $this->_tpl_vars['type']; ?>
, super_main_fields: <?php echo $this->_tpl_vars['super_main_fields']; ?>
, main_fields: <?php echo $this->_tpl_vars['main_fields']; ?>
, groups: <?php echo $this->_tpl_vars['js']; ?>
, contact: "<?php echo $this->_tpl_vars['contact_id']; ?>
", saveUrl: "?mod=users&act=edit&ajax=1", photoField: "<?php echo $this->_tpl_vars['photo_field']; ?>
"});
	$(".DateField").datepicker({
		yearRange: '1900:2050', 
		closeAtTop: false, 
		buttonImage: "<?php echo $this->_tpl_vars['url']['common']; ?>
img/calendar.gif", 
		buttonImageOnly: true, 
		showOn: "button", 
		showOtherMonths: true, 
		firstDay: 1, 
		dateFormat: '<?php echo $this->_tpl_vars['dateFormat']; ?>
'
	});
}); 

WbsData.set({countries:<?php echo $this->_tpl_vars['countries']; ?>
});
</script>

<div class="usertop">
   <table class="contact" cellspacing="0" cellpadding="0" border="0">
     <tr>
     <?php if ($this->_tpl_vars['photo_field']): ?>
     <td class="photo">
	  	<div id="CURRENT_PHOTO">
		<div id="<?php echo $this->_tpl_vars['photo_field']; ?>
" class="field" >
			<div class="edit"></div>
		</div>
		</div>
	  </td>	
	  <?php endif; ?>
      <td class="<?php if ($this->_tpl_vars['photo_field']): ?>contacts <?php endif; ?>group<?php if (3 > $this->_tpl_vars['right']['contact']): ?> not-editable<?php endif; ?>" id="CONTACT">
	   <div class="large inline l" id="display_name"><div class="edit" title="Click to edit"><?php echo $this->_tpl_vars['name']; ?>
</div></div>
	   <div id="editMain" style="padding-top:40px"></div>
	   <div style="clear:both; height:10px">&nbsp;</div>
	  </td>
	 
	</tr>
   </table>
</div>

<?php if ($this->_tpl_vars['right']['contact']): ?>
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groups'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groups']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['g']):
        $this->_foreach['groups']['iteration']++;
?>
<?php if (($this->_foreach['groups']['iteration']-1)): ?>
<div id="group<?php echo ($this->_foreach['groups']['iteration']-1); ?>
" class="group<?php if (3 > $this->_tpl_vars['right']['contact']): ?> not-editable<?php endif; ?>"><div class="title"><a class="title click" title="Click to edit"><?php echo $this->_tpl_vars['g']['name']; ?>
</a></div></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['is_mw']): ?><div id="FOLDER" class="group"><div class="title" ></div></div><?php endif; ?>
<div class="group" id="bottom_save" style="display:none; padding-bottom:10px"></div>
<?php if (! $this->_tpl_vars['is_mw']): ?>
<div class="group" id="META">
	<div class="title">
		<a href="javascript:void(0)" onclick="$(this).next().toggle()" class="title click" >Additional information</a>
		<div class="create-info" style="display:none">
Contact ID: <?php echo $this->_tpl_vars['contact_info']['C_ID']; ?>
<br />
Adding date: <?php if ($this->_tpl_vars['contact_info']['C_CREATEDATETIME']): 
 echo $this->_tpl_vars['contact_info']['C_CREATEDATETIME']; 
 else: ?>&lt;unknown&gt;<?php endif; ?><br />
Added by: <?php if ($this->_tpl_vars['contact_info']['C_CREATENAME']): 
 echo $this->_tpl_vars['contact_info']['C_CREATENAME']; 
 else: ?>&lt;unknown&gt;<?php endif; ?><br />
Adding application: <?php echo $this->_tpl_vars['contact_info']['C_CREATEAPP_ID']; ?>
<br />
Adding method: <?php echo $this->_tpl_vars['contact_info']['C_CREATEMETHOD']; ?>
<br />
		<?php if ($this->_tpl_vars['contact_info']['C_MODIFYDATETIME']): ?>
			<div class="modify-info">
				Last changes made by <?php if ($this->_tpl_vars['contact_info']['C_MODIFYNAME']): 
 echo $this->_tpl_vars['contact_info']['C_MODIFYNAME']; 
 else: ?>&lt;unknown&gt;<?php endif; ?>  <?php echo $this->_tpl_vars['contact_info']['C_MODIFYDATETIME']; ?>
 <br />
			</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['right']['admin']): ?>
		<div class="modify-info">
		Personal page: <a target="_blank" href="<?php echo $this->_tpl_vars['link']; ?>
"><?php echo $this->_tpl_vars['link']; ?>
</a>
		</div>
		<?php endif; ?>
		</div> 
	</div>	
</div>
<?php endif; ?>
<?php endif; ?>