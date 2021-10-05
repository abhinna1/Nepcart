
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
    <!-- <link rel="stylesheet" href="../bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="nicepage.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="Page-2.css" media="screen"> -->
    <!-- <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script> -->
    <!-- <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script> -->
    <!-- <link id="u-theme-google-font" rel="stylesheet"href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"> -->

<!-- 
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        } -->
    <!-- </script> -->
    <style type='text/css'>
    br{
        margin : 5px;
        padding: 5px;
    }
    body{
        
        background-position: center;
        background-size: cover;
        font-family: sans-serif;
        
        margin-top: px;
    }
    
    input{
        color:black;
    }
    option{
        color:black;
    }
    </style>
    

</head>
<body style="background-image:url(../images/shop1.png); background-size: 150%;">
    <div class="container" style="background-color:transparent;">
        <?php include_once ('../navbar.php');
        $navbar = new Navbar;
        echo $navbar->displayNavbar();
        ?>
    </div>
    <?php
            if($_SERVER['REQUEST_METHOD']!="POST"){
                // session_start();
                echo <<<HTML
                                    <div class= "regform" style="width: 800px;background-color: rgb(0,0,0,0.9);margin: auto;color: #ffffff;padding: 10px 10px 30px 10px;text-align: center;border-radius: 15px 15px 0px 0px;"><h1> Product details </h1></div>
                                    
                                    <div class="main" style="width: 800px;background-color: rgb(0,0,0,0.9);margin: auto;color: #ffffff;padding: 10px 0px 10px 0px;text-align: center;border-radius: 0px 0px 15px 15px;">
                                    <form method="POST" style = "padding: 10px;"enctype = "multipart/form-data">
                                            
                                            
                                            <div class= "ProductName" style="position: relative;/* margin : auto; */top: -37px;line-height: 30px;border-radius: 5px;padding:0 20PX ;">
                                            
                                            Product name: <input type="text"  name = "name" style="color:black;">
                                            </div>
                                            <div class = "Pprice" style = "position: relative ;top: -37px;left: 26px;line-height: 30px;border-radius: 5px;padding:10px 20PX ;">
                                            
                                            Price: <input type="text" name = "price" style="color:black;">
                                            
                                            </div>

                                            <div class= "Pfile" style="position: relative ;top: -37px;right: -100px;">
                                            Image: <input type="file" name = "upload" style="color:black; display:inline-block;">

                                            </div>
                                            <div class = "pd" style="position: relative ;top: -37px;left: -20px;line-height: 30px;border-radius: 5px;padding:10px 20PX ;">
                                            Product Description: <input type="text" style = "height:100px; color:black;" name = "desc">
                                            </div>

                                            <div class= "pc" style="position: relative ;top: -10px;left:30px;line-height: 30px;border-radius: 5px;padding:10px 20PX ;color: white;">
                                            Category: <select name="category" style ="color:black;">
                                                <option value="clothing" style ="color:black;">Clothing</option>
                                                <option value="electronics" style ="color:black;">Electronics</option>
                                            </select>
                                            </div>
                                            <button class = "btn btn-success">Add Product</button>
                                            </div>    
                                        

                                    </div>













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
                    // header("Location:SelfProduct.php");
                    echo '<script>location.replace("http://localhost/nepcart/Product/SelfProduct.php");</script>';
                }
                catch(Exception $e){
                    echo "<script>alert($e);</script>";
                }
               
                
            }
        
        
      
    ?>

</body>

</html>