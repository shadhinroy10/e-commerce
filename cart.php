<?php include_once 'partials/auth.php'; ?>


<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php'; ?>

<body>
    <!-- nave-->
    <?php include_once 'partials/nav.php'; ?>
    <!-- nave end-->

    <section class="profile">

        <h2 class="title">Cart</h2>

        <div class="cart">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Quentity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    

                <?php
                $count= 1;
                $user_id=$_SESSION['user_id'];
                $sql = "SELECT * FROM carts WHERE user_id= $user_id";
                $query = $conn->query($sql);

                if($query->num_rows>0){
                    while($carts=$query->fetch_assoc()){
                        ?>
                         <tr>
                            <?php
                                $product_id = $carts['product_id'];
                                $product_sql = "SELECT * FROM products WHERE id=$product_id";
                                $product_query = $conn->query($product_sql);
                                if($product_query->num_rows>0){
                                    while($product=$product_query->fetch_assoc()){
                                        ?>
                                            <td><?php echo $count++; ?></td>
                                            <td> <?php echo $product['name']; ?> </td>
                                            <td>
                                                <img src="admin/upload/<?php echo $product['image']; ?>" style= "width:100px;" alt="">
                                            </td>
                                            <td> <?php echo $carts ['quentity'];?></td>
                                            <td>
                                                <a href="" class="table-btn edit-btn">Edit</a>
                                                <a href="" class="table-btn delete-btn">Delete</a>
                                            </td>
                                        <?php
                                    }
                                }

                            ?>
                        
                    </tr>

                        <?php
                    }
                }else{
                    ?>
<tr><td colspan="5">No Item Found</td></tr>
                    <?php 
                }
                ?>
                   
                </tbody>

            </table>

            <a href="control/ordercontroller.php" class="button" style="margin-top:10px; background-color:orangered; border-color: orange; ">Place Order</a>
        </div>
    </section>


    <!-- footer area start-->

    <?php include_once 'partials/footer.php';  ?>

</body>

</html>