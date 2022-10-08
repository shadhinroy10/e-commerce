 <?php

 session_start();

include_once 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admins WHERE `username`='$username' AND `password`=
    '$password'";

    $query = $conn->query($sql);

    if($query->num_rows > 0){
         $_SESSION['username']= $username;
         header("Location:../index.php");
    }else{
        header("Location:../login.php");
    }
}



?>