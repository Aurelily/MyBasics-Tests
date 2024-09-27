
    <h1>Créer un utilisateur</h1>
    <form id="createForm" action="addUser" method="post">
        <label for="pseudo">Pseudo :</label><br>
        <input type="text" id="pseudo" name="pseudo" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirmer le mot de passe :</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" value="Créer un compte">
    </form>
