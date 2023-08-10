<?php

session_start([
    'cookie_lifetime' => 10 // Durée de vie du cookie de la session (en secondes)
]);

if (isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){
    // // AJOUT AUTEUR
$role = $_POST['id_roles'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$conf_mdp = $_POST['conf_mdp'];
$prix = $_POST['prix'];

$pattern = '/^[a-zA-Z0-9_]+$/';

    if(preg_match($pattern, $nom)){
    
        if($mdp == $conf_mdp){
            $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);
        
            $réserver_maison = new MaConnexion("agence_immobilière","","root","localhost");
            $requete = $agence_immobilière -> réserver_maison($id_contact, $nom, $mail, $mdp_hash, $prix);
            header("Location: immobilier.php");
            exit();
        }
    }      
    session_start([
        'cookie_lifetime' => 10 // Durée de vie du cookie de la session (en secondes)
    ]);
    //traite les données du formulaire
    echo "Le jeton est validé";
}else {
    //redirige vers une new page
    session_unset();
    session_destroy();

    echo "Le jeton n'est plus validé";
}

include("Maconnexion.php");

// // AJOUT AUTEUR
$role = $_POST['id_roles'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$conf_mdp = $_POST['conf_mdp'];


$pattern = '/^[a-zA-Z0-9_]+$/';

    if(preg_match($pattern, $nom)){
    
        if($mdp == $conf_mdp){
            $mdp_hash = password_hash($mdp, PASSWORD_ARGON2ID);
        
            $ajout_article = new MaConnexion("agence_immobilière","","root","localhost");
            $requete = $ajout_article -> insertionInscription($role, $nom, $email, $mdp_hash);
            header("Location: immobilier.php");
            exit();
        }
    }      






?>