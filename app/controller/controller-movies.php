<?php
    require_once './app/view/view-movies.php';
    require_once './app/model/db.php';

class movieController{

    private $model;
    private $controller;

    function __construct(){

        $this->model = new movieModel();
        $this->view = new movieView();


    }

    public function showHome(){

      
      $genders = $this->model->getAllGenders();
      $this->view->showHeader($genders);
      $this->view->showHome($genders);
    
    }


    function addMovie(){

        $pelicula = $_GET['pelicula'];
        $estreno = $_GET['estreno'];
        $genero = $_GET['genero'];
        $descripcion = $_GET['descripcion'];

       $id = $this->model->insertMovie($pelicula, $estreno, $genero , $descripcion);
       
       header("location: " . BASE_URL);
    }

    function deleteMovie($id){

        $this->model->deleteMovieByID($id);

        header("location: " . BASE_URL);

    }



    function changeValoracion($id , $pelicula){

        if($id == 0){
            
            $id=0;
            $this->model->setValoracion($id,$pelicula);
        }
        if($id == 1){
            
            $id = 1;
            $this->model->setValoracion($id,$pelicula);
        }
        
        header("location: " . BASE_URL);
    }




    function selectGender($gender){
        
        $genders = $this->model->getAllGenders();
        $selected = $this->model->getGender($gender);
        $this->view->showHeader($genders);
        $this->view->showSelectedGender($selected);
        
    }



    // function updateMovie($id){
 
    //     $pelicula = $_GET['pelicula'];
    //     $estreno = $_GET['estreno'];
    //     $genero = $_GET['genero'];
    //     $descripcion = $_GET['descripcion'];
        
     

    //     $this->view->showUpdate ($pelicula , $estreno, $genero , $descripcion);
        
    // }
}
