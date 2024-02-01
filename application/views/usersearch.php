<html>
    <head>
        <title>Search</title>
    </head>
    <body>
        <form action="<?php echo base_url();?>User/usersearch" method="post">
            <!-- <table align="center">
                <tr>                 
                <div class="sidebar-widget search card p-4 mb-3 border-0">
                    <td><input type="text" name="search" placeholder="search"  class="form-control rounded"></td>
                    <td><input type="submit" class="btn btn-primary"></td>
                </div>
                </tr>
            </table> -->
            <div class="sidebar-widget search card p-4 mb-3 border-3">
		<input type="text" class="form-control" placeholder="search . . . . . . . . ." name="search">
		<!-- <a href="<?php echo base_url();?>User/usersearch" class="btn btn-mian btn-small d-block mt-2">search</a> -->
    <input type="submit" class="btn btn-mian btn-small d-block mt-2">
	</div>
        </form>
        <?php
         if($view!=null)
         {
          ?>

        <table class="table table-striped table-hover">
            <tr>
              <th></th>
                <th>Hospital</th>
                <th>Name</th>
                <th>specialization</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>District</th>
                <th>City</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Contact</th>
                <th></th>
            </tr>
        <?php
        // if($view!=null)
        // {
            foreach($view as $v)
            {
          
        ?>
        
            <tr>
              <td></td>
                <td><?php echo $v->hospitalname; ?></td>
             <td><?php echo $v->name; ?></td>
             <td><?php echo $v->specialization; ?></td>

                <td><?php echo $v->address; ?></td>
                <td><?php echo $v->pincode; ?></td>
                <td><?php echo $v->district; ?></td>
                <td><?php echo $v->city; ?></td>
                <td><?php echo $v->gender; ?></td>
                <td><?php echo $v->dob; ?></td>
                <td><?php echo $v->contactno; ?></td>
                <td><a href="<?php echo base_url();?>/User/doctorbooking/<?php echo $v->cid?>/<?php echo $v->loginid ?>" class="btn btn-info">Book Now</a></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>
        

    </body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>DentaCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>book/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>book/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>book/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>book/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>book/css/style.css">
  </head>
  <body>
  <?php
        if($view!=null)
        {
            foreach($view as $v)
            {
          
        ?>
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <label for="appointment_name" class="text-black">Full Name</label>
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <label for="appointment_email" class="text-black">Email</label>
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="appointment_date" class="text-black">Date</label>
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="appointment_time" class="text-black">Time</label>
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <label for="appointment_message" class="text-black">Message</label>
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
            <a href="<?php echo base_url();?>/User/doctorbooking/<?php echo $v->cid?>">
              <input type="submit" value="Make an Appointment" class="btn btn-primary"></a>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
<?php
            }
        }
            ?>
    


  <form action="<?php echo base_url();?>User/usersearch" method="post">
            <table align="center">
                <tr>
                    <td><input type="text" name="search" placeholder="search"></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
    </form>
  



    <table align="center" border="1">
            <tr>
                <th>Hospital</th>
                <th>Name</th>
                <th>specialization</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>District</th>
                <th>City</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Contact</th>
            </tr>
        <?php
        if($view!=null)
        {
            foreach($view as $v)
            {
          
        ?>
        
            <tr>
                <td><?php echo $v->hospitalname; ?></td>
             <td><?php echo $v->name; ?></td>
             <td><?php echo $v->specialization; ?></td>

                <td><?php echo $v->address; ?></td>
                <td><?php echo $v->pincode; ?></td>
                <td><?php echo $v->district; ?></td>
                <td><?php echo $v->city; ?></td>
                <td><?php echo $v->gender; ?></td>
                <td><?php echo $v->dob; ?></td>
                <td><?php echo $v->contactno; ?></td>
                <td><a href="<?php echo base_url();?>/User/doctorbooking/<?php echo $v->cid?>">Book Now</a></td>
                <td><a href="contact.html/<?php echo $v->cid?>" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>




  <table border="2">
      <tr>
        <td>
          book
        </td>
        <td><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></td>
      </tr>
    </table>


























  


  <script src="<?php echo base_url();?>book/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>book/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>book/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>book/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>book/js/aos.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>book/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>book/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>book/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html> -->