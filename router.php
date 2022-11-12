<?php
require_once './app/controller/controller-movies.php';
require_once './app/controller/controller-auth.php';
require_once './app/controller/controller-gender.php';

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
        $movieController = new movieController();
        $authController->showFormLogin();
        break;

    case 'logout':

        $authController = new AuthController();
        $authController->showLogout();
        break;

    case 'validate':
        $movieController = new movieController();
        $authController = new AuthController();
        $authController->validateUser();
        break;
       

    case 'home':
        $genderController = new genderController();
        $genderController->showHome();
        break;

    case 'add':
        $movieController = new movieController();
        $movieController->addMovie();
        break;

    case 'addGender':
        $genderController = new genderController();
        $genderController->addGender();
        break;

    case 'delete':

        $id = $params[1];
        $movieController = new movieController();
        $movieController->deleteMovie($id);
        break;
        
    case 'deleteGender':

        $genero = $params[1];
        $genderController = new genderController();
        $genderController->deleteGender($genero);
        break;
        
    case 'update':

        $id = $params[1];
        $actionForm = 'setMovie';
        $movieController = new movieController();
        $movieController->updateMovie($id , $actionForm);
        break;


    case 'updateGender':

        $genero = $params[1];
        $genderController = new genderController();
        $genderController->updateGender($genero);
        break;

    
    case 'setMovie':
        
        $movieController = new movieController();
        $movieController->setMovie();       
        break;


    case 'setGender':
        $genderController = new genderController();
        $genderController->setGender();       
        break;
    
    
    case 'movie': 
        
        $id = $params[1];
        $movieController = new movieController();
        $movieController->showMovie($id);

        break;

    case 'gender':
        $id = $params[1];
        $movieController = new movieController();
        $movieController->selectGender($id);
        break;


    case 'valoracion':

        $valoracion = $params[1];
        $id = $params[2];
        
        $movieController = new movieController();
        $movieController->changeValoracion($valoracion , $id);  
        break;




 default:
       echo("404 error :(");
        break;
}