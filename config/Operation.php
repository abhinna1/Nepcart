<?php
class Operation{
    private $fName;
    private $lName;
    private $email;
    private $password;
    private $phone_code;
    private $phone;
    private $address;
    private $gender;
    function __construct($fName, $lName, $email, $password, $phone_code, $phone, $address, $gender){
        $this->fName = $fName;
        $this->lName = $lName;
        $this->email = $email;
        $this->password = $password;
        $this->phone_code = $phone_code;
        $this->phone = $phone;
        $this->address = $address;
        $this->gender = $gender;
    }

    public function insertDb($conn){
        require_once('../signup page/Submit.php');
        $query = "insert into tbl_user(fName, lName, email, pasword, phone_code, phone, address, gender) values('$this->fName', '$this->lName', '$this->email', '$this->password', '$this->phone_code','$this->phone', '$this->address', '$this->gender');";
        $conn -> query($query);
    }

}

?>