<!----Milestone 3----

Authors:	Ana Sanchez & Tyler Wiggins 
Date:   02/28/2019
File:	AdminHome.php
Layer:  Presentation 
Version: 1.0	 

This file is used as 
admin landing page
after the user has 
been authenicated.
_____________________
    VERSIONS
_____________________

-->
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Admin - eCommerce</title>
<!-- Accessing the bootstrap, jquery,  and javascript-->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
<link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
<link rel="stylesheet"
	href="../assets/css/Registration-Form-with-Photo.css">
<link rel="stylesheet" href="../assets/css/Data-Table-1.css">
<link rel="stylesheet" href="../assets/css/Data-Table.css">
<link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
</head>

<!--  BOdy of our website -->
<body id="page-top">
	<!-- Nav bar outputted! -->
	<?php
include '../includes/NavBar.php';
session_start();
?>
	<!-- End of our nav bar  -->

	<!-- Make a container for the title for UserAdministration -->
	<header class="masthead bg-primary text-white text-center"
		style="color: #18bc9c">
		<div class="container" style="height: 200px">
		<?php 
		if($_SESSION['role'] != 'admin'){
        die("Invalid entry");
        }?>
		<div>
			<h1 class="display-1">Administeration</h1>
		</div>
<div class="container">
		<!-- Container to hold the name of the person that logged in and add user button -->
		<div class="container text-right d-table-cell float-right"
			style="width: 454px; padding: -101px; height: 54px; margin: 43px; color: #18bc9c; background-color: #18bc9c;">
			<p class="text-center float-left" style="color: #2c3e50;">Welcome, <?php echo $_SESSION['username2']?>
				&nbsp;</p>
		</div>
		</div>
		
		<div class="container">
		<p><a style='color: black' href = 'UserAdmin.php'>User Administration</a></p>
		<p><a style='color: black' href = 'ProductAdmin.php'>Product Administration</a></p>
		<p><a style='color: black' href = 'SalesReport.php'>Sales Report</a></p>
		</div>
		</div>


	</header>
	<!-- End of the header of the website, which actually holds most of the content of the website. -->

	<!--  Start of the footer of the website -->
	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p>TBD</p>
				</div>
				<div class="col-md-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase">Around the Web</h4>
					<ul class="list-inline">
						<li class="list-inline-item"><a
							class="btn btn-outline-light btn-social text-center rounded-circle"
							role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
						<li class="list-inline-item"><a
							class="btn btn-outline-light btn-social text-center rounded-circle"
							role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
						<li class="list-inline-item"><a
							class="btn btn-outline-light btn-social text-center rounded-circle"
							role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
						<li class="list-inline-item"><a
							class="btn btn-outline-light btn-social text-center rounded-circle"
							role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4 class="text-uppercase mb-4">About US</h4>
					<p class="lead mb-0">
						<span>We love adventure and we want to help you love it too.&nbsp;</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--  End of the footer of the website -->

	<!-- Start of the copywrite footer of the webiste -->
	<div class="copyright py-4 text-center text-white">
		<div class="container">
			<small>Copyright ©&nbsp;eCommerce 2018</small>
		</div>
	</div>
	<!-- Start of the copywrite footer of the webiste -->

	<!-- Start of div with Class for when the user scrolls to the bottom of the webiste, changes the view of the navbar -->
	<div class="d-lg-none scroll-to-top position-fixed rounded">
		<a class="d-block js-scroll-trigger text-center text-white rounded"
			href="#page-top"><i class="fa fa-chevron-up"></i></a>
	</div>
	<!-- End of div with Class for when the user scrolls to the bottom of the webiste, changes the view of the navbar -->


	<!-- Assets, javascrip and jquery for the website -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/js/freelancer.js"></script>
</body>

</html>

