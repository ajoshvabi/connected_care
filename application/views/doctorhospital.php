<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Consultation</u></h2>
    
    <form method="POST" action="<?php echo base_url();?>">
        <table>
        
       
       
            <tr>
                <td><h2>Hospitals</h2></td>
            </tr>
            
           
                <?php  foreach($view as $v)
                         { ?>
                          <tr>
                          <td><a href="<?php base_url();?>doctorconsultation/<?php echo $v->loginid?>"><?php echo $v->hospitalname; ?></a></td>
                         </tr>

                <?php
                         }
                ?>
                

        </table>
    </form>
    
    </center>
</body>
</html> -->







<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DentaCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hospitalstyle/css/style.css">
  </head>
  <body>
    
	  <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Denta<span>Care</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item active"><a href="doctors.html" class="nav-link">Doctors</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
    <!-- END nav -->

    <section class="home-slider owl-carousel">
		
	<!-- <h3 align="center">Registered Hospitals</h3> -->

      <!-- <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctors</h1>
            </div>
          </div>
        </div>
      </div> -->
    </section>
		
		<section class="ftco-section">
		<h3 align="center">Consulting hospitals</h3>
<br>
      <div class="container">
		<!-- <h3 align="center">Registered Hospitals</h3> -->
      	<!-- <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Dentist</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
          </div>
        </div> -->
        <div class="row">
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-0 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div> -->
            <?php  foreach($view as $v)
                         { ?>
                         <a href="<?php base_url();?>doctorleave/<?php echo $v->loginid?>">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url('upload/'. $v->photo);?>">
					<!-- <img class="rounded-circle mt-5" width="150px" src="<?php echo base_url('upload/'. $v->photo);?>"> -->
				</div>
      				<div class="info text-center">
      					<h3><a href="<?php base_url();?>doctorleave/<?php echo $v->loginid?>"><?php echo $v->hospitalname; ?></a></h3>
      					<!-- <span class="position">Dentist</span> -->
      			
      				</div>
        		</div>
        	</div>
            </a>
            <?php
                         }
                ?>
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      			
      				</div>
        		</div>
        	</div> -->
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      			
      				</div>
        		</div>
        	</div> -->
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      			
      				</div>
        		</div>
        	</div> -->
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      			
      				</div>
        		</div>
        	</div> -->
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      			
      				</div>
        		</div>
        	</div> -->



        </div>
      </div>
    </section>


    <!--  -->


  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/aos.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/google-map.js"></script>
  <script src="<?php echo base_url();?>hospitalstyle/js/main.js"></script>
    
  </body>
</html>