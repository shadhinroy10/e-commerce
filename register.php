<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php'; ?>

<body>
    <!-- nave-->
    <?php include_once 'partials/nav.php'; ?>
    <!-- nave end-->

    <section class="login">

        <h2 class="title">Registration</h2>

        <div class="login-form">
            <form action="control/authcontrol.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-input">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-input">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" class="form-input">
                </div>
                

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-input">
                </div>
                <button  name="register" class="form-btn">Login</button>
            </form>
            <p>Allready have an account? <a href="login.php"> Login Here</a> </p>
        </div>
    
    </section>


    <!-- footer area start-->

    <?php include_once 'partials/footer.php'  ?>

</body>

</html>