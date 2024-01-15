<?php
include("config/dbcon.php");
include("functions/myfunctions-edit-home.php");
// $location = "New Laghouat QRGG+3QC, Laghouat";
// $email = "info@agritech.com";
// $link_fsb = "#";
// $link_x = "#";
// $link_pan = "#";
// $link_linked = "#";

?>
<div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">


                    <?php
                            $topHeader = GetAll("topheader");
                            if(mysqli_num_rows($topHeader) > 0){

                                foreach($topHeader as $item)
                                {
                                   ?>
                                        <ul class="top-header-information">
                                            <li>
                                                <i class='bx bxs-map'></i>
                                                <?= $item['location']; ?>
                                            </li>
                                            <li>
                                                <i class='bx bx-envelope'></i>
                                                <a href="mailto:<?= $item['email']; ?>"><?= $item['email']; ?></a>
                                            </li>
                                        </ul>


                                   <?php
                                }

                            }else{
                                echo "No records found";
                            }

                            ?>






                        
                    </div>

                    <div class="col-lg-6">
                        <ul class="top-header-social">



                        <?php
                            $topHeader = GetAll("topheader");
                            if(mysqli_num_rows($topHeader) > 0){

                                foreach($topHeader as $item)
                                {
                                   ?>
                                        <li>
                                            <a href="<?= $item['link_fsb']; ?>" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $item['link_x']; ?>" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $item['link_pan']; ?>" target="_blank">
                                                <i class='bx bxl-pinterest-alt'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $item['link_linked']; ?>" target="_blank">
                                                <i class='bx bxl-linkedin'></i>
                                            </a>
                                        </li>


                                   <?php
                                }

                            }else{
                                echo "No records found";
                            }

                            ?>




                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>