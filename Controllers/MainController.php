<?php 
/* 
    Création d'un objet Main
    Une fonction par demande de l'utilisateur
*/
class Main {
    
    public function home() {
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        $page_content = "<h1>Bonjour Tous le monde !</h1>";
        require("Views/Common/template.php");
    }

    public function page1() {
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        $page_content = "<h1>Bonjour Tous le monde Page 1 !</h1>";
        require("Views/Common/template.php");
    }

    public function pageErrors($message) {
        $page_description = "Page permettant de gérer les erreurs";
        $page_title = "Page d'erreur";
        $page_content = $message;
        require("Views/Common/template.php");
    }
}