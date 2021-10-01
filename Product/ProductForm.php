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
<body style = "background-color:grey;">
    <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>
    <?php
        if(isset($_SESSION['id'])){
            if($_SERVER['REQUEST_METHOD']!="POST"){
                echo <<<HTML
                <form method="POST" enctype = "multipart/form-data">
                    
                    Product name: <input type="text" name = "name">
                    <br>
                    Price: <input type="text" name = "price">
                    <br>
                    Image: <input type="file" name = "upload">
                    <br>
                    Product Description: <input type="text" style = "height:100px;" name = "desc">
                    <br>
                    Category: <select name="category">
                        <option value="clothing">Clothing</option>
                        <option value="electronics">Electronics</option>
                    </select>
                    <br>
                    <button class = "btn btn-success">Add Product</button>
                </form>
                HTML;
            }
            else{
                $con = "";
                $var1 = rand(1111,9999);  // generate random number in $var1 variable
                $var2 = rand(1111,9999);  // generate random number in $var2 variable

                $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
                $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

                $fnm = $_FILES["upload"]["name"];    // get the image name in $fnm variable
                $dst = "./Product_Image/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
                $dst_db = "Product_Image/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

                move_uploaded_file($_FILES["upload"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
                
                try{
                    include_once('ProductOperation.php');
                    $operation = new ProductOperation($_POST['name'], $dst_db, $_POST['price'], $_POST['desc'], $_POST['category']);
                    $operation->insertProduct($con);
                }
                catch(Exception $e){
                    echo "<script>alert($e);</script>";
                }
               
                
            }
        }
        else{
            echo "login first" ;
            // header('Location: ../Login/Login.Php');
            
        }
      
    ?>

</body>
</html>