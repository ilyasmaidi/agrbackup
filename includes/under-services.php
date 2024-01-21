<section class="services-area pt-100 pb-100" >
            <div class="container">

            <?php
                            $topsmart = GetAll("smart");
                            if (mysqli_num_rows($topsmart) > 0) {
                                $data = mysqli_fetch_all($topsmart, MYSQLI_ASSOC);

                                // First section
                                if (!empty($data)) {
                            ?> 




            <div class="section-title">
                    <h2><?= $data[0]['title']; ?></h2>
                </div>
                         

                <div class="row">
                <?php
                                }
                                // Second section
                                for ($i = 1; $i < count($data); $i++) {
                            ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-apple"></i>
                            </div>
                            <h3><?= $data[$i]['title']; ?></h3>
                            <p><?= $data[$i]['text']; ?></p>
                    </div>

                   
                    
                </div>

                <?php
                            }
                        } else {
                            echo "No records found";
                        }
                        ?>

                
            </div>
            
        </section>