<?php 
session_start();
include ("../config/dbcon.php");
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
?>
        <div class="container">

          <div class="row">
            <div class="col-md-12">
                <?php
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $topclients =GetByID("clients",$id);

                        if(mysqli_num_rows($topclients) > 0)
                        {
                                $data = mysqli_fetch_array($topclients);
                        
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Category</h4>
                                </div>
                                <form action="code.php" method="POST" enctype="multipart/form-data">

                                
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                        <input type="hidden" name="client_id" value="<?=$data['id']?>">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="<?=$data['name']?>" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Job</label>
                                            <input type="text" name="job" value="<?=$data['job']?>" class="form-control" placeholder="Enter Slug">
                                        </div>


                                        <div class="col-md-12">
                                            <label for="">Comment</label>
                                            <input type="text" name="comment" value="<?=$data['comment']?>" class="form-control" placeholder="Enter comment">
                                        </div>


                                        

                                        <div class="col-md-12">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="image" class="form-control" >
                                            <label for="">Current Image</label>
                                            <input type="hidden" name="old_image" value="<?=$data['image']?>">
                                            <img src="../uploads/<?=$data['image']?>" width="50px" height="50px" alt="<?=$data['name']?>">
                                        </div>

                                        
                                        

                                        <div class="com-md-12">
                                            <button name="update_clients_btn" type="submit" class="btn btn-primary">Update</button>
                                        </div>


                                    </div>
                                    
                                </div>

                                </form>
                            </div>
                            <?php
                        } else
                        {
                            echo "Clients not found";
                        }
                    } else{
                        echo "Id Missing from url ";
                    }
                    ?>
            </div>
          </div>      
            
        </div>
<?php include("./includes/footer.php") ?>