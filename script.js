const FormConnexion = document.getElementById('FormConnexion');
FormConnexion.addEventListener('submit',function(event){
	event.preventDefault();
	event.stopPropagation();
	let Pseudo = document.getElementById('Pseudo');
	let Password = document.getElementById('Password');
	if (Pseudo.value == 'Moi' && Password.value == 'Toi'){
		document.location.href="Profil.html";
	} else {
		alert('Votre Pseudo/Email ou votre Mot de passe est invalide.');
		Pseudo.value = "";
		Password.value= "";
	}
});