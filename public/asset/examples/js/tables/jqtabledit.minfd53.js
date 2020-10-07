

!function(global,factory){if("function"==typeof define&&define.amd)define("/tables/jqtabledit",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.tablesJqtabledit=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),(0,_jquery2.default)("#exampleTableditToolbars").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",columns:{identifier:[0,"id"],editable:[[1,"username"],[2,"first"],[3,"last"]]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"}}}),(0,_jquery2.default)("#exampleTableditInlineEdit").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",eventType:"dblclick",editButton:!1,columns:{identifier:[0,"id"],editable:[[1,"username"],[2,"last",'{"1": "May", "2": "Green", "3": "Brant"}']]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"}}}),(0,_jquery2.default)("#InlineEditWithoutIndentify").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",editButton:!1,deleteButton:!1,hideIdentifier:!0,columns:{identifier:[0,"id"],editable:[[2,"firstname"],[3,"lastname"]]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"}}}),(0,_jquery2.default)("#tableditWithEditButtonOnly").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",deleteButton:!1,saveButton:!1,autoFocus:!1,columns:{identifier:[0,"id"],editable:[[1,"car"],[2,"color"]]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"}}}),(0,_jquery2.default)("#tableditWithDeleteButtonOnly").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",rowIdentifier:"data-id",editButton:!1,restoreButton:!1,columns:{identifier:[0,"id"],editable:[[1,"nickname"],[2,"firstname"],[3,"lastname"]]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"},confirm:{class:"btn btn-sm btn-default",html:"Are you sure?"}}}),(0,_jquery2.default)("#tableditLogAllHooks").Tabledit({groupClass:"btn-group btn-group-flat btn-group-sm",rowIdentifier:"data-id",editButton:!0,restoreButton:!0,columns:{identifier:[0,"id"],editable:[[1,"username"],[2,"email"],[3,"avatar",'{"1": "Black Widow", "2": "Captain America", "3": "Iron Man"}']]},buttons:{edit:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-wrench"></span>',action:"edit"},delete:{class:"btn btn-sm btn-icon btn-flat btn-default",html:'<span class="icon md-close"></span>',action:"delete"}},onDraw:function(){},onSuccess:function(data,textStatus,jqXHR){},onFail:function(jqXHR,textStatus,errorThrown){},onAlways:function(){},onAjax:function(action,serialize){}})});