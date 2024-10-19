<?php

require_once 'model.php';


class genreModel{

    private $db;

    public function __construct(){
        $config = new Model();
        $this->db = $config->getDB();
    }



    public function getAllGenres(){
        $query = $this-> db -> prepare('SELECT * FROM generos');
        $query -> execute();
        $genres = $query -> fetchAll(PDO:: FETCH_OBJ);

        return $genres;
    }

    public function findMatch($search){
        $query = $this -> db -> prepare('SELECT  videojuegos.*, generos.* FROM videojuegos JOIN generos ON videojuegos.Genero_ID = generos.Genero_ID WHERE generos.Genero LIKE ?');
        $query -> execute(["%${search}%"]);
        $results = $query -> fetchAll(PDO::FETCH_OBJ);


        return $results;
    }

    public function getGenreById($id){
        $query = $this -> db -> prepare('SELECT * FROM generos WHERE Genero_ID = ?');
        $query -> execute([$id]);

        $genre = $query-> fetch(PDO::FETCH_OBJ);

        return $genre;
    }
    
    public function existsGenreInBd($genero){
        $query = $this -> db -> prepare('SELECT * FROM generos WHERE Genero = ?');
        $query -> execute([$genero]);

        $existGenre = $query -> fetchAll(PDO::FETCH_OBJ);

        return $existGenre;

    }
    public function insertGenre($edad, $genero, $descripcion){
        $existe = $this -> existsGenreInBd($genero);
        if(!$existe){
            $query = $this -> db -> prepare('INSERT INTO generos (Edad, Genero, Descripcion) VALUES (?,?,?)');
            $query -> execute([$edad, $genero, $descripcion]);

            return $this->db-> lastInsertId();
        }   
    }

    public function updateGenreBd($genero_id, $genero, $edad, $descripcion){
        $query = $this -> db -> prepare('UPDATE generos SET Genero = ?, Edad = ?, Descripcion = ? WHERE Genero_ID = ?');
        $query -> execute([$genero, $edad, $descripcion, $genero_id]);
    }

    public function deleteGenreById($id){
        $query = $this -> db -> prepare('DELETE FROM generos WHERE Genero_ID = ?');
        $query -> execute([$id]);
    }

    public function countGamesInGenre($id){
        $query = $this -> db -> prepare('SELECT count(*) as cuenta FROM videojuegos WHERE Genero_ID = ?');
        $query -> execute([$id]);
        $contador = $query-> fetch(PDO::FETCH_OBJ);

        return $contador -> cuenta;
    }




}














