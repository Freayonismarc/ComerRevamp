<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jacinto.marc@gmail.com";
    $email_subject = "Quotation Request";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo '<a href = "contact.html">Back to Contact Us Page</a>.<br /><br />';
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$subject)) {
    $error_message .= 'The Company you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: "."\n".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Who We Are</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		</head>
		<body>	
			<header id="header" id="home">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
							</div>
							<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<b class="glyphicon glyphicon-envelope"><a href="mailto:comerformworks@gmail.com"> comerformworks@gmail.com</a></b>
								<b class="glyphicon glyphicon-earphone"><a href="tel:02 403 5894"> (02) 403-5894</a></b>
								<b class="glyphicon glyphicon-file"><a href="/images/myw3schoolsimage.jpg" download> Catalogues</a></b>				
							</div>
						</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.html"><img src="img/COMER.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="menu-has-children"><a>Products</a>
							<ul>
								<li><a href="1_products-pipe clamps_couplerBS_ordinary.html">Pipe Clamps and Couplers</a></li>
								<li><a href="#">Product 2</a></li>
							</ul>	          
						</li>
						<li><a href="#">Contact</a></li>
						<li><input type="text" placeholder="Search"> <i class="fa fa-search"></i></li>
						</ul>
					</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area2 relative" id="home">	
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<!--<h1 class="text-white">
								About Comer				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>-->
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap aboutus-about" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8 col-md-12 home-about-left">
							<h6>Brand new website to serve you better!</h6>
							<h1>
								<b>Reliability and Safety <br> is our Priority</b>
							</h1>
							<p class="pb-20">
								COMER INDUSTRIAL DEVELOPMENT INCORPORATED is reputed to do all types of scaffolding from private homebuilders to construction towers and to infrastructure projects. Established in 1994, we pride ourselves on being able to provide nearly any type of formworks such as frames for access platforms, concrete support works, braces, pins, clamps, aluma beam, phenolic, pipes, and other various accessories so required.
								<br><br>
								With the vision of being the leading supplier of building materials, we commit maximum efforts to ensure that orders arrive at customer's premises without any delay, observing the just-in-time concept of delivery and providing the most superior products offered to our valued customers with advanced, sophisticated technology and quality services in steel scaffolding. Ever sensitive to changing market needs, COMER has extended our services to manufacture materials on custom-made basis. A wide variety of materials are catered for light to heavy construction purposes. We are also engage in demolition of large structure and high rise buildings
								<br><br>
								Comer's continuous growth strategy is keep ahead of industry trends in product and market knowledge despite of the flabbergasted, upside-down situations of the Philippine Economy. We continue to adopt and pursue the latest development through products and technology transfer from abroad. Our ardent entrepreneurial spirit has steered us to explore the potential of venturing into other related products with the purpose of providing a full range of services to our valued Customers.
							</p>
						</div>
						<div class="col-lg-4 col-md-12 home-about-right relative">
							<form class="form-wrap" action="mail.php">
								<h4 class="text-white pb-20">Request a Quote</h4>
								<div class="form-select" id="service-select">
									<select>
										<option value="1">Select Service</option>
										<option value="2">Phenolic Board</option>
										<option value="3">Scaffolding</option>
										<option value="4">Shorejack</option>
										<option value="5">option</option>
									</select>
								</div>								
								<input type="text" class="form-control" placeholder="name">
								<input type="phone" class="form-control" placeholder="Phone Number">
								<input type="email" class="form-control" placeholder="Email Address">
								<textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
								<button class="primary-btn">Request a Quotation</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6><img src="img/INTERESTED.png" alt="Interested?"></h6>
									<p><a href="about.html"><img src="img/CTA_quotation.png"></a></p>
									<p href=""><img src="img/CTA_partnership.png"></p>
									<p href=""><img src="img/CTA_catalogueDL.png"></p>								
								</div>
							</div>
							<div class="col-lg-5  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<b class="glyphicon glyphicon-earphone"></b><h6>Landline</h6>
									<p><font color="#fff">(632) 294-0392<br>
										(632) 293-1058<br>
										(632) 351-4586<br>
										(632) 921-9303</font></p>
										<br>
									<h6>Mobile No.</h6>
									<p><font color="#fff">Globe: (+63) 917 581 8181 (Viber ready)<br>
										Globe: (+63) 917 532 1236 (Viber ready)<br>
										Sun: (+63) 922 813 3119<br>
										Smart: (+63) 920 967 1300</font></p>
								</div>
							</div>						
							<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
								<div class="single-footer-widget">
									<h6>Fax</h6>
									<p><font color="#fff">(632) 294-2484</font></p>
									<b class="glyphicon glyphicon-envelope"></b><h6>Email Us @</h6>
									<p><font color="#fff">comerformworks@gmail.com<br>
										sales@comermetal.com.ph</font></p>
									<b class="glyphicon glyphicon-map-marker"></b><p><font color="#fff">Address: #68 A. Bonifacio St., Tugatog
										Malabon City, 1470</font></p>			
								</div>
							</div>						
						</div>
					</div>
					<br><br>
					<p class="footer-text" align="center" style="color:#fff">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Comer Industrial Development Inc. All Rights Reserved.<br> Website by: <b><a href="http://dreamdevcreatives.000webhostapp.com/index.html">Dream Dev Creatives</a></b>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</footer>	
				<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

<?php
 
}
?>