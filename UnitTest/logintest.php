<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class logintest extends TestCase
{
    private $logged;
    public function login($email, $password){
        include("C:/xampp/htdocs/Nepcart/config/Config.php");
        $config = Config::getObject();
        $conn = $config->connectDb();
        $stmt = "SELECT * FROM tbl_user where email='$email' and pasword = '$password'";
        $user = $conn->query($stmt);
        $logged = false;
        if(mysqli_num_rows($user)>0){
            $this->logged = true;
        }
        else {
            $this->logged = false;
        }
        return $logged;
        $conn->close();
    }
    

    public function testLogin(){
        $this->login("manandharabhinna@gmail.com", "123");
        $this->assertEquals(true, $this->logged);
    }
}