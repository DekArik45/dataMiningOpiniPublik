

!function(global,factory){if("function"==typeof define&&define.amd)define("/advanced/lightbox",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.advancedLightbox=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),(0,_jquery2.default)("#exampleZoomGallery").magnificPopup({delegate:"a",type:"image",closeOnContentClick:!1,closeBtnInside:!1,mainClass:"mfp-with-zoom mfp-img-mobile",image:{verticalFit:!0,titleSrc:function(item){return item.el.attr("title")+' &middot; <a class="image-source-link" href="'+item.el.attr("data-source")+'" target="_blank">image source</a>'}},gallery:{enabled:!0},zoom:{enabled:!0,duration:300,opener:function(element){return element.find("img")}}}),(0,_jquery2.default)("#exampleGallery").magnificPopup({delegate:"a",type:"image",tLoading:"Loading image #%curr%...",mainClass:"mfp-img-mobile",gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(item){return item.el.attr("title")+"<small>by amazingSurge</small>"}}}),(0,_jquery2.default)(".popup-with-css-anim").magnificPopup({type:"image",removalDelay:500,preloader:!0,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")}},closeOnContentClick:!0,midClick:!0}),(0,_jquery2.default)(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),(0,_jquery2.default)("#examplePopupForm").magnificPopup({type:"inline",preloader:!1,focus:"#inputName",callbacks:{beforeOpen:function(){(0,_jquery2.default)(window).width()<700?this.st.focus=!1:this.st.focus="#inputName"}}}),(0,_jquery2.default)("#examplePopupAjaxAlignTop").magnificPopup({type:"ajax",alignTop:!0,overflowY:"scroll"}),(0,_jquery2.default)("#examplePopupAjax").magnificPopup({type:"ajax"}),(0,_jquery2.default)(".popup-modal").magnificPopup({type:"inline",preloader:!1,modal:!0}),(0,_jquery2.default)(document).on("click",".popup-modal-dismiss",function(e){e.preventDefault(),_jquery2.default.magnificPopup.close()}),(0,_jquery2.default)("#exampleBrokenImage, #exampleBrokenAjax").magnificPopup({})});