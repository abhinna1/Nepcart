<?php
class submit{
    private $fName;
    private $lName;
    private $email;
    private $password;
    private $cfm_password;
    private $phone_code;
    private $phone;
    private $address;
    private $gender;

    private $FormDesign;

    
    public function getData(){
        $this->fname=$_POST['fName'];
        $this->lname=$_POST['lName'];
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
        if($this->password!=$this->cfm_password){
            return "Password's did not match";
        }
        elseif(empty($this->fname)||empty($this->lname)||empty($this->phone)){
            return 'Please fill in all the required fields';
        }
        else{
            return '<h2>Form Successfully Submited</h2>';
        }
        
    }
    public function submitCard(){
        require_once('FormDesign.php');
        $FormDesign = new FormDesign();
        $FormDesign->formCard($this->validation());
    }

}
?>