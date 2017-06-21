<div class="navList">
	<h1> Liste des éditeurs </h1>

	<ul class="list-nav">
		<?php foreach($datas["editors"] as $editor): ?>

			<li class="item-nav"> <a href="index.php?a=show&e=editors&id=<?php echo $editor->id; ?>&with=books,authors,types"> 
				<?php echo $editor->name; ?> </a> </li>

		<?php endforeach; ?>

	</ul>
</div>