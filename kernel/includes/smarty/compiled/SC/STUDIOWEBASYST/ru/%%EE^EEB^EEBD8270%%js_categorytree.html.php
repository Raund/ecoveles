<?php /* Smarty version 2.6.26, created on 2016-12-20 14:29:20
         compiled from backend/js_categorytree.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'backend/js_categorytree.html', 64, false),)), $this); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo 'utf-8'; ?>
">
<!--		<link rel="stylesheet" href="<?php echo @URL_CSS; ?>
/cpt_constructor.css" type="text/css">-->
		<style type="text/css"> @import url("<?php echo @URL_CSS; ?>
/db_tree.css"); </style>
		<style type="text/css"> @import url("<?php echo @URL_CSS; ?>
/admin.css"); </style>
		
		<script type="text/javascript" src="<?php echo @URL_JS; ?>
/functions.js"></script>
		<script type="text/javascript" src="<?php echo @URL_JS; ?>
/behavior.js"></script>
		<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
		<script type="text/javascript" src="<?php echo @URL_JS; ?>
/_prototype.TreeNode.js"></script>
		<script type="text/javascript" src="<?php echo @URL_JS; ?>
/_db_tree.js"></script>
		<script type="text/javascript"><!--
			window.img_url = "images_common/";
			var url_getsubcategories = 'index.php?ukey=category_tree&caller=1';
			var action = '<?php echo $this->_tpl_vars['js_action']; ?>
';
			<?php echo '
		function getCategoryTreeManager(){
			
			return parent.categoryTreeManager;
			var p = window.top;
			var max = 15;
			while(!p.categoryTreeManager && p.top && max--){
				
				p = p.top;
			}

			if(!p.categoryTreeManager){
				
				p = window.parent;
				max = 15;
				while(!p.categoryTreeManager && p.parent && max--){
					
					p = p.parent;
				}
			}
		}
		'; ?>

		//-->
		</script>
		<script type="text/javascript">
		var translate = {};
		</script>
	</head>
	<body style="padding: 10px;">
		<ul id="test" class="tul"></ul>
		<script type="text/javascript"><!--
			var root_nodes = [];
			<?php if ($_GET['js_action'] == 'choose_parentcategory'): ?>
			var _nd_1 = new dbTree({
			'id':'_nd_1', 
			'name': 'ROOT',
			'LIClass': 'tli','ULClass': 'tul',
			'TitleClass': 'ttitle',
			'Expanded': false,
			'categoryID':1,
			'isParent': false }
			);
			root_nodes.push(_nd_1);
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
			var _nd_<?php echo $this->_tpl_vars['category']['categoryID']; ?>
 = new dbTree({
			'id':'_nd_<?php echo $this->_tpl_vars['category']['categoryID']; ?>
', 
			'name': '<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
',
			'LIClass': 'tli','ULClass': 'tul',
			'TitleClass': 'ttitle',
			'Expanded': <?php if ($this->_tpl_vars['category']['ExpandedCategory']): ?>true<?php else: ?>false<?php endif; ?>,
			'categoryID':<?php echo $this->_tpl_vars['category']['categoryID']; ?>
,
			'isParent': '<?php echo $this->_tpl_vars['category']['ExistSubCategories']; ?>
' }<?php if ($this->_tpl_vars['category']['parent'] != 1): ?>,
			_nd_<?php echo $this->_tpl_vars['category']['parent']; ?>

			<?php endif; ?>);
			
			<?php if ($this->_tpl_vars['category']['parent'] == 1): ?>root_nodes.push(_nd_<?php echo $this->_tpl_vars['category']['categoryID']; ?>
);<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			
			for(var k=0,k_max=root_nodes.length;k<k_max;k++)
				root_nodes[k].drawTree(getLayer('test'));
				
					//-->
		</script>
	</body>
</html>