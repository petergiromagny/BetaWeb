<?php


class DAO
{

    function getConnexion(){
        $userDatabase = "root";
        $mdpDatabase = "";

        $dsn = new PDO('mysql:host=localhost;dbname=betaweb', $userDatabase, $mdpDatabase);
    }

}
