<?php 

include("config/dbcon.php");
// include("functions/myfunctions-edit-home.php");
?>









<div class="main-banner">
            <div class="main-banner-item banner-item-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">

                    <?php
                                    $topbanner = GetAll("banner");
                                    if(mysqli_num_rows($topbanner) > 0){

                                        foreach($topbanner as $item)
                                        {
                                        ?>




                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <span><?= $item['name']; ?></span>
                                        <h1><?= $item['slug']; ?></h1>
                                        <div class="banner-btn">
                                        <a href="<?= $item['contact']; ?>" class="default-btn">Contact</a>
                                        <a href="<?= $item['download']; ?>" class="optional-btn">Download</a>
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