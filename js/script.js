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
    $('#generatePassword').click(function(){
        // Tableaux de mots
        var firstWords = ["apple", "banana", "cherry", "grape", "melon", "orange", "pear", "strawberry", "pineapple", "kiwi", "peach", "plum", "apricot", "blueberry", "raspberry", "blackberry", "cranberry", "coconut", "pomegranate", "fig", "watermelon", "lime", "lemon", "mango", "nectarine", "papaya", "passionfruit", "persimmon", "starfruit", "tangerine", "apricot", "guava", "lychee", "dragonfruit", "kiwifruit", "rhubarb", "date", "pawpaw", "quince", "cantaloupe", "honeydew", "durian", "jackfruit", "kumquat", "boysenberry", "loganberry", "mulberry", "soursop", "ugli", "tamarind", "breadfruit", "longan", "gooseberry", "feijoa", "salak", "cherimoya", "saskatoon", "loquat", "elderberry", "plantain", "rambutan", "acai", "yuzu", "pomelo", "ackee", "buddha's hand", "currant", "pummelo", "tamarillo", "sugar-apple", "santal", "rowanberry", "quandong", "mangosteen", "clementine", "satsuma", "bergamot", "kumquat", "yumberry", "bearberry", "bilberry"];
        var secondWords = ["apple", "banana", "cherry", "grape", "melon", "orange", "pear", "strawberry", "pineapple", "kiwi", "peach", "plum", "apricot", "blueberry", "raspberry", "blackberry", "cranberry", "coconut", "pomegranate", "fig", "watermelon", "lime", "lemon", "mango", "nectarine", "papaya", "passionfruit", "persimmon", "starfruit", "tangerine", "apricot", "guava", "lychee", "dragonfruit", "kiwifruit", "rhubarb", "date", "pawpaw", "quince", "cantaloupe", "honeydew", "durian", "jackfruit", "kumquat", "boysenberry", "loganberry", "mulberry", "soursop", "ugli", "tamarind", "breadfruit", "longan", "gooseberry", "feijoa", "salak", "cherimoya", "saskatoon", "loquat", "elderberry", "plantain", "rambutan", "acai", "yuzu", "pomelo", "ackee", "buddha's hand", "currant", "pummelo", "tamarillo", "sugar-apple", "santal", "rowanberry", "quandong", "mangosteen", "clementine", "satsuma", "bergamot", "kumquat", "yumberry", "bearberry", "bilberry"];
        
        // Sélection aléatoire d'un mot de chaque tableau
        var firstWord = firstWords[Math.floor(Math.random() * firstWords.length)];
        var secondWord = secondWords[Math.floor(Math.random() * secondWords.length)];
        
        // Mot de passe final
        var password = firstWord + '-' + secondWord;
        
        // Remplir le champ de mot de passe avec le mot de passe généré
        $('#password').val(password);
    });
    
});