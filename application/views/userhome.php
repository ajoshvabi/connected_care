<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Megakit| Html5 Agency template</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url();?>user/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url();?>user/css/style.css">

</head>

<body>


<!-- Header Start --> 

<header class="navigation">
	<!-- <div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="<?php echo base_url();?>User/donationreg" ><i class="fa fa-envelope mr-2"></i><span>Blood donation</span></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="<?php echo base_url();?>User/userhome">
		  Connected<span>&nbsp;Care</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/userhome">Home <span class="sr-only">(current)</span></a>
			  </li>
              <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/userdoctorview">doctors<span class="sr-only">(current)</span></a>
			  </li>
			  
			  
			
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Complaints</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="<?php echo base_url();?>User/useraddcomplaint">Add complaint</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>User/usercomplaintview">Complaint view</a></li>
					</ul>
			  </li>

			   <!-- <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li> -->
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donation</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="<?php echo base_url();?>User/donationreg">Blood donation registration</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>User/dsearch">Search</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>User/mydonationreq">MY Request</a></li>

						<li><a class="dropdown-item" href="<?php echo base_url();?>User/donationreq">Request</a></li>
					</ul>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/testresult">Test result<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/userbookdataview">Bookings<span class="sr-only">(current)</span></a>
			  </li>
			   <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
			   <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/usersearch">Search <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>User/userprofileview">Profile<span class="sr-only">(current)</span></a>
			  </li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="<?php echo base_url();?>Admin/logout" class="btn btn-solid-border btn-round-full">Logout</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10">
				<div class="block">
					<span class="d-block mb-3 text-white text-capitalize">Prepare for new future</span>
					<h1 class="animated fadeInUp mb-5">Hospitals <br>are about <br>healing.</h1>
					<a href="<?php echo base_url();?>DUser/userhome" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro Start -->

<section class="section intro">
	<div class="container">
		<div class="row ">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="h6 text-color ">We are creative & expert people</span>
					<h2 class="mt-3 content-title">Every human being  is the author of his own health or desease</h2>
				</div>
			</div>
		</div>
		<!-- <div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="intro-item mb-5 mb-lg-0"> 
					<i class="ti-desktop color-one"></i>
					<h4 class="mt-4 mb-3">Modern & Responsive design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item mb-5 mb-lg-0">
					<i class="ti-medall color-one"></i> 
					<h4 class="mt-4 mb-3">Awarded licensed company</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item">
					<i class="ti-layers-alt color-one"></i>
					<h4 class="mt-4 mb-3">Build your website Professionally</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
				</div>
			</div> 
		</div> -->
	</div>
</section>

<!-- Section Intro END -->
<!-- Section About Start -->

<section class="section about position-relative">
	<div class="bg-about"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6 offset-md-0">
				<div class="about-item ">
					<span class="h6 text-color">What we are</span>
					<h2 class="mt-3 mb-4 position-relative content-title">We are dynamic team </h2>
					<div class="about-content">
						<h4 class="mb-3 position-relative">The health is a team effort.</h4>
						<p class="mb-5">Connected care is the future of healthcare. It allows patients to stay connected with their providers and receive care in a more convenient and efficient way.</p>

						<a href="#" class="btn btn-main btn-round-full">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section About End -->
<!-- section Counter Start -->
<section class="section counter">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold"><?php echo $nouser;?></span> +</h3>
					<p class="text-muted">Users</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold"><?php echo $nodoctor;?> </span>+</h3>
					<p class="text-muted">Doctors</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold"><?php echo $nolab;?></span>+</h3>
					<p class="text-muted">Labs</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold"><?php echo $nohospital;?></span>+</h3>
					<p class="text-muted">Hospitals </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section Counter End  -->
