<?php /* Smarty version 2.6.26, created on 2014-06-30 12:40:09
         compiled from UsersSettings.html */ ?>
<style type="text/css">
.popup_subcr { position:absolute; width:295px; }
.popup_subcr .popup_l { background:url(img/subscr_left.gif) left top no-repeat;  }
.popup_subcr .popup_r { background:url(img/subscr_right.gif) right top no-repeat;  position:relative; }
.popup_subcr .popup_corn { background:url(img/subscr_corn.gif) left top no-repeat; width:8px; height:14px; left:-8px; position:absolute;}
.popup_content { padding:15px 15px 15px 20px;}
.popup_subcr p { margin:0; font-size:13px; white-space:normal; font-weight:normal; color:#444;}
.popup_subcr p b { color:#333;}
#password_info {padding-top: 2px}

span.red {color: red}

div.note {padding: 10px; color: red}

#TIME_ZONE_ID, #edit_TIME_ZONE_ID {margin-top: 10px}
#START_PAGE, #edit_START_PAGE {margin-top: 10px}

</style>
<script type="text/javascript">
var contact_new = {user_id: "<?php echo $this->_tpl_vars['user_id']; ?>
", user_status: "<?php echo $this->_tpl_vars['user_status']; ?>
", status: "<?php echo $this->_tpl_vars['status']; ?>
", contact_id: '<?php echo $this->_tpl_vars['contact_id']; ?>
', last_time: "<?php echo $this->_tpl_vars['last_time']; ?>
"};
if (contact_new.user_id != contact.user_id) {
	//location.href = location.href + '&tab=settings';
}
<?php if ($this->_tpl_vars['user_id']): ?>
	$("#password_info").hover(function () {
		$(this).addClass('hover'); 
		$("#password_info_link").show();
	}, function () {
		$(this).removeClass('hover'); 
		$("#password_info_link").addClass("d"); 
		setTimeout(function () {$("#password_info_link.d").hide();}, 100);
	});
	$("#password_info_link").hover(function () {$("#password_info").addClass('hover'); $("#password_info_link").removeClass('d');}, function () {$("#password_info").removeClass('hover'); $(this).hide()});
	$("#last_time").html(contact_new.last_time);
<?php endif; ?>
var SettingsControl;
$(document).ready(function() {
	SettingsControl = new WbsEditUser({editable: <?php if ($this->_tpl_vars['right']['user'] >= 3): ?>1<?php else: ?>0<?php endif; ?>,emptyValue: "unlimited", noSelect: 1, updateAll: 1, onSave: function () {$("#info").show()}, showAll: 1, groups: [['edit_settings', <?php if ($this->_tpl_vars['js']): 
 echo $this->_tpl_vars['js']; 
 else: ?>[]<?php endif; ?>], ['edit_quotas', <?php if ($this->_tpl_vars['quota_js']): 
 echo $this->_tpl_vars['quota_js']; 
 else: ?>[]<?php endif; ?>]], contact: "<?php echo $this->_tpl_vars['contact_id']; ?>
", saveUrl: "?mod=users&act=settings&ajax=1"});
	<?php if (! $this->_tpl_vars['user_id']): ?>
		SettingsControl.config.onSave = function () {location.href = location.href + '&tab=settings'}
		SettingsControl.config.onCancelAll = function () {$("a.link[href='#contact']").click()}
	<?php endif; ?>
});
</script>
<?php if (! $_GET['contentOnly']): ?>
<div class="usertop">
	<table class="contact">
    <tr>
		<td class="contacts">
		<div class="large inline l"><div class="edit"><?php echo $this->_tpl_vars['name']; ?>
</div></div>
	 	</td>
	</tr>
	</table>
</div>
<div id="edit_login" class="group" style="position:relative">
	<?php if (! $this->_tpl_vars['is_mw'] && $this->_tpl_vars['right']['user'] == 7): ?>
	<div style="float:right; width: 300px; position: absolute; right: 0; line-height: 25px; text-align: right; padding-right: 20px">
		<?php if ($this->_tpl_vars['user_status'] != 3): ?>
		<span id="user-status-change">
		<?php if ($this->_tpl_vars['status'] == -1): ?>
		<span class="red">Login temporarily disabled</span> | <a onclick="changeUserStatus(1)" href="javascript:void(0)">Enable</a>
		<?php else: ?>
		<a onclick="changeUserStatus(0)" href="javascript:void(0)">Temporarily disable login</a>
		<?php endif; ?>
		</span><br />
		<?php endif; ?>
		<a id="delete_user" href="javascript:void(0)">Delete user account</a><br />
		<script type="text/javascript">
		function changeLogin() {
			$("#login_info").hide();
			$("#invite-info").hide();
			$("#U_ID > div.dn").show();
		}	
		$("#delete_user").click(function () {
			if (confirm('User account for this contact will be removed. Are you sure?')) {
				$.post("<?php echo $this->_tpl_vars['url']['app']; ?>
?mod=users&act=delete&ajax=1", {"ids[]": <?php echo $this->_tpl_vars['contact_info']['C_ID']; ?>
, users_only: 1}, function (response) {
					if (response.status == 'OK') {
						if (response.data.deleted == 1) {
							var u = document.location.href;
							u = u.replace(/[&\?]tab=settings/i, '');
							document.location.href = u;
						} else if (response.data.self) {
							alert("You can not delete yourself!");
						}
					}
				}, "json");
			}
		});
		</script>					
	</div>
	<?php endif; ?>
	<div style="margin-right: 200px; " class="field large" id="U_ID">
		<div class="label" style="white-space:nowrap; width: auto; margin-left: 38px; font-size: 18px; width: 103px">Login name:</div>
		<div id="login_info" class="edit" style="cursor:auto; white-space:normal; font-size:18px; padding-top:2px; <?php if ($this->_tpl_vars['user_status'] == 3): ?>color: #666<?php endif; ?>">
			<?php if ($this->_tpl_vars['user_status'] == 3): ?>
			&lt;no name&gt;
			<?php else: ?>
			<?php echo $this->_tpl_vars['user_id']; ?>

			<?php endif; ?>
		</div>
		<div class="edit dn" style="display:none"><input id="input_login" type="text" /></div>

		<div class="field dn" style="display:none">
			<div class="label" style="font-size: 14px; white-space:nowrap; font-weight: normal; width: 131px; padding-top: 5px">Password:</div>
			<div class="edit"><input style="fint-size: 14px" id="login_password" type="password" /></div>
		</div>		
		<div class="field dn" style="display:none">
			<div class="label" style="font-size: 14px; font-weight: normal; width: 131px; padding-top: 5px">Confirm password:</div>
			<div class="edit"><input style="fint-size: 14px" id="login_repassword" type="password" /></div>
		</div>		
				
		<div class="field buttons dn" style="display:none">
			<div style="color: red; padding-left: 135px" id="login_error"></div>		
			<div class="label" style="white-space:nowrap; width: auto; color: #FFF; width: 130px">&nbsp;</div>
			<div class="field_controls">
				<input type="button" value="Save" id="save_login" />
				<input type="button" value="Cancel" onClick='$("#login_info").show(); $("#invite-info").show(); $("#U_ID > div.dn").hide();'/>
				<script type="text/javascript">
				$("#save_login").click(function () {
					if (!$("#input_login").val()) {
						$("#login_error").html('Please fill login name.').show();
						return false;
					}
					if ($("#login_password").val() == $("#login_repassword").val()) {
						$.post("?mod=users&act=settings&ajax=1", {C_ID: "<?php echo $this->_tpl_vars['contact_id']; ?>
", 'info[U_ID]': $("#input_login").val(), 'info[U_PASSWORD]' : $("#login_password").val()}, function (response) {
							if (response.status == 'OK') {
								location.href = "?mod=users&C_ID=<?php echo $this->_tpl_vars['contact_id']; ?>
&tab=settings";							
							} else if (response.status == 'ERR') {
								$("#login_error").html(response.error[0].text).show();
							}
						}, "json");
					} else {
						$("#login_error").html("The password and confirmation password do not match.").show();
					}
				});
				$("#U_ID .dn input[type=text]").add("#U_ID .dn input[type=password]").focus(function () {
					$("#login_error").hide();
				});
				</script>
			</div>
		</div>	
		<?php if ($this->_tpl_vars['user_status'] == 3): ?>
		<div id="invite-info" style="clear:both;padding-top:5px;">
			<div class="invite-info" id="invite-new">
<b>Invitation card</b> (give this link to your user to complete registration):<br />
<input id="invite-url" style="width:80%; margin: 5px 0 3px 0" type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['invite_url']; ?>
" />
<div id="invite-sent" <?php if (! $this->_tpl_vars['invite_datetime']): ?>style="display:none;"<?php endif; ?>>
Invitation was sent on <b id="invite-datetime"><?php echo $this->_tpl_vars['invite_datetime']; ?>
</b> but no attempts were made to login so far.		
</div>

<script type="text/javascript">
$("#invite-url").focus(function () {
	$(this).select();
}).mouseup(function(e){
    e.preventDefault();
});;
</script>
			</div>
			<div class="field">
				<a id="send_invite_now" href="?mod=users&act=mail&type=1&id=<?php echo $this->_tpl_vars['contact_id']; ?>
" <?php if ($this->_tpl_vars['invite_datetime']): ?>style="display:none"<?php endif; ?>>Send invitation now</a>
				<a id="send_invite_more" href="?mod=users&act=mail&type=1&id=<?php echo $this->_tpl_vars['contact_id']; ?>
" <?php if (! $this->_tpl_vars['invite_datetime']): ?>style="display:none"<?php endif; ?>>Send another invitation</a>
				&nbsp; or &nbsp;
				<a id="change_login" href="javascript:void(0)" onclick="changeLogin()">create login for this user yourself</a>
			</div>
			<?php if (! $this->_tpl_vars['access']): ?>
			<div id="access-note" class="note">
			<b>NOTE</b>: This user has no permissions in your WebAsyst account. 
			Customize access rights for this user before sending invitation, otherwise this user will see an empty page after logging to the account.
			</div>
			<?php endif; ?>
		</div>
    </div>
		<?php else: ?>
	</div>
	<?php if ($this->_tpl_vars['right']['user'] >= 3): ?>
	<div style="clear:both;padding-top:5px;" class="field" id="pass">
		<div class="label" style="white-space:nowrap; font-weight: normal; width: 130px; margin-left: 10px">Password:</div>
		<div id="password_info"><a href="javascript:void(0)">change</a></div>
		<div class="edit dn" style="display:none"><input id="input_password" type="password" /></div>
		<div class="field dn" style="display:none">
			<div class="label" style="font-weight: normal; width: 130px;">Confirm password:</div>
			<div class="edit"><input id="input_repassword" type="password" /></div>
		</div>		
		<div class="field buttons dn" style="display:none">
			<div class="label" style="white-space:nowrap; width: 130px;">&nbsp;</div>
			<div class="field_controls" style="float:left">
				<div id="save_error" class="error" style="color:red"></div>
				<input type="button" value="Save" id="save_password" />
				<input type="button" value="Cancel" onclick='$("#password_info").show(); $("#pass > div.dn").hide();'/>
				<script type="text/javascript">
				$("#password_info").click(function () {
					$("#password_info").hide();
					$("#pass > div.dn").show();
					$("#input_password").select();						
				});
				$("#save_password").click(function () {
					if ($("#input_password").val() == $("#input_repassword").val()) {
						$.post("?mod=users&act=settings&ajax=1", {C_ID: "<?php echo $this->_tpl_vars['contact_id']; ?>
", 'info[U_PASSWORD]': $("#input_password").val()}, function (response) {
							if (response.status == 'OK') {
								$("#password_info").show();
								$("#pass > div.dn").hide();
								$("#pass input[type=password]").val("");									
							} else if (response.status == 'ERR') {
								alert(response.error[0].text);
							}
						}, "json");
					} else {
						$("#save_error").html("The password and confirmation password do not match.");
						$("#input_password").add("#input_repassword").focus(function () {
							$("#save_error").html("").unbind();
						});
					}
				});
				</script>
			</div>
		</div>
	</div>		
	<?php endif; ?>					
		<?php endif; ?>	
<br style="clear:both" />
<ul id="user-tabs" class="big-tabs">
<li id="tab-settings" class="tab-current<?php if (7 > $this->_tpl_vars['right']['user']): ?> not-editable<?php endif; ?>"><a href="javascript:void(0)">Settings</a></li>
<?php if ($this->_tpl_vars['right']['user'] == 7): ?>
<li id="tab-groups"><a href="javascript:void(0)">Groups</a></li>
<li id="tab-rights"><a href="javascript:void(0)">Access rights</a></li>
<?php endif; ?>
</ul>
<div id="user-tabs-content" class="tabs-content">
<?php endif; ?>
<?php if ($this->_tpl_vars['right']['user'] >= 3): ?>
<div style="text-align: right; padding-right: 20px">
	<a onclick="SettingsControl.setEditAll(this)" href="javascript:void(0)">Edit user settings</a>
</div>
<?php endif; ?>
<div id="edit_settings" class="group<?php if (3 > $this->_tpl_vars['right']['user']): ?> not-editable<?php endif; ?>">
	<div id="info" style="display:none; padding-left: 18%; color: green" class="field"><b>Changes have been successfully saved.</b></div>
</div>

<?php if ($this->_tpl_vars['sms']): ?>
<div id="edit_quotas" class="group<?php if (3 > $this->_tpl_vars['right']['user']): ?> not-editable<?php endif; ?>">
	<div class="title">
		<a href="#" class="title click">Quotas</a>
	</div>
	<div id="sms" class="field">
		<div class="label">SMS messages:</div>
		<div class="edit"></div>
	</div>		
</div>
<?php endif; ?>
	
<div class="group" id="bottom_save" style="display:none; padding-bottom:10px"></div>
<?php if (! $_GET['contentOnly']): ?>
</div>	
<?php endif; ?>

<script type="text/javascript">

function changeUserStatus(status)
{
	$.post('?mod=users&act=status&ajax=1', {contact_id: '<?php echo $this->_tpl_vars['contact_id']; ?>
', status: status}, function (response) {
		if (response.status == 'OK') {
			if (response.data == '-1') {
				$("#status").removeClass('status1').removeClass('status0');
				$("#status").addClass('status-1').html('disabled');
				$("#user-status-change").html('<span class="red">Login temporarily disabled</span> | <a onclick="changeUserStatus(1)" href="javascript:void(0)">Enable</a>');
			} else {
				$("#status").removeClass('status-1');
				if (response.data == '1') {
					$("#status").addClass('status1').html('online');
				} else {
					$("#status").addClass('status0').html('offline');
				}
				$("#user-status-change").html('<a onclick="changeUserStatus(0)" href="javascript:void(0)">Temporarily disable login</a>');				
			}
		}
	}, "json");
}

$("#disk div.edit").click(function () {
	if ($('#edit_disk div.edit span.small').length == 0) {
		$('#edit_disk div.edit').append('<span class=small>Leave blank for unlimited quota</span>');
	}	
});
$("#sms div.edit").click(function () {
	if ($('#edit_sms div.edit span.small').length == 0) {
		$('#edit_sms div.edit').append('<span class=small>Leave blank for unlimited quota</span>');
	}		
});
<?php if (! $_GET['contentOnly']): ?>
$("#user-tabs li").click(function () {
	var id = $(this).attr('id').replace(/tab\-/, '');
	var url = document.location.href.replace(/#/, '') + (document.location.href.indexOf('?') == -1 ? '?' : '&') + "contentOnly=1&act=" + id;
	$("#user-tabs-content").load(url);
	$("#user-tabs li.tab-current").removeClass('tab-current');
	$(this).addClass('tab-current');
});
<?php endif; ?>
</script>