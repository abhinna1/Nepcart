
<div class="container" style="background-color:transparent;">
    <?php include_once ('../navbar.php');
    $navbar = new Navbar;
    echo $navbar->displayNavbar();
    ?>
</div>

<body style="background-image:url(../images/shop1.png); background-size: 150%;">

<?php
    

    if(isset($_GET['id'])){
        try{
            include_once('../config/Config.php');
            $config = Config::getObject();
            $id = $_GET['id'];
            $con = $config->connectDb();
            $query = "select * from tbl_product where product_id = $id;";
            $res = mysqli_query($con, $query);
            while($row=mysqli_fetch_array($res)){
            // hereee
            include_once('viewUI.php');
            $ui = new viewUI();
            echo $ui->getUI($row);
            }
        }
        catch(Exception $e){
            echo $e;
        }
    }
    else{
        echo 'No such product found';
    }
?>
</body>