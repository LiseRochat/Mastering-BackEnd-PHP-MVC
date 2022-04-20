<?php 

// Test si l'information index.php?page= est vide 
if(empty($_GET['page'])) {
    $page= "accueil";

} else {
    /*
    On sépare la chaine de carcatere de l'url : /produits/casquettes/ avec la fonction explode() de php
    On obtien un tableau contenant les requetes de l'utilisateur tab[1]=produits tab[2]=casquettes
    */
    $url = explode("/", filter_var($_Get['page'], FILTER_SANITIZE_URL));
    $page = $url[0];
}

// On gère le premier niveau d'url
switch($page) {
    case "accueil" :
        // On gere le dexuieme niveau en insérent un deuxieme test de type swtich($url[1])
        // Declaration des variables 
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        $page_content = "Bonjour Tous le monde !";
    break; 
    case "page1" :
        // Declaration des variables 
        $page_description = "Strucuture de base d'un projet en php";
        $page_title = "Projet PHP MVC";
        $page_content = "Bonjour Tous le monde Page 1 !";
    break; 
}


// Appel du template
require_once("Views/common/template.php");