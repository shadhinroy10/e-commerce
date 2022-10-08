<?php

include_once 'db.php';

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $imagename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $dir = '../upload/'.$imagename;
    $price = $_POST['price'];
    $actual_price = $_POST['actual_price'];
    $category_id = $_POST['category_id'];



        $error='';
    if(empty($name)){
        $error ="Please Insert name";
    }

    if(empty($imagename)){
        $error = "Please Insert image";
    }

 

    if($error==''){
        $sql = "INSERT INTO products (`name`,`image`,`price`,`actual_price`,`category_id`) VALUES ('$name', '$imagename','$price','$actual_price','$category_id')";

    $query = $conn->query($sql);

    if($query == TRUE){
        move_uploaded_file($tempname,$dir);

        header("Location:../product.php");
    }

    }else{
        header("Location:../product.php?error=".$error);
    }

    

   
}

//update or edit

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $imagename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $dir = '../upload/'.$imagename;
    $price = $_POST['price'];
    $actual_price = $_POST['actual_price'];
    
    $category_id = $_POST['category_id'];



        $error='';
    if(empty($name)){
        $error ="Please Insert name";
    }

    if ($error == '') {

        $sql = "UPDATE products SET `name`='$name', `image` = '$imagename',`price`='$price',`actual_price`='$actual_price',`category_id`='$category_id' WHERE id= $id";

        $query = $conn->query($sql);

        if ($query == TRUE) {
            move_uploaded_file($tempname, $dir);

            header("Location:../product.php");
        } else {
            header("Location:../product.php?id=" . $id);
        }
    } else {
        header("Location:../product-edit.php?id=" . $id . "&&error=" . $error);
    }
}

//delete

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $sql = "DELETE FROM products WHERE ID=$id";
    $query = $conn->query($sql);

    if($query == TRUE){
        header("Location: ../product.php");
    }else{
            header("Location: ../product.php");
    }
}


?>