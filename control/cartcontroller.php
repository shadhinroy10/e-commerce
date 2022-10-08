<?PHP

include_once '../partials/db.php';

if(isset($_POST['add_cart'])){
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];


$check_sql = "SELECT * FROM carts WHERE user_id = $user_id AND product_id = $product_id";
$check_query = $conn->query($check_sql);

if($check_query->num_rows >0){

    while($check = $check_query->fetch_assoc()){
        $quentity = $check ['quentity'] + 1;
        $update_sql = "UPDATE carts SET quentity = $quentity WHERE user_id = $user_id AND product_id = $product_id";
        $update_query = $conn->query($update_sql);
    
        if($update_query == TRUE){
            header("Location:../cart.php");
        }
       


    }
   
}else{

    $sql = "INSERT INTO carts(`user_id`, `product_id`) VALUES ('$user_id', '$product_id')";
    $query = $conn->query($sql);

    if ($query == TRUE){
        header("Location:../cart.php");
    }else{
        header("Location:../index.php");
    }

}


}

?>