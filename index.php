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
	<title>Conseil sportif personnalisé - Fitman</title>
	<link rel="stylesheet" type="text/css" href="PageIndexEtProfil.css">
</head>
<body>
	<!-- Barre de gauche avec les liens Fb, Twitter et YT -->
	<aside >
		<div class="Liens">
			<a href="https://www.facebook.com/e.monsite"><img src="images/facebook.png" title="Facebook" class="LiensImages"></a>
			<a href="https://twitter.com/TiboInShape"><img src="images/twitter.png" title="Twitter" class="LiensImages"></a>
			<a href="https://www.youtube.com/channel/UCpWaR3gNAQGsX48cIlQC0qw"><img src="images/youtube.png" title="YouTube" class="LiensImages"></a>
		</div>
	</aside>
	<!-- Header du site avec le logo et une photo de fond -->
	<header class="Header">
		<img src="images/logo.png" class="Logo">
		<?php
		if (empty($_SESSION ['pseudo'])) {
		echo '<div class="Formulaire">
        <form method="post" action="Connexion.php">
        <input type="text" class="Input" name="Pseudo_Utilisateur" id="Pseudo" placeholder="Pseudo ou Email">
        <input type="password" class="Input" id="Password" name="Pass_Utilisateur" placeholder="Mot de passe">
        <input type="submit" value="Connexion">
        </form>
        <a href="Inscription.php" class="TextInscription"> Vous n\'êtes pas inscrits ? Inscrivez vous dès maintenant !</a>
		</div>';
		}
		?>
	</header>

		<!-- Menu navigation avec tout les boutons -->
		<nav class="Navigation">
            <div><?php 
            if(isset($_SESSION['pseudo'])){
            echo '<p class="Welcome">Bonjour '.$_SESSION['pseudo'];
            }
            ?></div>
			<ul class="Menu">
                 <?php
                if(isset($_SESSION['pseudo'])){
                echo '<li><a href="Profil.php" class="MenuLien">Profil</a></li>';
                }
                ?>
				<li><a href="Nutrition.php" class="MenuLien">Nutrition</a></li>
				<li><a href="Sport.php" class="MenuLien">Sport</a></li>
				<li><a href="Contact.php" class="MenuLien">Contact</a></li>
                <?php
                if(isset($_SESSION['pseudo'])){
                echo '<a href="index.php?logout=true" class="MenuLien">Déconnexion</a>';
                }
                ?>
			</ul>
		</nav>
		<!-- Bloc avec la présentation du site internet et le FitProf-->
		<div class="Contenu">
			<main class="Description">
				<p>Hey, vous êtes amateur de fitness ou musculation en tout genre, débutant souhaitant découvrir les joies de la pratique du sport ? Vous n'avez pas toujours la possibilité d'aller à la salle ou d'avoir un coach personnel ?</p>
				<br>
				<p>N'attendez plus ! Grâce à Fitman, vous bénéficierez d'une interface innovante et d'un suivi personnalisé vous permettant facilement d'atteindre vos objectifs. Que vous souhaitiez vous amincir ou développer votre musculature, Fitman est là pour vous.</p>
				<br>
				<p><a href="Inscription.php" class="LienInscription">Inscrivez-vous</a> dès maintenant et choisissez le Fitpote qui vous accompagnera.</p>
				<br>
				<p>Cette avatar à votre image vous permettra d'accéder à un suivi nutritif adapté à vos besoins, ainsi qu'à diverses exercices physiques dispensés par Fitprof, votre coach personnel ! En suivant son programme assiduement, vous aussi sculptez le corps de vos rêves !</p>
			</main>
			<img src="images/fitprof.png" class="ImgFitProf">
		</div>
		<footer class="Footer">
			<p>Fitman UDev 2018</p>
		</footer>
		<script type="text/javascript" src="script.js"></script>
	</body>
	</html>