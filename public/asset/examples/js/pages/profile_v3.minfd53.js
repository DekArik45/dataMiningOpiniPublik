

!function(global,factory){if("function"==typeof define&&define.amd)define("/pages/profile_v3",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.pagesProfile_v3=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()});for(var galleryNum=(0,_jquery2.default)(".imgs-gallery").length,i=0;i<galleryNum;i++)(0,_jquery2.default)((0,_jquery2.default)(".imgs-gallery")[i]).magnificPopup({delegate:"a",type:"image",tLoading:"Loading image #%curr%...",mainClass:"mfp-img-mobile",gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(item){return item.el.attr("title")+"<small>by amazingSurge</small>"}}});(0,_jquery2.default)(".wall-comment-reply .form-control").on("focus",function(event){var $this=(0,_jquery2.default)(this),$reply_operation=$this.closest("form").find(".reply-operation"),$reply_cancel=$this.closest("form").find(".reply-operation .reply-cancel");$reply_operation.hasClass("active")||$reply_operation.addClass("active"),$reply_cancel.on("click",function(){$reply_operation.removeClass("active")}),event.stopPropagation()})});