<?php
class ConDB{
    private $host,$db,$user,$pass;
    public $conn;

    public function ConDB(){
        $this->host = 'localhost';
        $this->user = 'root'; 
        $this->pass = ''; 
        $this->db = 'sci_course2'; 
    }

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=sci_course2","root");
            // echo "pass";
        }catch(PDOException $e){
            echo $e->getMessage();
            // echo "fail";
        }
    }
} 
?>