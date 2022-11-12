<?php 

class genderModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_parte1;charset=utf8', 'root', '');
    }

    public function getAllGenders(){

        $query =$this->db->prepare("SELECT * FROM generos");
        $query->execute();
        
        $genders = $query->fetchAll(PDO::FETCH_OBJ);

        return $genders;
    }   
    
    
    public function getSelectedGender($genero){

        $query = $this->db->prepare("SELECT * FROM generos WHERE genero = ?");
        $query->execute([$genero]);

        $gender = $query->fetch(PDO::FETCH_OBJ);

        return $gender;

    }



    public function insertGender($genero){

        $query = $this->db->prepare("INSERT INTO generos(genero) VALUES(?)");
        $query->execute([$genero]);


    }


    public function deleteGender($genero){

        $query = $this->db->prepare("DELETE FROM generos WHERE genero = ?");
        $query->execute([$genero]);

    }


    public function setGender($genero , $id){

       $query = $this->db->prepare("UPDATE generos SET genero = ? WHERE id_genero = ?");
       $query->execute([$genero , $id]); 

    }





}        

