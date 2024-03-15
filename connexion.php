<?php include_once('includes/header.php'); ?>

<div class="container">
    <h2>Connexion</h2>
    <form action="connexion_traitement.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Se connecter">
    </form>
</div>

<?php include_once('includes/footer.php'); ?>
