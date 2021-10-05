<?php
function updateProduct(){
    include_once('../Config/Config.php');
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $id = $_GET['pid'];
    $query = "update tbl_product set product_name='$name', product_price=$price where product_id=$id";

    $config = Config::getObject();
    $con = $config->connectDb();
    $stmt = $con -> prepare($query);
    $stmt->execute();

}
updateProduct();
header("Location:SelfProduct.php");