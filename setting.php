<?php include_once 'partials/auth.php'; ?>


<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php'; ?>

<body>
    <!-- nave-->
    <?php include_once 'partials/nav.php'; ?>
    <!-- nave end-->

    <section class="profile">

        <h2 class="title">Setting</h2>

        

        <div class="profile-area">

        <?php

  $username = $_SESSION['username'];
  $sql = "SELECT * FROM users WHERE `username`='$username'";  
  $query=$conn->query($sql);

  if($query->num_rows>0){
    while($user = $query->fetch_assoc()){
        ?>
      <?php include_once 'partials/left-side-box.php'; ?>

        <div class="right_side-box">
        <?php include_once 'partials/profile-menu.php'; ?>

            <div class="info-area">
            <h3>Setting Page</h3>
           
            <div class="setting-cart">
            <h4>Change password</h4>
                <form action="">
                    <div class="form-group">
                        <label for="">Current Password</label>
                        <input type="password" name="c_pass" id="c_pass" class="form-input">

                    </div>

                    <div class="form-group">
                        <label for="">New Parrword</label>
                        <input type="password" name="n_pass" id="n_pass" class="form-input">

                    </div>
                    <button class="form-btn">Update</button>

                    
                </form>


                </div>

                <div class="setting-cart">
            <h4>Change Address</h4>
                <form action="">
                    <div class="form-group">
                        <label for="">Shipping Address</label>
                        <textarea class="form-text" name="shipping_address" id="" cols="30" rows="10">
                            <?php echo $user['shipping_address']; ?>
                        </textarea>

                    </div>

                    <div class="form-group">
                    <label for="">Billing Address</label>
                        <textarea class="form-text" name="billing_address" id="" cols="30" rows="10">
                        <?php echo $user['shipping_address']; ?>
                        </textarea>

                    </div>
                    <button class="form-btn">Update</button>

                    
                </form>

                
                </div>
            </div>

        </div>

<?php

    }
  }else{
    
}

?>

        
</div>
    </section>


    <!-- footer area start-->

    <?php include_once 'partials/footer.php';  ?>

</body>

</html>