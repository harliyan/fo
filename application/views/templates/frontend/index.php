<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/frontend/header'); ?>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php $this->load->view('templates/frontend/sidebar'); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php $this->load->view('templates/frontend/topbar'); ?>
        <?php $this->load->view($active_view); ?>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
         <div class="container my-auto">
           <div class="copyright text-center my-auto">
             <span>Copyright &copy; Dinas Kominfo Kota Pekalongan 2020</span>
           </div>
         </div>
       </footer>
     </div>
   </div><!-- Footer -->

   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

   <!--  lightbox -->
   <script src="<?php print base_url('lightbox'); ?>/dist/js/lightbox.js"></script>

   <!-- api maps -->
   <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWcWBbOq-dZBEGsVT4HT9bOGwSFtpS5_c&token=79499"></script> -->

   <!-- API DEV -->
 
</html>