<div class="navList">

	<h1>Ajouter un auteur</h1>

    <form action="index.php" method="post">
      
        <label for="name" class="name"> Description </label>
        <input type="text" name="name" id="name">

        <label for="birth" class="birth"> Date de naissance </label>
        <input type="text" name="birth" id="birth">

        <label for="death" class="death"> Date de décès </label>
        <input type="text" name="death" id="death">

        <label for="bio" class="bio"> Biographie </label>
        <textarea type="text" name="bio" id="bio">

        <label for="editor" class="editor"> Ses éditeurs </label>
        <input type="text" name="editor" id="editor">

        <label for="type" class="type"> Ses genres littéraires </label>
        <input type="text" name="type" id="type">
                
        <label for="book" class="book"> Ses livres </label>
        <input type="text" name="book" id="book">
      
        <input type="hidden" name="r" value="author">
        <input type="hidden" name="a" value="create">

        <button type="submit">Créer l'auteur</button>
    </form>

</div>