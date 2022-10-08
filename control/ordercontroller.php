<?php

session_start();

include_once '../partials/db.php';

$user_id= $_SESSION['user_id'];

$sql = "SELECT * FROM carts WHERE user_id = $user_id";

$query = $conn->query($sql);

if($query->num_rows> 0){

    $order_sql= "INSERT INTO orders('user_id') Values ('$user_id')";
    $order_query = $conn->query($order_sql);

    if($order_query == TRUE){
        $order_id = $conn->insert_id;
        echo $order_id;
    }

    // while($carts=$query->fetch_assoc()){
    //     //add to order table

    // }
// }else{
//     header("Location:../cart.php");
}



?>