
<?php
    class Form{ 
        private $username;
        private $email;
        private $password;
        private $cfm_password;
        private $phone;
        private $phone_code;
        private $address;
        private $gender;
        function __construct(){ //retrieve form input's
            $this->username = $_POST["username"];
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];
            $this->cfm_password = $_POST["cfm_password"];
            $this->phone_code = $_POST["phone_code"];
            $this->phone = $this->phone_code. ' '. $_POST["phone"];
            $this->address = $_POST["address"];
            $this->gender = $_POST["gender"];

            // Calling data validation function inside the constructor. 
        
        }
        function formValidation(){ 
            if ($this->password != $this->cfm_password){
                echo "<script> alert('password and confirm password's did not match')</script>";
            }
            elseif(empty($this->username)){
                echo "<script> alert('Please enter a valid username.')</script>";
            }
            elseif(empty($_POST["phone"])){
                echo "<script> alert('Please enter a valid phone number')</alert>";
            }
            else{
                echo $this->username.'<br>'.$this->password.
                '<br>'.$this->cfm_password.'<br>'.$this->phone.
                '<br>'.$this->address.'<br>'.$this->gender.'<br>';
                echo '<script> alert("Got data!") </script>';
            }
        
        }
    }

?>