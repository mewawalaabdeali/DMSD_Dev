<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zoo Management System </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			
		<div class="banner-header">
			<div class="container">
				<h2>contact</h2>
			</div>
			</div>
	<!--about-->
	<div class="content">
							
			<!--advantage-->
			<div class="advantages">
					<div class="container">
						<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
						
						<div class="advantages-grids">
							<div class="col-md-12 advantage-grid">
								<div class="company_ad">
							<h3>Contact Info</h3>
							 <p></p>
			      			<address>
	 							 <p>Email : Mohammed Aslam</p>
								 <p>Phone : 1340430292034</p>
								 <p>abcw@gmail.com</p>
								
							</address>
							<address>
	 							 <p>Email : Ahmeduddin Yasar Mohammed</p>
								 <p>Phone : 24893248</p>
								 <p>yasar@gmail.com</p>
								
							</address>
						</div>
							</div>	
							
								<div class="clearfix"></div>	
							</div>
						</div><?php } ?>
					</div>
				<!--advantage-->
			<!--specials-->
			 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>