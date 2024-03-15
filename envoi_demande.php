<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $ordre_reparation = $_POST['ordre_reparation'];
    $demande = $_POST['demande'];
    $pieces = $_POST['pieces'];
    $operateur = $_SESSION['username']; // Supposons que l'opérateur soit l'utilisateur connecté

    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', 'root', 'kry');

    // Vérifier la connexion
    if (!$conn) {
        die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
    }

    // Préparer la requête SQL pour insérer la demande de pièces
    $sql = "INSERT INTO demandes_pieces (ordre_reparation, demande, piece_libelle, piece_reference, operateur) VALUES (?, ?, ?, ?, ?)";

    // Préparer la déclaration
    $stmt = mysqli_prepare($conn, $sql);

    // Insérer chaque pièce dans la base de données
    foreach ($pieces['libelle'] as $key => $libelle) {
        // Vérifier si le libellé est vide
        if (!empty($libelle)) {
            // Récupérer la référence de la pièce correspondante
            $reference = isset($pieces['reference'][$key]) ? $pieces['reference'][$key] : null;

            // Lier les paramètres et exécuter la requête
            mysqli_stmt_bind_param($stmt, "issss", $ordre_reparation, $demande, $libelle, $reference, $operateur);
            mysqli_stmt_execute($stmt);
        }
    }

    // Fermer la déclaration
    mysqli_stmt_close($stmt);

    // Fermer la connexion à la base de données
    mysqli_close($conn);

    // Rediriger l'utilisateur vers une autre page ou afficher un message de succès
    // ...
}
?>
