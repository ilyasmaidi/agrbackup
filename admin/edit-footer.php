<?php 
session_start();
include("../config/dbcon.php");
include("../middelwar/adminMiddleware.php");
include("./includes/header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])!="") {
                $id = $_GET['id'];
                $category = GetByID("instagram_photos", $id);

                if (mysqli_num_rows($category) > 0) {
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
                                        <input type="hidden" name="footer_id" value="<?= $data['id'] ?>">
                                        <label for="link_url">Link URL</label>
                                        <input type="text" name="link_url" value="<?= $data['link_url'] ?>" class="form-control" placeholder="Enter Link URL">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="photo_url">Upload Image</label>
                                        <input type="file" name="photo_url" class="form-control">
                                        <label for="old_image">Current Image</label>
                                        <input type="hidden" name="old_image" value="<?= $data['photo_url'] ?>">

                                        <?php
                                        $currentImage = "../uploads/" . $data['photo_url'];
                                        if (file_exists($currentImage)) {
                                        ?>
                                            <img src="<?= $currentImage ?>" width="50px" height="50px" alt="Current Image">
                                        <?php
                                        } else {
                                            echo "Image not found";
                                        }
                                        ?>
                                    </div>

                                    <div class="col-md-12">
                                        <button name="update_footer_btn" type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php
                } else {
                    echo "Category not found";
                }
            } else {
                echo "ID Missing from URL";
            }
            ?>
        </div>
    </div>
</div>

<?php include("./includes/footer.php"); ?>
