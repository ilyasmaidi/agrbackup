<<<<<<< HEAD
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
                    <h4>Key Principles</h4>
                </div>
                <form action="code.php" method="POST" enctype="multipart/form-data">

                
                <div class="card-body">
                    <div class="row">
                        <?php
                        $datakey = GetAll("keyprince");
                        if(mysqli_num_rows($datakey) > 0){
            
                            $newData = mysqli_fetch_array($datakey);
                            
                            ?>

                        <div class="col-md-12">
                            <input type="hidden" name="key_id" value="<?=$newData['id']?>">
                            <label for="">Key Principles</label>
                    
                            <textarea  name="title1" class="col-md-12"><?=$newData['title1']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Sustainability</label>
                            <textarea  name="title2" class="col-md-12"><?=$newData['title2']?></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="">Farmer education</label>
                            <textarea  name="title3" class="col-md-12"><?=$newData['title3']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Integration</label>
                            <textarea  name="title4" class="col-md-12"><?=$newData['title4']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Quality and reliability</label>
                            <textarea  name="title5" class="col-md-12"><?=$newData['title5']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Transparency and security</label>
                            <textarea  name="title6" class="col-md-12"><?=$newData['title6']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Technical support and customer service</label>
                            <textarea  name="title7" class="col-md-12"><?=$newData['title7']?></textarea>
                        </div>

                            
                        
                        
                        <div class="col-md-12" style="margin: 8px 0;">
                            <button name="update_key_btn" type="submit" class="btn btn-primary">UPDATE</button>
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
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->
        
=======
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
                    <h4>Key Principles</h4>
                </div>
                <form action="code.php" method="POST" enctype="multipart/form-data">

                
                <div class="card-body">
                    <div class="row">
                        <?php
                        $datakey = GetAll("keyprince");
                        if(mysqli_num_rows($datakey) > 0){
            
                            $newData = mysqli_fetch_array($datakey);
                            
                            ?>

                        <div class="col-md-12">
                            <input type="hidden" name="key_id" value="<?=$newData['id']?>">
                            <label for="">Key Principles</label>
                    
                            <textarea  name="title1" class="col-md-12"><?=$newData['title1']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Sustainability</label>
                            <textarea  name="title2" class="col-md-12"><?=$newData['title2']?></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="">Farmer education</label>
                            <textarea  name="title3" class="col-md-12"><?=$newData['title3']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Integration</label>
                            <textarea  name="title4" class="col-md-12"><?=$newData['title4']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Quality and reliability</label>
                            <textarea  name="title5" class="col-md-12"><?=$newData['title5']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Transparency and security</label>
                            <textarea  name="title6" class="col-md-12"><?=$newData['title6']?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Technical support and customer service</label>
                            <textarea  name="title7" class="col-md-12"><?=$newData['title7']?></textarea>
                        </div>

                            
                        
                        
                        <div class="col-md-12" style="margin: 8px 0;">
                            <button name="update_key_btn" type="submit" class="btn btn-primary">UPDATE</button>
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
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->
        
>>>>>>> e6db2624c77880062982519938a8ffa7b711a5b3
<?php include("./includes/end_admin.php") ?>