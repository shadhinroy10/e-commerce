<?php

session_start();

if(isset($_SESSION['username'])){
    header("Location: profile.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php'; ?>

<body>
    <!-- nave-->
    <?php include_once 'partials/nav.php'; ?>
    <!-- nave end-->

    <section class="login">

        <h2 class="title">Login</h2>

        <div class="login-form">
        <form action="control/authcontrol.php" method="post">
            <?php
                if(isset($_GET['page'])=='index'){
                    ?>
                    <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
                    <?php
                }
            ?>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" class="form-input">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-input">
                </div>
                <button name="login" class="form-btn">Login</button>
            </form>
            <p>Don't have any Account? <a href="register.php"> Register Here</a> </p>
        </div>
    
    </section>


    <!-- footer area start-->

    <?php include_once 'partials/footer.php'  ?>

</body>

</html>