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
  <!-- navigation bar !-->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="images/logo.png" alt="" style="height:40px; top:50%; bottom:50%; margin-right:20px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Items</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../signup page/registration.php">Sign Up</a></li>
              <li><a class="dropdown-item" href="../Login/login.php">Sign In</a></li>
            </ul>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> -->
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
      
      position: center;
    }
    .container {
      position: center;
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col md-3 cp;-12">
          <div class="card" style="width:300px">
            <img src="images/shoes_1.jpg" class="card-img-top" alt="Card image">
            <div class="card-body">
              <p class="card-text">Stylish and affordable shoes</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col md-3 cp;-12">
          <div class="card" style="width:300px">
            <img src="images/shoes_1.jpg" class="card-img-top" alt="Card image">
            <div class="card-body">
              <p class="card-text">Cute and trendy bags</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col md-3 cp;-12">
          <div class="card" style="width:300px">
            <img src="images/shoes_1.jpg" class="card-img-top" alt="Card image">
            <div class="card-body">
              <p class="card-text">Budget Laptops</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col md-3 cp;-12">
          <div class="card" style="width:300px">
            <img src="images/shoes_1.jpg" class="card-img-top" alt="Card image">
            <div class="card-body">
              <p class="card-text">Stylish and comfortable T-shirts</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>