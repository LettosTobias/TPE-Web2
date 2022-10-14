<?php
require_once './app/controller/controller-movies.php';
require_once './app/controller/controller-login.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if(!empty($_GET['action'])){

    $action = $_GET['action'];
}

$params = explode('/' , $action);
$actionForm = 'add';
$movieController = new movieController();
$loginController = new loginController();


switch ($params[0]) {

    case 'login':

        $loginController->showFormLogin();
        break;

    case 'logout':
        $loginController->showLogout();
        break;

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
        $actionForm = 'setMovie';
       
        $movieController->updateMovie($id , $actionForm);
        break;

    case 'movie': 
        
        $id = $params[1];

        $movieController->showMovie($id);

        break;

    case 'gender':
        $gender = $params[1];
        $movieController->selectGender($gender);
        break;


    case 'valoracion':
        $valoracion = $params[1];
        $id = $params[2];
        $movieController->changeValoracion($valoracion , $id);  
        break;

    case 'login':
       
        $loginController->formLogin();

        break;


    case 'setMovie':
        
        $movieController->setMovie();       
        break;

 default:
       echo("404");
        break;
}