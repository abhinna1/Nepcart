


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
        <title>Nepcart</title>
        <link rel="stylesheet" href="../bootstrap.css">
        <link rel="stylesheet" href="ViewCart.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>
  
<?php
class ViewCart{
    private $con;
    private $cartOperation;
    public function view(){
        include_once('../Config/Config.php');
        // include_once('./CartOperation.php');
        // $this->cartOperaion = new CartOperation();
        $config = Config::getObject();
        $this->con=$config->connectDb();
        $uid = $_SESSION['id'];
        $query = "SELECT p.product_name, p.product_price,p.product_image, p.product_id FROM tbl_product as p where p.uID=1;";
        $res = mysqli_query($this->con, $query);
        
        echo <<<HTML
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">My Products</h1>
            </div>
        </section>

        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col" class="text-center">Product</th>
                                    <th scope="col" class="text-center">Available</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
        HTML;

                        while($row=mysqli_fetch_array($res)){
                                $pid=$row[3];
                                $name = $row[0];
                                echo <<<HTML
                                <tr>
                                <form action='ProductUpdate.php?pid=$pid' method="POST">
                                    <td><img src="../Product/$row[2]" style="width:30%;"> </td>
                                    <td> <input type="text" name="product_name"value=$name></td>
                                    
                                    <td>In stock</td>
                                    <td> <input type="text"  name="product_price" value=$row[1]></td>
                                        <td class="text-right"><button class="btn btn-sm btn-success"><i class="fa fa-trash"></i>Update</button> </td>
                                    </form>
                                    <form action='ProductDelete.php?pid=$pid' method="POST">
                                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button> </td>
                                    </form>
                                </tr>
                                </div>
                </div>
                            
                    
                HTML;
                    }
                
                echo <<<HTML
                </tbody>
                        </table>
                
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12  col-md-6">
                            <form action="../homepage/home.php">
                            <button class="btn btn-block btn-light">Continue Shopping</button>
                        </form>
                        </div>
                        <div class="col-sm-12 col-md-6 text-right">
                            <form action="ProductForm.php" method="GET">
                                <button class="btn btn-lg btn-block btn-success text-uppercase">Add New Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        HTML;
        }    
        }

$cart = new ViewCart();
$cart->view();