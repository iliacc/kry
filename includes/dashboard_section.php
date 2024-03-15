<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'kry');

if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Récupérer les données de la table demandes_pieces
$sql = "SELECT * FROM demandes_pieces";
$result = mysqli_query($conn, $sql);

// Vérifier s'il y a des données
if (mysqli_num_rows($result) > 0) {
    // Afficher les données dans le tableau
    echo '<div class="dashboard-section">';
    echo '<h2>Liste des demandes</h2>';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Ordre de réparation</th>';
    echo '<th>Demande</th>';
    echo '<th>Statut</th>';
    echo '<th>Pièce(s)</th>';
    echo '<th>Référence(s)</th>';
    echo '<th>Opérateur</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Afficher les données de chaque ligne
    while ($row = mysqli_fetch_assoc($result)) {
        // Déterminer la classe CSS en fonction du statut
        $tableClass = ($row['statut'] == 'in_progress') ? 'table-light' : 'table-success';
        
        // Afficher la ligne avec la classe CSS correspondante
        echo '<tr class="' . $tableClass . '">';
        echo '<td>' . $row['ordre_reparation'] . '</td>';
        echo '<td>' . $row['demande'] . '</td>';
        echo '<td>' . $row['statut'] . '</td>';
        echo '<td>' . $row['piece_libelle'] . '</td>';
        echo '<td>' . $row['piece_reference'] . '</td>';
        echo '<td>' . $row['operateur'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo 'Aucune demande enregistrée.';
}


// Fermer la connexion à la base de données
mysqli_close($conn);
?>

