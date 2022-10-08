<?php include_once 'partials/head.php'; ?>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <?php include_once 'partials/nav.php'; ?>
      <!-- Side-Nav-->
      <?php include_once 'partials/sidebar.php'; ?>
      <!-- Sidebar chat start -->


      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>


            <!-- 1-3-block row start -->
            <div class="row">
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Edit Category</h5>
                        <?php
                        if (isset($_GET['error'])) {

                        ?>
                           <div class="error">
                              <p style="color:red"> Please insert name or image </p>
                           </div>

                        <?php
                        }
                        ?>
                     </div>
                     <div class="card-block">
                        <?php
                        if (isset($_GET['id'])) {
                           $id = $_GET['id'];
                           $sql = "SELECT*FROM categories WHERE id= $id";
                           $query = $conn->query($sql);

                           if ($query->num_rows > 0) {
                              while ($categories = $query->fetch_assoc()) {
                        ?>


                                 <form action="controller/categorycontroller.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $categories['id']; ?>">
                                    <div class="form-group">
                                       <label>Category Name</label>
                                       <input type="text" name="name" id="name" class="form-control" value="<?php echo $categories['name']; ?>">
                                    </div>

                                    <div class="form-group">
                                       <label for="">Category Image</label>
                                       <input type="file" name="image" id="image" class="form-control" value="<?php echo $categories['image']; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-success" name="update">Save</button>
                                 </form>

                              <?php

                              }
                           } else {
                              ?>



                              <p>No data found</p>
                        <?php
                           }
                        }

                        ?>




                     </div>
                  </div>
               </div>



            </div>
            <!-- 1-3-block row end -->


         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->

      </div>
   </div>


   <?php include_once 'partials/script.php' ?>
   <script>
      $('#image').dropify();

   </script>

</body>

</html>