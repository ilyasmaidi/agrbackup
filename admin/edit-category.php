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
                        $category =GetByID("categories",$id);

                        if(mysqli_num_rows($category) > 0)
                        {
                                $data = mysqli_fetch_array($category);
                        
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Category</h4>
                                </div>
                                <form action="code.php" method="POST" enctype="multipart/form-data">

                                
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                        <input type="hidden" name="category_id" value="<?=$data['id']?>">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="<?=$data['name']?>" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Slug</label>
                                            <input type="text" name="slug" value="<?=$data['slug']?>" class="form-control" placeholder="Enter Slug">
                                        </div>


                                        <div class="col-md-12">
                                            <label for="">Description</label> 
                                            <textarea rows="3" name="description" placeholder="Enter Description" class="form-control"><?=$data['description']?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="image" class="form-control" >
                                            <label for="">Current Image</label>
                                            <input type="hidden" name="old_image" value="<?=$data['image']?>">
                                            <img src="../uploads/<?=$data['image']?>" width="50px" height="50px" alt="">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" value="<?=$data['meta_title']?>" class="form-control" placeholder="Enter meta title">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Meta Description</label>
                                            <textarea rows="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"><?=$data['meta_description']?></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Meta Keywords</label>
                                            <textarea rows="3" name="meta_keywords" placeholder="Enter Meta Keywords" class="form-control"><?=$data['meta_keywords']?></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Status</label>
                                            <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Popular</label>
                                            <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                        </div>

                                        <div class="com-md-12">
                                            <button name="update_category_btn" type="submit" class="btn btn-primary">Update</button>
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