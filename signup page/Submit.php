<?php
include '../Login/LoginPhp.php';
class submit extends LoginPhp{
    private $fName;
    private $lName;
    private $email;
    private $password;
    private $cfm_password;
    private $phone_code;
    private $phone;
    private $address;
    private $gender;
    private $conn;

    private $FormDesign;
    private $value;
    

    
    public function getData(){
        $this->fName=$_POST['fName'];
        $this->lName=$_POST['lName'];
        $this->email=$_POST['email'];
        $this->password=$_POST['password'];
        $this->cfm_password=$_POST['cfm_password'];
        $this->phone_code=$_POST['phone_code'];
        $this->phone=$_POST['phone'];
        $this->address=$_POST['address'];
        $this->gender=$_POST['gender'];
    }

    public function validation(){
        $this->getData();
        include_once('../config/Config.php');
        $config = Config::getObject();
        $this->conn = $config->connectDb();
        $adminname = $this->test_input($_POST["email"]);
        $stmt = "SELECT * FROM tbl_user where email='$this->email'";
        $user = $this->conn->query($stmt);

        require_once('FormInput.php');
        $form = new Input();
        if(mysqli_num_rows($user)>0){
            return "email already exists <br> <a href='registration.php'>Signup Again</a>";
        }
            elseif($this->password!=$this->cfm_password){
                return "Password's did not match <br> <a href='registration.php'>Signup Again</a>"; 

            }
            elseif(empty($this->fName)||empty($this->lName)||empty($this->email)||empty($this->password)||empty($this->cfm_password)||empty($this->phone_code)||empty($this->phone)||empty($this->address)||empty($this->gender)){
                return 'Please fill in all the required fields <br> <a href="registration.php">Signup Again</a>';
                
            }
            elseif(strlen($this->phone)<10){
                return "Enter valid phone number <br> <a href='registration.php'>Signup Again</a>";
                
            }
            else{
                require_once ('../config/Config.php');
                require_once ('../config/Operation.php');
                $db = new Config('localhost','Abhinna', '$abhi123', 'nepcart_db');
                $operation = new Operation($this->fName, $this->lName, $this->email, $this->password, $this->phone_code, $this->phone, $this->address, $this->gender);
                $operation -> insertDb($this->conn);
                return '<h2>Form Successfully Submited</h2>';
                
                $db -> close();
            }
        
    
    }

    public function submitCard(){
        require_once('FormDesign.php');
        $FormDesign = new FormDesign();
        $FormDesign->formCard($this->validation());
    }

}
?>
