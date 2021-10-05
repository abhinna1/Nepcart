
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-image:url(../images/shop1.png); background-size: 150%;">
        <?php
        include_once('EditUI.php');
        
        
        $edit = new EditUI();

        if($_SERVER['REQUEST_METHOD']!="POST"){
            include_once ('../navbar.php');
            $navbar = new Navbar;

        ?>
            <div class="container" style="background-color:transparent;">
            <?php echo $navbar->displayNavbar(); ?>
            </div>
            <div class="card" style="width:40%; margin-right:50%; margin-top:5%; margin-bottom:50%; background-color:#ecd9a7; margin-left:30%">
                <div class="card-header">
                    <?php
                    // $edit->getData();
                    $fname = $_SESSION['fname'];
                    $lname = $_SESSION['lname'];
                    $email = $_SESSION['email'];
                    $address = $_SESSION['address'];
                    $phone = $_SESSION['phone'];
                    echo<<<HTML
                    <form method="post">
                        <h2 style="margin-bottom: 20px; ">User Info</h2>
                        <h5 style="display:inline-block;">First Name:</h5>
                        <input type="text" value = "$fname" name = "fName"class="form-control" style="width:60%; margin-left: 10px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Last Name:</h5>
                        <input type="text" value = "$lname" name = "lName"class="form-control" style="width:60%; margin-left: 10px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Email:</h5>
                        <input type="email" value = "$email" name = "email"class="form-control" style="width:60%; margin-left: 42px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Address:</h5>
                        <input type="address" value = "$address" name = "address"class="form-control" style="width:60%; margin-left: 25px; margin-top: 20px; display: inline-block">
                        <br>
                        <h5 style="display:inline-block;">Phone:</h5>
                        <input type="text" value = "$phone" name = "phone"class="form-control" style="width:60%; margin-left: 35px; margin-top: 20px;  margin-bottom: 20px; display: inline-block">
                        <br>
                        <input type="submit" class = "btn btn-success" value="Update Account">
                    </form>
                    HTML;
                ?>
            </div>
        </div>
        <?php
        }
        else{
            echo $edit->submit();
            
        }
        ?>

</body>
</html>