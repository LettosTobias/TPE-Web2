<?php
require './libs/smarty-4.2.1/libs/Smarty.class.php';

class movieView{

private $smarty;
    function __construct(){

        $this->smarty = new Smarty(); // inicializo Smarty
    }

    
    public function showHome($genders){
        $this->smarty->assign('genders' , $genders); 
               
        //muestro el template
        $this->smarty->display('movieHome.tpl');

    }

    function showSelectedGender($selected){

        $this->smarty->assign('selected' , $selected);
        $this->smarty->display('movieList.tpl');

    }




    function showHeader($genders){

        $this->smarty->assign('genders' , $genders);
        $this->smarty->display('header.tpl');
    }



    function showUpdate($selectedMovie , $actionForm){

        $this->smarty->assign('selectedMovie' , $selectedMovie); 
        $this->smarty->assign('actionForm' , $actionForm);
        $this->smarty->display('formulario.tpl');
        

    }

    function showMovie($selectedMovie){

        $this->smarty->assign('selectedMovie' , $selectedMovie);  
        $this->smarty->display('selectedMovie.tpl');
    }
   
}
    