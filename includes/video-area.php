<div class="video-area ptb-100" id="services">
    <div class="container">
        <div class="video-content">
            <?php
            
            $topvideo = GetAll("video");
            if (mysqli_num_rows($topvideo) > 0) {
                while ($data = mysqli_fetch_assoc($topvideo)) {
                    ?>
                    <h3>Watch Intro Video</h3>
                    <a href="<?= $data['link']; ?>" class="video-btn popup-youtube">
                        <i class='bx bxl-youtube'></i>
                    </a>
                    <?php
                }
            } else {
                echo "No videos found";
            }
            ?>
        </div>
    </div>
</div>
