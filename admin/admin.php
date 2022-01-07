<!DOCTYPE html>
<html class="no-js">
<?php 

	include ('../config/function.php');
	$data=getUserByID($_SESSION['username']);

	$UserID=$data['UserID'];
	$name=$data['Name'];
	$Email=$data['Email'];
	$UserType=$data['UserType'];
	$created_time=$data['created_time'];
	$State=$data['State'];
	$City=$data['City'];
	$Country=$data['Country'];
	$avatar=$data['avatar'];


?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<title>Admin</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="../plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="../plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/admin.css">


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--
	    Start Preloader
	    ==================================== -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader
        ==================================== -->


<!-- 
  Fixed Navigation
  ==================================== -->
  <header id="navigation" class="navbar navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- /responsive nav button -->
  
        <!-- logo -->
        <a class="navbar-brand logo" href="admin.php">
          <!-- <img src="images/logo.png" alt="Website Logo" /> -->
          <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
              </g>
            </g>
          </svg>
        </a>
		<div id="usertitle">
		<p>Welcome back to portal! <?php echo $_SESSION['username'] ?></p>
		</div>
        <!-- /logo -->
      </div>
      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right" role="Navigation">
        <ul id="nav" class="nav navbar-nav navigation-menu">
		  <li><a href="admin.php"><img src="../images/person.png" alt="person" class="profileicon"/></a></li>
          <li><a data-scroll href="admin.php">Home</a></li>
          <li><a data-scroll href="../index.php#about">About Us</a></li>
          <li><a data-scroll href="../index.php#services">Services</a></li>
          <li><a data-scroll href="../index.php#portfolio">Portfolio</a></li>
          <li><a data-scroll href="../index.php#our-team">Team</a></li>
          <li><a data-scroll href="../index.php#pricing">Pricing</a></li>
          <li><a data-scroll href="../index.php#blog">Blog</a></li>
          <li><a data-scroll href="../index.php#contact-us">Contact</a></li>
		  <li><a data-scroll href="../logout.php"><b>Logout</b></a></li>
        </ul>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->
  <div class="title">
  <h1>Hi, <?php echo $name ?>! Welcome back to your dashboard! </h1>
  </div>
  <div class="avatar-container">	
  	<img src="../images/<?php echo $avatar ?>" class="avatar"/>
  </div>
  <div class="box-profile"> 
	  		<h2 class="username"><?php echo $UserID ?> </h2> <br>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;"> User type: <?php echo $UserType ?> </p>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;"> Email: <?php echo $UserID ?> </p>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;"> Location: <?php echo  $State?>, <?php echo $City ?>, <?php echo $Country ?> </p>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;"> Created time: <?php echo $created_time ?> </p> <br><br>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;"> 
			<a data-scroll href="../admin/updateprofile.php?userid=<?php echo $avatar ?>">--- Edit User Profile ---</a> </p>
			<p style="color:whitesmoke; text-align:center; font-size: 1.15em;">
			<a data-scroll href="#management">--- Manage Website ---</a> </p>
  </div>



<section id="management">
  <div class="box-dashboard">
		<div class="dashboard-title">
		<h2>ADMIN DASHBOARD<h2>
		<div class="line"></div>
		</div>
	<div class="contents">
		<ul>
		  <div class="li-wrap">
		  <a href="viewinfo.php">
		  <img src="../images/aboutus.jpg" alt="aboutus" class="li-icon" />
		  		<div class="top-left">
		  </a>
          <li><a data-scroll href="viewinfo.php">-Manage AboutUS Contents-</a></li>
				</div>
		  </div>
		  <div class="li-wrap">
		  <a href="viewservices.php">
		  <img src="../images/services.jpg" alt="services" class="li-icon" />
		  		<div class="top-left">
		  </a>
          <li ><a data-scroll href="viewservices.php">-Manage Services Contents-</a></li>
		  		</div>
		  </div>
		  <div class="li-wrap">
		  <a href="viewportfolio.php">
		  <img src="../images/portfolio.png" alt="portfolio" class="li-icon" />
		  		<div class="top-left">
		  </a>
          <li ><a data-scroll href="viewportfolio.php">-Manage Portfolio Contents-</a></li>
		  		</div>
		  </div>
		  <div class="li-wrap">
		  <a href="viewmember.php">
		  <img src="../images/team.png" alt="team" class="li-icon" />
		  		<div class="top-left">
		  </a>
          <li ><a data-scroll href="viewmember.php">-Manage Team Contents-</a></li>
		  		</div>
		  </div>
		  <div class="li-wrap">
		  <a href="viewpricing.php">
		  <img src="../images/pricing.png" alt="pricing" class="li-icon" />
		  		<div class="top-left">
		  </a>
          <li ><a data-scroll href="viewpricing.php">-Manage Pricing Contents-</a></li>
		  		</div>
		  </div>
		  <div class="li-wrap">
		  <a href="viewblog.php">
		  <img src="../images/blog.jpg" alt="blog" class="li-icon" />
		  		<div class="top-left">
		  </a>
		  <li ><a data-scroll href="viewblog.php">-Manage Blog Contents-</a></li>
		  		</div>
		  </div>	
		  <div class="li-wrap">
		  <a href="viewcontact.php">
		  <img src="../images/contact.png" alt="contact" class="li-icon" />
		  		<div class="top-left">	
		  </a>			  
          <li ><a data-scroll href="viewcontact.php">-Manage Contact Contents-</a></li>
		  		</div>
		  </div>	
        </ul>
	</div>
</section>





	</div>

<!-- end Contact Area
		========================================== -->

<footer id="footer" class="bg-one">
	<div class="container">
		<div class="row wow fadeInUp" data-wow-duration="500ms">
			<div class="col-lg-12">

				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul class="list-inline">
						<li><a href="https://facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="https://twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="tf-ion-social-youtube"></i></a></li>
						<li><a href="https://dribbble.com/themefisher"><i class="tf-ion-social-dribbble-outline"></i></a></li>
						<li><a href="https://pinterest.com/themefisher"><i class="tf-ion-social-pinterest-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->

				<!-- copyright -->
				<div class="copyright text-center">
					<a href="index.html">
						<!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
						<svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC"
									stroke-width="3">
									<ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
									<path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
									<path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
								</g>
							</g>
						</svg>
					</a>
					<br />

					<p>Design And Developed by <a href="http://www.themefisher.com">Themefisher.com</a>. Copyright
						&copy; <script>
							document.write(new Date().getFullYear())
						</script>. All Rights Reserved.</p>
				</div>
				<!-- /copyright -->

			</div> <!-- end col lg 12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</footer> <!-- end footer -->

		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="../plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="../plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="../plugins/filterzr/jquery.filterizr.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="../plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="../plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="../plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="../plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="../plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="../js/script.js"></script>
		
    </body>
</html>