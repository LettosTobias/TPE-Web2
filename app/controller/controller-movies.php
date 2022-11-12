<?php
    require_once './app/view/view-movies.php';
    require_once './app/model/model-movie.php';
    require_once './app/model/model-gender.php';
    require_once './app/helpers/auth-helper.php';

class movieController{

    private $model;
    private $modelGender;
    private $view;
    private $genders;
    private $header;
   
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
        
        $this->model = new movieModel();
        $this->modelGender = new genderModel();
        $this->view = new movieView();
        $this->genders = $this->modelGender->getAllGenders();
        $this->header = $this->view->showHeader($this->genders);

    
    }
  
    

    function addMovie(){
        
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        if(!empty($_POST['pelicula'] && $_POST['estreno'] && $_POST['genero'] && $_POST['descripcion'])){

            $pelicula = $_POST['pelicula'];
            $estreno = $_POST['estreno'];
            $genero = $_POST['genero'];
            $descripcion = $_POST['descripcion']; 
        }


        if ($_FILES['imagen']['type'] == "image/jpg" ||
            $_FILES['imagen']['type'] == "image/jpeg" ||
            $_FILES['imagen']['type'] == "image/png"
            ){ 
            $this->model->insertMovie($pelicula, $estreno , $genero , $descripcion , $_FILES['imagen']['tmp_name']);
            }
            else{
            $this->model->insertMovie($pelicula, $estreno, $genero , $descripcion);
            }
       
        
       header("location: " . BASE_URL . "gender" . "/$genero");
    }




    function deleteMovie($id){
        
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $SelectedMovie = $this->model->getSelectedMovie($id);
        $this->model->deleteMovieByID($id);
        
            
        header("location: " . BASE_URL . "gender" . "/$SelectedMovie->id_genero_fk" );

    }



    function changeValoracion($valoracion, $id){

       

        if($valoracion == 0){
            
            $valoracion=0;
            $this->model->setValoracion($valoracion,$id);
        }
        if($valoracion == 1){
            
            $valoracion = 1;
            $this->model->setValoracion($valoracion,$id);
        }

            $SelectedMovie = $this->model->getSelectedMovie($id);
            
            
            header("location: " . BASE_URL . "gender" . "/$SelectedMovie->id_genero_fk " );
       
        
    }

  


    function selectGender($id){

        
        $selected = $this->model->getMoviesByGender($id);
  
        $this->view->showSelectedGender($selected);
        
        
    }

   
    
    function updateMovie($id , $actionForm){
        
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $SelectedMovie = $this->model->getSelectedMovie($id);
        
        $this->view->showUpdate($SelectedMovie , $actionForm);
        
        

    
    }


    function setMovie(){

        
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        
        $id = $_POST['id'];
        $estreno = $_POST['estreno'];
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
        $pelicula = $_POST['pelicula'];
        
         
        $this->model->setMovieDB($pelicula, $estreno, $genero , $descripcion , $id);

        
        $SelectedMovie = $this->model->getSelectedMovie($id);
        header("location: " . BASE_URL  . "gender" . "/$SelectedMovie->id_genero_fk");
    

       

    }



    function showMovie($id){


        $genders = $this->modelGender->getAllGenders();
        // $this->view->showHeader($genders);
        $selectedMovie = $this->model->getSelectedMovie($id); 
        $this->view->showMovie($selectedMovie); 
        
    }






}
