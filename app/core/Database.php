<?php

class Database
{
    function connect(){
        $string=DBDRIVER.":host=".DBHOST.";dbname=".DBNAME;
        if(!$bdd=new PDO($string,DBUSER,DBPASS)){
            die('echec de connexion à la base de donnée');
        }
        return $bdd;
    }
    public function bdd(){
        $bdd=$this->connect();
        return $bdd;
    }
}

