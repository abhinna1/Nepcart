<?php
class LoginPhp{
    function test_input($data) {
      
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function login(){
        include_once('../config/Config.php');
        $email = $_POST["email"];
        $password = $_POST["password"];
        $config = new Config("localhost", "Abhinna", '$abhi123', 'nepcart_db');
        $conn = $config->connectDb();
        $stmt = "SELECT * FROM tbl_user where email='$email' and pasword = '$password'";
        $user = $conn->query($stmt);
        // while ($row = $user->fetch_assoc()) {
        //     // echo json_encode($row);
            if(mysqli_num_rows($user)>0){
                session_start();
                while ($row = $user->fetch_assoc()) {
                    $_SESSION['id'] = $row['uID'];
                    $_SESSION['name'] = $row['fName'];
                    $_SESSION['id'] = $row['uID'];
                    echo "<script>alert($this->getSession())</script>";

                }
                header('Location: ../HomePage/home.php');

            }
            else{
                echo '<h3 style="color:Red;">Email not registered!</h3>'.'<br><a href="Login.php">Back to login page.</a>';
            }
            
    }
    public function getSession(){
        return $_SESSION['id'];
    }
}

?>
