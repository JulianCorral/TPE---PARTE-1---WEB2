<?php

require_once "./app/controllers/game.controller.php";
require_once "./app/controllers/user.controller.php";
require_once "./app/controllers/genre.controller.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


//                   TABLA DE RUTEO
// home             ->   GameController->showHome();
// login            ->   UserController->showloginForm();
// validate         ->   UserController->validateUser();
// logout           ->   UserController->logout(); 
//mostrarGenres     ->   GenreController->showResults();
//game/:ID          ->   GameController->showGame($id);
//Genre//:ID        ->   GenreController->showGenre($id);
// add              ->   GameController->addGame();
// editGame/:ID     ->   GameContoller->editGame($id);
//editGameBd        ->   GameController->editGameBD();
// deleteGame/:ID   ->   GameController->deleteGame($id);
// addGenre         ->   GenreContoller->addGenre();
//editGenre/:ID     ->   GenreController->editGenre($id);
//editadoGenreBd    ->   GenreController->editGenreBd();
// deleteGenre/:ID  ->   GenreController->deleteGenre($id);
//default   


switch ($params[0]) {
    case 'home':
        $gameController = new gameController();
        $gameController->showHome();
        break;
    case 'login':
        $userController = new userController();
        $userController -> showloginForm();
        break;
    case 'validate':
        $userController = new userController();
        $userController -> valideUser();
        break;
    case 'logout':
        $userController = new userController();
        $userController->logout();
        break;
    case 'mostrarGenres':
        $genreController = new genreController();
        $genreController -> showResults();
        break;
    case 'game':
        $gameController = new gameController();
        $gameController -> showGame($params[1]);
        break;
    case 'genre':
        $genreController = new genreController();
        $genreController -> showGenreById($params[1]);
        break;
    case 'add':
        $gameController = new gameController();
        $gameController->addGame();
        break;
    case 'editGame':
        $gameController = new gameController();
        $gameController -> editGame($params[1]);
        break;
    case 'editGameBd':
        $gameController = new gameController();
        $gameController -> editGameBd();
        break;
    case 'deleteGame':
        $gameController = new gameController();
        $gameController -> deleteGame($params[1]);
        break;
    case 'addGenre':
        $genreController = new genreController();
        $genreController -> addGenre();
        break;
    case 'editGenre':
        $genreController = new genreController();
        $genreController -> editGenre($params[1]);
        break;
    case 'editGenreBd':
        $genreController = new genreController();
        $genreController -> editGenreBd();
        break;
    case 'deleteGenre':
        $genreController = new genreController();
        $genreController -> deleteGenre($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
    }
