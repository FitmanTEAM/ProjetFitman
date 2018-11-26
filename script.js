const alimentsAChoisir = document.getElementById('AlimentsAChoisir');
const tableauAliments = document.getElementById('TableauAliments');
let menuProposer = document.querySelector('.MenuProposer');
let bouttonAjouter = document.querySelector('.BouttonAjouter');
let bouttonProposez = document.querySelector('.BouttonProposez');
let resultatCalories = document.querySelector('.ResultatCalories');
let nomMenu = document.querySelector('.NomMenu');
let descriptionMenu = document.querySelector('.DescriptionMenu');
let totalCalories = 0;

resultatCalories.innerHTML = totalCalories;
bouttonAjouter.addEventListener('click',function(event){
	event.preventDefault();
	event.stopPropagation();

	let ligne = document.createElement('tr');

	let colonneAliment = document.createElement('td');
	colonneAliment.innerHTML = alimentsAChoisir.value.substr(0,alimentsAChoisir.value.length-3);

	let colonneCalorie = document.createElement('td');
	colonneCalorie.classList.add('RecupCalories');
	colonneCalorie.innerHTML = parseInt(alimentsAChoisir.value.substr(-3));

	totalCalories = parseInt(totalCalories) + parseInt(alimentsAChoisir.value.substr(-3));

	let colonneSupprimer = document.createElement('td');
	let bouttonSupprimer = document.createElement('button');
	bouttonSupprimer.classList.add('bouttonSupprimer')
	bouttonSupprimer.addEventListener('click',function(event){

		let recupCalories = parseInt(bouttonSupprimer.parentElement.previousSibling.innerHTML);
		totalCalories = totalCalories - parseInt(recupCalories);
		resultatCalories.innerHTML = totalCalories;
		let ligne = bouttonSupprimer.parentElement.parentElement;
		tableauAliments.removeChild(ligne);

	});

	resultatCalories.innerHTML = totalCalories;


	colonneSupprimer.appendChild(bouttonSupprimer);
	ligne.appendChild(colonneAliment);
	ligne.appendChild(colonneCalorie);
	ligne.appendChild(colonneSupprimer);
	tableauAliments.appendChild(ligne);
});

bouttonProposez.addEventListener('click', function(event){
	event.preventDefault();
	event.stopPropagation();
	nomMenu.innerHTML = "Menu Protéiné ";
	descriptionMenu.innerHTML = "Laitue romaine, Omelette : 2 oeufs + 10 cl de lait demi-écrémé + 1 cuillerée à café d'emmental râpé + champignons + gousse d'ail écrasée, 1 tranche de pain complet, 1 banane";
});