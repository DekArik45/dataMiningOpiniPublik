

!function(global,factory){if("function"==typeof define&&define.amd)define("/App/Location",["exports","Site"],factory);else if("undefined"!=typeof exports)factory(exports,require("Site"));else{var mod={exports:{}};factory(mod.exports,global.Site),global.AppLocation=mod.exports}}(this,function(exports,_Site2){"use strict";function getInstance(){return instance||(instance=new AppLocation),instance}Object.defineProperty(exports,"__esModule",{value:!0}),exports.getInstance=exports.run=exports.AppLocation=void 0;var _Site3=babelHelpers.interopRequireDefault(_Site2),Map=function(){function Map(){babelHelpers.classCallCheck(this,Map),this.window=$(window),this.$siteNavbar=$(".site-navbar"),this.$siteFooter=$(".site-footer"),this.$pageMain=$(".page-main"),this.handleMapHeight()}return babelHelpers.createClass(Map,[{key:"handleMapHeight",value:function(){var footerH=this.$siteFooter.outerHeight(),navbarH=this.$siteNavbar.outerHeight(),mapH=this.window.height()-navbarH-footerH;this.$pageMain.outerHeight(mapH)}},{key:"getMap",value:function(){var mapLatlng=L.latLng(37.769,-122.446);return L.mapbox.accessToken="pk.eyJ1IjoiYW1hemluZ3N1cmdlIiwiYSI6ImNpaDVubzBoOTAxZG11dGx4OW5hODl2b3YifQ.qudwERFDdMJhFA-B2uO6Rg",L.mapbox.map("map","mapbox.light").setView(mapLatlng,18)}}]),Map}(),Markers=function(){function Markers(friends,map){babelHelpers.classCallCheck(this,Markers),this.friends=friends,this.map=map,this.allMarkers=[],this.handleMarkers()}return babelHelpers.createClass(Markers,[{key:"handleMarkers",value:function(){for(var markers=new L.markerClusterGroup({removeOutsideVisibleBounds:!1,polygonOptions:{color:"#444444"}}),i=0;i<this.friends.length;i++){var path=void 0,x=void 0;x=i%2==0?Number(Math.random()):-1*Math.random();var markerLatlng=L.latLng(37.769+Math.random()/170*x,Math.random()/150*x-122.446),divContent="<div class='in-map-markers'><div class='friend-icon'><img src='"+(path=$(this.friends[i]).find("img").attr("src"))+"' /></div></div>",friendImg=L.divIcon({html:divContent,iconAnchor:[0,0],className:""}),popupInfo="<div class='friend-popup-info'><div class='detail'>info</div><h3>"+$(this.friends[i]).find(".friend-name").html()+"</h3><p>"+$(this.friends[i]).find(".friend-title").html()+"</p></div><i class='icon md-chevron-right'></i>",marker=L.marker(markerLatlng,{title:$(this.friends[i]).find("friend-name").html(),icon:friendImg}).bindPopup(popupInfo,{closeButton:!1});markers.addLayer(marker),this.allMarkers.push(marker),marker.on("popupopen",function(){this._icon.className+=" marker-active",this.setZIndexOffset(999)}),marker.on("popupclose",function(){this._icon&&(this._icon.className="leaflet-marker-icon leaflet-zoom-animated leaflet-clickable"),this.setZIndexOffset(450)})}this.map.addLayer(markers)}},{key:"getAllMarkers",value:function(){return this.allMarkers}},{key:"getMarkersInMap",value:function(){for(var inMapMarkers=[],allMarkers=this.getAllMarkers(),i=0;i<allMarkers.length;i++)this.map.getBounds().contains(allMarkers[i].getLatLng())&&inMapMarkers.push(allMarkers.indexOf(allMarkers[i]));return inMapMarkers}}]),Markers}(),AppLocation=function(_Site){function AppLocation(){return babelHelpers.classCallCheck(this,AppLocation),babelHelpers.possibleConstructorReturn(this,(AppLocation.__proto__||Object.getPrototypeOf(AppLocation)).apply(this,arguments))}return babelHelpers.inherits(AppLocation,_Site),babelHelpers.createClass(AppLocation,[{key:"initialize",value:function(){babelHelpers.get(AppLocation.prototype.__proto__||Object.getPrototypeOf(AppLocation.prototype),"initialize",this).call(this),this.window=$(window),this.$listItem=$(".app-location .page-aside .list-group"),this.$allFriends=$(".app-location .friend-info"),this.allFriends=this.getAllFriends(),this.mapbox=new Map,this.map=this.mapbox.getMap(),this.markers=new Markers(this.$allFriends,this.map),this.allMarkers=this.markers.getAllMarkers(),this.markersInMap=null,this.friendNum=null,this.states={mapChanged:!0,listItemActive:!1}}},{key:"process",value:function(){babelHelpers.get(AppLocation.prototype.__proto__||Object.getPrototypeOf(AppLocation.prototype),"process",this).call(this),this.handleResize(),this.steupListItem(),this.steupMapChange(),this.handleSearch()}},{key:"getDefaultState",value:function(){return Object.assign(babelHelpers.get(AppLocation.prototype.__proto__||Object.getPrototypeOf(AppLocation.prototype),"getDefaultState",this).call(this),{mapChange:!0,listItemActive:!1})}},{key:"mapChange",value:function(change){if(change);else{var friendsInList=[];this.markersInMap=this.markers.getMarkersInMap();for(var i=0;i<this.allMarkers.length;i++)-1===this.markersInMap.indexOf(i)?$(this.allFriends[i]).hide():($(this.allFriends[i]).show(),friendsInList.push($(this.allFriends[i])));this.friendsInList=friendsInList}this.states.mapChanged=change}},{key:"listItemActive",value:function(active){active&&(this.map.panTo(this.allMarkers[this.friendNum].getLatLng()),this.allMarkers[this.friendNum].openPopup()),this.states.listItemActived=active}},{key:"getAllFriends",value:function(){var allFriends=[];return this.$allFriends.each(function(){allFriends.push(this)}),allFriends}},{key:"steupListItem",value:function(){var _this2=this,self=this;this.$allFriends.on("click",function(){$(".list-inline").on("click",function(event){event.stopPropagation()}),self.friendNum=self.allFriends.indexOf(this),self.listItemActive(!0)}),this.$allFriends.on("mouseup",function(){_this2.listItemActive(!1)})}},{key:"steupMapChange",value:function(){var _this3=this;this.map.on("viewreset move",function(){_this3.mapChange(!0)}),this.map.on("ready blur moveend dragend zoomend",function(){_this3.mapChange(!1)})}},{key:"handleResize",value:function(){var _this4=this;this.window.on("resize",function(){_this4.mapbox.handleMapHeight()})}},{key:"handleSearch",value:function(){var self=this;$(".search-friends input").on("focus",function(){$(this).on("keyup",function(){for(var inputName=$(".search-friends input").val(),i=0;i<self.friendsInList.length;i++){var friendName=self.friendsInList[i].find(".friend-name").html();if(inputName.length<=friendName.length)for(var j=1;j<=inputName.length;j++)inputName.substring(0,j).toLowerCase()===friendName.substring(0,j).toLowerCase()?self.friendsInList[i].show():self.friendsInList[i].hide();else self.friendsInList[i].hide()}if(""===inputName)for(var _i=0;_i<self.friendsInList.length;_i++)self.friendsInList[_i].show()})}),$(".search-friends input").on("focusout",function(){$(this).off("keyup")})}}]),AppLocation}(_Site3.default),instance=null;exports.default=AppLocation,exports.AppLocation=AppLocation,exports.run=function(){getInstance().run()},exports.getInstance=getInstance});