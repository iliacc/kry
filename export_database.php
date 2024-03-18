<?php

include_once('includes/header.php');

// Informations de connexion à la base de données
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kry';

// Nom du fichier d'export
$filename = 'export_database.sql';

// Chemin complet du fichier d'export
$filepath = __DIR__ . '/' . $filename;

// Commande pour exporter la base de données
$command = "mysqldump -u{$user} -p{$password} -h{$host} {$database} > {$filepath}";

// Exécutez la commande pour exporter la base de données
exec($command, $output, $result);

// Vérifiez si l'exportation s'est bien déroulée
echo '<div class="text-center">';
if ($result == 0) {
    echo "Exportation de la base de données réussie.";
} else {
    echo "Erreur lors de l'exportation de la base de données.";
}

echo '<br><a href="bek_ofis.php">back to bek_ofis</a>';
echo '</div>';

include_once('includes/footer.php');

?>