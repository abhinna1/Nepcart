<?php
/*
thisfile contains database conf assuming running mysql using "root" and "password
*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');
// try connecting to datatbase
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check the connection
if($conn==false){
    dir('Error:cannot connect');
}
?>