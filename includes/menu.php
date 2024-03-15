<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if ($logged_in) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="demande.php">Nouvelle demande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gestion back-office</a>
                    </li>
                <?php else : ?>
                    <li><a href="index.php">Home</a></li>
                <?php endif; ?>
            </ul>
            <?php if ($logged_in) : ?>
                <div>
                    <span>Connecté en tant que :</span>
                    <?php echo $_SESSION['username']; ?> - <a href="deconnexion.php">Déconnexion</a>
                </div>
            <?php else : ?>
                <div>
                    <a href="connexion.php">Connexion</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>