
<?php
    class EditUI{
        private $fname;
        private $lname;
        private $email;
        private $addres;
        private $phone;
        private $address;

        public function getData(){
            $this->fname = $_SESSION['fname'];
            $this->lname = $_SESSION['lname'];
            $this->email = $_SESSION['email'];
            $this->address = $_SESSION['address'];
            $this->phone = $_SESSION['phone'];
        }

        public function getForm(){
            return <<<HTML
                    <form action="POST">
                        <h2 style="margin-bottom: 20px; ">User Info</h2>
                        <h5 style="display:inline-block;">First Name:</h5>
                        <input type="text" value = "$this->fname" name = "fName"class="form-control" style="width:60%; margin-left: 10px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Last Name:</h5>
                        <input type="text" value = "$this->lname" name = "lName"class="form-control" style="width:60%; margin-left: 10px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Email:</h5>
                        <input type="email" value = "$this->email" name = "email"class="form-control" style="width:60%; margin-left: 42px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Address:</h5>
                        <input type="address" value = "$this->address" name = "address"class="form-control" style="width:60%; margin-left: 25px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Phone:</h5>
                        <input type="text" value = "$this->phone" name = "phone"class="form-control" style="width:60%; margin-left: 35px; margin-top: 20px;  margin-bottom: 20px; display: inline-block">
                        <br>
                        <input type="submit" class = "btn btn-success">
                        <!-- <button class="btn btn-success">Update</button> -->
                    </form>
            HTML;
        }
        
        public function submit(){
            return <<<HTML
                <h3>YESSS</h3>
            HTML;
        }
    }
?>