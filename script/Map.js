"use strict"

function initialize() {
        var mapCanvas = document.getElementById("map-canvas");
        var mapOptions = {
          center: new google.maps.LatLng(56.677651, 16.357657),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions)
        
        var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
              });

        mapCanvas.appendChild(map);
        map.appendChild(mapOptions);
        mapOptions.appendChild(marker);
}
google.maps.event.addDomListener(window, "load", initialize);