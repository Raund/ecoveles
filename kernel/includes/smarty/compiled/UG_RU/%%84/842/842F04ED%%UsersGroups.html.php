<?php /* Smarty version 2.6.26, created on 2014-06-30 12:40:13
         compiled from UsersGroups.html */ ?>
<style type="text/css">
	div.title.light {/*border-bottom: 1px solid #D8DADC*/}
	div.group {margin-left: 20px}
</style>
<div id="groups" class="group-select-container">
<table class="groups" align="center">
<tr>
	<td><h4>Included</h4>
		<div class="select-container"><select id="groups_in" name="groups_in[]" size="8" style="width: 250px;" multiple="multiple"></select></div>
	</td>
	<td width="20" align="center" valign="middle" style="vertical-align: middle">
	<div id="groups_control" class="control-btns">
		<div class="wbs-move-btn"><a  onclick="moveGroups('out', 'in');" href="#">&larr;</a></div>
		<div class="wbs-move-btn"><a onclick="moveGroups('in', 'out');" href="#">&rarr;</a></div>
	</div>
	</td>
	<td><h4>Not Included</h4>
		<div class="select-container"><select id="groups_out" name="groups_out[]" size="8" style="width: 250px;" multiple="multiple"></select></div>
	</td>
</tr>
<tr>
<td colspan="3" align="center" style="padding-top:15px;">
	<input type="button" disabled="disabled" id="groups_save" value="Save" /> &nbsp;&nbsp;
	<input type="button" disabled="disabled" id="groups_cancel" value="Cancel" />
</td>
</tr>
</table>
</div>

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

	var groups = <?php echo $this->_tpl_vars['groups']; ?>
;
	var login = "<?php echo $this->_tpl_vars['login']; ?>
";	
	for (var i = 0; i < groups.length; i++) {
		$("#groups_" + (groups[i].UG_F ? "in" : "out")).append('<option value="'+ groups[i].UG_ID +'">' + groups[i].UG_NAME + '</option>');
	}
	$("#groups_in").dblclick(function () {moveGroups('in', 'out');});
	$("#groups_out").dblclick(function () {moveGroups('out', 'in');});
	$("#groups_cancel").click(function () {
		$("#groups_save").add("#groups_cancel").attr('disabled', 'disabled');
		$("#groups_in").add("#groups_out").empty();
		for (var i = 0; i < groups.length; i++) {
			$("#groups_" + (groups[i].UG_F ? "in" : "out")).append('<option value="'+ groups[i].UG_ID +'">' + groups[i].UG_NAME + '</option>');
		}	
	});
	$("#groups_save").click(function () {
		$("#groups_save").add("#groups_cancel").attr('disabled', 'disabled');
		$("#groups_in").add("#groups_out").children(":selected").attr("selected", "");
		var group_ids = new Array();
		$("#groups_in option").each(function (i) {
			group_ids.push($(this).val());
		});
		$.post("index.php?mod=users&act=groups&ajax=1", {"groups_in[]" : group_ids, "uid": login}, function (response) {
			if (response.status == 'OK') {
				groups = response.data.groups;
				var str = new Array();
				for (var i = 0; i < groups.length; i++) {
					if (groups[i].UG_F) {
						str.push(groups[i].UG_NAME);
					}					
				}
				$("#user-groups").html(str.join(', '));				
				$("#user-apps").html(response.data.apps.join(', '));
				
			}
		}, "json");
	});
	
function moveGroups(from, to) {
	if ($("#groups_save").is(":disabled") && $("#groups_" + from + " option:selected").length > 0) {
		$("#groups_save").add("#groups_cancel").attr('disabled', '');
	}
	$("#groups_" + from + " option:selected").each(function () {
		$(this).appendTo("#groups_" + to).attr("selected", "");
	});
}
		
</script>