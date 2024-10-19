<?php


require_once "model.php";


class userModel{

    private $db;


    function __construct(){
        $config = new Model();
        $this->db = $config->getDB();
    }


    function getUserByUser($user){
        $query = $this -> db -> prepare('SELECT * FROM usuarios WHERE user = ?');
        $query -> execute([$user]);

        $date = $query -> fetch(PDO::FETCH_OBJ);

        return $date;
    }




}