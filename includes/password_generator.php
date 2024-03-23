<?php


// Tableaux de mots
$firstWords = array("red", "blue", "green", "yellow", "orange");
$secondWords = array("apple", "banana", "cherry", "grape", "melon");

// Sélection aléatoire d'un mot de chaque tableau
$firstWord = $firstWords[array_rand($firstWords)];
$secondWord = $secondWords[array_rand($secondWords)];

// Mot de passe final
$password = $firstWord . '-' . $secondWord;

// Affichage du mot de passe
echo "Mot de passe généré : " . $password;


?>
