<?php 
session_start();
include(__DIR__ . '../../../config/dbcon.php');
include(__DIR__ . '../../../middelwar/adminMiddleware.php');



if (!function_exists('GetAll')) {
    function GetAll($table){
        global $con;
        $query = "SELECT * FROM $table";
        return $query_run = mysqli_query($con, $query);
    }
}

include('../includes/start.php');
?>
                <!-- Sidebar -->
                <?php include('../includes/newsidebar.php') ?>
                <!-- End of Sidebar -->





        <div class="content">
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
                                        $dataEditTop = GetAll("topheader");
                                        if(mysqli_num_rows($dataEditTop) > 0){
                            
                                            $newData = mysqli_fetch_array($dataEditTop);
                                            
                                            ?>

                                        <div class="col-md-6">
                                            <input type="hidden" name="edihome_id" value="<?=$newData['id']?>">
                                            <label for="">Name</label>
                                            <input type="text" name="location" value="<?=$newData['location']?>" class="form-control" placeholder="Enter Location">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Email</label>
                                            <input type="text" name="email" value="<?=$newData['email']?>" class="form-control" placeholder="Enter email">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Facebook</label>
                                            <input type="text" name="link_fsb" value="<?=$newData['link_fsb']?>" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Twitter OR X</label>
                                            <input type="text" name="link_x" value="<?=$newData['link_x']?>" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Pinterest</label>
                                            <input type="text" name="link_pan" value="<?=$newData['link_pan']?>" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Linkedin</label>
                                            <input type="text" name="link_linked" value="<?=$newData['link_linked']?>" class="form-control" placeholder="Enter email">
                                        </div>

                                        <div class="col-md-12">
                                                        <label for="">Upload Logo</label>
                                                        <input type="file" name="image" class="form-control" >
                                                        <label for="">Current Logo</label>
                                                        <input type="hidden" name="old_image" value="<?=$newData['image']?>">
                                                        <img src="../uploads/<?=$newData['image']?>" width="50px" height="50px" alt="">
                                                    </div>        
                                        
                                        
                                        <div class="com-md-12">
                                            <button name="update_home_btn" type="submit" class="btn btn-primary">Save</button>
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

                                       


<?php include('../includes/end.php') ?>


