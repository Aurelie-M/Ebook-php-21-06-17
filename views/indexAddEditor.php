<div class="navList">

	<h1>Ajouter un éditeur</h1>

    <form action="index.php" method="post">
      
        <label for="name" class="name"> Nom </label>
        <input type="text" name="name" id="name">

        <label for="url" class="url"> URL du site </label>
        <input type="text" name="url" id="url">

        <label for="author" class="author"> Auteur </label>
        <input type="text" name="author" id="author">

        <label for="type" class="type"> Genre </label>
        <input type="text" name="type" id="type">

        <label for="book" class="book"> Livre </label>
        <input type="text" name="book" id="book">
      
        <input type="hidden" name="r" value="editor">
        <input type="hidden" name="a" value="create">

        <button type="submit">Créer l'éditeur'</button>
    </form>

</div>