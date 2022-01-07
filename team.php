<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php include("./config/settings.php"); ?>
<?php session_start(); ?>
<?php 
    require_once('./config/settings.php');
	//select member info and run sql command
    $sql="SELECT * FROM `tblMember`";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);

	//select profile image and run sql command
	$sql2="SELECT * FROM tblimg 
		INNER JOIN tblmember ON tblimg.memberId = tblmember.memberId
		WHERE tblimg.memberId = tblmember.memberId";				 
	$result2=mysqli_query($conn,$sql2);	
	
	//select links and run sql command
	$sql3="SELECT * FROM socialmedia
		INNER JOIN tblmember ON socialmedia.memberId = tblmember.memberId
		WHERE socialmedia.memberId = tblmember.memberId ORDER BY socialmedia.memberId"; 
	$result3=mysqli_query($conn,$sql3);
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Team</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
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
                <a class="navbar-brand logo" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg>
                </a>
				<p>Welcome back to portal! <?php echo $_SESSION['Username'] ?></p>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="./#body">Home</a></li>
                <li><a data-scroll href="./#about">About Us</a></li>
                <li><a data-scroll href="./#services">Services</a></li>
                <li><a data-scroll href="./#portfolio">Portfolio</a></li>
                <li><a data-scroll href="./#our-team">Team</a></li>
                <li><a data-scroll href="./#pricing">Pricing</a></li>
                <li><a data-scroll href="./#blog">Blog</a></li>
                <li><a data-scroll href="./#contact-us">Contact</a></li>
				<li><a data-scroll href="login.php">Login</a></li>
				<li><a data-scroll href="logout.php"><b>Logout</b></a></li>
            </ul>
        </nav>
        <!-- /main nav -->
  
      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->

<!-- 
Start Our Team
=========================================== -->

<?php 
    require_once('./config/settings.php');
	//select member info and run sql command
    $sql="SELECT * FROM `tblMember`";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);

	//select profile image and run sql command
	$sql2="SELECT * FROM tblimg 
		INNER JOIN tblmember ON tblimg.memberId = tblmember.memberId
		WHERE tblimg.memberId = tblmember.memberId";				 
	$result2=mysqli_query($conn,$sql2);	
	
	//select links and run sql command
	$sql3="SELECT * FROM socialmedia
		INNER JOIN tblmember ON socialmedia.memberId = tblmember.memberId
		WHERE socialmedia.memberId = tblmember.memberId ORDER BY socialmedia.memberId"; 
	$result3=mysqli_query($conn,$sql3);
?>

<section id="our-team" class="section">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<h2>Our <span class="color">Team</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			

            <?php while ($data = mysqli_fetch_assoc($result)) {?>
			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<?php 
						$data2 = mysqli_fetch_assoc($result2);	
						if ($data2['memberId']==$data['memberId']) { 
						?>
						<img class="img-responsive" src=<?php echo "'./images/".$data2['imgName']."'"?> alt="<?php echo $data['memberName']?>" style="width: 100%">
						<!-- /member photo -->
						<?php }?>
						
						<!-- member social profile -->
						<?php 
						$data3 = mysqli_fetch_assoc($result3);
						if ($data3['memberId']==$data['memberId']) {
						?>
						<div class="mask">
							<ul class="list-inline">
							<li><a href="<?php echo "https://".$data3['fbLink']?>"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="<?php echo "https://".$data3['twitterLink']?>"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="<?php echo "https://".$data3['youtubeLink']?>"><i class="tf-ion-social-youtube"></i></a></li>
							<li><a href="<?php echo "https://".$data3['printerestLink']?>"><i class="tf-ion-social-pinterest-outline"></i></a></li>
							
							</ul>
						</div>
						<!-- /member social profile -->
						<?php }?>
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4><?php echo $data['memberName']?></h4>
						<span><?php echo $data['memberPosition']?></span>
						<p><?php echo $data['desc']?></p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
				   
               </div>
            </div>
			<!-- end team member -->
            <?php }?>
			
		</div>  	<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
</body>