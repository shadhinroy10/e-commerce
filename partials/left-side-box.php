<div class="left_side-box">
            <div class="profile-image">
                <?php if($user['image']==null){
                    ?>

<img src="assets/images/default.png" alt="image" id="profile_image">

                    <?php

                    

                }else{
                    ?>
<img src="assets/images/<?php echo $user['image']; ?>" alt="image"id="profile_image">
                    <?php

                } ?>

                

               
                
            </div>
            <small style="color:gray">Please insert 300 X 300 Size image</small>

            <form action="control/profile-controller.php" class="change-image" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id" id="id" value="<?php echo $user['id']; ?>">
                    <div class="form-group">
                    <input type="file" class="form-input file-input" name="image" onchange="loadFile(event)">
                    </div>
                    <button class="form-btn" name="update">Save</button>
                    
                </form>

            <div class="profile-info">

            <h3><?php echo $user ['name']; ?></h3>
            <p> Email: <?php echo $user ['email']; ?></p>
            <p>payment Address: </p>
            <p><?php echo $user ['shipping_address']; ?></p>

            <p>Billing Address: </p>
            <p><?php echo $user ['billing_address']; ?></p>

            </div>

        </div>