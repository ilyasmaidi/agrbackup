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

                            <div class="col-md-12">
                                <input type="hidden" name="edihome_id" value="<?=$newData['id']?>">
                                <label for="">Full Name</label>
                                <input type="text" name="location" value="<?=$newData['location']?>" class="form-control" placeholder="Enter Location">
                            </div>
                            <div class="col-md-12">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?=$newData['email']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Password</label>
                                <input type="password" name="email" value="<?=$newData['email']?>" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="col-md-12">
                                            <label for="">Upload Avatar</label>
                                            <input type="file" name="image" class="form-control" >
                                            <label for="">Current Avatar</label>
                                            <input type="hidden" name="old_image" value="<?=$newData['image']?>">
                                            <img src="../uploads/<?=$newData['image']?>" width="50px" height="50px" alt="">
                                        </div>        
                            
                            
                            <div class="com-md-12">
                                <button name="update_profil_btn" type="submit" class="btn btn-primary">Save</button>
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
    

    <!-- MAIN -->
</section>
<!-- NAVBAR -->


<?php


// Check if the user is logged in
if(!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Retrieve user information from session
$name = $_SESSION['name'];
$email = $_SESSION['email'];
?>
<h1>User Profile</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <!-- Add more profile information here if needed -->
        
<?php include("./includes/end_admin.php") ?>