<?php
class cart{ 
   public $db= null;
   private $table = "cart";
   public function __construct(DBController $db)
    {
        $this->db = $db;
    }
    public function setData($value){
        $sql = "INSERT INTO $this->table (item_id)
        VALUES ($value)";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
    }

    public function getData(){
        $sql = "SELECT * FROM cart";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getId($array){
       $newArray = array_map(function($row) {
            $idArray = $row["item_id"];
            return $idArray;
        },$array);
        return $newArray;
    }
    public function deleteItem($item_id){
        $sql = "DELETE FROM cart WHERE item_id='$item_id'";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
       
        header("Refresh:0");
    }
    public function subTotal($array){
        $total;
        foreach ($array as $item) {
            $total += $item[0];
        }
        return $total;
    }
}
