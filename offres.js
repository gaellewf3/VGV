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

// var resize = document.getElementsByClassName('resize');
// console.log(resize);

// for(var i =0; i<resize.length; i++) { 
// 	console.log('test')
// resize[i].addEventListener('click', function(){
// 	this.style.fontSize = "48px";
// })

// }

//*****
 

// var show = document.getElementsByClassName('lm')

// for (var i=0; i<lm.length; i++){

// 		lm[i].addEventListener('click', function(){

// 		})
// }



// function show() {
//     var myClasses = document.querySelectorAll('.lm'),
//         i = 0,
//         l = myClasses.length;

//     for (i; i < l; i++) {
//         myClasses[i].style.display = 'block';
//     }
// }



//***** 

// var show = document.getElementsByClassName('show');
 
// for(var i =0; i<lm.display; i++) { 
// 	console.log('test')
//     lm[i].addEventListener('click', function(){
// 	this.diplay = "none";
// })

// }

function showtab(cartename) 
{ 
	// hide every element with class 'tab'  
	var cartes = getElementsByClass('lm');
	for(i=0; i<cartes.length; i++) 
		cartes[i].style.display = 'none';
	// hide every element with class 'tab'		 
 
	document.getElementsByClass('lm').style.display='block';
	// show element with given tabname 

}

 

 
//************* last 
// var lastButton = document.getElementById('lastButton');
// var blocLastResp = document.getElementById('blocLastResponsive');

// lastButton.addEventListener('click', function(){
	 

// 	if (blocLastResp.style.display == 'block') {
// 		blocLastResp.style.display = 'none';
// 	}else{
// 		blocLastResp.style.display = 'block';
// 	}
// })
 

//************ long
// var longButton = document.getElementById('longButton');
// var blocLongResp = document.getElementById('blocLongResponsive');

// longButton.addEventListener('click', function(){
	 

// 	if (blocLongResp.style.display == 'block') {
// 		blocLongResp.style.display = 'none';
// 	}else{
// 		blocLongResp.style.display = 'block';
// 	}
// })
 
//************ moyen

// var moyenButton = document.getElementById('moyenButton');
// var blocMoyenResponsive = document.getElementById('blocMoyenResponsive');

// moyenButton.addEventListener('click', function(){
	 

// 	if (blocMoyenResponsive.style.display == 'block') {
// 		blocMoyenResponsive.style.display = 'none';
// 	}else{
// 		blocMoyenResponsive.style.display = 'block';
// 	}
// })

//************ croisiere/circuit

// var ccButton = document.getElementById('ccButton');
// var blocCCResponsive = document.getElementById('blocCCResponsive');

// ccButton.addEventListener('click', function(){
	 

// 	if (blocCCResponsive.style.display == 'block') {
// 		blocCCResponsive.style.display = 'none';
// 	}else{
// 		blocCCResponsive.style.display = 'block';
// 	}
// })

//************ divers

// var diversButton = document.getElementById('diversButton');
// var blocDiversResponsive = document.getElementById('blocDiversResponsive');

// diversButton.addEventListener('click', function(){
	 

// 	if (blocDiversResponsive.style.display == 'block') {
// 		blocDiversResponsive.style.display = 'none';
// 	}else{
// 		blocDiversResponsive.style.display = 'block';
// 	}
// })

//************ toutes A REVOIR !!! 

// var toutesButton = document.getElementById('toutesButton');
// var blocToutes = document.getElementById('blocToutes');

// toutesButton.addEventListener('click', function(){
	 

// 	if (blocToutes.style.display == 'block') {
// 		blocToutes.style.display = 'none';
// 	}else{
// 		blocToutes.style.display = 'block';
// 	}
// })