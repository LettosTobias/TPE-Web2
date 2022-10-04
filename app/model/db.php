<?php

class movieModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_parte1;charset=utf8', 'root', '');
    }

    public function getAllGenders(){

        $query =$this->db->prepare("SELECT genero FROM genero");
        $query->execute();
        
        $genders = $query->fetchAll(PDO::FETCH_OBJ);

        return $genders;
    }    

    public function insertMovie($pelicula, $estreno , $genero , $descripcion){

        $query = $this->db->prepare("INSERT INTO peliculas( nombre , estreno , id_genero_fk , descripcion) VALUES (?,?,?,?)");    
        $query->execute([$pelicula, $estreno, $genero , $descripcion]);
        
    
    }


    function deleteMovieByID($pelicula){

        $query = $this->db->prepare("DELETE FROM peliculas WHERE nombre = ?");
        $query->execute([$pelicula]);
    }


    function setValoracion($id,$pelicula){

        $query = $this->db->prepare("UPDATE peliculas SET valoracion = $id  WHERE nombre = ? ");
        $query->execute([$pelicula]);
    }
    

    function getGender($gender){

        $query = $this->db->prepare("SELECT * FROM peliculas WHERE id_genero_fk = ?");
        $query->execute([$gender]);
        $moviesGender = $query ->fetchAll(PDO::FETCH_OBJ);  

        return $moviesGender;
    }

    function updateMovie($pelicula , $estreno, $genero , $descripcion){

        $query = $this->db->prepare();

    }
    


}
 