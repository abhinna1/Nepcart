<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepcart</title>

    <!-- CSS connection -->
    
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- import form class -->
    <?php
        require_once('FormDesign.php');
        require_once('Submit.php');
        require_once('FormInput.php');
        require_once('../navbar.php'); 
        $form = new FormDesign();
        $submit = new Submit();
        $input = new Input();
        $navbar = new Navbar();

    ?>
</head>
<body style="background-image:url(../images/shop1.png); background-size: 150%;">
    <div class="container" style="background-color:transparent;">
        <?php
        echo $navbar->displayNavBar();
        
        if($_SERVER['REQUEST_METHOD']!="POST"){
            
            $input->inputPage();
        
        }
        else{
            
            $submit->submitCard();
        }
    ?>
</body>
</html>




