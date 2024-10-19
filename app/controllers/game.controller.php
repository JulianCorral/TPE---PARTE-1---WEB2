<?php

require_once "./app/models/game.model.php";
require_once "./app/views/game.view.php";
require_once "./app/models/genre.model.php";
require_once "./app/views/genre.view.php";
require_once "./app/helpers/user.helper.php";


class gameController{

    private $gameModel;
    private $gameView;
    private $genreModel;
    private $genreView;
    private $userHelper;

     public function __construct() {
        $this->gameModel = new gameModel();
        $this->gameView = new gameView();
        $this->genreModel = new genreModel();
        $this->genreView = new genreView();
        $this -> userHelper = new UserHelper();

        $this -> userHelper -> startSession();
    }


    public function showHome(){
        $gamesTotal = $this->gameModel->getAllGames();
        $genresTotal = $this-> genreModel->getAllGenres();
        $this-> gameView -> showGames($gamesTotal, $genresTotal);
        $this -> genreView -> showGenres($genresTotal);
    }


    public function showGame($id){
        $result = $this -> gameModel-> getGame($id);
        $this -> gameView -> showResult($result);
    }


    public function addGame(){

        $this -> userHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['fecha']) && isset($_POST['precio']) && isset($_POST['descripcion'])){
            if(!empty($_POST['nombre']) && !empty($_POST['fecha']) && !empty($_POST['precio']) && !empty($_POST['descripcion'])){ 

                $nombre = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $Genero_Id = $_POST['Genero_ID'];
                $id = $this -> gameModel -> insertGame($nombre, $fecha, $precio, $descripcion, $Genero_Id);
                header("Location:" . BASE_URL);
            }

            else{
                header('Location: ' . BASE_URL);
            }
        }
    }

    public function editGame($id){
        $this -> userHelper -> checkLoggedIn();
        $game = $this -> gameModel -> getGame($id);
        $genres = $this -> genreModel -> getAllGenres();
        $this -> gameView -> showEdit($game, $genres);
    }


    public function editGameBd(){
        if(isset($_POST['name']) && isset($_POST['fecha']) && isset($_POST['precio']) && isset($_POST['descripcion'])){
            if(!empty($_POST['name']) && !empty($_POST['fecha']) && !empty($_POST['precio']) && !empty($_POST['descripcion'])){ 
            
                    $this->gameModel->updateGameBd($_POST['ID_Juego'], $_POST['name'], $_POST['fecha'], $_POST['precio'], $_POST['descripcion'], $_POST['Genero_ID']);
                    
                    header("Location: " . BASE_URL);
                }
            }
        else {

            header("Location: " . BASE_URL);
        
        }
    }

    public function deleteGame($id){
        $this -> userHelper -> checkLoggedIn();
        $this -> gameModel -> deleteGameById($id);
        header('Location:' . BASE_URL);

    }



}
