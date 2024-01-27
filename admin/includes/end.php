<?php
define('BASE_URL', '__DIR__'); 
echo __DIR__;
?>
<script src="<?= BASE_URL ?>/assets/js/index.js"></script>
<script>
    console.log("hi from end");
</script>

<script src="<?= BASE_URL ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/perfect-scrollbar.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/smooth-scrollbar.min.js"></script>

<!-- JavaScript Alertify -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    <?php if(isset($_SESSION['message'])) : ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('<?= $_SESSION['message'] ?>');
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
</script>
</body>

</html>