$(function() {
	'use strict';
	// Leftlet Maps
	var mymap = L.map('leaflet1').setView([45.505, -0.09], 13);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'sk.eyJ1IjoibG9yZHZpY3RvcjU1IiwiYSI6ImNrbjBmMXB5azBuNGQyd3BrZzg5c2kxeDUifQ.nFOFZprUMt4cLFKpEQeTSA'
	}).addTo(mymap);
	// Adding a Popup
	var mymap2 = L.map('leaflet2').setView([45.505, -0.09], 13);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'sk.eyJ1IjoibG9yZHZpY3RvcjU1IiwiYSI6ImNrbjBmMXB5azBuNGQyd3BrZzg5c2kxeDUifQ.nFOFZprUMt4cLFKpEQeTSA'
	}).addTo(mymap2);
	
	L.marker([45.5, -0.011]).addTo(mymap2).bindPopup("<b>Hello world!<\/b><br />I am a popup.").openPopup();
	// Adding a Circle
	var mymap3 = L.map('leaflet3').setView([45.505, -0.012], 13);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'sk.eyJ1IjoibG9yZHZpY3RvcjU1IiwiYSI6ImNrbjBmMXB5azBuNGQyd3BrZzg5c2kxeDUifQ.nFOFZprUMt4cLFKpEQeTSA'
	}).addTo(mymap3);
	L.circle([45.508, -0.11], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 100
	}).addTo(mymap3);
});