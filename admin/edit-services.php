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
      <?php
          if(isset($_GET['id']))
          {
              $id = $_GET['id'];

              $topservices =GetByID("services",$id);

              if(mysqli_num_rows($topservices) > 0)
              {
                      $data = mysqli_fetch_array($topservices);
              
                      ?>
                  <div class="card">
                      <div class="card-header">
                          <h4>Edit Services</h4>
                      </div>
                      <form action="code.php" method="POST" enctype="multipart/form-data">

                      
                      <div class="card-body">
                          <div class="row">

                              <div class="col-md-12">
                              <input type="hidden" name="service_id" value="<?=$data['id']?>">
                                  <label for="">Title</label>
                                  <input type="text" name="title" value="<?=$data['title']?>" class="form-control" placeholder="Enter .">

                              </div>
                              


                              <div class="col-md-12">
                                  <label for="">Description</label> 
                                  <textarea rows="3" name="text" placeholder="Enter Description" class="form-control"><?=$data['text']?></textarea>
                              </div>

                              

                              

                              <div class="com-md-12" style="margin: 8px 0;">
                                  <button name="update_service_btn" type="submit" class="btn btn-primary">Update</button>
                              </div>


                          </div>
                          
                      </div>

                      </form>
                  </div>
                  <?php
              } else
              {
                  echo "category not found";
              }
          } else{
              echo "Id Missing from url ";
          }
          ?>
  </div>
</div>      
  
</div>       
            
            
    </div>
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->
        
<?php include("./includes/end_admin.php") ?>