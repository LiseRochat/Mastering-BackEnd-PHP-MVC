<?php 
// Ne sert que à recupérer les données de la bdd
class MainManager {
    /*
    * Fonction permettant de simuler une récupération de données
    * depuis une base de données ou autre
    */
    public function getData() {
        $data = [
            "data1" => "a",
            "data2" => "b",
        ];
        return $data;
    }
}