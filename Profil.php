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
	<title>Page Utilisateur - Fitman</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Barre de gauche avec les liens Fb, Twitter et YT -->
	<aside >
		<div class="Liens">
			<a href="https://www.facebook.com/e.monsite"><img src="images/facebook.png" title="Facebook" class="LiensImages"></a>
			<a href="https://twitter.com/Emonsite"><img src="images/twitter.png" title="Twitter" class="LiensImages"></a>
			<a href="https://www.youtube.com/channel/UC78TrmL0AHjQ4lKO8IZcQhQ"><img src="images/youtube.png" title="YouTube" class="LiensImages"></a>
		</div>
	</aside>
	<nav class="Navigation">
		<div>
			<a href="index.php"><img src="images/logo.png" class="LogoProfil"></a>
			<?php 
        	echo '<p class="Welcome">Bonjour '.$_SESSION['pseudo'];
			?>
		</div>
		<ul class="Menu">
			<li><a href="Nutrition.php" class="MenuLien">Nutrition</a></li>
			<li><a href="Sport.php" class="MenuLien">Sport</a></li>
			<li><a href="News.php" class="MenuLien">News</a></li>
			<li><a href="Contact.php" class="MenuLien">Contact</a></li>
			<?php
			echo '<a href="index.php?logout=true" class="MenuLien">Déconnexion</a>';
			?>
		</ul>
	</nav>
	<main class="ContenuProfil">
		<div class="ExerciceProfil">
			<h2 class="TitreExercices">Exercices</h2>
			<ul id="ListeExercices">
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Pompes</a>
				</li>
				<a href="https://www.youtube.com/watch?v=TR13PiA4KHs" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Abdos</a>
				</li>
				<a href="https://www.youtube.com/watch?v=BUUilsJkDBg" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Squats</a>
				</li>
				<a href="https://www.youtube.com/watch?v=EXFBExFRTBY" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Dips</a>
				</li>
				<a href="https://www.youtube.com/watch?v=kZo95z2zH40" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
			</ul>
		</div>
		<div class="AlimentationProfil">
			<div class="RepasEntrer">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque harum voluptas sequi placeat officiis minus ducimus rerum exercitationem quas, fuga porro facilis magni voluptatibus deserunt asperiores possimus, quaerat! Asperiores, cum.</p>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit debitis sequi, mollitia quam saepe quasi excepturi non, tempore illum adipisci, facere earum est. Velit sed odit aperiam debitis illum.</p>
			</div>
			<div class="PropositionRepas">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque harum voluptas sequi placeat officiis minus ducimus rerum exercitationem quas, fuga porro facilis magni voluptatibus deserunt asperiores possimus, quaerat! Asperiores, cum.</p>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit debitis sequi, mollitia quam saepe quasi excepturi non, tempore illum adipisci, facere earum est. Velit sed odit aperiam debitis illum.</p>
			</div>
		</div>
	</main>
</body>
<script type="text/javascript" src="script.js"></script>
<script type="text/php" src="index.php"></script>
</html>