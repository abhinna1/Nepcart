<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body  style="background-image:url(../images/shop1.png); background-size: 150%;"> 
    <?php
        include_once('../navbar.php');
        $navbar = new Navbar();
        ?>
        <div class="container" style="background-color:transparent;">
            <?php
                echo $navbar->displayNavBar();
            ?>
    </div>


</body>
</html>