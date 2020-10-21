<?php
class product{ 
   public $db= null;
   public function __construct(DBController $db)
    {
        $this->db = $db;
    }
    function getData(){
        $sql = "SELECT * FROM product";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;

    }
    function getDataById($item_id, $table = "product"){
        $sql = "SELECT * FROM $table WHERE id='$item_id'";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
}