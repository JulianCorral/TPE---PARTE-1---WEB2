<?php

require_once "./smarty-4.2.1/libs/Smarty.class.php";



class genreView{

    private $smarty;


    public function __construct(){
        $this -> smarty = new Smarty();
    }


    public function showGenres($genres){
        $this -> smarty -> assign('genres', $genres);
        $this -> smarty -> display('templates/insertar_Mostrar_Genres.tpl');
    }


    public function showResultados($results){
        $this-> smarty -> assign('results', $results);
        $this -> smarty -> display ('templates/resultados_generos.tpl');
    }

    public function showGenre($genre){
        $this -> smarty -> assign ('genre', $genre);
        $this -> smarty -> display('templates/mostrar_Genero.tpl');
    }

    public function showGenreById($genre){
        $this -> smarty -> assign('genre', $genre);
        $this -> smarty -> display ('templates/form_editar_Genero.tpl');
    }

    public function showError(){
        $this -> smarty -> assign('Error', 'error');
        $this -> smarty -> display ('templates/mostrar_error.tpl');
    }


}

