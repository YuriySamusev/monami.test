
"use strict";
$(document).ready(function () {
	$(function () {
	  var map = new google.maps.Map(document.getElementById('map_1'),
	   {
		zoom: 16,
		center: {lat: 50.467018, lng: 30.510754},
		scrollwheel: false,
		mapTypeControl: false,
		panControl: false,
		disableDefaultUI: false,
		mapTypeControlOptions: {
		   style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
		   position: google.maps.ControlPosition.RIGHT_BOTTOM
		},
		zoomControl: true,
		zoomControlOptions: {
		   position: google.maps.ControlPosition.LEFT_CENTER
		},
		scaleControl: true,
		streetViewControl: false
	  });

	  var image = 'img/petrol-marker.png';
	  var beachMarker = new google.maps.Marker({
			position: {lat: 50.467018, lng: 30.510754},
			map: map,
			icon: image
		  	});
	});
});
