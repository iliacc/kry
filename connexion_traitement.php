<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', 'root', 'kry');

    // Vérifier la connexion
    if (!$conn) {
        die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
    }

    // Préparer la requête SQL
    $sql = "SELECT id, utilisateur, mot_de_passe FROM utilisateurs WHERE utilisateur = ?";

    // Préparer la déclaration
    $stmt = mysqli_prepare($conn, $sql);

    // Lier les paramètres et exécuter la requête
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    // Récupérer le résultat de la requête
    mysqli_stmt_bind_result($stmt, $user_id, $db_username, $db_password);
    mysqli_stmt_fetch($stmt);

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($username === $db_username && password_verify($password, $db_password)) {
        // Authentification réussie, créer une session pour l'utilisateur
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        
        // Rediriger vers la page de tableau de bord
        header('Location: index.php');
        exit();
    } else {
        // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
        header('Location: connexion.php?error=1');
        exit();
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>
