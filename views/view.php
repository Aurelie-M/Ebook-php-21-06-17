<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Ebook </title>
	<link rel="stylesheet" type="text/css" href="./css/screen.css">
</head>
<body>

	<div class="centerZone">
	
		<!-- barre de nav -->
		<div class="nav">
			<div class="centerZone">
				<ul class="list-nav-index">
					<li class="item-nav-index"> <a href="index.php"> Accueil </a> </li>
					<li class="item-nav-index"> <a href="index.php?a=index&e=login"> Se connecter </a> </li>
					<li class="item-nav-index"> 
						<form method="post" action="index.php">
							<label for="search"> Rechercher </label>
							<input type="text" name="search" id="search" placeholder="titre, auteur, éditeur">
							<input type="submit" value="Rechercher" class="submit">
						</form>
					</li>
				</ul>
			</div>
		</div>

		<!-- header -->
		<div class="header">
			<div class="centerZone">
				<a href="index.php">
					<img src="img/logo.png" alt="Logo" class="logo"/>
				</a>

				<img src="./img/header.jpg" class="imgHeader"/>

				<p class="slogan"> Une bibliothèque accessible à tous </p>
				<p class="miniSlogan">  Avec cette bibliothèque en ligne, vous pouvez consulter le détail de chaque livre, auteur, éditeur et de leur genre littéraires.
										Si vous êtes un administrateur, vous avez la possibilité d'ajouter, de modifier ou de supprimer un livre, un éditeur ou un auteur. 
				</p>
			</div>
		</div>

		<!-- barre nav fonction -->
		<div class="nav-fonction">
			<div class="centerZone">
				<ul class="list-nav-index-one">
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=books"> Tous les livres </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=authors"> Tous les auteurs </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=editors"> Tous les éditeurs </a>	</li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=types"> Tous les genres </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=addBook"> Ajouter un livre </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=addAuthor"> Ajouter un auteur </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=addEditor"> Ajouter un éditeur </a> </li>
					<li class="item-nav-index-one"> <a href="index.php?a=index&e=addType"> Ajouter un genre </a> </li>
				</ul>
			</div>
		</div>

		<!-- content -->
		<div class="content">
			<div class="centerZone">

				<div class="rightContent">

					<?php include($datas['view']); ?>
					
				</div>

			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<div class="centerZone">
				<p class="owner"> Bibliothèque d'Aurélie Mairesse 2384</p>
			</div>
		</div>
	</div>
</body>
</html>