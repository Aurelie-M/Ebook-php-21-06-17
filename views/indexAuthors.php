<div class="navList">
	<h1> Liste des auteurs </h1>

	<ul class="list-nav">
		<?php foreach($datas["authors"] as $author): ?>

			<li class="item-nav"> <a href="index.php?a=show&e=authors&id=<?php echo $author->id; ?>&with=books,editors,types"> 
				<?php echo $author->name; ?> </a> </li>

		<?php endforeach; ?>

	</ul>
</div>