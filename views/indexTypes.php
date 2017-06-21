<div class="navList">
	<h1> Liste des genre littéraires </h1>

	<ul class="list-nav">
		<?php foreach($datas["types"] as $type): ?>

		<li class="item-nav"> 
			<a href="index.php?a=show&e=types&id=<?php echo $type->id; ?>&with=books,editors,authors">
				<?php echo $type->name; ?> 
			</a> 
		</li>

		<?php endforeach; ?>
	</ul>
</div>