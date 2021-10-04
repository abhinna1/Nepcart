<?php

class ProductSearch{
    private $config;
    private $con;
    public function __construct(){
        include_once('../config/Config.php');
        $this->config = Config::getObject();
    }
    public function search($word){
        $this->con = $this->config->connectDb();
        $query = "select * from tbl_product where product_name like '$word%' or product_name like '%$word';";
        $res = mysqli_query($this->con, $query);
        return $res;
    }
    public function catSearch($category){
        $this->con = $this->config->connectDb();
        $query = "select * from tbl_product where product_category = '$category';";
        $res = mysqli_query($this->con, $query);
        return $res;
    }
}