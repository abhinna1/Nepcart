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
        $form = new FormDesign();
        $submit = new Submit();
        $input = new Input();
    ?>
</head>
<body style="background-image:url(../images/shop1.png); background-size: 150%;">
    <div class="container" style="background-color:transparent;">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm bg-light" style="margin-top:10px;">
            <a href="#">
                <img src="../images/Logo.png" alt="" style="height:40px; top:50%; bottom:50%; margin-right:20px;">
            </a>
            <!-- Links -->
            <ul class="nav navbar-nav navbar-right">
                
                <li class="nav-item">
                    <a href="#">
                        <span class="glyphicon glyphicon-home" style='padding-right:5px;'></span>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                    <span class="glyphicon glyphicon-th-list" style='padding-right:5px;'></span>Categories
                    </a>
                </li>
                <li style="height: 10%; width: 500px; margin-left:3rem; margin-top:auto; margin-bottom:auto;">
                    <input type="search" class="form-control glyphicon glyphicon-search" placeholder="&#xe003" style="outline:none;"/>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right" style='margin-left:5rem' >
                <li >
                    <a href="#">
                        <span class="glyphicon glyphicon-user" style='padding-right:5px;'></span>Sign Up
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-log-in" style='padding-right:5px;'></span>Login
                    </a>
                </li>
            </ul>
        </nav>

        <?php
        if($_SERVER['REQUEST_METHOD']!="POST"){
            
            $input->inputPage();
        
        }
        else{
            $submit->submitCard();
        }
    ?>
</body>
</html>




