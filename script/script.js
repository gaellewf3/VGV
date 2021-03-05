// ------- map leaf-----------

var mymap = L.map("map").setView([ 48.56300,2.34268], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidGVzdGlidXp6IiwiYSI6ImNra3BsdGFwcTJmOXAydnRkdjRsbWQ4b2sifQ.BJJVO7rCoMtxYPVOUioQxw', {
		maxZoom: 18,
		attribution: 'TestiBuzz',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([48.56300, 2.34268]).addTo(mymap);





// ------------ envoie form si click accepte  -------------

var nom = document.getElementById('nom')
var prenom = document.getElementById('prenom')
var email2 = document.getElementById('email2')
var tel = document.getElementById('tel')

console.log(nom);
console.log(prenom);
console.log(email);
console.log(tel);

document.getElementById('field5').addEventListener('click', checkForm);



function checkForm() {
	var checkbox = document.getElementById("field5");
	console.log(checkbox);
	if (checkbox.checked == true && prenom.value.length > 2 && nom.value.length  > 2 && email2.value.length > 6  && tel.value.length > 10  )
	//  && nom.value.length > 2 && email.value.length > 6 && tel.value.length > 10 
	{
		document.getElementById("envoyerForm").disabled = false;
	} else {
		document.getElementById("envoyerForm").disabled = true;
	}
}


// document.getElementById('field5', 'field-divided',).addEventListener('change', checkForm);

// function checkForm() {
// 	var checkbox = document.getElementById("field5");
// 	console.log();
// 	if (checkbox.checked == true){
// 		document.getElementById("envoyerForm").disabled = false;
// 	} else {
// 		document.getElementById("envoyerForm").disabled = true;
// 	}
// }

	// ------------ menu burger responsive -------------



var burger = document.getElementById('burger');
var menu = document.getElementById('menu');
 

 burger.addEventListener('click', apparitionMenu);

 function apparitionMenu() {


	if (menu.style.display === 'block') {
 		menu.style.display = 'none';
 		burger.src = 'img/burger.png';
	} else {
		menu.style.display = 'block';
		burger.src = 'img/cross.png';
	}
}














 
