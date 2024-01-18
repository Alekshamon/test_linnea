<?php

// Définit la liste des probabilités
$probabilites = [
    "Blanc" => 15,
    "Gris" => 20,
    "Rouge" => 45,
    "Bleu" => 20
];
// Fonction pour tirer une couleur aléatoire en fonction des probabilités
function tirerCouleurAleatoire($probabilites)
{
    // Trie le tableau des probabilités
    asort($probabilites);

    // Calcule la somme des probabilités
    $totalProbabilites = array_sum($probabilites);

    // Génère un nombre aléatoire entre 1 et la somme des probabilités
    $random = rand(1, $totalProbabilites);

    // Initialise une variable pour stocker la couleur tirée
    $couleurTiree = "";

    // Parcourt le tableau des probabilités
    foreach ($probabilites as $couleur => $probabilite) {
        $random -= $probabilite;

        // Si le nombre aléatoire est inférieur ou égal à zéro, la couleur est sélectionnée
        if ($random <= 0) {
            $couleurTiree = $couleur;
            break;
        }
    }

    return $couleurTiree;
};

$couleurTiree = tirerCouleurAleatoire($probabilites);
echo "Couleur tirée : $couleurTiree";
