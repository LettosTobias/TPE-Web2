<?php

class movieModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_parte1;charset=utf8', 'root', '');
    }

   

    function getAllMovies(){

        $query = $this->db->prepare("SELECT * FROM peliculas");
        $query->execute();


    }


    function getAll(){

        $query = $this->db->prepare("SELECT * FROM peliculas INNER JOIN generos");
        $query->execute();
        
        return $query->fetch(PDO::FETCH_OBJ) ;
        

    }





    public function insertMovie($pelicula, $estreno , $genero , $descripcion , $imagen = null){

        $pathImg = null;
        if($imagen){

            $pathImg = $this->uploadImage($imagen);
        }    
        $query = $this->db->prepare("INSERT INTO peliculas( nombre , estreno , id_genero_fk , descripcion , Imagen) VALUES (?,?,?,?,?)");    
        $query->execute([$pelicula, $estreno, $genero , $descripcion , $pathImg]);
        
        
    }


    private function uploadImage($imagen){

        $target = 'img/movies/' . uniqid() . '.jpg';
        move_uploaded_file($imagen , $target);

        return $target;

    }


    function deleteMovieByID($id){

        $query = $this->db->prepare("DELETE FROM peliculas WHERE id = ?");
        $query->execute([$id]);
    }


    function setValoracion($valoracion , $id){

        $query = $this->db->prepare("UPDATE peliculas SET valoracion = $valoracion  WHERE id = ? ");
        $query->execute([$id]);
    }
    
    function getMoviesByGender($id){

        $query = $this->db->prepare("SELECT * FROM peliculas INNER JOIN generos WHERE peliculas.id_genero_fk = ? AND generos.id_genero = ?");
        $query->execute([$id , $id]);
        $moviesGender = $query ->fetchAll(PDO::FETCH_OBJ);  

        return $moviesGender;

    }

    function getGender($id){

        $query = $this->db->prepare("SELECT * FROM peliculas INNER JOIN generos WHERE peliculas.id_genero_fk = ? AND generos.id_genero = ?");
        $query->execute([$id , $id]);
        $moviesGender = $query->fetch(PDO::FETCH_OBJ);  

        return $moviesGender;
    }



    function getSelectedMovie($id){

        $query = $this->db->prepare("SELECT * FROM peliculas INNER JOIN generos WHERE id = ?");
        $query->execute([$id]);
        $selectedMovie = $query ->fetch(PDO::FETCH_OBJ);

        return $selectedMovie;

    }

    function setMovieDB( $pelicula , $estreno , $genero , $descripcion , $id){

        $query = $this->db->prepare("UPDATE peliculas SET nombre = ? , estreno = ? , descripcion = ? , id_genero_fk = ?  WHERE id = ?");
        $query->execute([$pelicula , $estreno , $descripcion , $genero , $id]);
    }
    



}
 