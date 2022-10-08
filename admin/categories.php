

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
                        <h5 class="card-header-text">Add Category</h5>
                     </div>
                     <div class="card-block">

                        <?php 
                        if(isset($_GET['error'])){

                           ?>
                           <div class="error">
                           <p style="color:red"> Please insert name or image </p>
                           </div>
                           
                           <?php
                        }
                        ?>
                        

                     
                        <form action="controller/categorycontroller.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Category Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                               
                            </div>

                            <button type="submit" class="btn btn-success" name="add">Save</button>
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    
                                    </tr>
                                </thead>

                                <tbody>

                                <?php
                                    $count=1;
                                    /*$sql ="SELECT * FROM semester   ";*/
                        
                        
                                $sql= "SELECT * FROM categories ORDER BY `name` ASC";
                                $query = $conn->query($sql);

                                if($query->num_rows>0){
                                 while($categories = $query->fetch_assoc()){
                                     ?>
                                
                                    <tr>
                                        <td><?php echo $count++ ; ?></td>
                                        <td>
                                          
                                         <img src=" <?php echo "upload/".$categories['image'] ?>" alt="" width="100px">
                                       
                                        </td>
                                        <td> <?php echo $categories['name'] ?></td>
                                        <td>
                                        

                                            <form action="controller/categorycontroller.php" method="POST" onsubmit="return confirm ('Do you want to Delete?')">
                                             
                                            <a href="category-edit.php?id=<?php echo $categories['id'];?>" class="btn btn-primary"> Edit</a>

                                             <input type="hidden" name="id" value="<?php echo $categories['id']; ?>">

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


   <?php include_once 'partials/script.php'?>
   <script>
      $('#image').dropify();

   </script>

</body>

</html>