<?php
$topsidebar = GetAll("sidebar");
$data = mysqli_fetch_array($topsidebar);
?>

<!-- Sidebar Modal -->
<div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2><?= $data['title'] ?></h2>
                        <p><?= $data['slug'] ?></p>
                    </div>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:+0881306298615">
                                <?= $data['phone'] ?>
                                </a>
                                <span>OR</span>
                                <a href="mailto:<?= $data['email'] ?>">
                                <?= $data['email'] ?>
                                </a>
                            </h2>
    
                            <ul class="social">
                                <li>
                                    <a href="<?= $data['facebook'] ?>" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $data['twitter'] ?>" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?= $data['linkedin'] ?>" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $data['pinterest'] ?>" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn">
                    <i class="flaticon-cancel"></i>
                </span>
            </div>
        </div>
        <!-- End Sidebar Modal -->