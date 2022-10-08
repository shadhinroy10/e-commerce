<?php

$servername = "localhost";
$username = "root";
$password = "";
$datatable = "phpshop";

$conn= new mysqli($servername,$username,$password,$datatable);

if(!$conn){
    die("error");

}

?>