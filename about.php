<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>

	<?php include 'include/header.php';?>
	
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>A comprehensive solution for streamlining gym operations and fitness tracking</h2>
				</div>
			</div>
		</div>
	</section>


	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>About Us</h2>
			</div>
			<div class="row">

				<div class="col-lg-12 col-sm-6">
			<p>Welcome to FitFusion, Jalandhar’s newest fitness destination! At FitFusion, we believe everyone deserves access to quality fitness facilities without breaking the bank. Our mission is to make health and wellness affordable, accessible, and enjoyable for everyone. Whether you're a fitness enthusiast or just starting your journey, our expert trainers and state-of-the-art equipment are here to support every step you take. We offer a wide range of classes, from high-energy cardio and strength training to yoga and flexibility sessions, catering to all fitness levels and goals. We pride ourselves on creating a welcoming and motivational environment where members can work towards their goals at their own pace. At FitFusion, fitness is more than just a workout—it’s a lifestyle, and we’re excited to be part of Jalandhar’s fitness community, helping you stay healthy, active, and inspired. Join us, and let’s make fitness a priority, together!</p>
				</div>
			</div>
		</div>
	</section>
	
	<?php include 'include/footer.php'; ?>

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
