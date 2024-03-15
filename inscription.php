<?php include_once('includes/header.php'); ?>

<div class="container">
    <h2>Inscription</h2>
    <form action="inscription_traitement.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</div>

<?php include_once('includes/footer.php'); ?>
