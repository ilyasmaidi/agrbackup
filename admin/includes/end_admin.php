
<script src="assets/js/index.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
<script src="assets/js/smooth-scrollbar.min.js"></script>

<!-- JavaScript Alertify -->
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    <script>
                <?php if(isset($_SESSION['message'])) 
                { ?>
                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['message'] ?>');
                <?php 

                unset($_SESSION['message']);
            }             ?>  
            </script>
</script>


























<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="assets/script_admin.js"></script>
</body>
</html>