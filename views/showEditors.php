<h1> Fiche de l'éditeur : <?php echo $datas["editor"]->name; ?> </h1>

<!-- editor -->
<?php if($datas["editor"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom : <span><?php echo $datas["editor"]->name; ?> </span></li>
	</ul>

<?php endif; ?>

<!-- if there is a url, we post it -->
<?php if($datas["editor"]->url) : ?>

	<ul class="url">
		<li class="ficheList">
			Son site : <a href="<?php echo $datas["editor"]->url; ?>" > <?php echo $datas["editor"]->url; ?> </a>
		</li>
	</ul>

<?php endif; ?>

<!-- if there is a logo, we post it -->
<?php if($datas["editor"]->logo) : ?>

	<div class="logo">

		<img src="<?php echo $datas["editor"]->logo; ?>" alt="logo" />

	</div>

<?php endif; ?>

<!-- if there are some authors, we post it -->
<?php if($datas["authors"]): ?> <span class="otherAuthors"> Les auteurs de cet éditeur : </span>
	<ul class="authors">
		<?php foreach($datas["authors"] as $author): ?>
			<li class="ficheListBooks"> 
				<a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=editors">
					<?php echo $author->name; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some types, we post it -->
<?php if($datas["types"]): ?> <span class="otherTypes" >Les genres littéraires de cet éditeur : </span>
	<ul class="types">
		<?php foreach($datas["types"] as $type): ?>
			<li class="ficheListBooks"> 
				<a href="?a=show&e=types&id=<?php echo $type->id; ?>&with=editors">
					<?php echo $type->name; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> <span class="otherBooks"> Les livres de cet éditeur : </span>
	<ul class="books">
		<?php foreach($datas["books"] as $book): ?>
			<li class="ficheListBooks"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=editors">
					<?php echo $book->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<a href="index.php?a=index&e=editors" class="all"> Consulter tous les editeurs </a>

<!-- form pour modifier l'éditeur -->
<div class="modifier">
	<form action="index.php" method="get" class="update">
		<button type="submit" class="submit">modifier</button>
		<input type="hidden" name="a" value="updateEditor">
		<input type="hidden" name="r" value="editor">
		<input type="hidden" name="id">
	</form>    
</div>

<!-- form pour supprimer l'éditeur -->
<div class="supprimer">
	<form action="index.php" method="post" class="delete">
		<button type="submit" class="submit">supprimer</button>
		<input type="hidden"name="a" value="deleteEditor">
		<input type="hidden" name="r"value="editor">
		<input type="hidden" name="id">
	</form>  
</div>