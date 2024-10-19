<?php

class UserHelper {

//Verifica que el user este logueado, en el caso que no lo este se lo redirige al login.
    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
    
    public function startSession(){
        if(strnatcmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
            session_start();
            }else if(session_id() == ''){
            session_start();}
        }
    }
}