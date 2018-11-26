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
	<title>Conseil sportif personnalisé - Fitman - Nutrition</title>
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
				<li><a href="Sport.php" class="MenuLien">Sport</a></li>
				<li><a href="Contact.php" class="MenuLien">Contact</a></li>
			</ul>
	</nav>

	<div class="Contenu">
	<main class = PresentationNutrition>
		<h1 class="TitreNutritionPrincip">Mangez-mieux</h1>
		<p class="ParagrapheNutritionPrincip">FitMan, c'est aussi des conseils nutritifs adaptés à vos besoins.
		</br>
		Pense-bête de fitPote :
		</p>
		</br>
		<ul class="ConseilFitPote">
			<li><a class="ListeConseilFitPote">En cas de fringale : un yaourt</a></li>
			<li><a class="ListeConseilFitPote">Féculents et légumineuses : poids cru, avant cuisson</a></li>
			<li><a class="ListeConseilFitPote">Légumes : à volonté si aucune quantité n'est indiquée</a></li>
			<li><a class="ListeConseilFitPote">Boisson : 1,5 l d'eau minimum/jour + 50 cl par heure d'effort. Éviter les eaux pétillantes, sauf Salvetat</a></li>
			<li><a class="ListeConseilFitPote">Produits laitiers à 0 % : ils doivent être enrichis en vitamine D afin d'aider à l'absorption du calcium</a></li>
		</ul>
		
		</main>
	</div>

	<div class="Contenu ContenuNutrition">
		
		<aside class="Repas1 AsideNutrition">
			<div class="GrosTextNutrition">
			<h2 class="TitreNutritionPrincip">Légumes Farcis</h2>
			<img src="Images/menu1.png" class="LiensImagesNutrition1">
			</br>
			</br>
			<h3 class="TitreNutrition">Ingrédients :</h3>
			<ul class="IngredientListe">
				<li><a class="Ingredient">Viande de mouton hachée  : 150 g</a></li>
				<li><a class="Ingredient">Oignon  : 0,5</a></li>
				<li><a class="Ingredient">Ail  : 0,5 gousse</a></li>
				<li><a class="Ingredient">Persil haché  : 0,5 cuil. à soupe</a></li>
				<li><a class="Ingredient">Coriandre fraîche hachée  : 0,5 cuil. à soupe</a></li>
				<li><a class="Ingredient">Oeufs  : 1 </a></li>
				<li><a class="Ingredient">Riz cuit à l'eau  : 40 g</a></li>
				<li><a class="Ingredient">Oignons nouveaux  : 3</a></li>
				<li><a class="Ingredient">Safran  : 0,5 pincée</a></li>
				<li><a class="Ingredient">Tomate concentrée  : 0.5  cuil. à soupe</a></li>
				<li><a class="Ingredient">Courgettes  : 1  </a></li>
				<li><a class="Ingredient">Concombre  : 0.5  </a></li>
				<li><a class="Ingredient">Poivrons verts  : 1  </a></li>
				<li><a class="Ingredient">Tomates  : 1  </a></li>
				<li><a class="Ingredient">Grosse carotte  : 0.5  </a></li>
				<li><a class="Ingredient">Huile d'olive  : 3  cuil. à soupe</a></li>
				<li><a class="Ingredient">Sel</a></li>
				<li><a class="Ingredient">Poivre</a></li>
			</ul>
			<br/>
			
			<h3 class="TitreNutrition">Préparation :</h3>
			<ol class="PreparationListe">
				<li><a class="Preparation">Épluchez l'ail, l'oignon et hachez-les finement. Mélangez ensemble la viande, l'ail, l'oignon, le persil, la coriandre, le riz et les œufs. Assaisonnez de sel, poivre et safran.</a></li>
				<br>
				<li><a class="Preparation">Lavez les légumes, épluchez la carotte, coupez la partie haute des tomates et des poivrons et videz-les. Découpez les courgettes, la carotte et le concombre en tronçons et évidez chaque tronçon afin de former une cavité. Faites blanchir la carotte 5 min. Garnissez chaque légumes de farce.</a></li>
				<br>
				<li><a class="Preparation">Préchauffez le four th. 7 (210 °C). Dans une casserole versez 1 cuil. d'huile, faites fondre les oignons sans colorer, ajoutez le concentré de tomate et 10 cl d'eau. Salez, poivrez et donnez une ébullition</a></li>
				<br>
				<li><a class="Preparation">Versez dans un plat allant au four, rangez les légumes farcis dessus. Arrosez-les d'huile d'olive et mettez à cuire pendant 25 min environ en arrosant de temps en temps. Servez dans le plat de cuisson dès la sortie du four.</a></li>
			</ol>
			</div>
		</aside>

		<aside class="Repas2 AsideNutrition">
			<div class="GrosTextNutrition">
			<h2 class="TitreNutritionPrincip">Consommé de poulet</h2>
			<img src="Images/Poulet.png" class="LiensImagesNutrition2">
			</br>
			<h3 class="TitreNutrition">Ingrédients :</h3>
			<ul class="IngredientListe"></ul>
				<li><a class="Ingredient">Blanc de poulet(200 g)  : 1 </a></li>
				<li><a class="Ingredient">Beaux champignons de Paris  : 4  </a></li>
				<li><a class="Ingredient">Blanc de poireau  : 1  </a></li>
				<li><a class="Ingredient">Cube de bouillon de poule  : 1  </a></li>
				<li><a class="Ingredient">Cardamome en poudre  : 1  cuil. à café</a></li>
				<li><a class="Ingredient">Sel</a></li>
				<li><a class="Ingredient">Poivre</a></li>
			</br>
			</br>
			<h3 class="TitreNutrition">Préparation :</h3>
			<ol class="PreparationListe">
				<li><a class="Preparation">Coupez le blanc de poulet en petits cubes. Lavez et égouttez le blanc de poireau, puis taillez-le en fines rondelles. Lavez, épongez et émincez les champignons.</a></li>
				<br>
				<li><a class="Preparation">Portez à ébullition 1 l d’eau avec le cube de bouillon de poule. Ajoutez les petits cubes de poulet, les rondelles de poireau et les lamelles de champignon. Salez, poivrez et saupoudrez de cardamome. Laissez cuire 25 min.</a></li>
				<br>
				<li><a class="Preparation">Servez très chaud.</a></li>
			</ol>
			</div>
		</aside>
	
		<aside class="Repas3 AsideNutrition">
			<div class="GrosTextNutrition">
			<h2 class="TitreNutritionPrincip">Couscous Vert</h2>
			<img src="Images/Couscous.png" class="LiensImagesNutrition3">
			</br>
			<h3 class="TitreNutrition">Ingrédients :</h3>
			<ul class="IngredientListe"></ul>
				<li><a class="Ingredient">Semoule de couscous  : 75 g</a></li>
				<li><a class="Ingredient">Oignons nouveaux  : 1 </a></li>
				<li><a class="Ingredient">Petit piment vert  : 0,5 </a></li>
				<li><a class="Ingredient">Petite courgette émincée  : 0,5 </a></li>
				<li><a class="Ingredient">Petits pois écossés  : 50 g</a></li>
				<li><a class="Ingredient">Asperges vertes  : 100 g</a></li>
				<li><a class="Ingredient">Bouquet d’herbes fraîches (menthe(aneth, coriandre…))  : 0,5 </a></li>
				<li><a class="Ingredient">Pistaches décortiquées  : 25 g</a></li>
				<li><a class="Ingredient">Citron  : 0,5 </a></li>
				<li><a class="Ingredient">Cumin en poudre </a></li>
				<li><a class="Ingredient">Huile d’olive  : 1 cuil. à soupe</a></li>
				<li><a class="Ingredient">Sel</a></li>
				<li><a class="Ingredient">Poivre</a></li>
			</br>
			<h3 class="TitreNutrition">Préparation :</h3>
			<ol class="PreparationListe">
				<li><a class="Preparation">Faites cuire les asperges et les petits pois dans une casserole d’eau bouillante salée t 5 min. Plongez-les aussitôt dans un saladier d’eau glacée, puis égouttez-les.</a></li>
				<br>
				<li><a class="Preparation">Dans un grand saladier, faites gonfler le couscous avec 15 cl d’eau bouillante et l’huile d’olive. Ajoutez le sel, quelques pincées de cumin et le jus du citron. Laissez refroidir en détachant régulièrement les grains à la fourchette. Rectifiez l’assaisonnement si besoin.</a></li>
				<br>
				<li><a class="Preparation">Effeuillez et ciselez finement les herbes. Ajoutez-les dans le couscous avec le piment et les oignons finement émincés, les courgettes coupées en fines lamelles et les petits pois. Coupez les asperges en tronçons (réservez les têtes qui serviront à la décoration) et ajoutez-les à la préparation. Mélangez bien et réservez au frais.</a></li>
				<br>
				<li><a class="Preparation">Au moment de servir, versez le couscous dans un plat ou répartissez-le dans des verrines. Ajoutez sur le dessus les pointes d’asperges, les pistaches concassées et quelques herbes. Servez aussitôt.</a></li>
			</ol>
			</div>
		</aside>
		
	</div>

	<footer class="Footer">
		<p>UDev 2018</p>
	</footer>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/php" src="index2.php"></script>
</body>
</html>