<?php
// Connexion à la base de données
try 
{
	$bdd = new PDO(
		'mysql:host=localhost;dbname=fitman;charset=utf8',
		'root',
		'');

	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$continue = true;

$fields = [
	'nom',
	'prenom',
	'pseudo',
	'email',
	'sexe',
	'date',
	'motdepasse',
	'poids',
	'taille',
	'sport',
	'travail',
	'fitpot'
];

foreach($fields as $field) {
	if (!isset($_POST[$field])) {
		$continue = false;
	}
}

// // Insertion du message à l'aide d'une requête préparée
// $nom = $_POST['Nom_Utilisateur'] ?? '';
// $prenom = $_POST['Prenom_Utilisateur'] ?? '';
// $pseudo = $_POST['Pseudo_Utilisateur'] ?? '';
// $email = $_POST['Email_Utilisateur'] ?? '';
// $sexe = $_POST['Sexe_Utilisateur'] ?? '';
// $date = $_POST['Date_Anniv_Utilisateur'] ?? '';
// $motdepasse = $_POST['Mot_De_Passe_Utilisateur'] ?? '';
// $poids = $_POST['Poids_Utilisateur'] ?? '';
// $taille = $_POST['Taille_Utilisateur'] ?? '';
// $sport = $_POST['Niveau_Sport_Utilisateur'] ?? '';
// $travail = $_POST['Travail_Physique_Utilisateur'] ?? '';

if ($continue) {

	$req = $bdd->prepare('INSERT INTO utilisateur(
		Nom_Utilisateur,
		Prenom_Utilisateur,
		Pseudo_Utilisateur,
		Email_Utilisateur,
		Sexe_Utilisateur,
		Date_Anniv_Utilisateur,
		Mot_De_Passe_Utilisateur,
		Poids_Utilisateur,
		Taille_Utilisateur, 
		Niveau_Sport_Utilisateur,
		Travail_Physique_Utilisateur,
		Code_Fitpote_Utilisateur)
		VALUES(:nom, :prenom, :pseudo, :email, :sexe, :date, :motdepasse, :poids, :taille, :sport, :travail, :fitpot)');

	$req->execute([
		':nom' => $_POST['nom'],
		':prenom' => $_POST['prenom'],
		':pseudo' => $_POST['pseudo'],
		':email' => $_POST['email'],
		':sexe' => $_POST['sexe'],
		':date' => $_POST['date'],
		':motdepasse' => $_POST['motdepasse'],
		':poids' => $_POST['poids'],
		':taille' => $_POST['taille'],
		':sport' => $_POST['sport'],
		':travail' => $_POST['travail'],
		':fitpot' => $_POST['fitpot']
	]);
}

}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

header('Location: index.php');

?>