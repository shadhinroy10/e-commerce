<?php

session_start();

include_once '../partials/db.php';

if(isset($_POST['register'])){
    $name= $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);


// $error = '';
//     if (empty($name)) {
//         $error = "Please Insert name";
//     }

//     if (empty($email)) {
//         $error = "Please Insert email";
//     }

//     if (empty($username)) {
//         $error = "Please Insert username";
//     }

//     if (empty($password)) {
//         $error = "Please Insert password";
//     }

    // if ($error == '') {
        $sql = "INSERT INTO users (`name`,`email`,`username`,`password`) VALUES ('$name', '$email', '$username','$password')";

        $query = $conn->query($sql);

            if($query == TRUE){
                $_SESSION['username']= $username;
                header("Location:../profile.php");
            }else{
                header("Location:../register.php");
            }
        }

        if(isset($_POST['login'])){
             $username = $_POST['username'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM users WHERE `username`='$username' AND `password`='$password'";

            $query = $conn->query($sql);

            if($query->num_rows>0){
                while($user=$query->fetch_assoc()){
                    $_SESSION['username']= $user['username'];
                    $_SESSION['user_id']= $user['id'];

                    if(isset($_POST['page'])=='index'){
                        header("Location:../index.php");
                    }else{
                        header("Location:../profile.php");
                    }  

                }
               
            }else{
                header("Location:../login.php");
            }
        
        }


?>