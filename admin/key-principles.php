<?php 
session_start();

include ("../config/dbcon.php");
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
?>
        <div class="container">

          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Home</h4>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                    
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $datakey = GetAll("keyprince");
                            if(mysqli_num_rows($datakey) > 0){
                
                                $newData = mysqli_fetch_array($datakey);
                                
                                ?>

                            <div class="col-md-6">
                                <input type="hidden" name="key_id" value="<?=$newData['id']?>">
                                <label for="">Key Principles</label>
                                <input type="text" name="title1" value="<?=$newData['title1']?>" class="form-control" placeholder="Enter Location">
                            </div>
                            <div class="col-md-6">
                                <label for="">Sustainability</label>
                                <input type="text" name="title2" value="<?=$newData['title2']?>" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="col-md-12">
                                <label for="">Farmer education</label>
                                <input type="text" name="title3" value="<?=$newData['title3']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Integration</label>
                                <input type="text" name="title4" value="<?=$newData['title4']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Quality and reliability</label>
                                <input type="text" name="title5" value="<?=$newData['title5']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Transparency and security</label>
                                <input type="text" name="title6" value="<?=$newData['title6']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Technical support and customer service</label>
                                <input type="text" name="title7" value="<?=$newData['title7']?>" class="form-control" placeholder="Enter email">
                            </div>

                               
                            
                            
                            <div class="col-md-12" style="margin: 8px 0;">
                                <button name="update_key_btn" type="submit" class="btn btn-primary">Save</button>
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
<?php include("./includes/footer.php") ?>