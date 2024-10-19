<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class gameView{

private $smarty;

public function __construct(){
    $this->smarty = new Smarty();
}


public function showGames($games, $genres){
    $this -> smarty -> assign('genres' , $genres);
    $this-> smarty -> assign('games', $games);
    $this -> smarty -> display ('templates/insertar_Mostrar_Games.tpl');
}


public function showResult($game){
    $this -> smarty -> assign('game', $game);
    $this -> smarty -> display ('templates/mostrar_Juego.tpl');
}

public function showEdit($game, $genres){
    $this -> smarty -> assign('game', $game);
    $this -> smarty -> assign('genres', $genres);
    $this -> smarty -> display('templates/form_editar_Juego.tpl');
}


}