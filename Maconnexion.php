<?php

 class MaConnexion{
    
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse , $nomUtilisateur , $hote){
        
        $this->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;
        
        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn,$this->nomUtilisateur, $this->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connexion reussi";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    public function select($table, $column){
        try {
            $requete = "SELECT $column from $table";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //Recupere le resultat de la requete dans un tableau associatif
            return $resultat;
        
        } catch (PDOException $e) {
            echo "Erreur : ".$e->getMessage();
        }    
    }




    // On modifie juste le nom de la function ici "select" devient "select_articles_recents"
    public function select_contact($table, $column){
        try {
            // On reparamètre notre requete SQL selon nos besoin
            // Ici on avait besoin de selectionné 2 réserver_maison donc on rajoute ORDERBY BY 'nom_column' DESC pour mettre notre liste en ordre décroissant
            // Et ensuite LIMIT 2 pour limiter le nombre réserver_maison selectionné à 2
            $requete = "SELECT $column from $table ORDER BY id_contact DESC LIMIT 2 ";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //Recupere le resultat de la requete dans un tableau associatif
            return $resultat;
        
        } catch (PDOException $e) {
            echo "Erreur : ".$e->getMessage();
        }    
    }

    public function select_where_réserver_maison($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_contact = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Fetch the result of the query into an associative array

            return $resultat;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

}
?>