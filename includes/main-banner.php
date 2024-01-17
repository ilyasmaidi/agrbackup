<?php 
include("config/dbcon.php");
include("functions/myfunctions.php"); 
?>


<div class="main-banner">
            <div class="main-banner-item banner-item-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <?php 
                                
                                $banner_ = GetAll("banner");
                                        if(mysqli_num_rows($banner_) > 0){

                                            foreach($banner_ as $item_banner_banner)
                                            {
                                                
                                   ?>

                                                <div class="col-lg-6">
                                                    <div class="main-banner-content">
                                                        <span><?= $item_banner['name']; ?></span>
                                                        <h1><?= $item_banner['slug']; ?></h1>
                                                        <div class="banner-btn">
                                                            <a href="<?= $item_banner['contact']; ?>" class="default-btn">Contact</a>
                                                            <a href="<?= $item_banner['download']; ?>" class="optional-btn">Downloand</a>
                                                        </div>
                                                    </div>
                                                </div>


                                        


                                   <?php
                                }

                            }else{
                                echo "No records found";
                            }
                                
                                
                                
                                
                                ?>
                                

                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img src="assets/img/banner-woman.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner-shape">
                <div class="shape-1">
                    <img src="assets/img/banner-shape/banner-shape-1.png" alt="image">
                </div>
            </div>
        </div>