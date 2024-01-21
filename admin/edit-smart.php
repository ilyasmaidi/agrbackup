<?php 
session_start();
include ("../config/dbcon.php");
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
        <div class="container">

          <div class="row">
            <div class="col-md-12">
                <?php
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
        
                        $topsmart =GetByID("smart",$id);

                        if(mysqli_num_rows($topsmart) > 0)
                        {
                                $data = mysqli_fetch_array($topsmart);
                        
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Services</h4>
                                </div>
                                <form action="code.php" method="POST" enctype="multipart/form-data">

                                
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                        <input type="hidden" name="smart_id" value="<?=$data['id']?>">
                                            <label for="">Title</label>
                                            <input type="text" name="title" value="<?=$data['title']?>" class="form-control" placeholder="Enter .">

                                        </div>
                                        


                                        <div class="col-md-12">
                                            <label for="">Description</label> 
                                            <textarea rows="3" name="text" placeholder="Enter Description" class="form-control"><?=$data['text']?></textarea>
                                        </div>

                                        

                                        

                                        <div class="com-md-12" style="margin: 8px 0;">
                                            <button name="update_smart_btn" type="submit" class="btn btn-primary">Update</button>
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