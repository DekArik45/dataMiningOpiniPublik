

!function(global,factory){if("function"==typeof define&&define.amd)define("/forms/advanced",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.formsAdvanced=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),(0,_jquery2.default)("#exampleTimeButton").on("click",function(){(0,_jquery2.default)("#inputTextCurrent").timepicker("setTime",new Date)}),(0,_jquery2.default)("#inlineDatepicker").datepicker(),(0,_jquery2.default)("#inlineDatepicker").on("changeDate",function(event){(0,_jquery2.default)("#inputHiddenInline").val((0,_jquery2.default)("#inlineDatepicker").datepicker("getFormattedDate"))}),function(){var engine=new Bloodhound({local:[{value:"red"},{value:"blue"},{value:"green"},{value:"yellow"},{value:"violet"},{value:"brown"},{value:"purple"},{value:"black"},{value:"white"}],datumTokenizer:Bloodhound.tokenizers.obj.whitespace("value"),queryTokenizer:Bloodhound.tokenizers.whitespace});(0,_jquery2.default)("#inputTokenfieldTypeahead").tokenfield({typeahead:[null,{name:"engine",displayKey:"value",source:engine.ttAdapter()}]})}(),(0,_jquery2.default)("#inputTokenfieldEvents").on("tokenfield:createtoken",function(e){var data=e.attrs.value.split("|");e.attrs.value=data[1]||data[0],e.attrs.label=data[1]?data[0]+" ("+data[1]+")":data[0]}).on("tokenfield:createdtoken",function(e){/\S+@\S+\.\S+/.test(e.attrs.value)||(0,_jquery2.default)(e.relatedTarget).addClass("invalid")}).on("tokenfield:edittoken",function(e){if(e.attrs.label!==e.attrs.value){var label=e.attrs.label.split(" (");e.attrs.value=label[0]+"|"+e.attrs.value}}).on("tokenfield:removedtoken",function(e){if(e.attrs.length>1){var values=_jquery2.default.map(e.attrs,function(attrs){return attrs.value});alert(e.attrs.length+" tokens removed! Token values were: "+values.join(", "))}else alert("Token removed! Token value was: "+e.attrs.value)}).tokenfield(),function(){var cities=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.obj.whitespace("text"),queryTokenizer:Bloodhound.tokenizers.whitespace,prefetch:"../assets/data/cities.json"});cities.initialize();var options=_jquery2.default.extend(!0,{},Plugin.getDefaults("tagsinput"),{itemValue:"value",itemText:"text",typeaheadjs:[{hint:!0,highlight:!0,minLength:1},{name:"cities",displayKey:"text",source:cities.ttAdapter()}]}),$input=(0,_jquery2.default)("#inputTagsObject");$input.tagsinput(options),$input.tagsinput("add",{value:1,text:"Amsterdam",continent:"Europe"}),$input.tagsinput("add",{value:4,text:"Washington",continent:"America"}),$input.tagsinput("add",{value:7,text:"Sydney",continent:"Australia"}),$input.tagsinput("add",{value:10,text:"Beijing",continent:"Asia"}),$input.tagsinput("add",{value:13,text:"Cairo",continent:"Africa"})}(),function(){var cities=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.obj.whitespace("text"),queryTokenizer:Bloodhound.tokenizers.whitespace,prefetch:"../assets/data/cities.json"});cities.initialize();var options=_jquery2.default.extend(!0,{},Plugin.getDefaults("tagsinput"),{tagClass:function(item){switch(item.continent){case"Europe":return"badge badge-primary";case"America":return"badge badge-danger";case"Australia":return"badge badge-success";case"Africa":return"badge badge-default";case"Asia":return"badge badge-warning"}},itemValue:"value",itemText:"text",typeaheadjs:[{hint:!0,highlight:!0,minLength:1},{name:"cities",displayKey:"text",source:cities.ttAdapter()}]}),$input=(0,_jquery2.default)("#inputTagsCategorizing");$input.tagsinput(options),$input.tagsinput("add",{value:1,text:"Amsterdam",continent:"Europe"}),$input.tagsinput("add",{value:4,text:"Washington",continent:"America"}),$input.tagsinput("add",{value:7,text:"Sydney",continent:"Australia"}),$input.tagsinput("add",{value:10,text:"Beijing",continent:"Asia"}),$input.tagsinput("add",{value:13,text:"Cairo",continent:"Africa"})}(),function(){var options=_jquery2.default.extend({},Plugin.getDefaults("asSpinner"),{format:function(value){return value+"%"}});(0,_jquery2.default)("#inputSpinnerCustomFormat").asSpinner(options)}(),(0,_jquery2.default)(".multi-select-methods").multiSelect(),(0,_jquery2.default)("#buttonSelectAll").click(function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("select_all"),!1}),(0,_jquery2.default)("#buttonDeselectAll").click(function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("deselect_all"),!1}),(0,_jquery2.default)("#buttonSelectSome").click(function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("select",["Idaho","Montana","Arkansas"]),!1}),(0,_jquery2.default)("#buttonDeselectSome").click(function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("select",["Idaho","Montana","Arkansas"]),!1}),(0,_jquery2.default)("#buttonRefresh").on("click",function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("refresh"),!1}),(0,_jquery2.default)("#buttonAdd").on("click",function(){return(0,_jquery2.default)(".multi-select-methods").multiSelect("addOption",{value:42,text:"test 42",index:0}),!1}),function(){var states=["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"];(0,_jquery2.default)("#exampleTypeaheadBasic, #exampleTypeaheadStyle").typeahead({hint:!0,highlight:!0,minLength:1},{name:"states",source:function(strs){return function(q,cb){var matches,substrRegex;matches=[],substrRegex=new RegExp(q,"i"),_jquery2.default.each(strs,function(i,str){substrRegex.test(str)&&matches.push(str)}),cb(matches)}}(states)}),function(){var states=["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"],state=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.whitespace,queryTokenizer:Bloodhound.tokenizers.whitespace,local:states});(0,_jquery2.default)("#exampleTypeaheadBloodhound").typeahead({hint:!0,highlight:!0,minLength:1},{name:"states",source:state})}(),function(){var countries=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.whitespace,queryTokenizer:Bloodhound.tokenizers.whitespace,prefetch:"../assets/data/countries.json"});(0,_jquery2.default)("#exampleTypeaheadPrefetch").typeahead(null,{name:"countries",source:countries})}()}()});