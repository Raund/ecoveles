<?php /* Smarty version 2.6.26, created on 2014-06-30 12:40:16
         compiled from UsersRights.html */ ?>
<style type="text/css">
select {color: #000}
#apps table {width: 100%}
#apps table td {color: #333333}
div.title.light {/*border-bottom: 1px solid #D8DADC*/}
</style>	
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['js']; ?>
users-rights.js"></script>
<script>
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

var login = "<?php echo $this->_tpl_vars['login']; ?>
";
var right_id = "<?php echo $this->_tpl_vars['login']; ?>
"; 
var apps = <?php echo $this->_tpl_vars['apps']; ?>
;
var self_rights = <?php echo $this->_tpl_vars['self_rights']; ?>
;
$(document).ready(function() {
	$("body").append($('<div id="popup-bg"></div>').css({
        		opacity: 0.1,
        		'z-index': 1,
        		position: 'absolute',
        		top: 0,
        		left: 0,
				height: '100%',
				width: '100%',
				backgroundColor: "#666",
				display: 'none'
    }));
	renderApps(apps, false);
});

</script>
<div id="apps" class="group">
<p>Effective user access rights are a combination of expressly specified personal access rights and access rights inherited from the groups in which this user is included.</p>
<div id="loading"><img style="vertical-align:middle" width="16" height="16" src="<?php echo $this->_tpl_vars['url']['common']; ?>
templates/img/loading.gif" /> Loading...</div>
</div>	