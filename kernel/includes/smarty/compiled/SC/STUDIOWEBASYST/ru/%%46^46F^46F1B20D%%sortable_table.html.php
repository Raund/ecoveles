<?php /* Smarty version 2.6.26, created on 2016-12-19 01:27:50
         compiled from backend/sortable_table.html */ ?>
<script type="text/javascript" src="<?php echo @URL_JS; ?>
/JsHttpRequest.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/core.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/events.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/css.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/coordinates.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/drag.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/dragsort.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo @URL_JS; ?>
/tool-man/cookies.js"></script>
<script language="JavaScript" type="text/javascript"><!--<?php echo '
	ToolMan.dragsort = function(){
		
		if (!ToolMan._dragsortTableFactory) throw "ToolMan DragSort Table module isn\'t loaded";
		return ToolMan._dragsortTableFactory
	}

	var helpers = ToolMan.helpers();
	helpers._moveBefore = helpers.moveBefore;
	helpers.moveBefore = function(item1, item2){
		
		if(item1 && item2 && (item1.className.search(/dragable/)==-1 || item2.className.search(/dragable/)==-1))return
		var helpers = ToolMan.helpers();
		
		var priorElems1 = getElementsByClass(\'field_priority\',item1,\'input\');
		var priorElems2 = getElementsByClass(\'field_priority\',item2,\'input\');
		if(priorElems1.length && priorElems2.length){
			priorElems1[0].value = parseInt(priorElems1[0].value)+parseInt(priorElems2[0].value);
			priorElems2[0].value = parseInt(priorElems1[0].value)-parseInt(priorElems2[0].value);
			priorElems1[0].value = parseInt(priorElems1[0].value)-parseInt(priorElems2[0].value);
		}
		helpers._moveBefore(item1, item2);
	}
	helpers._moveAfter = helpers.moveAfter;
	helpers.moveAfter = function(item1, item2){
		
		if(item1 && item2 && (item1.className.search(/dragable/)==-1 || item2.className.search(/dragable/)==-1))return
		var helpers = ToolMan.helpers();
		
		var priorElems1 = getElementsByClass(\'field_priority\',item1,\'input\');
		var priorElems2 = getElementsByClass(\'field_priority\',item2,\'input\');
		if(priorElems1.length && priorElems2.length){
			priorElems1[0].value = parseInt(priorElems1[0].value)+parseInt(priorElems2[0].value);
			priorElems2[0].value = parseInt(priorElems1[0].value)-parseInt(priorElems2[0].value);
			priorElems1[0].value = parseInt(priorElems1[0].value)-parseInt(priorElems2[0].value);
		}
		helpers._moveBefore(item1, item2);
	}

	var dragsort = ToolMan.dragsort()
	var junkdrawer = ToolMan.junkdrawer()

	dragsort.onDragStart = function(dragEvent){
		var item = dragEvent.group.element
		item.className += \' dragRow\';
	}
	dragsort.onDragEnd = function(dragEvent){

		var item = dragEvent.group.element;
		var action = getLayer("'; 
 echo $this->_tpl_vars['action_id']; 
 echo '");
		var action_value =false;
		if(action){ 
			action_value = "'; 
 echo $this->_tpl_vars['default_action']; 
 echo '";
			action.value = "'; 
 echo $this->_tpl_vars['action_name']; 
 echo '";		
		}	

		item.className = item.className.replace(/dragRow/, \'\');
		if(item.className.search(/dragable/)!=-1){
			sc_submitAjaxForm(getFormByElem(item));
		}
		if(action_value){
			setTimeout(\'revert_action("\'+action_value+\'")\',500);
			
		}
	}
	function revert_action(action_value){
		getLayer("'; 
 echo $this->_tpl_vars['action_id']; 
 echo '").value = action_value;
	}
	'; ?>

	dragsort.makeListSortable(getLayer("<?php echo $this->_tpl_vars['table_id']; ?>
"))
//-->
</script>