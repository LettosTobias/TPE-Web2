<?php

    class AuthHelper {

       function __construct(){

        if (strnatcasecmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        } else {
            if (session_id() == '') {
                session_start();
            }
        }   
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
