<?php

require_once "model.php";


class gameModel{

    private $db;

    // CREAMOS EL CONSTRUCTOR PARA ASIGNAR LA APERTURA DE LA BD
    public function __construct() {
        $config = new Model();
        $this->db = $config->getDB();
    }

    
    public function getAllGames(){
        $query = $this->db->prepare('SELECT videojuegos.*, generos.* FROM videojuegos JOIN generos ON videojuegos.Genero_ID = generos.Genero_ID');
        $query -> execute();
        $games = $query-> fetchAll(PDO::FETCH_OBJ);
        return $games;  
    }


    public function getGame($id){
        $query = $this -> db -> prepare('SELECT * FROM videojuegos WHERE ID_Juego = ?');
        $query -> execute([$id]);
        $result = $query -> fetch(PDO::FETCH_OBJ);

        return $result;
    }


    public function insertGame($nombre, $fecha, $precio, $descripcion, $genero_id){
        $query = $this -> db -> prepare('INSERT INTO videojuegos (Nombre, Fecha, Precio, Descripcion, Genero_ID) VALUES (?,?,?,?,?)');
        $query -> execute([$nombre, $fecha, $precio, $descripcion, $genero_id]);

        return $this ->db -> lastInsertId();
    }

    public function updateGameBd($id, $name, $fecha, $precio, $descripcion, $genero_id){
        $query = $this -> db -> prepare('UPDATE videojuegos SET Nombre = ?, Fecha = ?, Precio = ?, Descripcion = ?, Genero_ID = ? WHERE ID_Juego = ?');
        $query -> execute([$name, $fecha, $precio, $descripcion, $genero_id, $id]);
    }

    public function deleteGameById($id){
        $query = $this -> db -> prepare('DELETE FROM videojuegos WHERE ID_Juego = ?');
        $query -> execute([$id]);
    }



    }

    




