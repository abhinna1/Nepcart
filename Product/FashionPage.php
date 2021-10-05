
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
</div>

<?php


include_once('ProductSearch.php');
    $product = new ProductSearch();
    $res=$product->catSearch($_GET['category']);
    $category = $_GET['category'];
    echo <<<HTML
        <div class="py-5">
            <h2 class="text-center">$category</h2>
        </div>
        HTML;
    
    while($row=mysqli_fetch_array($res)){
        $name = $row['product_name'];
        $id = $row['product_id'];
        $_GET['id'] = $row["product_id"];
        echo <<<HTML
           
                <main>
                <form method="GET">
            <div class="col-sm-4" style="position: relative; width:20%;; height:300px; overflow:auto; display: inline-block;">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        <div class="col">
                            <div class="card h-100 shadow-sm"> <img src= $row[2] class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">$name</span> <span class="float-end price-hp">Rs. $row[3]</span> </div>
                                    
                                    <div class="text-center my-4">
                                        <a href="OpenProduct.php?id=$row[0]" class="btn btn-warning">Check offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                </form>

            </main>
        HTML;
    }
