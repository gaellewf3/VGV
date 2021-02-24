var buttonToutes = document.getElementById('toutesButton');
console.log(buttonToutes);

var buttonFiltre = document.getElementsByClassName('btnVoyage');
console.log(buttonFiltre);

var carte = document.getElementsByClassName('carte');
console.log(carte);

var buttonLm = document.getElementById('lastButton');
console.log(buttonLm);

var lm = document.getElementsByClassName('lm');
console.log(lm);

var buttonLc = document.getElementById('longButton');
console.log(buttonLc);

var lc = document.getElementsByClassName('lc');
console.log(lc);

var buttonMc = document.getElementById('moyenButton');
console.log(buttonMc);

var mc = document.getElementsByClassName('mc');
console.log(mc);

var buttonCc = document.getElementById('ccButton');
console.log(buttonCc);

var cc = document.getElementsByClassName('cc');
console.log(cc);

var buttonD = document.getElementById('diversButton');
console.log(buttonD);

var d = document.getElementsByClassName('d');
console.log(d);

buttonToutes.addEventListener('click', afficheToutes);

function afficheToutes() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'block';
	} 
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonToutes.style.backgroundColor = '#00E300';
	buttonToutes.style.color = '#ffffff';
}

buttonLm.addEventListener('click', afficheLm);

function afficheLm() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'none';
	} 

	for (i = 0; i < lm.length; i++) {
		lm[i].style.display = 'block';
	}
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonLm.style.backgroundColor = '#00E300';
	buttonLm.style.color = '#ffffff';
}

buttonLc.addEventListener('click', afficheLc);

function afficheLc() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'none';
	} 

	for (i = 0; i < lc.length; i++) {
		lc[i].style.display = 'block';
	}
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonLc.style.backgroundColor = '#00E300';
	buttonLc.style.color = '#ffffff';
}

buttonMc.addEventListener('click', afficheMc);

function afficheMc() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'none';
	} 

	for (i = 0; i < mc.length; i++) {
		mc[i].style.display = 'block';
	}
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonMc.style.backgroundColor = '#00E300';
	buttonMc.style.color = '#ffffff';
}

buttonCc.addEventListener('click', afficheCc);

function afficheCc() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'none';
	} 

	for (i = 0; i < cc.length; i++) {
		cc[i].style.display = 'block';
	}
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonCc.style.backgroundColor = '#00E300';
	buttonCc.style.color = '#ffffff';
}

buttonD.addEventListener('click', afficheD);

function afficheD() {
	for (i = 0; i < carte.length; i++) {
		carte[i].style.display = 'none';
	} 

	for (i = 0; i < d.length; i++) {
		d[i].style.display = 'block';
	}
	for (i = 0; i < buttonFiltre.length; i++) {
		buttonFiltre[i].style.backgroundColor = '#ffffff';
		buttonFiltre[i].style.color = '#00E300';
	}
	buttonD.style.backgroundColor = '#00E300';
	buttonD.style.color = '#ffffff';
}