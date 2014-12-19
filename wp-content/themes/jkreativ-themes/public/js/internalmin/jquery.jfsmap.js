(function($,window,google){"use strict";$.fn.jfsmap=function(options){return $(this).each(function(){var element=this;var address=[];$(".maplist .infowindow").each(function(i){address[i]={'element':this,'lat':parseFloat($(this).data('lat')),'lng':parseFloat($(this).data('lng'))};});var infoBubble=[];var marker=[];var mapcenter,mapzoom;if(google===undefined||google.maps.MapTypeId===undefined){return null;}
    var myOptions={mapTypeId:google.maps.MapTypeId.ROADMAP,disableDefaultUI:true,scrollwheel:true,navigationControl:true,mapTypeControl:false,scaleControl:false,draggable:true,panControl:false,zoomControl:true,zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL,position:google.maps.ControlPosition.RIGHT_BOTTOM}};var gmap=new google.maps.Map(document.getElementById("mapcontainer"),myOptions);var bounds=new google.maps.LatLngBounds();var directionsDisplay=new google.maps.DirectionsRenderer();var directionsService=new google.maps.DirectionsService();directionsDisplay.setMap(gmap);var panto=function(ele){var idx=parseInt($(ele).data('index'),10)-1;var latLng=new google.maps.LatLng(address[idx].lat,address[idx].lng);gmap.panTo(latLng);closeAllInfoWindow();infoBubble[idx].open(gmap,marker[idx]);google.maps.event.addListenerOnce(infoBubble[idx],'domready',function(){$("#mapcontainer .closeme").click(function(){closeAllInfoWindow();});});};var showloader=function(){$(".mapoverlay").fadeIn();};var hideloader=function(){$(".mapoverlay").fadeOut();};var doshowdirection=function(from_x,from_y,to_x,to_y){closeAllInfoWindow();var request={origin:new google.maps.LatLng(from_x,from_y),destination:new google.maps.LatLng(to_x,to_y),travelMode:google.maps.DirectionsTravelMode.DRIVING};directionsService.route(request,function(response,status){if(status==google.maps.DirectionsStatus.OK){$(".lcontent, .ccontent").slideUp();$(".ltoogle, .ctoogle").removeClass('active');directionsDisplay.setDirections(response);}else{window.alert("Unable to get direction 2");}
        hideloader();});};var showdirection=function(ele){var parent=$(ele).parents('.mapitem');var idx=parseInt($(parent).data('index'),10)-1;var to_x=address[idx].lat;var to_y=address[idx].lng;showloader();if(window.navigator.geolocation){window.navigator.geolocation.getCurrentPosition(function(position){var from_x=position.coords.latitude;var from_y=position.coords.longitude;doshowdirection(from_x,from_y,to_x,to_y);},function(err){window.alert("Unable to get direction 1");console.warn('ERROR('+err.code+'): '+err.message);},{timeout:10000});}};var addMarker=function(pos,maptomark,index){return new google.maps.Marker({position:pos,map:maptomark,zIndex:10});};var AddInfoBubble=function(address,index,latLng){var NewInfoBubble=new InfoBubble({map:gmap,content:address.element,position:latLng,shadowStyle:0,padding:0,backgroundColor:'rgba(125, 125, 125, 0.1)',borderRadius:5,arrowSize:10,borderWidth:0.5,borderColor:'#fff',disableAutoPan:true,hideCloseButton:true,arrowPosition:40,backgroundClassName:'infowindowbg',arrowStyle:2});google.maps.event.addListener(marker[index],'click',function(){closeAllInfoWindow();NewInfoBubble.open(gmap,marker[index]);NewInfoBubble.panToView();google.maps.event.addListenerOnce(infoBubble[idx],'domready',function(){$("#mapcontainer .closeme").click(function(){closeAllInfoWindow();});});});return NewInfoBubble;};var closeAllInfoWindow=function(){for(var i=0;i<infoBubble.length;i++){infoBubble[i].close();}};var populateMarker=function(){for(var i=0;i<address.length;i++){var latLng=new google.maps.LatLng(address[i].lat,address[i].lng);marker[i]=addMarker(latLng,gmap,10);infoBubble[i]=AddInfoBubble(address[i],i,latLng);bounds.extend(latLng);}};populateMarker();if(address.length>1){gmap.fitBounds(bounds);mapcenter=bounds.getCenter();var firstloaded=true;google.maps.event.addListener(gmap,'bounds_changed',function(){mapzoom=firstloaded?gmap.getZoom():mapzoom;firstloaded=false;});}else{gmap.setCenter(bounds.getCenter());gmap.setZoom(options.zoomfactor);mapcenter=bounds.getCenter();}
    $(".contactheading",element).bind('click',function(){var target=$(this).data('target');var anot=$(this).data('switcher');if($(this).hasClass('active')){$(this).removeClass('active');$(target).slideUp("fast");}else{$(this).addClass('active');$(target).slideDown("fast");$("."+anot+"toogle").removeClass('active');$("."+anot+"content").slideUp("fast");}});$(".mapitem",element).bind('mouseenter',function(){if(gmap===null){return;}
        panto(this);});$(".mapbutton",element).bind('click',function(){if(gmap===null){return;}
        showdirection(this);});});};})(jQuery,window,google);