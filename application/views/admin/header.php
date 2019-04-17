<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/assets/css/themify-icons.css">
	<link rel="stylesheet" href="public/assets/css/metisMenu.css">
	<link rel="stylesheet" href="public/assets/css/slicknav.min.css">
	<?php
	if (isset($datatable)) {
	?>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<?php
	}
	?>
	<?php
	if (isset($sweetalert)) {
		?>
		<link rel="stylesheet" href="public/vendors/sweetalert/sweetalert.css">
		<?php
	}
	?>
	<?php
	if (isset($select2)) {
		?>
		<link rel="stylesheet" href="public/vendors/select2/select2.min.css">
		<?php
	}
	?>
	<link rel="stylesheet" href="public/assets/css/typography.css">
	<link rel="stylesheet" href="public/assets/css/default-css.css">
	<link rel="stylesheet" href="public/assets/css/styles.css">
	<link rel="stylesheet" href="public/assets/css/responsive.css">
	<script src="public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div id="preloader">
	<div class="loader"></div>
</div>

<div class="page-container">