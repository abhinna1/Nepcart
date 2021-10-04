<?php
class Logout{
    public function logout(){
        session_start();
        $_SESSION = array();
        header("Location:../Login/login.php");
    }
}
(new Logout())->logout();
?>