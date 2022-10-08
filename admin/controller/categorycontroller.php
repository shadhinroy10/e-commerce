<?php

include_once 'db.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $imagename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $dir = '../upload/' . $imagename;


    $error = '';
    if (empty($name)) {
        $error = "Please Insert name";
    }

    if (empty($imagename)) {
        $error = "Please Insert image";
    }

    if ($error == '') {
        $sql = "INSERT INTO categories (`name`,`image`) VALUES ('$name', '$imagename')";

        $query = $conn->query($sql);

        if ($query == TRUE) {
            move_uploaded_file($tempname, $dir);

            header("Location:../categories.php");
        }
    } else {
        header("Location:../categories.php?error=" . $error);
    }
}

//update or edit

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $imagename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $dir = '../upload/' . $imagename;

    $error = '';
    if (empty($name)) {
        $error = "Please Insert name";
    }

    if (empty($imagename)) {
        $error = "Please Insert image";
    }

    if ($error == '') {

        $sql = "UPDATE categories SET `name`='$name', `image` = '$imagename' WHERE id= $id";

        $query = $conn->query($sql);

        if ($query == TRUE) {
            move_uploaded_file($tempname, $dir);

            header("Location:../categories.php");
        } else {
            header("Location:../category-edit.php?id=" . $id);
        }
    } else {
        header("Location:../category-edit.php?id=" . $id . "&&error=" . $error);
    }
}

//delete

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM categories WHERE ID=$id";
    $query = $conn->query($sql);

    if ($query == TRUE) {
        header("Location: ../categories.php");
    } else {
        header("Location: ../student.php");
    }
}
