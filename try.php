<?php

$con = new mysqli('localhost', 'root', '$abhi123', 'nepcart');
$con->query("insert into users(fName, lName, email, password, phone_code, phone, address, gender)
values('lodu', 'modu', 'lodumodu@fodu.com', 'lodumodu123', '+977', '9874635214', 'bengal', 'female');
");
?>