<?php

class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=news_portal', $username ,$password);
            return $dbn;
        }
        catch (PDOExeption $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

}