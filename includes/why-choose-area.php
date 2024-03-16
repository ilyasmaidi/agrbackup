<section class="why-choose-area choose-item-two pb-100">
            <div class="container">
                <div class="why-choose-item">
                    <div class="content">
                    <?php
                            $showchoose = GetAll("choose");
                            if (mysqli_num_rows($showchoose) > 0) {
                                $data = mysqli_fetch_all($showchoose, MYSQLI_ASSOC);

                                // First section
                                if (!empty($data)) {
                            ?>
                                    <div class="content">
                                        <span>Why Choose Us</span>
                                        <h3><?= $data[0]['title']; ?></h3>
                                        <p><?= $data[0]['text']; ?></p>
                                    </div>
                            <?php
                                }

                                // Second section
                                for ($i = 1; $i < count($data); $i++) {
                            ?>
                                <div class="inner-content">
                                    <div class="icon">
                                        <i class="flaticon-leaf"></i>
                                    </div>
                                    <h4><?= $data[$i]['title']; ?></h4>
                                    <p><?= $data[$i]['text']; ?></p>
                                </div>
                        <?php
                            }
                        } else {
                            echo "No records found";
                        }
                        ?>


                    

                    
                </div>
            </div>
        </section>