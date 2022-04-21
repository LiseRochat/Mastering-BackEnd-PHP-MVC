<?php 

require_once("Models/BDDClass.php");
// Ne sert que à recupérer les données de la bdd
class MainManager extends BDD {
    /*
    * Fonction permettant de simuler une récupération de données
    * depuis une base de données ou autre
    */
    public function getDatas() {
        // Je recupere la connexion a la base de données
        $pdo = $this->getBdd();
        // Je prepare la requete sql
        $req = $pdo->prepare("SELECT * FROM exemple ");
        // Je lance la requete
        $req->execute();
        // Je traite les données : FETCH_ASSOC permet d'éviter d'avoir deux fois les informations retournées
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        // Je retourne les informations
        return $datas;
    }
}