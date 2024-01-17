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


<!-- Start Preloader Area -->
<div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <?php include('./includes/topheader.php'); ?>
        <!-- End Top Header Area -->

       
        <!-- End Navbar Area -->
        <?php include('./includes/navbar.php'); ?>
       <!-- Sidebar Modal -->
       <?php include('./includes/sidebar.php'); ?>
        <!-- End Sidebar Modal -->

        <!-- Start Main Banner Area -->
        <?php include('./includes/main-banner.php'); ?>
        <!-- End Main Banner Area -->

        <!-- Start Food Area -->
        <?php include("./includes/three-pics.php") ?>
        <!-- End Food Area -->
        
        <!-- Start Features Area -->
        <?php include("./includes/features.php") ?>

        <!-- End Features Area -->
        
        <!-- Start Deal Area -->
        <?php include("./includes/deal.php")?>
        <!-- End Deal Area -->

        <!-- Start Why Choose Area -->
        <?php include("./includes/why-choose-area.php") ?>
        <!-- End Why Choose Area -->

        <!-- Start Gallery Area -->
        <!-- <?php include("./includes/gallery-area.php") ?> -->
        
        <!-- End Gallery Area -->

        <!-- Start Video Area -->
        <?php include("./includes/video-area.php") ?>
        
        <!-- End Video Area -->

        <!-- Start Services Area -->
        <?php include("./includes/services.php") ?>
        <!-- End Services Area -->
        <!-- Start Services Area -->
        <?php include("./includes/under-services.php") ?>
        <!-- End Services Area -->

        <!-- Start Testimonial Area -->
        <?php include("./includes/clients.php") ?>
        <!-- End Testimonial Area -->

        <!-- Start Blog Area -->
        
        <!-- End Blog Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Enter Email Address" name="EMAIL" required autocomplete="off">

                            <button type="submit">Subscribe Now</button>
                            
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-1.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-2.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-3.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-4.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-5.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

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

        <!-- Start QuickView Modal Area -->
        <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="flaticon-cancel"></i></span>
                    </button>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-image"></div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="product-content">
                                <h3>Seasoned Tomatoes</h3>
                                <div class="price">
                                    <span class="new-price">$541.00</span>
                                    <span class="old-price">$652.00</span>
                                </div>
                                <div class="product-review">
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="rating-count">5 reviews</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                <div class="product-add-to-cart">
                                    <div class="input-counter">
                                        <span class="minus-btn">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                        <input type="text" value="1">
                                        <span class="plus-btn">
                                            <i class='bx bx-plus'></i>
                                        </span>
                                    </div>
                                    <button type="submit" class="default-btn">
                                        Add to cart
                                    </button>
                                </div>
    
                                <div class="buy-checkbox-btn">
                                    <div class="item">
                                        <input class="inp-cbx" id="cbx" type="checkbox">
                                        <label class="cbx" for="cbx">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>I agree with the terms and conditions</span>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="btn btn-light">Buy it now!</a>
                                    </div>
                                </div>
    
                                <div class="products-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li>
                                            <a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End QuickView Modal Area -->