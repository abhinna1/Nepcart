<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Connect CSS StyleSheet -->
    <link rel="stylesheet" href="register.css">
    <!-- Connect JavaScript file -->
    <script src="register.js"></script>

    <?php
        include '../dbSetup.php';
        $conn = new mysqli($hostname, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            echo '(<script>alert("Error in connection);</script>)';
        }
        // echo "Connected successfully";
        else{
            echo '<script type="text/JavaScript"> 
            alert("connected to database");
            </script>';
        }
    ?>
;
    <title> NepCart </title>
</head>
<body>
     <!-- Menu Bar -->
   
     <div class="menubar">
        <a href="Home.html" id=signup>
            <img src="../images/Logo.png" alt="logo" class="logoimg"></a>   
    <input type="text" id="searchbar">
    <a href="#" class="menubtn"><b>About Us</b></a>
    <a href="#" class="menubtn"><b>Categories</b></a>
    <a href="#" class="menubtn"><b>Home</b></a>
    </div>
    <!-- Sign Up Box -->
    <div class="SignUp">
        <!-- Name Label and Entry -->
        <div class=" UserName">
            <label for="UserName" class="namelbl"><b>UserName</b></label>
            <br>
            <input type="text" placeholder="Enter your fullname" name="UserName" required class="nament">
        </div>

        <!-- Password Label and Entry -->
        <div class ="psw">
            <label for="psw" class="pswlbl"><b>Password</b></label>
            <br>
            <input type="text" placeholder="Enter password" id="pswent">
        </div>
         
        <div class="confirm">
            <label for="confirm" class="relbl"><b>Confirm Password</b></label>
            <br>
        <input type="text" placeholder="Re-enter password" id="conpsw">
        </div>
        
        <!-- Email Label and Entry-->
        <div class="eml">
            <label for="Email" class="emllbl"><b>E-mail</b></label>
            <br>
            <input type = "email" placeholder="Enter your email" name="E-mail" required class="emlent">
        </div>

        <!-- Address Label and Entry-->
        <div class="address">
            <label for="Address" class="addlbl"><b>Address</b></label>
            <br>
            <input type = "Address" placeholder="Enter your address" name="address" required class="addent">
        </div>

        <!-- Phone Number Label and Entry-->
        <div class="phone">
            <label for="Phone No." class="phnlbl"><b>Phone No.</b></label>
            <br>
            <select>
                <option>977</option>
                <option>880</option>
                <option>91</option>
                <option>66</option>
            </select>
            <input type="Phone" placeholder="9841******" name="Phone No." required class="phnent">
        </div>

        <!-- Gender Label and Entry-->
        <div class="gender">
            <label for="Gender" class="gndlbl"><b>Gender</b></label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="Gender" id="male">
            &nbsp;
            <span id="male"><b>Male</b></span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="Gender" id="female">
            &nbsp;
            <span id="female"><b>Female</b></span>
        </div>
        <button class="signupbtn" onclick="signup()">Sign Up</button>
</body>
</html>