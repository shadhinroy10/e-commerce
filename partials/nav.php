<div class="nav">

    <div class="logo">
        <a href="index.php"><img src="assets/images/logo.png" alt=""></a> 

    </div>

    <div class="manu">
        <ul>
            <li class="manu-item">
                <a href="index.php">Home</a>
            </li>
            <li class="manu-item">
                <a href="#about">About Us</a>
            </li>
            <li class="manu-item">
                <a href="#catagory">Catagory</a>

            </li>
            <!-- <i class="fa-solid fa-caret-down"></i> --> 
                <!-- <ul class="sub-manu">
                    <li><a href="">Computer</a>
                    <li><a href="">Processor</a>
                    <li><a href="">Graphics Card</a>
                    <li><a href="">Motherboard</a>
                    <li><a href="">Ram</a>
                </li>
                </ul> --> 
            <li class="manu-item">
                <a href="#shop">Products</a>
            </li>
            
            <li class="manu-item">
                <a href="">Contact Us</a>
            </li>
            
        </ul>

    </div>

    <div class="login-button">
        
    <?php
       
       if(isset($_SESSION['username'])){
        ?>
           <a href="profile.php">Profile</a>
        <a href="control/logout.php">Logout</a>

            <?php
       }else{

        ?>
        <a href="login.php">Login</a>

        <?php

       
       }
        
    ?>
           
        
        <a href="javascript:void(0)" class="manu-icon"><i class="fa-solid fa-bars"></i></a> 
    </div>

</div>