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
                        <h4>Add Category</h4>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Enter Slug">
                            </div>


                            <div class="col-md-12">
                                <label for="">Description</label> 
                                <textarea rows="3" name="description" placeholder="Enter Description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                  <label for="">Upload Image</label>
                                  <input type="file" name="image" class="form-control" >
                            </div>

                            <div class="col-md-12">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Description</label>
                                <textarea rows="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="">Meta Keywords</label>
                                <textarea rows="3" name="meta_keywords" placeholder="Enter Meta Keywords" class="form-control"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for="">Popular</label>
                                <input type="checkbox" name="popular">
                            </div>

                            <div class="col-md-12">
                                <button name="add_category_btn" type="submit" class="btn btn-primary">Save</button>
                            </div>


                        </div>
                        
                    </div>

                    </form>
                </div>
            </div>
          </div>      
            
        </div>
<?php include("./includes/footer.php") ?>