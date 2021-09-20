<?php
class Navbar{
    public function displayNavbar(){
        include_once('LoggedNavbar.php');
        include_once('Outnavbar.php');
        $LoggedNavbar = new LoggedNavbar();
        $Outnavbar = new Outnavbar();
        
        session_start();
        if(isset($_SESSION['id'])){
            return $LoggedNavbar->displayNavbar();
            echo "<script>alert($id)</script>";
        }
        else{
            return $Outnavbar->displayNavbar();
        }
    }


    }

?>