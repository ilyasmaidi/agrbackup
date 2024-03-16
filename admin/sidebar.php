<?php 
session_start();
include ("../config/dbcon.php");
include ("../middelwar/adminMiddleware.php");
include("./includes/start_admin.php"); 
?>
<!-- SIDEBAR -->
<?php include("./includes/sidebar_admin.php");?>

<!-- SIDEBAR -->

<!-- NAVBAR -->
<section id="content">
    <!-- NAVBAR -->
    <?php include("./includes/navbar_admin.php");?>
    
    <!-- NAVBAR -->

    <!-- MAIN -->
    <div class="main-admin">
    
                  
    <div class="container">

<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <h4>Edit Sidebar</h4>
          </div>
          <form action="code.php" method="POST" enctype="multipart/form-data">

          
          <div class="card-body">
              <div class="row">
                  <?php
                  $datasidebarTop = GetAll("sidebar");
                  if(mysqli_num_rows($datasidebarTop) > 0){
      
                      $newData = mysqli_fetch_array($datasidebarTop);
                      
                      ?>

                  <div class="col-md-12">
                      <input type="hidden" name="editsidebar_id" value="<?=$newData['id']?>">
                      <label for="">Title</label>
                      <input type="text" name="title" value="<?=$newData['title']?>" class="form-control" placeholder="Enter title">
                  </div>
                  <div class="col-md-12">
                      <label for="">Slug</label>
                      <textarea class="col-md-12" name="slug" id=""><?=$newData['slug']?></textarea>
                  </div>
                  
                  <div class="col-md-12">
                      <label for="">Phone</label>
                      <input type="text" name="phone" value="<?=$newData['phone']?>" class="form-control" placeholder="Enter phone url">
                  </div>

                  <div class="col-md-12">
                      <label for="">email</label>
                      <input type="text" name="email" value="<?=$newData['email']?>" class="form-control" placeholder="Enter email url">
                  </div>


                  <div class="col-md-12">
                      <label for="">Facebook</label>
                      <input type="text" name="facebook" value="<?=$newData['facebook']?>" class="form-control" placeholder="Enter facebook url">
                  </div>
                  <div class="col-md-12">
                      <label for="">Twitter OR X</label>
                      <input type="text" name="twitter" value="<?=$newData['twitter']?>" class="form-control" placeholder="Enter x url">
                  </div>
                  <div class="col-md-12">
                      <label for="">Pinterest</label>
                      <input type="text" name="pinterest" value="<?=$newData['pinterest']?>" class="form-control" placeholder="Enter pinterest">
                  </div>
                  <div class="col-md-12">
                      <label for="">Linkedin</label>
                      <input type="text" name="linkedin" value="<?=$newData['linkedin']?>" class="form-control" placeholder="Enter linkedin">
                  </div>

                        
                  
                  
                  <div class="com-md-12" style="margin: 8px 0;">
                      <button name="update_sidebar_btn" type="submit" class="btn btn-primary">Update</button>
                  </div>





                      <?php
                  }else{
                      echo "data not found!";
                  }
                  ?>
                  

              </div>
              
          </div>

          </form>
      </div>
  </div>
</div>      
  
</div>
            
    </div>
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->
        
<?php include("./includes/end_admin.php") ?>