<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Connect CSS StyleSheet -->
    <link rel="stylesheet" href="register.css">
    <!-- Connect JavaScript file -->
    <script src="register.js"></script>

    <?php
        include '../Database Files/database.php';
        
        include 'Form.php';
        
    ?>

    <title> NepCart </title>
</head>

<body>
     <!-- Menu Bar -->
     <div class="menubar">
         <!-- Logo -->
        <a href="../LoginPage/Login.php" id=signup>
            <img src="../images/Logo.png" alt="logo" class="logoimg"></a>   
    <!-- Search Bar -->
    <input type="text" id="searchbar">
    <!-- Menu buttons -->
    <a href="#" class="menubtn"><b>About Us</b></a>
    <a href="#" class="menubtn"><b>Categories</b></a>
    <a href="#" class="menubtn"><b>Home</b></a>
    </div>

    <!-- Registration Form -->
    <form action="" method = "POST">
        <?php
        if($_SERVER["REQUEST_METHOD"]!="POST"){?> <!-- If Form is submitted -->

            <!-- Sign Up Box -->
            <div class="SignUp">

                <!-- user name input -->
                <div class=" UserName">
                    <b>User Name</b>
                    <br>
                    <input type="text" name="username" required class="nament">
                </div>
                
                <!-- email input -->
                <div class="eml">
                    <b>E-mail</b>
                    <br>
                    <input type = "email" name="email" required class="emlent">
                </div>

                <!-- Password input -->
                <div class ="psw">
                    <b>Pasword</b>
                    <br>
                    <input type="password" name="password" id="pswent">

                    <!-- Confirm password input -->
                    <div class="confirm">
                    <b>Confirm Pasword</b>
                    <br>
                    <input type="password" name="cfm_password"id="conpsw">
                </div>
                </div>

                <!-- Phone number input -->
                <div class="phone">
                    <b>Phone Number</b>
                    <br>
                    <select name="phone_code">
                        <option>Nepal (+977)</option>
                        <option>India (+91)</option>
                    </select>
                    <input type="Phone" name="phone" class="phnent">
                </div>

                <!-- Address input-->
                <div class="address">
                    <b>Address</b>    
                    <br>
                    <input type = "Address" name="address" required class="addent">
                </div>

                <!-- Gender input -->
                <div class="gender">
                    <b>Gender</b>
                    <br>
                    <input type="radio" name="gender" value="Male" id="Male">
                        <span><b>Male</b></span>
                    <input type="radio" name="gender" value="Female" id="Female">
                        <span><b>Female</b></span>
                </div>

                <!-- Buttons -->
                <div>
                    <input type="submit">
                    </form>
                    <button class="signupbtn" onclick="location.href='../LoginPage/Login.php'">Log into an existing account</button>

                </div>
            </div>
        <?php
        }
        else{
            $db = new Db();
            $form = new Form();
            $form->formValidation();
        }
        ?>
</body>
</html>