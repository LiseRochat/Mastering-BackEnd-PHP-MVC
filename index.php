<?php 

// Test si l'information index.php?page= est vide 
if(empty($_GET['page'])) {

} else {
    /*
    On sépare la chaine de carcatere de l'url : /produits/casquettes/ avec la fonction explode() de php
    On obtien un tableau contenant les requetes de l'utilisateur tab[1]=produits tab[2]=casquettes
    */
    $page = explode("/", $_Get['page']);
}
// Declaration des variables 
$page_description = "Strucuture de base d'un projet en php";
$page_title = "Projet PHP MVC";
$page_content = "Bonjour Tous le monde !";

// Appel du template
require_once("Views/common/template.php");