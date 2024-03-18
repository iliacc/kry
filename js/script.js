document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner le conteneur des pièces
    var piecesContainer = document.getElementById('pieces');

    // Sélectionner le bouton d'ajout de pièces
    var addButton = document.getElementById('add_piece');

    // Écouter le clic sur le bouton d'ajout de pièces
    if (addButton) {
        addButton.addEventListener('click', function () {
            // Cloner le dernier champ de pièce
            var lastPiece = piecesContainer.lastElementChild.cloneNode(true);
    
            // Effacer les valeurs des champs clonés
            var inputs = lastPiece.querySelectorAll('input[type="text"]');
            inputs.forEach(function (input) {
                input.value = '';
            });
    
            // Ajouter le nouveau champ de pièce au conteneur
            piecesContainer.appendChild(lastPiece);
        });
    
        // Écouter le clic sur le bouton de suppression de pièce
        document.addEventListener('click', function (event) {
            if (event.target && event.target.id === 'remove_piece') {
                // Empêcher le comportement par défaut du bouton
                event.preventDefault();
    
                // Supprimer le parent du bouton (le champ de pièce)
                event.target.parentNode.remove();
            }
        });
    }
});