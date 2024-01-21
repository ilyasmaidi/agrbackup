
<?php 

include("config/dbcon.php");
// include("functions/myfunctions-edit-home.php");
?>
<section class="deal-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="deal-title">




                        <?php
                                    $keytop = GetAll("keyprince");
                                    if(mysqli_num_rows($keytop) > 0){

                                        foreach($keytop as $item)
                                        {
                                        ?>



                                        <h2>Key Principles</h2>
                                        <p><?= $item['title1']; ?></p>
                                        </div>
                                         <h3> Sustainability</h3><?= $item['title2']; ?><br>


                                        <h3> Farmer education</h3><?= $item['title3']; ?> <br>


                                        <h3>Integration</h3><?= $item['title4']; ?><br>


                                        <h3>Quality and reliability</h3> <?= $item['title5']; ?><br>


                                        <h3> Transparency and security</h3> <?= $item['title6']; ?><br>


                                        <h3>Technical support and customer service</h3><?= $item['title7']; ?> <br>
                                        .</p>

                                

                                <?php
                                        }

                                    }else{
                                        echo "No records found";
                                    }

                                    ?>









                           
                       




















                    </div>

                    <div class="col-lg-6">
                        <div class="deal-image">
                            <img src="assets/img/deal/deal-1.png" alt="image">

                            <div class="offer">
                                <h4>50%</h4>
                                <span>Off</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deal-shape">
                <div class="shape-1">
                    <img src="assets/img/deal/deal-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="assets/img/deal/deal-shape-2.png" alt="image">
                </div>
                <div class="shape-3">
                    <img src="assets/img/deal/deal-shape-3.png" alt="image">
                </div>
                <div class="shape-4">
                    <img src="assets/img/deal/deal-shape-4.png" alt="image">
                </div>
            </div>
        </section>