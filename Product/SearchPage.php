<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style = "background-color:grey;">
    <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>

    <div class=""
    <?php
        include_once('ProductSearch.php');
        $pSearch = new ProductSearch();
        $res = $pSearch->search();
        
        while($row=mysqli_fetch_array($res)){
            echo <<<HTML
                <main>
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative; width: 20%; display: inline-block;">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        <div class="col">
                            <div class="card h-100 shadow-sm"> <img src= $row[2] class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">$row[1]</span> <span class="float-end price-hp">Rs. $row[3]</span> </div>
                                    <h5 class="card-title">$row[4]</h5>
                                    <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                </main>
            HTML;
        }
    ?>


</body>
</html>