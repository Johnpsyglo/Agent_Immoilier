<?php

include("Maconnexion.php");

// On récolte les données
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

// Le pattern contient les caractère interdit lors de l'input
$pattern = '/^[a-zA-Z0-9_]+$/';
