<?php 
class AdminDanhMuc{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
   public function getAllDanhMuc(){
    try{
        $sql ='SELECT * FROM products';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
   catch (Exception $e){
echo "Loi" .$e->getMessage();
   }
}
}
?>