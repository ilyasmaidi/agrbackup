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
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>comment</th>
                                <th>Image</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $topclients = GetAll("clients");
                            if(mysqli_num_rows($topclients) > 0){

                                foreach($topclients as $item)
                                {
                                   ?>
                                     <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['job']; ?></td>
                                        <td style="max-width: 100px;overflow: hidden;"><?= $item['comment']; ?></td>
                                        <td>
                                            <img src="../uploads/<?=$item['image']; ?>" width="50px" height="50px" alt="<?=$item['name'];?>">
                                        </td>
                                        
                                        
                                        <td>
                                            <a href="edit-clients.php?id=<?=$item['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
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