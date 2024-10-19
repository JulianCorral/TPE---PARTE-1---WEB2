<?php


require_once './app/models/user.model.php';
require_once './app/views/user.view.php';



class userController{

    private $userView;
    private $userModel;


    public function __construct(){
        $this -> userView = new userView();
        $this -> userModel = new userModel();
        if(strnatcmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            } 
            else if(session_id() == ''){
                session_start();
            }
        }
    }

    public function showLoginForm(){
        $this -> userView -> showLoginForm();
    }

    public function valideUser(){
  
        if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['password']) && !empty($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $userDb = $this -> userModel -> getUserByUser($user);


            if($userDb && password_verify($password, $userDb -> password)){
                session_start();
                $_SESSION['USER_ID'] = $userDb->ID_user;
                $_SESSION['USER_USUARIO'] = $userDb->user;
                $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL);
            } 
            else { 
                $this ->userView->showLoginForm("El usuario o la contraseña no existe.");
            }

            }

        }


        public function logout(){
            session_start();
            session_destroy();
            header('Location: ' . BASE_URL);
        }



    }


