<!DOCTYPE html>
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
<body style = "background-color:grey;">
    <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>

    <?php
        include_once('ProductSearch.php');
        $pSearch = new ProductSearch();
        $res = $pSearch->search($_GET['searchBar']);
        while($row=mysqli_fetch_array($res)){
            if($_SERVER['REQUEST_METHOD']!='POST'){
            $name = $row['product_name'];
            $id = $row['product_id'];
            $_GET['id'] = $row["product_id"];
            
            echo <<<HTML
            <form method="POST">
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative; width: 20%; display: inline-block;">
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
            HTML;
        }
        else{
            echo $_GET['id'];
        }
        }
    ?>


</body>
</html>