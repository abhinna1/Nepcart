<?php

class ProductSearch{
    private $config;
    private $con;
    public function __construct(){
        include_once('../config/Config.php');
        $this->config = Config::getObject();
    }
    public function search(){
        $this->con = $this->config->connectDb();
        $query = "select * from tbl_product";
        $res = mysqli_query($this->con, $query);
        return $res;
    }
}