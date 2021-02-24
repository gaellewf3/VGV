var mymap = L.map("map").setView([ 48.56300,2.34268], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidGVzdGlidXp6IiwiYSI6ImNra3BsdGFwcTJmOXAydnRkdjRsbWQ4b2sifQ.BJJVO7rCoMtxYPVOUioQxw', {
		maxZoom: 18,
		attribution: 'TestiBuzz',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([48.56300, 2.34268]).addTo(mymap);


// ------------ menu burger responsive -------------

var hamburger = document.getElementById('hamburger');
// je cible la balise burger
console.log(hamburger);


//je cible la div
var menuResp = document.getElementById('menuResponsive');


hamburger.addEventListener('click', function(){
	console.log('test depuis addEventListener');

	if (menuResp.style.display == 'block') {
		menuResp.style.display = 'none';
	}else{
		menuResp.style.display = 'block';
	}
})

