<?php
session_start();
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
?>
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

<?php include("./includes/footer.php");