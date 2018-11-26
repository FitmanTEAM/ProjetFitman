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
			<li><a href="Contact.php" class="MenuLien">Contact</a></li>
			<?php
			echo '<a href="index.php?logout=true" class="MenuLien">Déconnexion</a>';
			?>
		</ul>
	</nav>
	<main class="ContenuProfil">
		<div class="ExerciceProfil">
			<h2 class="GrosTitreExercice">Exercices</h2>
			<ul id="ListeExercices">
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Pompes</a>
				</li>
				<a href="https://www.youtube.com/watch?v=vSeId-q2m5g&index=4&list=UUtUIeyt8KIrsM9J4Uzns7Ig" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Abdos</a>
				</li>
				<a href="https://www.youtube.com/watch?v=Pt6IK3hp_o0&list=UUtUIeyt8KIrsM9J4Uzns7Ig&index=3" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Squats</a>
				</li>
				<a href="https://www.youtube.com/watch?v=iR_6N_ApX30&list=UUtUIeyt8KIrsM9J4Uzns7Ig&index=2" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
				<li class="RectangleExercice">
					<a href="" class="NomExercice">Gainage</a>
				</li>
				<a href="https://www.youtube.com/watch?v=D63TM-I8wkw&list=UUtUIeyt8KIrsM9J4Uzns7Ig&index=1" class="VideoExercice">Si vous ne connaissez pas l'exercice, regardez cette vidéo !</a>
			</ul>
		</div>
		<div class="AlimentationProfil">
			<div class="RepasEntrer">
				<h2 class="GrosTitreAliment"> Qu'avez vous mangé aujourd'hui ?</h2>
				<br>
				<label> Choisissez votre aliment :</label>
				<select id="AlimentsAChoisir">
					<?php

					$bdd = new PDO('mysql:host=localhost;dbname=fitman', 'fitman', 'fitman', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					$aliment = $bdd->query('SELECT Nom_Nourriture, Calories_Nourriture FROM nourriture ORDER BY Nom_Nourriture');

					while ($ListeAliments = $aliment->fetch()){
						?>
						<option  class ="AlimentChoisi" value="<?php echo $ListeAliments['Nom_Nourriture'] . $ListeAliments['Calories_Nourriture']; ?>"><?php echo $ListeAliments['Nom_Nourriture']  . '= calories : ' . $ListeAliments['Calories_Nourriture']; ?></option>
					<?php } ?>
				</select>
				<button class="BouttonAjouter">Ajouter</button>
				<br>
				<br>
				<table id="TableauAliments">
					<caption>Résumé des aliments consommés</caption>
					<tr>
						<th>ALIMENT</th>
						<th>CALORIES</th>
						<th>SUPPRIMER</th>
					</tr>
				</table>
				<label>Votre total de calories est : </label>
				<label class="ResultatCalories"></label>
				<div class="BouttonValiderAliments"><button class="BouttonProposez">Proposez moi mon menu !</button></div>
			</div>
			<div class="NomMenu"></div>
			<br>
			<div class="DescriptionMenu"></div>
		</div>
	</main>
</body>
<script type="text/javascript" src="script.js"></script>
<script type="text/php" src="index.php"></script>
</html>