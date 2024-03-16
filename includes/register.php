<?php
session_start();

if(isset($_SESSION['auth']))
{
	$_SESSION['message'] = "You are already logged In";
	header('Location: index.php');
	exit();
}

?>
<!-- Start Preloader Area -->
<div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-header-information">
                            <li>
                                <i class='bx bxs-map'></i>
                                175 5th Ave Premium Area, New York
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@orgo.com">hello@orgo.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="top-header-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <?php include('./includes/navbar2.php');?>
        <!-- End Navbar Area -->

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Register</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Register</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Register Area -->
        <section class="register-area ptb-100">
            <div class="container">
                <div class="register-form">
                    <h2>Register</h2>


                    <?php if(isset($_SESSION['message']))
                        {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hi!</strong> <?php echo $_SESSION['message']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php 
                        unset($_SESSION['message']);
                        }


						
                        ?>

                    






                    <form action="functions/authcode.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="cpassword">
                        </div>

                        <p class="description">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p>

                        <button type="submit" name="register_btn" class="default-btn">Register</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Register Area -->
        
        <!-- Start Footer Area -->
        <?php include('./includes/footer.php');?>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <?php include('./includes/copyright.php');?>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->