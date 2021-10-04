<?php

class CartOperation{
    private $con;
    public function insertCart($productId, $uId){
        
        include_once('../Config/Config.php');
        $config = Config::getObject();
        $query = "insert into tbl_cart(product_id, uID) values($productId, $uId)";
        $this->con = $config->connectDb();
        $stmt = $this->con -> prepare($query);
        $stmt->execute();
    }
}
// echo $_GET['pid'];
try{
    session_start();
    $cart = new CartOperation();
    $cart->insertCart($_GET['pid'], $_SESSION['id']);
    echo "inserted";
}
catch(Exception $e){
    echo e;
}