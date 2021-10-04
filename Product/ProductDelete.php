<?php
    function deleteItem($pid){
        include_once('../Config/Config.php');
        $config = Config::getObject();
        $query = "delete from tbl_product where product_id=$pid";
        $con = $config->connectDb();
        $stmt = $con -> prepare($query);
        $stmt->execute();
    }
    deleteItem($_GET['pid']);
    header("Location:SelfProduct.php");
?>