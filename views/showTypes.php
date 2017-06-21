<h1> Fiche du genre littéraire  : <?php echo $datas["type"]->name; ?> </h1>

<!-- type -->
<?php if($datas["type"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom  : <span> <?php echo $datas["type"]->name; ?> </span></li>
	</ul>

<?php endif; ?>

<!-- summary -->
<?php if($datas["type"]->summary): ?>

	<ul class="summary">
		<li class="ficheList"> Définition : <span> <?php echo $datas["type"]->summary; ?> </span> </li>
	</ul>

<?php endif; ?>

<!-- if there are some authors, we post it -->
<?php if($datas["authors"]): ?> <span class="otherAuthors"> Les auteurs qui utilisent ce genre  : </span>

	<ul class="authors">

		<?php foreach($datas["authors"] as $author): ?>

			<li class="ficheListBooks"> 
				<a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=types">
					<?php echo $author->name; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<!-- if there are some editors, we post it -->
<?php if($datas["editors"]): ?> <span class="otherEditors" > Les éditeurs qui utilisent ce genre  : </span>

	<ul class="editors">

		<?php foreach($datas["editors"] as $editor): ?>

			<li class="ficheListBooks"> 
				<a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=types">
					<?php echo $editor->name; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> <span class="otherBooks">Les livres de ce genre littéraire  : </span>

	<ul class="books">

		<?php foreach($datas["books"] as $book): ?>

			<li class="ficheListBooks"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=types">
					<?php echo $book->title; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<a href="index.php?a=index&e=types" class="all"> Consulter tous les genres littéraires </a>

<!-- form pour modifier le genre -->
<div class="modifier">
	<form action="index.php" method="get" class="update">
		<button type="submit" class="submit">modifier</button>
		<input type="hidden" name="a" value="updateType">
		<input type="hidden" name="r" value="type">
		<input type="hidden" name="id">
	</form>    
</div>

<!-- form pour supprimer le genre -->
<div class="supprimer">
	<form action="index.php" method="post" class="delete">
		<button type="submit" class="submit">supprimer</button>
		<input type="hidden"name="a" value="deleteType">
		<input type="hidden" name="r"value="type">
		<input type="hidden" name="id">
	</form>  
</div>