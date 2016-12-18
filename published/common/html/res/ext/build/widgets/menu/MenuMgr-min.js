/*
 * Ext JS Library 2.0.1
 * Copyright(c) 2006-2007, Ext JS, LLC.
 * licensing@extjs.com
 * 
 * http://extjs.com/license
 */

Ext.menu.MenuMgr=function(){var F,D,C={},A=false,K=new Date();function M(){F={};D=new Ext.util.MixedCollection();Ext.getDoc().addKeyListener(27,function(){if(D.length>0){H()}})}function H(){if(D&&D.length>0){var N=D.clone();N.each(function(O){O.hide()})}}function E(N){D.remove(N);if(D.length<1){Ext.getDoc().un("mousedown",L);A=false}}function J(N){var O=D.last();K=new Date();D.add(N);if(!A){Ext.getDoc().on("mousedown",L);A=true}if(N.parentMenu){N.getEl().setZIndex(parseInt(N.parentMenu.getEl().getStyle("z-index"),10)+3);N.parentMenu.activeChild=N}else{if(O&&O.isVisible()){N.getEl().setZIndex(parseInt(O.getEl().getStyle("z-index"),10)+3)}}}function B(N){if(N.activeChild){N.activeChild.hide()}if(N.autoHideTimer){clearTimeout(N.autoHideTimer);delete N.autoHideTimer}}function G(N){var O=N.parentMenu;if(!O&&!N.allowOtherMenus){H()}else{if(O&&O.activeChild){O.activeChild.hide()}}}function L(N){if(K.getElapsed()>50&&D.length>0&&!N.getTarget(".x-menu")){H()}}function I(O,R){if(R){var Q=C[O.group];for(var P=0,N=Q.length;P<N;P++){if(Q[P]!=O){Q[P].setChecked(false)}}}}return{hideAll:function(){H()},register:function(O){if(!F){M()}F[O.id]=O;O.on("beforehide",B);O.on("hide",E);O.on("beforeshow",G);O.on("show",J);var N=O.group;if(N&&O.events["checkchange"]){if(!C[N]){C[N]=[]}C[N].push(O);O.on("checkchange",onCheck)}},get:function(N){if(typeof N=="string"){if(!F){return null}return F[N]}else{if(N.events){return N}else{if(typeof N.length=="number"){return new Ext.menu.Menu({items:N})}else{return new Ext.menu.Menu(N)}}}},unregister:function(O){delete F[O.id];O.un("beforehide",B);O.un("hide",E);O.un("beforeshow",G);O.un("show",J);var N=O.group;if(N&&O.events["checkchange"]){C[N].remove(O);O.un("checkchange",onCheck)}},registerCheckable:function(N){var O=N.group;if(O){if(!C[O]){C[O]=[]}C[O].push(N);N.on("beforecheckchange",I)}},unregisterCheckable:function(N){var O=N.group;if(O){C[O].remove(N);N.un("beforecheckchange",I)}},getCheckedItem:function(P){var Q=C[P];if(Q){for(var O=0,N=Q.length;O<N;O++){if(Q[O].checked){return Q[O]}}}return null},setCheckedItem:function(P,R){var Q=C[P];if(Q){for(var O=0,N=Q.length;O<N;O++){if(Q[O].id==R){Q[O].setChecked(true)}}}return null}}}();