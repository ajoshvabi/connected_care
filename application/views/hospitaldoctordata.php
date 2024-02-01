
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DentaCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>doctorstyle/css/style.css">
  </head>
  <body>
  

    <section class="home-slider owl-carousel">
    
    </section>
		
		<section class="ftco-section">
      <div class="container">
        <center><h2 class="position">Doctor Details</h2></center>
      	
        <div class="row">
        <?php  foreach($view as $v)
                         { ?>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url('upload/'. $v->photo);?>)"></div>
      				<div class="info text-center">
      					<h3><a href=""><?php echo $v->name; ?></a></h3>
      					<span class="position"><?php echo $v->specialization; ?></span>
                        <table align="center">
                          
                          <tr align="left"><th>Address:</th><td><?php echo $v->address; ?></td></tr>
                          <!-- <tr align="left"> <th>Pincode:</th><td><?php echo $v->pincode; ?></td></tr> -->
                          <tr align="left"><th>District:</th><td><?php echo $v->district; ?></td></tr>
                          <!-- <tr align="left"> <th>City:</th><td><?php echo $v->city; ?></td></tr> -->
                          <!-- <tr align="left"><th>Gender:</th> <td><?php echo $v->gender; ?></td></tr> -->
                          <tr align="left"> <th>Date of birth:</th> <td><?php echo $v->dob; ?></td></tr>
                          <tr align="left"> <th>Phone:</th> <td><?php echo $v->contactno; ?></td></tr>
                          <!-- <tr><td><a href="<?php echo base_url();?>Hospital/hospitaldoctorbookview/<?php echo $v->loginid?>" class="btn btn-info">Booking</a> </td></tr>
                          <tr><td><a href="<?php echo base_url();?>Hospital/doctorsalaryadd/<?php echo $v->loginid?>" class="btn btn-info">Payment</a> </td></tr> -->

                        </table>
                        

      				</div>
              <a href="<?php echo base_url();?>Hospital/hospitaldoctorbookview/<?php echo $v->loginid?>" class="btn btn-info">Booking</a>
                        <a href="<?php echo base_url();?>Hospital/doctorsalaryadd/<?php echo $v->loginid?>" class="btn btn-info">Payment</a>
        		</div>
            
               
        	</div>
            <?php
                         }
                         ?>
            
            
        </div>
      </div>
    </section>


  

  <script src="<?php echo base_url();?>doctorstyle/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/aos.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/google-map.js"></script>
  <script src="<?php echo base_url();?>doctorstyle/js/main.js"></script>
    
  </body>
</html>s