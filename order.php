

<?php include_once 'partials/auth.php'; ?>


<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php'; ?>

<body>
    <!-- nave-->
    <?php include_once 'partials/nav.php'; ?>
    <!-- nave end-->

    <section class="profile">

        <h2 class="title">Order</h2>

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
                <h3>Order Page</h3>
                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-input">

                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-input">

                    </div>
                    <button class="form-btn">Update</button>
                </form>
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