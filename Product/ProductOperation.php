<?php
class ProductOperation{
    private $name;
    private $img;
    private $price;
    private $desc;
    private $category;
    private $uID;
    private $db;
    private $conn;
    public function __construct($name, $img, $price, $desc, $category){
        include_once('../config/Config.php');
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->desc = $desc;
        $this->category = $category;
        $this->uID = $_SESSION['id'];
        $this->db = Config::getObject();
    }
    public function insertProduct(){
        $this->conn = $this->db->connectDb();
        $query = "insert into tbl_product(product_name, product_image, product_price, product_description, product_category, uID)
        values('$this->name', '$this->img', $this->price, '$this->desc', '$this->category', $this->uID);";
        echo "<script>alert($query);</script>";
        $stmt = $this->conn -> prepare($query);
        $stmt->execute();
        $this->conn->close();
    }
}