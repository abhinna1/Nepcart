<?php
class ViewCart{
    private $con;
    public function view(){
        include_once('../Config/Config.php');
        session_start();
        $config = Config::getObject();
        $this->con=$config->connectDb();
        $uid = $_SESSION['id'];
        $query = "select p.product_name, p.product_price from tbl_user as u, tbl_product as p, tbl_cart as c where c.uID = $uid and c.uid = u.uid and c.product_id = p.product_id;";
        $res = mysqli_query($this->con, $query);
        while($row=mysqli_fetch_array($res)){
            if($_SERVER['REQUEST_METHOD']!='POST'){
                echo "name: ".$name = $row[0];
                echo "              price: " . $id = $row[1];
                echo <<<HTML
                    Quantity:<input type="text" name = "quantity">
                    <br>
                    
                HTML;
            }
        
        }
    }
}
$cart = new ViewCart();
$cart->view();