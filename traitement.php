<?php
// Bug 1: Pas de vérification si le formulaire a été soumis
$nom = $_GET['nom'];
$email = $_GET['email'];
$age = $_GET['age'];
$message = $_GET['message'];

// Bug 2: Pas de validation des données
if(empty($nom) || empty($email) || empty($age) || empty($message)) {
    echo "Tous les champs sont obligatoires";
    exit;
}

// Bug 4: Validation d'âge incorrecte (pas de vérification des limites)
if($age < 0) {
    echo "L'âge doit être positif";
    exit;
}

echo "Données reçues avec succès!";
?> 