<?php 

class BDD {

    private static $pdo;
    private $user = "root";
    private $password = " ";

    // Gere la creation a la base de données
    private static function setBDD() {

        self::$pdo = new PDO("mysql:host=localhost;dbname=zsite;charset=utf8", self::$user, self::$password);
        // gerer les erreurs liées a PDO
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
}