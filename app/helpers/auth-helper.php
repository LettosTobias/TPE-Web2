<?php

    class AuthHelper {

       function __construct(){

 
       } 
/**
* Verifica que el user este logueado y si no lo está
* lo redirige al login.
*/
        function checkLoggedIn() {
            
            if (!isset($_SESSION['IS_LOGGED'])) {
                header("Location: " . BASE_URL . 'login');
                die();
            }
        } 
    }
