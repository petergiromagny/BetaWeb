<?php


class DAO
{

    public function __construct(){

        $dsn = 'mysql:dbname=testdb;host=localhost';
        $user = 'dbuser';
        $password = 'dbpass';

        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
    }



}



?>