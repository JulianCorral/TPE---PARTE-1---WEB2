<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';



class userView{

    private $smarty;


    function __construct(){
        $this -> smarty = new Smarty();
        
    }

    function showLoginForm($error = null){
        $this -> smarty -> assign("error", $error);
        $this -> smarty -> display('templates/form_login.tpl');
    }




}