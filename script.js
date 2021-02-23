var mymap = L.map("map").setView([ 48.56300,2.34268], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidGVzdGlidXp6IiwiYSI6ImNra3BsdGFwcTJmOXAydnRkdjRsbWQ4b2sifQ.BJJVO7rCoMtxYPVOUioQxw', {
		maxZoom: 18,
		attribution: 'TestiBuzz',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([48.56300, 2.34268]).addTo(mymap);


// ------------ checkbox offres -------------









// var carre0 = document.getElementById('carre0'); 
// carre0.onclick = function(){
// 	if (carre0.style.backgroundColor == 'white') {				 
// 		carre0.style.backgroundColor = '#00E300';
// 	}else{
// 		carre0.style.backgroundColor = "white";

// 	}
// }
 
// var carre1 = document.getElementById('carre1'); 
// carre1.onclick = function(){
// 	if (carre1.style.backgroundColor == 'white') {				 
// 		carre1.style.backgroundColor = '#00E300';
// 	}else{
// 		carre1.style.backgroundColor = "white";
// 	}
// }



// var carre1 = document.getElementById('carre1');

// carte-divers.addEventListener('click', function(){

    
   
// 	if (carte-divers.style.display == 'block') {
// 		carte-divers.style.display = 'none';
// 	}else{
// 		carte-divers.style.display = 'block';
// 	}
// })
  




// var carre2 = document.getElementById('carre2'); 
// carre2.onclick = function(){
// 	if (carre2.style.backgroundColor == 'white') {				 
// 		carre2.style.backgroundColor = '#00E300';
// 	}else{
// 		carre2.style.backgroundColor = "white";
// 	}
// }
// var carre3 = document.getElementById('carre3'); 
// carre3.onclick = function(){
// 	if (carre3.style.backgroundColor == 'white') {				 
// 		carre3.style.backgroundColor = '#00E300';
// 	}else{
// 		carre3.style.backgroundColor = "white";
// 	}
// }
// var carre4 = document.getElementById('carre4'); 
// carre4.onclick = function(){
// 	if (carre4.style.backgroundColor == 'white') {				 
// 		carre4.style.backgroundColor = '#00E300';
// 	}else{
// 		carre4.style.backgroundColor = "white";
// 	}
// }

// var carre5 = document.getElementById('carre5'); 
// carre5.onclick = function(){
// 	if (carre5.style.backgroundColor == 'white') {				 
// 		carre5.style.backgroundColor = '#00E300';
// 	}else{
// 		carre5.style.backgroundColor = "white";
// 	}
// }



// var divs = ["blocLast", "blocLong", "blocMoyen", "blocDivers", "blocCroisiereCircuit"];
// var visibleDivId = null;
// function toggleVisibility(divId) {
//   if(visibleDivId === divId) {
//    } else {
//     visibleDivId = divId;
//   }
//   hideNonVisibleDivs();
// }
// function hideNonVisibleDivs() {
//   var i, divId, div;
//   for(i = 0; i < divs.length; i++) {
//     divId = divs[i];
//     div = document.getElementById(divId);
//     if(visibleDivId === divId) {
//       div.style.display = "block";
//     } else {
//       div.style.display = "none";
//     }
//   }
// }








   // var img = document.getElementById('img');

	//var cache = document.getElementById('cache');

	//img.addEventListener('click', function(){
 	
	//	if (cache.style.display == 'block') {
	//		cache.style.display = 'none';
	//	}else{
	//		cache.style.display = 'block';
	//	}
//	})
	 
  //  if (img.src == "../VGV/img/check-blanc.png") {
 
    //    img.src = "../VGV/img/check-blanc.png";
    //}
    //else {
 
      //  img.src = "../VGV/img/check-vert.png";
 
    //}
 
//}