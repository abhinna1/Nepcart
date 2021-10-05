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
<body>
<?php
    class LoggedNavbar{
        private $logout;
        public function displayNavBar(){
            include_once 'Login/LoginPhp.php';
            $loginPhp = new LoginPhp;
            $id = $_SESSION['id'];
            // session_start();
            $name = $_SESSION['fname'];
            return <<<HTML
                <!-- Navigation Bar -->
                <nav class="navbar navbar-expand-sm bg-light" style="margin-top:10px;">
                <form method="POST" action="../Product/ProductForm.php"></form>
                    <a href="../HomePage/home.php">
                        <img src="../images/Logo.png" alt="" style="height:40px; top:50%; bottom:50%; margin-right:20px;">
                    </a>
                    <!-- Links -->
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="nav-item">
                            <a href="../HomePage/home.php">
                                <span class="glyphicon glyphicon-home" style='padding-right:5px;'></span>Home
                            </a>
                        </li>
                      
                        <li class="nav-item">
                            <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="glyphicon glyphicon-th-list"></span> Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../Product/FashionPage.php?category=clothing">Fashion</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../Product/FashionPage.php?category=electronics">Electronics</a></li>
                            </ul>
                            </a>
                        </li>
                        <li style="height: 10%; width: 500px; margin-left:3rem; margin-top:auto; margin-bottom:auto;">
                                <form action="../Product/SearchPage.php" method="get">
                                    <input type="text" name="searchBar"class="form-control glyphicon glyphicon-search" placeholder="&#xe003" style="outline:none; display: inline;"/>
                                </form>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style='margin-left:5rem' >
                        <li >
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <span class="glyphicon glyphicon-user"></span> $name
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../UserEdit/Edit.php">Edit Account Details</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../Product/SelfProduct.php">My Products</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../Cart/ViewCart.php">My Cart</a></li>
                                </ul>
                                </a>
                        </li>
                        <li>
                            <a href="../Login/logout.php">
                                <span class="glyphicon glyphicon-log-out" style='padding-right:5px; display: inline;'></span>Log Out
                            </a>
                        </li>
                    </ul>
                    </form>
                </nav>
                
                HTML;
        }
    }

?>
  
    </body>
</html>