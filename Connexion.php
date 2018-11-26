<?php
//$conn = new mysqli('localhost','root','','fitman'); //connexion à la bdd
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//  echo "DB Connected successfully"
// ;
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION

$bdd = new PDO(
    'mysql:host=localhost;dbname=fitman', 
    'fitman',
    'fitman');


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$pseudo = $_POST['Pseudo_Utilisateur'];
$password = $_POST['Pass_Utilisateur'];
$req = $bdd->prepare('SELECT Id_Utilisateur FROM utilisateur WHERE Pseudo_Utilisateur=:pseudo AND Mot_De_Passe_Utilisateur=:password');
$req->execute(array(
    ':pseudo' => $pseudo,
    ':password' => $password));

$resultat = $req->fetch();

if (!$resultat)
{
    header("Location: index.php");
}
else
{
    $_SESSION['id'] = $resultat['Id_Utilisateur'];
    $_SESSION['pseudo'] = $pseudo;
    header("Location: Profil.php");
}
?>