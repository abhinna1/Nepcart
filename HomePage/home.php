<!doctype html>
<html lang="en">

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>
  <!-- images -->
  <style>
    .carousel-item {
      height: 64rem;
      /* width:72rem; */
      position: relative;
    }
    .container {
      position: relative;
      bottom: 0;
      left: 0;
      right: 0;
      padding-bottom: 0px;
    }
  </style>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/shoes_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/bags_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/laptop_2.jpg" class="d-block w-100" alt="..."">
      </div>
      <div class="carousel-item">
        <img src="images/tshirt_1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Buy products here</h2>
    </div>
    <?php
        include_once('../Product/ProductSearch.php');
        include_once('../config/Config.php');
        $config = Config::getObject();
        $pSearch = new ProductSearch();
        $con = $config->connectDb();
        $query = "select * from tbl_product;";
        $res = mysqli_query($con, $query);
          while($row=mysqli_fetch_array($res)){
            if($_SERVER['REQUEST_METHOD']!="POST"){
                $name = $row['product_name'];
                echo <<<HTML
                    <form method="POST">
                    <main>
                    <div class="col-sm-4" style="position: relative; width:50%; height:300px; overflow:auto; display: inline-block;">
                        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3" style ="display: inline-block;">
                            <div class="col" style="display: inline-block;">
                                <div class="card h-100 shadow-sm"> <img src= ../Product/$row[2] style="width:50%; height:10%; overflow:hidden;" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">$row[1]</span> <span class="float-end price-hp">Rs. $row[3]</span> </div>
                                        <div class="text-center my-4">
                                        <a href="../Product/OpenProduct.php?id=$row[0]" class="btn btn-warning">Check offer</a>
                                        
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    </main>
                    </form>
                
                        </div>
                HTML;

                
            }
            
            else{
                echo $row['product_name'];
                break;
            }
          }
        
    ?>

  </section>
</body>
</html>