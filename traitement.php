<?php
// Bug 1: 
$nom = $_GET['nom'];
$email = $_GET['email'];
$age = $_GET['age'];
$message = $_GET['message'];

// Bug 2:
if(empty($nom) || empty($email) || empty($age) || empty($message)) {
    echo "Tous les champs sont obligatoires";
    exit;
}

// Bug 3: 
    echo "L'âge doit être positif";
    exit;
}

echo "Données reçues avec succès!";
?> 