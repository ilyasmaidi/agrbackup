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
        
                        $topchoose =GetByID("choose",$id);

                        if(mysqli_num_rows($topchoose) > 0)
                        {
                                $data = mysqli_fetch_array($topchoose);
                        
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Category</h4>
                                </div>
                                <form action="code.php" method="POST" enctype="multipart/form-data">

                                
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                        <input type="hidden" name="choose_id" value="<?=$data['id']?>">
                                            <label for="">Title</label>
                                            <input type="text" name="title" value="<?=$data['title']?>" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                        


                                        <div class="col-md-12">
                                            <label for="">Description</label> 
                                            <textarea rows="3" name="text" placeholder="Enter Description" class="form-control"><?=$data['text']?></textarea>
                                        </div>

                                        

                                        

                                        <div class="com-md-12" style="margin: 8px 0;">
                                            <button name="update_choose_btn" type="submit" class="btn btn-primary">Update</button>
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
<?php include("./includes/footer.php") ?>