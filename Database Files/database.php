<?php

class Db{
    private $conn;
    
    function connectDb(){
        include 'dbSetup.php';
        $conn = new mysqli($hostname, $username, $password);
        if ($conn->connect_error) {
            echo '(<script>alert("Error in connection");</script>)';
        }
        else{
            echo '<script type="text/JavaScript"> 
            alert("connected to database");
            </script>';
        }
    }


}

?>