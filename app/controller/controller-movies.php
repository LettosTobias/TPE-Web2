<?php
    require_once './app/view/view-movies.php';
    require_once './app/model/model-movie.php';

class movieController{

    private $model;
    private $view;

    function __construct(){

        $this->model = new movieModel();
        $this->view = new movieView();


    }

    public function showHome(){

      
      $genders = $this->model->getAllGenders();
      $this->view->showHeader($genders);
      $this->view->showHome($genders);


    //trato de que me direccione una vez agregada la pelicula
         
    }


    function addMovie(){

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




    function selectGender($gender){
        
        $genders = $this->model->getAllGenders();
        $selected = $this->model->getGender($gender);
        $this->view->showHeader($genders);     
        $this->view->showSelectedGender($selected);
        
    }


    
    function updateMovie($id , $actionForm){
        

        $SelectedMovie = $this->model->getSelectedMovie($id);
        $this->view->showUpdate($SelectedMovie , $actionForm);
      

    
    }


    function setMovie(){

       
        
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

        $genders = $this->model->getAllGenders();
        $this->view->showHeader($genders);
        $selectedMovie = $this->model->getSelectedMovie($id); 
        $this->view->showMovie($selectedMovie); 
        
    }






}
