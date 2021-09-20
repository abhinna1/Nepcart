<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class LoggedNavbar{
        private $logout;
        public function displayNavBar(){
            include_once 'Login/LoginPhp.php';
            $loginPhp = new LoginPhp;
            
            // session_start();
            $name = $_SESSION['name'];
            return <<<HTML
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
                            <a href=#>                                                         
                                <span class="glyphicon glyphicon-user" style='padding-right:5px;'></span>$name 
                            </a>
                        </li>
                        <li>
                            <a href="../Login/logout.php">
                                <span class="glyphicon glyphicon-log-in" style='padding-right:5px;'></span>Log Out
                            </a>
                        </li>
                    </ul>
                </nav>
                
                HTML;
        }
    }

?>
  
    </body>
</html>