<!--  Section Services Start -->
<!-- section Counter End  -->
<!--  Section Services Start -->
<!-- <section class="section service border-top">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Our Services</span>
					<h2 class="mt-3 content-title ">We provide a wide range of creative services </h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-desktop"></i>
					<h4 class="mb-3">Web development.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-layers"></i>
					<h4 class="mb-3">Interface Design.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-bar-chart"></i>
					<h4 class="mb-3">Business Consulting.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5 mb-lg-0">
					<i class="ti-vector"></i>
					<h4 class="mb-3">Branding.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5 mb-lg-0">
					<i class="ti-android"></i>
					<h4 class="mb-3">App development.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5 mb-lg-0">
					<i class="ti-pencil-alt"></i>
					<h4 class="mb-3">Content creation.</h4>
					<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--  Section Services End -->
 <!-- Section Cta Start --> 
 <section class="section cta">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="cta-item  bg-white p-5 rounded">
					<span class="h6 text-color">Your health is our top priority.</span>
					<h3 class="mt-2 mb-4"> We are here to help you in any way we can.</h3>
					<p class="lead mb-4">Please do not hesitate to contact us if you have any questions or concerns. :</p>
					<h5> <a href="mailto:connectedcareabgs@gmail.com"> <i class="ti-email mr-3"></i>connectedcareabgs@gmail.com</h5></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Section Cta End-->
<!-- Section Testimonial Start -->
<!-- <section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 ">
				<div class="section-title">
					<span class="h6 text-color">Clients testimonial</span>
					<h2 class="mt-3 content-title">Check what's our clients say about us</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row testimonial-wrap">
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">James Watson</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Section Testimonial End -->
<!-- <section class="section latest-blog bg-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Latest News</span>
					<h2 class="mt-3 content-title text-white">Latest articles to enrich knowledge</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card bg-transparent border-0">
					<img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<div class="blog-item-meta">
							<a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
							<a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
							<a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
						</div> 

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">How to improve design with typography?</a></h3>

						<a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card border-0 bg-transparent">
					<img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<div class="blog-item-meta">
							<a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
							<a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
							<a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
						</div>  

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Interactivity design may connect consumer</a></h3>

						<a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card border-0 bg-transparent">
					<img src="images/blog/3.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<div class="blog-item-meta">
							<a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
							<a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
							<a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
						</div> 

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Marketing Strategy to bring more affect</a></h3>

						<a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="mt-70 position-relative">
	<div class="container">
	<div class="cta-block-2 bg-gray p-5 rounded border-1">
		<div class="row justify-content-center align-items-center ">
			<div class="col-lg-7">
				<span class="text-color">Connecting with hospitals is more than just networking; </span>
				<h3 class="mt-2 mb-4 mb-lg-0">It's about forging partnerships that enable innovation, collaboration, and better healthcare outcomes for all.</h3>
			</div>
			<div class="col-lg-4">
			<!-- <a href="mailto:connectedcareabgs@gmail.com">Contact Us</a> -->
				<a href="mailto:connectedcareabgs@gmail.com" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a>
			</div>
		</div>
	</div>
</div>

</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Company</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div> -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<!-- <li><a href="#">Services</a></li> -->
						<li><a href="#">Team</a></li>
						<!-- <a href="mailto:connectedcareabgs@gmail.com" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a> -->
						<li><a href="mailto:connectedcareabgs@gmail.com">Contact</a></li>
					</ul>
				</div>
			</div>
			<!-- <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Subscribe Us</h4>
					<p>Subscribe to get latest news article and resources  </p>

					<form action="#" class="sub-form">
						<input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small">subscribe</a>
					</form>
				</div>
			</div> -->

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>Connected<span>care.</span></h3>
					</div>
					<h6><a href="tel:+23-345-67890" >Support@connectedcareabgs.com</a></h6>
					<!-- <a href="mailto:support@gmail.com"><span class="text-color h4">+23-456-6588</span></a> -->
				</div>
			</div>
		</div>
		
		<!-- <div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
					Distributed by  <a href="https://themewagon.com/" target="_blank">Themewagon</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div> -->
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
      <!-- Main jQuery -->
      <script src="<?php echo base_url();?>user/plugins/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>user/js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="<?php echo base_url();?>user/plugins/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>user/plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="<?php echo base_url();?>user/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo base_url();?>user/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="<?php echo base_url();?>user/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>user/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="<?php echo base_url();?>user/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="<?php echo base_url();?>user/js/script.js"></script>

  </body>
  </html>
   