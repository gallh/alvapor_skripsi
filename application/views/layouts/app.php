<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/summernote/dist/summernote-bs4.css">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
   <title>AL Vapor & Coffee - <?= $title ?></title> -->

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	  <meta name="author" content="Creative Tim">
	  <title>AL Vapor & Coffee</title>
	  <!-- Favicon -->
	  <link rel="icon" href="<?= base_url() ?>/assets/img/brand/favicon.png" type="image/png">
	  <!-- Fonts -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	  <!-- Icons -->
	  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
	  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
	  <!-- Page plugins -->
	  <!-- Argon CSS -->
	  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/argon.css?v=1.2.0" type="text/css">


	  
</head>
<body>

	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
   <!-- End of Navbar -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End for Content -->

   
<!--   <script src="<?= base_url() ?>/assets/vendors/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/popper/popper.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/summernote/dist/summernote.min.js"></script>
	<script>
		$('#summernote').summernote({
			height: 300,
		});
		$('#summernote2').summernote({
			height: 300,
		});
   </script>

   	 -->


	  <script src="<?= base_url() ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
	  <script src="<?= base_url() ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="<?= base_url() ?>/assets/vendor/js-cookie/js.cookie.js"></script>
	  <script src="<?= base_url() ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	  <script src="<?= base_url() ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
	  <!-- Optional JS -->
	  <script src="<?= base_url() ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
	  <script src="<?= base_url() ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
	  <!-- Argon JS -->
	  <script src="<?= base_url() ?>/assets/js/argon.js?v=1.2.0"></script>


</body>
</html>
