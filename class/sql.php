<?php 

class sql extends PDO{
    private $conn;
    function __construct(){
        $this->conn = new PDO("mysql:dbname=<dbname>;host=localhost","<user>","<senha>");
    }
}