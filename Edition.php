<?php 

    session_start();

    if ($_GET['logout'] ?? false == true) {
        $_SESSION = [];
        session_destroy();
    }

?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Conseil sportif personnalisé - Fitman - Edite</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<aside>
			<div class="Liens">
				<a href="https://www.facebook.com/e.monsite"><img src="images/facebook.png" title="Facebook" class="LiensImages"></a>
				<a href="https://twitter.com/Emonsite"><img src="images/twitter.png" title="Twitter" class="LiensImages"></a>
				<a href="https://www.youtube.com/channel/UC78TrmL0AHjQ4lKO8IZcQhQ"><img src="images/youtube.png" title="YouTube" class="LiensImages"></a>
			</div>
	</aside>

	<header class="Header">
			<img src="images/logo.png" class="Logo">
			<div class ="Formulaire">
            <?php 
                if ($_SESSION['id'] ?? false):
                    echo '<p class="welcome">Bonjour '.$_SESSION['pseudo'].'</p>';
                    echo '<a href="index.php?logout=true" class="logoutBtn">Déconnexion</a>';
                else: ?>
                    <form method="post" action="index2.php">
                    <input type="text" class="Input" name="Pseudo_Utilisateur" id="Pseudo" placeholder="Pseudo ou Email">
                    <input type="password" class="Input" id="Password" name="Pass_Utilisateur" placeholder="Mot de passe">
                    <input type="submit" value="Connexion">
                    </form>
                    <a href="Inscription.php" class="TextInscription"> Vous n'êtes pas inscrits ? Inscrivez vous dès maintenant !</a>
            <?php endif ?>
			
			</div>			
	</header>

	<nav class="Navigation">
		<ul class="Menu">
			<li><a href="index.php" class="MenuLien">Acceuil</a></li>
				<li><a href="Nutrition.php" class="MenuLien">Nutrition</a></li>
				<li><a href="Sport.php" class="MenuLien">Sport</a></li>
				</ul>
	</nav>
	<div class="Contenu">
		<form method="post" action="EditionIns.php" class="InscriptionForm">
				<h1 class="H1">Edition du profil</h1>
				</br>
				<label for="Mot_De_Passe_Utilisateur" class="Label">Mot de passe :</label>
				<input type="password" id="LabelMenu" placeholder="Mot de passe" name="motdepasse" class="TextInput">
				<br>
				<label for="Sexe_Utilisateur" class="Label">Sexe :</label>
				<select id="Sexe_Utilisateur" name="sexe" class="TextInput">
					<option value="Homme">Homme</option>
					<option value="Femme">Femme</option>
					<option value="Non Binaire">Non Binaire</option>
				</select>
				<br>
				<label for="Nom_Utilisateur" class="Label">Nom :</label>
				<input type="text" id="Nom_Utilisateur" placeholder="Votre Nom" name="nom" class="TextInput">
				<br>
				<label for="Prenom_Utilisateur" class="Label">Prenom:</label>
				<input type="text" id="Prenom_Utilisateur" placeholder="Votre Prenom" name="prenom" class="TextInput">
				<br>
				<label for="Date_Anniv_Utilisateur" class="Label">Année de naissance :</label>
				<input type="text" id="Date_Anniv_Utilisateur" placeholder="aaaa/mm/jj" name="date" class="TextInput">
				<br>
				<label for="Taille_Utilisateur" class="Label">Taille :</label>
				<input type="text" id="Taille_Utilisateur" placeholder="ex : 160cm" name="taille" class="TextInput">
				<br>
				<label for="Poids_Utilisateur" class="Label">Poids :</label>
				<input type="text" id="Poids_Utilisateur" placeholder="ex : 58kg" name="poids" class="TextInput">
				<br>
				<label for='Email_Utilisateur' class="Label">Email :</label>
				<input type="email" id="Email_Utilisateur" placeholder="Email" name="email"  class="TextInput">
				<br>
				<div class="Right">
				<input type="Submit" value="Valider">
				</div>
			</form>
		<img src="images/fitprof.png" class="ImgFitProf2">
	</div>
	<footer class="Footer">
		<p>UDev 2018</p>
	</footer>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/php" src="index2.php"></script>
</body>
</html>