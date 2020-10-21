<?php
class DBController {
  
  function __construct() {
    $servername = "localhost";
    $username = "jaemuxyz_shimwoan";
    $password = 'jaemu93!@#';
    $dbname ="jaemuxyz_mobile_shop";
     $conn = null;
    
    try {
      $this->conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8;", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      
      } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();


      }
  }

  
}