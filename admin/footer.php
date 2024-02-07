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
                    <h4>Footer URLs</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Url</th>
                                <th>Image</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $topinstgramPhoto = GetAll("instagram_photos");
                            if(mysqli_num_rows($topinstgramPhoto) > 0){

                                foreach($topinstgramPhoto as $item)
                                {
                                   ?>
                                     <tr>
                                        
                                         <td><?= $item['link_url']; ?></td>
                                        <td>
                                            <img style="max-width:50px;" src="../uploads/<?= $item['photo_url']; ?>" alt="image">
                                           
                                        </td>
                                        
                        
                                        <td> <a href="edit-footer.php?id=<?=$item['id']; ?>" class="btn btn-primary">Edit</a></td>
                                     </tr>
                                   <?php
                                }

                            }else{
                                echo "No records found";
                            }

                            ?>
                            
                        </tbody>
                    </table>
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