<?php

$servername ="localhost";
$username = "root";
$password = "";
$tablename = "phpshop";

$conn = new mysqli($servername,$username,$password,$tablename);

if(!$conn){
    die("connection Error");
}

?>