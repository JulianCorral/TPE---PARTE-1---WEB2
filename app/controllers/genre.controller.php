
<?php

    require_once "./app/models/genre.model.php";
    require_once "./app/views/genre.view.php";
    require_once "./app/helpers/user.helper.php";


    class genreController{

        private $genreModel;
        private $genreView;
        private $userHelper;


        public function __construct(){
            $this -> genreModel = new genreModel();
            $this -> genreView = new genreView();
            $this -> userHelper = new UserHelper();


            $this -> userHelper -> startSession();
        }


        public function showResults(){
            if(isset($_POST['search']) && !empty($_POST['search'])){
                $results = $this -> genreModel -> findMatch($_POST['search']);
                $this -> genreView -> showResultados($results);

            }
        }

        public function showGenreById($id){

            $genre = $this -> genreModel -> getGenreById($id);

            $this -> genreView -> showGenre($genre);
            
        }

        public function addGenre(){
            $this -> userHelper->checkLoggedIn();
            if(isset($_POST['edad']) && isset($_POST['genero']) && isset($_POST['descripcion'])){
                if(!empty($_POST['edad']) && !empty($_POST['genero']) && !empty($_POST['descripcion'])){ 
    
                    $edad = $_POST['edad'];
                    $genero = $_POST['genero'];
                    $descripcion = $_POST['descripcion'];
                    $id = $this -> genreModel -> insertGenre($edad, $genero, $descripcion);
                    header("Location:" . BASE_URL);
                }
    
                else{
                    header('Location: ' . BASE_URL);
                }
            }
        }



        public function editGenre($id){
            $this -> userHelper -> checkLoggedIn();
            $genre = $this -> genreModel -> getGenreById($id);
            $this -> genreView -> showGenreById($genre);
        }

        public function editGenreBd(){

            $this->userHelper->checkLoggedIn();
            if(isset($_POST['edad']) && isset($_POST['genero']) && isset($_POST['descripcion'])){
                if(!empty($_POST['edad']) && !empty($_POST['genero']) && !empty($_POST['descripcion'])){     
                        
                            $this->genreModel->updateGenreBd($_POST['Genero_ID'], $_POST['genero'],$_POST['edad'],$_POST['descripcion']);
    
                            header("Location: " . BASE_URL);
                        }
                          
            }
            else {header("Location: " . BASE_URL);
            }
        }

        public function deleteGenre($id){
            $this -> userHelper -> checkLoggedIn();
            $contador = $this -> genreModel -> countGamesInGenre($id);
            if($contador > 0){
                $this -> genreView -> showError();
            }
            else{
            $this -> genreModel -> deleteGenreById($id);
            header("Location: " . BASE_URL);
            }
        }

















    }