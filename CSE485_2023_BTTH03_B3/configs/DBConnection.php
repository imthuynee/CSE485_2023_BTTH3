<?php
class DBConnection{
    private $conn=null;
    public function __construct(){
         // B1. Kết nối DB Server
         try {
            $this->conn = new PDO('mysql:host=localhost;dbname=btth01_cse485_;port=3306;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }


}