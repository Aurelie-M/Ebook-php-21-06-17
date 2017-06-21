<div class="navList">

	<h1>Ajouter un livre</h1>

    <form action="index.php" method="post">
      
        <label for="name" class="name"> Nom </label>
        <input type="text" name="name" id="name">

        <label for="author" class="author"> Auteur </label>
        <input type="text" name="author" id="author">

        <label for="editor" class="editor"> Editeur </label>
        <input type="text" name="editor" id="editor">

        <label for="type" class="type"> Genre </label>
        <input type="text" name="type" id="type">

        <label for="summary" class="summary"> Résumé </label>
        <textarea type="text" name="summary" id="summary">

        <label for="isbn" class="isbn"> ISBN </label>
        <input type="text" name="isbn" id="isbn">
      
        <input type="hidden" name="r" value="book">
        <input type="hidden" name="a" value="create">

        <button type="submit">Créer le livre</button>
    </form>

</div>