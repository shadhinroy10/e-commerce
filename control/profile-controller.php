<?php

include_once '../partials/db.php';

if(isset($_POST['update'])){
    $imagename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $dir = '../assets/images/'.$imagename;

    $id = $_POST['id'];

 

    $sql = "UPDATE users SET  `image`= '$imagename' WHERE id= $id";
    $query = $conn->query($sql);

    if ($query == TRUE){
        move_uploaded_file($tempname, $dir);
        header("Location:../profile.php");
    }
}

?>