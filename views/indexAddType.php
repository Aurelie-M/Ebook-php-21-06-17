<div class="navList">

	<h1>Ajouter un genre littéraire</h1>

    <form action="index.php" method="post">
      
        <label for="name" class="name"> Nom </label>
        <input type="text" name="name" id="name">

        <label for="summary" class="summary"> Définition </label>
        <textarea type="text" name="summary" id="summary">

        <label for="editor" class="editor"> Editeur </label>
        <input type="text" name="editor" id="editor">
      
        <input type="hidden" name="r" value="type">
        <input type="hidden" name="a" value="create">

        <button type="submit">Créer le genre</button>
    </form>

</div>