

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/gauge",["exports","Plugin","Config"],factory);else if("undefined"!=typeof exports)factory(exports,require("Plugin"),require("Config"));else{var mod={exports:{}};factory(mod.exports,global.Plugin,global.Config),global.PluginGauge=mod.exports}}(this,function(exports,_Plugin2,_Config){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Config=babelHelpers.interopRequireWildcard(_Config),GaugePlugin=function(_Plugin){function GaugePlugin(){return babelHelpers.classCallCheck(this,GaugePlugin),babelHelpers.possibleConstructorReturn(this,(GaugePlugin.__proto__||Object.getPrototypeOf(GaugePlugin)).apply(this,arguments))}return babelHelpers.inherits(GaugePlugin,_Plugin),babelHelpers.createClass(GaugePlugin,[{key:"getName",value:function(){return"gauge"}},{key:"render",value:function(){if(Gauge){var $el=this.$el,$canvas=$el.find("canvas"),$text=$el.find(".gauge-label");if(0!==$canvas.length){var gauge=new Gauge($canvas[0]).setOptions(this.options);$el.data("gauge",gauge),gauge.animationSpeed=50,gauge.maxValue=$el.data("max-value"),gauge.set($el.data("value")),$text.length>0&&gauge.setTextField($text[0])}}}}],[{key:"getDefaults",value:function(){return{lines:12,angle:.2,lineWidth:.4,pointer:{length:.58,strokeWidth:.03,color:Config.colors("grey",400)},limitMax:!0,colorStart:Config.colors("grey",200),colorStop:Config.colors("grey",200),strokeColor:Config.colors("primary",500),generateGradient:!0}}}]),GaugePlugin}(_Plugin3.default);_Plugin3.default.register("gauge",GaugePlugin),exports.default=GaugePlugin});