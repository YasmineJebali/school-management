<?php

//Etablissement de la connexion avec la base de données

class Database {
public static function connect()
{
    try {
        return new PDO("mysql:host=127.0.0.1; dbname=quiz management system", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
        return die();
    }
} 


}


 