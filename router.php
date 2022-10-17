<?php
require_once './app/controller/controller-movies.php';
require_once './app/controller/controller-auth.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';

    if(!empty($_GET['action'])){

        $action = $_GET['action'];
    }


$params = explode('/' , $action);
$actionForm = 'add';


switch ($params[0]) {

    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;

    case 'logout':

        $authController = new AuthController();
        $authController->showLogout();
        break;

    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
       

    case 'home':
        $movieController = new movieController();
        $movieController->showHome();
        break;

    case 'add':
        $movieController = new movieController();
        $movieController->addMovie();
        break;

    case 'delete':

        $id = $params[1];
        $movieController = new movieController();
        $movieController->deleteMovie($id);
        break;
        
    case 'update':

        $id = $params[1];
        $actionForm = 'setMovie';
        $movieController = new movieController();
        $movieController->updateMovie($id , $actionForm);
        break;

    case 'movie': 
        
        $id = $params[1];
        $movieController = new movieController();
        $movieController->showMovie($id);

        break;

    case 'gender':
        $gender = $params[1];
        $movieController = new movieController();
        $movieController->selectGender($gender);
        break;


    case 'valoracion':
        $valoracion = $params[1];
        $id = $params[2];
        $movieController = new movieController();
        $movieController->changeValoracion($valoracion , $id);  
        break;


    case 'setMovie':
        $movieController = new movieController();
        $movieController->setMovie();       
        break;

 default:
       echo("404");
        break;
}