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
	<title>Conseil sportif personnalisé - Fitman - Contact</title>
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
		<form method="post" action="ContactIns.php" class="ContactForm">
				<h1 class="H1">Contactez-nous !</h1>
				<label for="Contact_Nom" class="Label">Nom :</label>
				<input type="text" id="nom" placeholder="Votre Nom" class="TextInput" name="nom">
				<br>
				<label for=Contact_Prenom" class="Label">Prenom:</label>
				<input type="text" id="prenom" placeholder="Votre Prenom" class="TextInput" name="prenom">
				<br>
				<label for='Contact_Email' class="Label">Email :</label>
				<input type="email" id="mail" placeholder="Email"  class="TextInput" name="mail">
				<br>
				<label for=Contact_Message" class="Label">Votre message:</label>
				<textarea id="message" name="message"></textarea>
				<br>
				<!-- <label for="Contact_Subscribe" class="Label">NewLetters :</label>
				<input type="Checkbox" id="Contact_Subscribe">
				<br> -->
				<div class="Right">
				<input type="Submit" value="Envoyer">
				</div>

			</form>
	</div>
	<footer class="Footer">
		<p>UDev 2018</p>
	</footer>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/php" src="index2.php"></script>
</body>
</html>