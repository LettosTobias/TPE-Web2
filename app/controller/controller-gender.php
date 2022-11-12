<?php

require_once './app/view/view-movies.php';
require_once './app/model/model-gender.php';
require_once './app/helpers/auth-helper.php';



class genderController{
   
    private $model;
    private $view;
    private $genders;
    private $header;
    private $authHelper;
   
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

        $this->authHelper = new AuthHelper();
        $this->model = new genderModel();
        $this->view = new movieView();
        $this->genders = $this->model->getAllGenders();
        $this->header = $this->view->showHeader($this->genders);

    
    }
  
    
    public function showHome(){


    $this->view->showFormHome($this->genders);
    $this->view->showHome($this->genders);
    
    }

    public function addGender(){

        $this->authHelper->checkLoggedIn();
        if(!empty($_POST['generoHome'])){
           
           $genero = $_POST['generoHome']; 
            
        }

       $this->model->insertGender($genero);
       
       header("location: " . BASE_URL ); 



    }


    public function updateGender($genero){

        
        $this->authHelper->checkLoggedIn();
        $selectedGenero = $this->model->getSelectedGender($genero);
        $this->view->showFormEditHome($selectedGenero);
        
        
        
    }

   
    public function setGender(){

        $id = $_POST['id'];
        $genero = $_POST['generoHome'];

        $this->model->setGender($genero , $id);

        
        header("location: " . BASE_URL ); 
    }



    public function deleteGender($genero){

        
        $this->authHelper->checkLoggedIn();   
        $this->model->deleteGender($genero);
        
        header("location: " . BASE_URL ); 
    }




}