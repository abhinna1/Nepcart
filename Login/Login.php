

<?php
// Import Files
    require('../navbar.php');
    $navbar = new Navbar();
?>

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


<body style="background-image:url(../images/shop1.png); background-size: 150%;">
    
    <div class="container" style="background-color:transparent;">
        <?php
        session_abort();
        echo $navbar->displayNavBar();
        
        if($_SERVER['REQUEST_METHOD'] != "POST"){
            require_once('LoginInput.php');
            $login = new LoginInput();
            $login->inputPage();
            
        }
        else{
            include_once('LoginPhp.php');
            $loginPhp = new LoginPhp();
            $loginPhp->login();
        }
    ?>

</body>
</html>