<?php /* Smarty version 2.6.26, created on 2014-06-30 12:40:09
         compiled from layouts/User.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'csscombine', 'layouts/User.html', 5, false),array('block', 'jscombine', 'layouts/User.html', 11, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $this->_tpl_vars['name']; ?>
</title>
<?php $this->_tag_stack[] = array('csscombine', array('file' => ($this->_tpl_vars['url']['css'])."contact-edit.css")); $_block_repeat=true;smarty_block_csscombine($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_tpl_vars['url']['css']; ?>
users-common.css
	<?php echo $this->_tpl_vars['url']['css']; ?>
users-edit.css
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_csscombine($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['common']; ?>
css/datepicker.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['common']; ?>
js/jquery.js"></script>
<?php $this->_tag_stack[] = array('jscombine', array('file' => ($this->_tpl_vars['url']['js'])."contact-edit.js")); $_block_repeat=true;smarty_block_jscombine($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_tpl_vars['url']['common']; ?>
js/jquery.upload.js
	<?php echo $this->_tpl_vars['url']['common']; ?>
js/jquery.wbs.popup.js
	<?php echo $this->_tpl_vars['url']['common']; ?>
js/jquery.wbspopup.js
	<?php echo $this->_tpl_vars['url']['common']; ?>
js/wbs-common.js
	<?php echo $this->_tpl_vars['url']['common']; ?>
js/datepicker.js
	<?php echo $this->_tpl_vars['url']['js']; ?>
users-edit.js
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_jscombine($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
<?php if ($this->_tpl_vars['user_lang'] == 'rus'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['common']; ?>
js/datepicker-rus.js"></script><?php endif; ?>
<script type="text/javascript">
	WbsData.set({'url.common' : "<?php echo $this->_tpl_vars['url']['common']; ?>
", 'url.app' : "<?php echo $this->_tpl_vars['url']['app']; ?>
", 'url.img' : "<?php echo $this->_tpl_vars['url']['img']; ?>
"});
	var contact = {user_id: "<?php echo $this->_tpl_vars['user_id']; ?>
", user_status: "<?php echo $this->_tpl_vars['user_status']; ?>
", status: "<?php echo $this->_tpl_vars['status']; ?>
", contact_id: '<?php echo $this->_tpl_vars['contact_id']; ?>
'};
</script>
<style type="text/css">
div.edit img.e {margin-top: 2px}
</style>
</head>
<body style="overflow:hidden;">
<?php if (! $this->_tpl_vars['is_mw']): ?>
<div id="header">
	<div id="toolbar_new" class="contact-tools">
		<table class="top_panel">
			<tr>
			<td width="1%">
			<div class="backlink">
			<span>&larr;</span><a id="back-url" href="<?php if ($this->_tpl_vars['is_mw']): ?>javascript:history.back()<?php else: ?>index.php" onClick="if (parent && parent.document.app) {parent.document.app.table.reloadView(); parent.document.app.closeSubframe(); return false}<?php endif; ?>">Back <?php if ($this->_tpl_vars['back_title']): ?> — <?php echo $this->_tpl_vars['back_title']; 
 endif; ?></a>		
			<div id="onload-message" class="info-message" <?php if (! $this->_tpl_vars['message']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['message']; ?>
</div>
			</div>
			</td>
            </tr>
        </table>
   </div>
</div>
<?php endif; ?>
<div id="scroll" style="position:relative">
<table id="sub-main-content" class="contact" height="100%" cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
  	<td class="contacts_main"><div id="ajax_result" class="wrap-scroller" ><?php echo $this->_tpl_vars['content']; ?>
</div></td>
	<td class="user_rightbar">
	<div id="right-panel">
	<div class="rigth-panel-block<?php if ($this->_tpl_vars['tab'] != ""): ?> noactiveblock<?php endif; ?>">
		<div class="block_link"><a href="#contact" class="link" nobr>Contact information</a></div>
		<div class="instead_oflink"><h3>Contact information</h3>
        <?php if ($this->_tpl_vars['right']['contact'] >= 3): ?>
		<div id="contact_help" class="help" <?php if ($this->_tpl_vars['tab'] && $this->_tpl_vars['tab'] != 'contact'): ?>style="display:none"<?php endif; ?>>
			<table width="100%">
			<tr>
				<td><input type="button" onClick="UserControl.setEditAll(this)" value="Edit" /></td>
			</tr>
			</table>
			<?php if ($this->_tpl_vars['right']['delete']): ?>
			<div class="customize-link" style="padding-top:10px;">
				<a href="#" onClick="deleteContact('<?php echo $this->_tpl_vars['contact_info']['C_ID']; ?>
')">
					<?php if ($this->_tpl_vars['contact_info']['CT_ID'] == 1): ?>Delete this person<?php else: ?>Delete this company<?php endif; ?>
				</a>
			</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['right']['admin']): ?>
			<div class="customize-link" style="padding-top:5px;">
				<a href="?mod=construct&type_id=<?php echo $this->_tpl_vars['type_id']; ?>
">Customize fields</a>
			</div>
			<?php endif; ?>	
		</div>
		<?php endif; ?>
        </div>
			
	</div>
	<?php if ($this->_tpl_vars['right']['notes']): ?>
	<div style="z-index:100" class="rigth-panel-block<?php if ($this->_tpl_vars['tab'] != 'notes'): ?> noactiveblock<?php endif; ?>">
		<div class="block_link">
			<a href="#notes" class="link"><!--<img src="<?php echo $this->_tpl_vars['url']['app']; ?>
img/i-notes.png">-->Notes</a></div>
			<div class="instead_oflink"><h3>Notes</h3>
		
		<ul id="ul_apps">
			<?php $_from = $this->_tpl_vars['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
			<li><?php echo $this->_tpl_vars['n']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul></div>
	</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['partner_info']): ?>
	<div style="z-index:100" class="rigth-panel-block<?php if ($this->_tpl_vars['tab'] != 'partners'): ?> noactiveblock<?php endif; ?>">
		<div class="block_link"><a href="#partners" class="link">Partners</a></div>
		<div class="instead_oflink"><h3>Partners</h3></div>		
	</div>
	<?php endif; ?>
		
	<?php if ($this->_tpl_vars['right']['user'] && $this->_tpl_vars['user_id']): ?>
	<div class="rigth-panel-block<?php if ($this->_tpl_vars['tab'] != 'settings'): ?> noactiveblock<?php endif; ?>">
		<div class="block_link">
			<?php if ($this->_tpl_vars['user_id']): ?><a href="#settings" class="link">User account</a>
			<?php else: ?>
			<?php endif; ?></div>
			<div class="instead_oflink"><h3>User account</h3>
            </div>
		
		<?php if ($this->_tpl_vars['user_id']): ?>
		<ul>
			<?php if ($this->_tpl_vars['user_status'] == 3): ?>
			<li style="color:red">Registration is not complete.</li>
			<?php else: ?>
			<li>Login: 
				<span class="big" style="padding-right: 30px"><?php echo $this->_tpl_vars['user_id']; ?>
</span>
				<span id="status" class="status<?php echo $this->_tpl_vars['status']; ?>
">
				<?php if ($this->_tpl_vars['status'] == 1): ?>
					online
				<?php elseif ($this->_tpl_vars['status'] == -1): ?>
					disabled
				<?php else: ?>
					offline
				<?php endif; ?>
				</span>
			</li>
			<li style="font-size:85%; border-bottom: 1px solid #C6C9CC; margin-bottom: 10px; padding-bottom: 5px">
				Last activity: <span id="last_time"><?php if ($this->_tpl_vars['last_time']): 
 echo $this->_tpl_vars['last_time']; 
 else: ?>never<?php endif; ?></span>
			</li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['right']['user'] == 7): ?>
			<li class="smallfont">
				<b>Groups:</b>
				<span id="user-groups">
<?php $_from = $this->_tpl_vars['user_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['usergroups'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['usergroups']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['g']):
        $this->_foreach['usergroups']['iteration']++;

 if (($this->_foreach['usergroups']['iteration']-1)): ?>, <?php endif; 
 echo $this->_tpl_vars['g']; 
 endforeach; else: ?><span style="color:#666">none</span><?php endif; unset($_from); ?>
				</span>
			</li>
			<li class="smallfont">
				<b>Access:</b>
				<span id="user-apps">
<?php $_from = $this->_tpl_vars['access']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['useraccess'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['useraccess']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['app']):
        $this->_foreach['useraccess']['iteration']++;

 if (($this->_foreach['useraccess']['iteration']-1)): ?>, <?php endif; 
 echo $this->_tpl_vars['app']; 
 endforeach; else: ?><span style="color:#666">none</span><?php endif; unset($_from); ?>
				</span>
			</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['right']['user'] == 7 && ! $this->_tpl_vars['user_id'] && ! $this->_tpl_vars['contact_info']['SC_ID']): ?>
	<a href="javascript:void(0)" style="display:block; margin: 15px 16px" id="set_login">Create user account for this contact</a>
	<script type="text/javascript">
		$("#set_login").click(function () {
		   $('#popup').wbsPopup({
		       width: 650,
		       height: 'auto',
		       backgroundColor: '#000000',
		       opacity: 0.1,
		       url: "<?php echo $this->_tpl_vars['url']['app']; ?>
?mod=contacts&act=login&id=<?php echo $this->_tpl_vars['contact_id']; ?>
",
		       loadComplite: function () {
					$('#popup').wbsPopupRender();
					$("#popup .close-btn").click(function () {
						$("#popup").wbsPopupClose();
					});					
		       }		       
		     });
			return false;	
		});	
	</script>
	<?php endif; ?>
	<br />
	<div id="info-message" style="padding-left:20px"></div>
	</div>	
</td>
</tr>
</table>
</div>

<div id="popup" style="display: none;" class="wbs-iframe-popup wbs-dlg">
	<div class="content" style="display: none; height: 100%;">		
	</div>
	<div id="progress" style="display: none;">
		<img src="<?php echo $this->_tpl_vars['url']['app']; ?>
img/ajax-loader.gif" />
	</div>
</div>

<div id="popup2" style="display: none;" class="wbs-iframe-popup wbs-dlg">
	<div class="content" style="display: none; height: 100%;">		
	</div>
	<div id="progress" style="display: none;">
		<img src="<?php echo $this->_tpl_vars['url']['app']; ?>
img/ajax-loader.gif" />
	</div>
</div>


<script type="text/javascript">
$("#onload-message").fadeOut(5000, function () {$(this).hide()});
$("#sub-main-content td.user_rightbar a.link").click(function () {
	$("#cancel_all:visible").click();
	$(".wbs-popmenu").hide();
	var url = $(this).get(0).href;
	url = url.indexOf("?") == -1 ? url.replace("#", "?act=") : url.replace("#", "&act=");
	$("#ajax_result").load(url);
	$("#right-panel > div.rigth-panel-block").each(function () {
		if (!$(this).hasClass("noactiveblock")) {
			$(this).addClass("noactiveblock");
		} 
	});
	$(this).parents("div.rigth-panel-block").removeClass("noactiveblock");
	$("#toolbar_new div.help").hide();
	$($(this).attr('href') + "_help").show();
	return false;
});

var resize = function () {
	$("#scroll").height($(window).height() - $("#header").height());
};
$(document).ready(resize);
$(window).resize(resize);	
	
function deleteContact(C_ID) {
	if (confirm("Are you sure?")) {
		jQuery("#loading-block", parent.document).css("visibility", "");
		jQuery.post("?mod=users&act=delete&ajax=1",
		{"ids[]": C_ID},
		function (response) {
			if (response.status == "OK") {
				$("#back-url").click();
			}
		}, "json");
	}
}
</script>
</body>
</html>