<?php 
/* 
    Création d'un objet Main
    Une fonction par demande de l'utilisateur
*/
class Main {
    
    public function home() {
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        ob_start();
        require_once("./Views/home.php");
        $page_content = ob_get_clean();
        require("Views/Common/template.php");
    }

    public function page1() {
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        ob_start();
        require_once("./Views/page1.php");
        $page_content = ob_get_clean();
        require("Views/Common/template.php");
    }

    public function pageErrors($message) {
        $page_description = "Page permettant de gérer les erreurs";
        $page_title = "Page d'erreur";
        ob_start();
        require_once("./Views/errors.php");
        $page_content = ob_get_clean();
        require("Views/Common/template.php");
    }
}