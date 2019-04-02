<?php

$creneaux = [
    [9, 12],
    [13,17]
];



while(true) {
    $debut = (int)readline('Creneaux: heures d\'ouverture : ');
    $fin = (int)readline('Creneaux: Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le creneau ne peut etre enregistre car l\heure de debut ($debut) > l\heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Voulez-vous enregistrer un nouvel creneau ? o/n ");
        if ($action === 'n') {
            break;
        }
    }
}
$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ?"); 
$creneauTrouve = false;

foreach ($creneaux as $key) {
    if ($heure >= $key[0] && $heure <= $key[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo "BeCode sera ouvert";
} else {
    echo "Desole, BeCode est ferme";
}


// BOUCLES 
/* $notes = []; // tableau contenant les notes

while(true) { // tant que l'user ne tape pas fin
    $action  = readline("Entrez une note (ou \'fin'\ pour terminer la saisie) : ");
    // on ajoute la note tapee dans le tableau "notes"
    if ($action === 'fin') {
        break;
    } else {
        $notes[] = (int)$action;
    }
}
// POUR CHAQUE note DANS notes
foreach ($notes as $key) {
    echo "- La note est $key \n"; // afficher la valeur
}
 */

// Demander a l'user d'entrer une note ou taper le mot "fin" 
// chaque note est sauvegardee dans un tableau $notes (pensez $notes=[])
// a la fin on affiche le tableau de notes sous forme de liste






/* $notes = [10, 14, 16];
$eleves = [
    "Johnson" => ["Jean", "Louise", "Gaelle", "Marc", "Dorian", "Pierry"],
    "Lovelace" => ["Mathilde", "Andres", "Maxime", "Estelle", "Jussi"]
];


foreach ($eleves as $classe => $listeEleve) { // pour chaque note dans la variable note
    echo "La classe $classe :" . "<br>";  
    foreach ($listeEleve as $eleve) {
        echo "- $eleve" . "<br>";
    }
    echo "<br>";
} */

// La classe Lovelace: 
// - 
// -
// - etc
// La classe Johnson:
// - 
// -
// - etc

/* Boucle TantQue
while($chiffre !== 10) { 
    $chiffre = (int)readline("Entrez une chiffre : ");
}
echo "Bravo, vous avez gagne ! ";
*/



/* Switch 
switch($chiffre) {
    case 1: 
        echo "Vous allez regarder la video Grafikart";
        break;
    case 2:
        echo "Vous allez suivre une section du parcours PHP";
        break;
    case 3:
        echo "Veuillez prendre une pause";
        break;
    default:
        echo "Veuillez inserer un chiffre entre 1 et 3";
    }
*/


?>
