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
                        <h5 class="card-header-text">Add Products</h5>
                     </div>
                     <div class="card-block">

                        <?php
                        if (isset($_GET['error'])) {

                        ?>
                           <div class="error">
                              <p style="color:red"> Please insert name or image </p>
                           </div>

                        <?php
                        }
                        ?>



                        <form action="controller/productcontroller.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label for="">Product Name</label>
                              <input type="text" name="name" id="name" class="form-control">
                           </div>

                           <div class="form-group">
                              <label for="">Product Image</label>
                              <input type="file" name="image" id="image" class="form-control">

                           </div>

                           <div>

                              <label for="">Product Price</label>
                              <input type="number" name="price" id="price" class="form-control">

                           </div>
                           <div>
                              <label for="actual_price">Product Actual Price</label>
                              <input type="number" name="actual_price" id="actual_price" class="form-control">

                           </div>

                            <div>
                              <label for="category_id">Category ID</label>
                              <select name="category_id" id="category_id" class="form-control">
                              <?php
                                 
                                 /*$sql ="SELECT * FROM semester   ";*/


                                 $sql = "SELECT * FROM categories ORDER BY `name`";
                                 $query = $conn->query($sql);

                                 if ($query->num_rows > 0) {
                                    while ($categories = $query->fetch_assoc()) {
                                 ?>
                             
                                 <option value="<?php echo $categories[ 'id'];?>"><?php echo $categories['name']; ?></option>
                                 
                                 <?php

                                    }
                                 }

                                 ?>
                              </select>

                           </div>

                           <button type="submit" class="btn btn-success mt-3" name="add">Save</button>
                        </form>


                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Category List</h5>
                     </div>
                     <div class="card-block">
                        <div class="table-responsive">
                           <table class="table table-inverse">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Name</th>

                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Actual Price</th>
                                    
                                    <th>Category ID</th>
                                    <th>Action</th>

                                 </tr>
                              </thead>

                              <tbody>

                                 <?php
                                 $count = 1;
                                 /*$sql ="SELECT * FROM semester   ";*/


                                 $sql = "SELECT * FROM products ORDER BY `name` ASC";
                                 $query = $conn->query($sql);

                                 if ($query->num_rows > 0) {
                                    while ($product = $query->fetch_assoc()) {
                                 ?>

                                       <tr>
                                          <td><?php echo $count++; ?></td>

                                          <td> <?php echo $product['name'] ?></td>
                                          <td>

                                             <img src=" <?php echo "upload/" . $product['image'] ?>" alt="" width="100px">

                                          </td>

                                          <td> <?php echo $product['price'] ?></td>
                                          <td> <?php echo $product['actual_price'] ?></td>
                                          
                                        
                                          <td>
                                            
                                          <?php
                                          $category_id = $product['category_id'];
                                             $category_sql = "SELECT * FROM categories WHERE id = $category_id";
                                             $category_query = $conn->query($category_sql);
                                             

                                             if($category_query->num_rows>0){
                                                while($category = $category_query->fetch_assoc()){
                                                   echo $category['name'];
                                                }
                                             }else{
                                                echo "No category found";
                                             }

                                          ?>
                                      

                                          </td>

                                          <td>


                                             <form action="controller/productcontroller.php" method="POST" onsubmit="return confirm ('Do you want to Delete?')">

                                                <a href="product-edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary"> Edit</a>

                                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

                                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                             </form>

                                          </td>
                                       </tr>
                                 <?php

                                    }
                                 }

                                 ?>
                              </tbody>
                           </table>
                        </div>
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