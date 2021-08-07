<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Load CSS file -->

    <?php
    $servername="localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        echo '<script type="text/JavaScript"> 
     console.log("Failed to connect to database!");
     </script>';
    }
    // echo "Connected successfully";
    else{
        echo '<script type="text/JavaScript"> 
        console.log("Connected to database");
        </script>';
    }
;
  ?>

     <!-- Connect CSS StyleSheet -->
     <link rel="stylesheet" href="css files\main.css">
     <!-- Connect Javascript File -->
     <script src="main.js"></script>
    
    <title>NepCart</title>
</head>

<body>

    <!-- Menu Bar -->
   
    <div class="menubar">
            <a href="main.php" id=logoh>
                <img src="Logo.png" alt="logo" href= "Homepage.php"class="logoimg"></a>   
        <input type="text" id="searchbar">
        <a href="about.html" class="menubtn"><b>About Us</b></a>
        <a href="categories.html" class="menubtn"><b>Categories</b></a>
        <a href="Homepage.php" class="menubtn"><b>Home</b></a>
    </div>

    <!-- Login Box -->
    <div class="login">
        <!-- Email Label and Entry -->
        <div class="eml">
            <label for="email" class="emllbl"><b>E-mail</b></label>
            <br>
            <input type="email" placeholer="Enter Email" name="E=mail" required class="emlent">
        </div>

        <!-- Password Label and Entry -->
        <div class ="psw">
            <label for="psw" class="pswlbl"><b>Password</b></label>
            <br>
            <input type="password" id="pswent">
            <br>

            <input type="checkbox" onclick="showPw()"><b style="font-size:10px;">Show Password</b>
            
        </div>
        <button class="loginbtn" onclick=login()>Login</button>
        <button class="loginbtn" onclick=login()>Sign Up</button>

</body>

<footer>
   
</footer>
</html>