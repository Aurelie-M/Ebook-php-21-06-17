<div class="navList">

	<h1> Se connecter </h1>

	    <form action="index.php" method="post">

        <fieldset>
            <div>
                <label for="email" class="textfield "> Votre email </label>
                <input type="text" id="email" name="email">
            </div>

            <div>
                <label for="password" class="textfield"> Votre mot de passe </label>
                <input type="password" id="password" name="password">
            </div>

            <input type="hidden" name="a" value="postLogin">
            <input type="hidden" name="r" value="auth">

            <div>
            	<input type="submit" value="vérifier" class="submit">
            </div>
        </fieldset>

    </form>
</div>