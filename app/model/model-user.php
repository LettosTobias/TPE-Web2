<?php

 require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


 class userModel{
    
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_parte1;charset=utf8', 'root', '');
    }
    
    public function getUserByEmail($email) {
         $query = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    

    

 }