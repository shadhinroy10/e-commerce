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

    <!-- Banner section start-->
    <?php include_once 'partials/banner.php'; ?>

    <!-- Banner section end-->

    <!-- about us start -->
    <section class="about" id="about">
        <div class="about-area">
            <div class="image">
                <img src="assets/images/content/la.webp" alt="">

            </div>
            <div class="text">
                <h2> About Us </h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. </p>

                <a href="" class="button">Read More</a>

            </div>
        </div>

    </section>

    <!-- about us end -->

    <!-- category area start -->
    <section id="catagory">
        <div class="category" >
            <h2 class="title">Category</h2>
            <div class="category-area">

                <?php
                $count = 1;
                $sql = "SELECT * FROM categories ORDER BY `name`";
                $query = $conn->query($sql);

                if ($query->num_rows > 0) {
                    while ($categories = $query->fetch_assoc()) {
                ?>
                        <div class="item">
                            <img src="admin/upload/<?php echo $categories['image']; ?>" alt="">
                            <a href="">
                                <h4><?php echo $categories['name']; ?></h4>
                            </a>

                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </section>

    <!-- category area end -->

    <!--product section start-->
    <section id="shop">
        <div class="product">
            <h2 class="title">Product</h2>
            <div class="product-area">
            <?php
                $count = 1;



        $sql = "SELECT * FROM products ORDER BY `name` ASC";
                $query = $conn->query($sql);

                if ($query->num_rows > 0) {
                    while ($products = $query->fetch_assoc()) {
                ?>
                        <div class="item">
                            <img src="admin/upload/<?php echo $products['image']; ?>" alt="">
                            <a href="#">
                                <h4><?php echo $products['name']; ?></h4>
                            </a>
                            <div class="price">
                        <p>৳ <?php echo $products ['price']; ?> <span>৳ <?php echo $products ['actual_price']; ?></span> </p>

                        <?php  
                         if(isset($_SESSION['username'])){

                            ?>
                             <form action="control/cartcontroller.php" method="POST">
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $products['id']; ?>">
                            <button type="submit" name="add_cart" class="card-button form-btn"><i class="fa-solid fa-cart-arrow-down"> </i> Shop Now</button>
                        </form>

                            <?php

                         }else{
                            ?>
                            <a href="login.php?page=index" class="card-button form-btn"><i class="fa-solid fa-cart-arrow-down"> </i> Shop Now</button></a>

                            <?php
                             
                         }
                        
                        ?>

                       
                        
                    </div>
                        </div>
                       
                <?php
                    }
                }
                ?>

            </div>

        </div>
    </section>

    <!--product section end-->

    <!-- footer area start-->

    <?php include_once 'partials/footer.php'  ?>

</body>

</html>