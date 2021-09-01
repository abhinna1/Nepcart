<?php
    class Navbar{
        
        public function displayNavBar(){
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
                            <a href="../signup page/registration.php">
                                <span class="glyphicon glyphicon-user" style='padding-right:5px;'></span>Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="../Login/Login.php">
                                <span class="glyphicon glyphicon-log-in" style='padding-right:5px;'></span>Login
                            </a>
                        </li>
                    </ul>
                </nav>
                
                HTML;
        }
    }
    

?>