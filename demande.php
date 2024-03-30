<?php
include_once ('includes/header.php');

// Traitement du formulaire de soumission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $ordre_reparation = $_POST['ordre_reparation'];
    $demande = $_POST['demande'];
    $pieces = $_POST['pieces'];

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
            mysqli_stmt_bind_param($stmt, "issss", $ordre_reparation, $demande, $libelle, $reference, $_SESSION['username']);
            mysqli_stmt_execute($stmt);
        }
    }

    // Fermer la déclaration
    mysqli_stmt_close($stmt);

    // Rediriger l'utilisateur vers une autre page ou afficher un message de succès
    // ...
}
?>

<div class="container">
    <h2>Formulaire de demande de pièces</h2>
    <form class="style-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="ordre_reparation">Ordre de réparation :</label>
        <input type="number" id="ordre_reparation" name="ordre_reparation" required><br><br>
        <label for="">Fréquement utilisé :</label>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch">
            <label class="form-check-label" for="">Switch oil filter Tucson</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch">
            <label class="form-check-label" for="">Balai essuis-glace arrière</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch">
            <label class="form-check-label" for="">Balais essuis-glace avant</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch">
            <label class="form-check-label" for="">Retrait des traitements</label>
        </div>
        <br>
        <label for="demande">Demande :</label>
        <select id="demande" name="demande" required>
            <option value="add">Ajout</option>
            <option value="change">Échange</option>
            <option value="delete">Suppression</option>
        </select><br><br>

        <fieldset id="pieces">
            <legend>Pièces :</legend>
            <div class="piece">
                <label for="libelle">Libellé :</label>
                <input type="text" name="pieces[libelle][]" required>
                <label for="reference">Référence :</label>
                <input type="text" name="pieces[reference][]">
            </div>
        </fieldset>
        <button type="button" class="btn btn-lg btn-outline-success" id="add_piece">Ajouter une pièce</button>
        <button type="button" class="btn btn-lg btn-outline-danger" id="remove_piece">Supprimer une pièce</button>        
        <input class="btn btn-lg btn-outline-primary" type="submit" value="Soumettre">
    </form>
</div>

<?php
// Fermer la connexion à la base de données
mysqli_close($conn);

// Inclure le footer
include_once ('includes/footer.php');
?>