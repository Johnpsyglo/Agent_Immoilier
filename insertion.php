<?php


session_start([
    'cookie_lifetime' => 10 // Durée de vie du cookie de la session (en secondes)
]);

if (isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]) {
    //traite les données du formulaire
    echo "Le jeton est validé";
} else {
    //redirige vers une new page
    session_unset();
    session_destroy();

    echo "Le jeton n'est plus validé";
}

?>