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
        <?php include("./includes/navbar2.php") ?>
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <?php include("./includes/sidebar.php") ?>
        <!-- End Sidebar Modal -->

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Login</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="login-form">
                    <h2>Login</h2>
                    



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




                    <form action="./functions/authcode.php" method="POST">
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" class="form-control" placeholder="Username or email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Remember me</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                <a href="#" class="lost-your-password">Lost your password?</a>
                            </div>
                        </div>

                        <button name="login_btn" type="submit" class="default-btn">Login</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
        
        <!-- Start Footer Area -->
        <?php include("./includes/footer.php") ?>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <?php include("./includes/copyright.php") ?>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->