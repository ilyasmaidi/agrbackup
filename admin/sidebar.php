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

                            <div class="col-md-6">
                                <input type="hidden" name="editsidebar_id" value="<?=$newData['id']?>">
                                <label for="">Title</label>
                                <input type="text" name="title" value="<?=$newData['title']?>" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" value="<?=$newData['slug']?>" class="form-control" placeholder="Enter slug">
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

                                  
                            
                            
                            <div class="com-md-12">
                                <button name="update_sidebar_btn" type="submit" class="btn btn-primary">Update</button>
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