<h1> Fiche de l'auteur : <?php echo $datas["author"]->name; ?> </h1>

<!-- author -->
<?php if($datas["author"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom : <span> <?php echo $datas["author"]->name; ?> </span> </li>
	</ul>

<?php endif; ?>

<!-- birth date -->
<?php if($datas["author"]->birth_date): ?>

	<ul class="birth">
		<li class="ficheList"> Date de naissance : <span><?php echo $datas["author"]->birth_date; ?></span> </li>
	</ul>

<?php endif; ?>

<!-- death date -->
<?php if($datas["author"]->death_date): ?>

	<ul class="death">
		<li class="ficheList"> Date de décès : <span><?php echo $datas["author"]->death_date; ?> </span></li>
	</ul>

<?php endif; ?>

<!-- if there is a bio, we post it -->
<?php if($datas["author"]->bio): ?>

	<ul class="bio">
		<li class="ficheList"> Sa biographie : <span><?php echo $datas["author"]->bio; ?></span> </li>
	</ul>

<?php endif; ?>

<!-- if there are some types, we post it -->
<?php if($datas["types"]): ?>
	<ul class="types">
		<?php foreach($datas["types"] as $type): ?>
			<li class="ficheList"> Ses genres littéraires :
				<a href="?a=show&e=types&id=<?php echo $type->id; ?>&with=authors">
					<?php echo $type->name; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some editors, we post it -->
<?php if($datas["editors"]): ?> <span class="otherEditors"> Ses éditeurs : </span>
	<ul class="editors">
		<?php foreach($datas["editors"] as $editor): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=authors">
					<?php echo $editor->name; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> <span class="otherBooks"> Ses autres livres : </span>
	<ul class="books">
		<?php foreach($datas["books"] as $book): ?>
			<li class="ficheListBooks"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=authors"> 
					<?php echo $book->title; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>


<a href="index.php?a=index&e=authors" class="all"> Consulter tous les auteurs </a>

<!-- form pour modifier l'auteur -->
<div class="modifier">
	<form action="index.php" method="get" class="update">
		<button type="submit" class="submit">modifier</button>
		<input type="hidden" name="a" value="updateAuthor">
		<input type="hidden" name="r" value="author">
		<input type="hidden" name="id">
	</form>    
</div>

<!-- form pour supprimer l'auteur' -->
<div class="supprimer">
	<form action="index.php" method="post" class="delete">
		<button type="submit" class="submit">supprimer</button>
		<input type="hidden"name="a" value="deleteAuthor">
		<input type="hidden" name="r"value="author">
		<input type="hidden" name="id">
	</form>  
</div>