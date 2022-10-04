<?php
require_once './app/controller/controller-movies.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if(!empty($_GET['action'])){

    $action = $_GET['action'];
}

$params = explode('/' , $action);

$movieController = new movieController();

switch ($params[0]) {

    case 'home':
        
        $movieController->showHome();
        break;
    case 'add':
        $movieController->addMovie();
        break;
    case 'delete':
        $id = $params[1];
        $movieController->deleteMovie($id);
        break;
        
    case 'update':
        $id = $params[1];
        $movieController->updateMovie($id);
    
        break;

    case 'gender':
        $gender = $params[1];
        $movieController->selectGender($gender);
        break;


    case 'valoracion':
        
        $id = $params[1];
        $pelicula = $params[2];
        $movieController->changeValoracion($id , $pelicula);  
        break;

    default:
       echo("404");
        break;
}