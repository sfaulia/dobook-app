  

   <!-- Footer -->
    
                <footer class="sticky-footer bg-white">
                    <div class="cotainer my-auto">
                        <div class="copyright text-center my-auto">
                            <span> Copyright &copy; Do'Book<?= date('Y');?></span>
                        </div>
                    </div>
                </footer>

   <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {let fileName= $(this).val().split('\\').pop();$(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>