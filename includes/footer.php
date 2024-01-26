<?php
$topsidebar = GetAll("sidebar");
$data = mysqli_fetch_array($topsidebar);

$topheader = GetAll("topheader");
$newdata = mysqli_fetch_array($topheader);

$topinstgram = GetAll("instagram_photos");
?>

<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <h2><a href="index.php">AgriTech</a></h2>
                    </div>
                    <p><?= $data['slug'] ?></p>
                    <ul class="social">
                        <?php foreach (['facebook', 'twitter', 'pinterest', 'linkedin'] as $socialMedia) : ?>
                            <li>
                                <a href="<?= $data[$socialMedia] ?>" class="<?= $socialMedia ?>" target="_blank">
                                    <i class='bx bxl-<?= $socialMedia ?>'></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Instagram</h3>
                    <ul class="instagram-list">
                        <?php while ($row = mysqli_fetch_assoc($topinstgram)) : ?>
                            <li>
                                <div class="box">
                                    <img src="uploads/<?= $row['photo_url'] ?>" alt="image">
                                    
                                    <i class="bx bxl-instagram"></i>
                                    <a href="<?= $row['link_url'] ?>" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <!-- Other sections... -->

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="index.php">Our Services</a></li>
                        <li><a href="index.php">Shop</a></li>
                        <li><a href="index.php">Blog</a></li>
                        <li><a href="index.php">Faq</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href="tel:<?= $data['phone'] ?>"><?= $data['phone'] ?></a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            <?= $newdata['location'] ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



