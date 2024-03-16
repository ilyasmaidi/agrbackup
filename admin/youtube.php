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
              <h4>Video</h4>
          </div>
          <form action="code.php" method="POST" enctype="multipart/form-data">

          
          <div class="card-body">
              <div class="row">
                  <?php
                  $topvideo = GetAll("video");
                  
                  if(mysqli_num_rows($topvideo) > 0){
      
                      $newData = mysqli_fetch_array($topvideo);
                      
                      ?>

                  <div class="col-md-12">
                      
                      <label for="">Link YouTube</label>
                      <input type="text" name="link" value="<?=$newData['link']?>" class="form-control" placeholder="Enter Your Link Youtube">
                  </div>


                  <div class="col-md-12" style="margin: 8px 0;">
                      <button name="update_video_btn" type="submit" class="btn btn-primary">Update</button>
                  </div>





                      <?php
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

        </div>
    </div>
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->
        
<?php include("./includes/end_admin.php") ?>