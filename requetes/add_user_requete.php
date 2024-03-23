<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage sécurisé du mot de passe
    $email = $_POST['email'];
    $role = $_POST[''];
    $site = $_POST[''];

    // Préparer la requête SQL
    $sql = "INSERT INTO utilisateurs (utilisateur, mot_de_passe, email) VALUES (?, ?, ?)";

    // Préparer la déclaration
    $stmt = mysqli_prepare($conn, $sql);

    // Lier les paramètres et exécuter la requête
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);

    // Exécuter la requête
    if (mysqli_stmt_execute($stmt)) {
        echo "Utilisateur enregistré avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de l'utilisateur : " . mysqli_error($conn);
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>
