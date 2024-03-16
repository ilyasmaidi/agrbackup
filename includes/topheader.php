<?php
include("config/dbcon.php");
include("functions/myfunctions-edit-home.php");

$topHeaderData = GetAll("topheader");

if(mysqli_num_rows($topHeaderData) > 0) {
    $topHeaderItem = mysqli_fetch_assoc($topHeaderData);
    $location = $topHeaderItem['location'];
    $email = $topHeaderItem['email'];
    $link_fsb = $topHeaderItem['link_fsb'];
    $link_x = $topHeaderItem['link_x'];
    $link_pan = $topHeaderItem['link_pan'];
    $link_linked = $topHeaderItem['link_linked'];
} else {
    $location = "Default Location";
    $email = "default@example.com";
    $link_fsb = "#";
    $link_x = "#";
    $link_pan = "#";
    $link_linked = "#";
}
?>

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-header-information">
                    <li>
                        <i class='bx bxs-map'></i>
                        <?= $location; ?>
                    </li>
                    <li>
                        <i class='bx bx-envelope'></i>
                        <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <ul class="top-header-social">
                    <li><a href="<?= $link_fsb; ?>" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="<?= $link_x; ?>" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="<?= $link_pan; ?>" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                    <li><a href="<?= $link_linked; ?>" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
