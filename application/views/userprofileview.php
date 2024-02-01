<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Profile</u></h2>
    
    <form method="POST" action="<?php echo base_url();?>User/updateuserprofile">
        <table>
       
             <?php  foreach($view as $v)
                         { 
                            ?>
                       
        <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $v->name; ?>	"></td></tr>
        <tr><td>Address</td><td><textarea name="address" 	><?php echo $v->address; ?></textarea></td></tr>
        <tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $v->pincode; ?>"></td></tr>
       
        <tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3">
                <option><?php echo $v->district; ?></option>    
				<option>Thiruvananthapuram</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Eranakulam</option>
                <option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikkod</option>
				<option>Vayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option>
                </select></td>
                <tr><td>City</td><td><input type="text" name="city" value="<?php echo $v->city; ?>"></td></tr>
                <?php
                if($v->gender=='male')
                {
                    ?>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="male" checked>Male
                <input type="radio" name="gender" value="female">Female</td></tr>
                <?php
                }
                else if($v->gender=='female')
                {
                    ?>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="male" >Male
                <input type="radio" name="gender" value="female" checked>Female</td></tr>
                <?php
                }
                ?>
                

                <tr><td>Age</td><td><input type="text" name="age" value="<?php echo $v->age; ?>"></td></tr>

                <tr><td>Contact Number</td><td><input type="text" name="contact" value="<?php echo $v->contactno; ?>"></td></tr>
                <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $v->email; ?>"></td></tr>
                <tr><td>Password</td><td><input type="password" name="password"></td></tr> -->




            <!-- </tr><input type="hidden" name="id" > -->
        <!-- <tr><td></td><td><input type="submit" value="Apply"></td></tr>
        <?php
                         }
                         ?>
        
        </table>
    </form>
    
    </center>
</body>
</html> --> 







<!-- 
<link rel="stylesheet" href="s.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
    <?php  foreach($view as $v)
                         { 
                            ?>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?php echo base_url('upload/'. $v->photo);?>">
            <input type="file" name="photo" value="edit"></img>
            <span class="font-weight-bold"><?php echo $v->name; ?></span><span class="text-black-50"><?php echo $v->email; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>User/updateuserprofile">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" name="name" class="form-control mt-1" placeholder="name" value="<?php echo $v->name; ?>"></div>
                   
                </div>
                
                    <div class="col-md-12"><label class="labels">Address</label><textarea name="address" class="form-control mt-1" placeholder="enter address"><?php echo $v->address; ?></textarea></div>
                  
                    <div class="col-md-12"><label class="labels">Pincode</label><input type="text" name="pincode" class="form-control mt-1" placeholder="enter pincode" value="<?php echo $v->pincode; ?>"></div>



                    <div class="col-md-12"><label class="labels">District</label>
                        <select name="district" class="form-control mt-1">
                     <option><?php echo $v->district; ?></option>          
                <option>Thiruvananthapuram</option>
                <option>Kollam</option>
                <option>Pathanamthitta</option>
                <option>Alapuzha</option>
                <option>Kottayam</option>
                <option>Idukki</option>
                <option>Eranakulam</option>
                <option>Thrissur</option>
                <option>Palakkad</option>
                <option>Malappuram</option>
                <option>Kozhikkod</option>
                <option>Vayanad</option>
                <option>Kannur</option>
                <option>Kasargod</option>
                </select></div>




                    <div class="col-md-12"><label class="labels">City</label><input type="text" name="city" class="form-control mt-1" placeholder="enter city" value="<?php echo $v->city; ?>"></div>

                  
                    <div class="col-md-6"><label class="labels">Gender</label>
                    
                        <?php
                if($v->gender=='male')
                {
                    ?>
                    <br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male &nbsp&nbsp<input type="radio" class="form-radio mt-1" name="gender" value="male" checked>&nbsp&nbsp&nbsp
                        Female &nbsp&nbsp<input type="radio" class="form-radio mt-1" name="gender" value="female">
                        <br>
                        <?php
                }
                else if($v->gender=='female')
                {
                    ?>
                     <br>
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male &nbsp&nbsp<input type="radio" class="form-radio mt-1" name="gender" value="male">&nbsp&nbsp&nbsp
                        Female &nbsp&nbsp<input type="radio" class="form-radio mt-1" name="gender" value="female" checked>
                        <br>
                        <?php
                }
                ?>








                    </div>
                 
                   
                   



                    <div class="col-md-12"><label class="labels">Age</label><input type="text" name="age" class="form-control mt-1" placeholder="enter age" value="<?php echo $v->age; ?>"></div>
                    <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" name="contact" class="form-control mt-1" placeholder="enter contact number" value="<?php echo $v->contactno; ?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email" name="email" class="form-control mt-1" placeholder="enter email id" value="<?php echo $v->email; ?>"></div>
                    
                </div>

                </div> -->
                
                
                <!-- <input   type="submit" value="Apply">
            </div>
            <?php
                         }
                         ?>
        </div>
                        </form>
       
    </div>
</div>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
<style>
  img {
  display: inline-block; position: relative; width: 150px; height: 150px; overflow: hidden; border-radius: 50%; } .circular--landscape img { width: auto; height: 100%; margin-left: -50px;
}
</style>
  <!-- This element is added by Laravel -->
  <form  enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>User/updateuserprofile">
    <!-- <h1>Edit Profile</h1> -->
    <!-- <hr> -->
    <?php  foreach($view as $v)
                         { 
                            ?>

    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">

          <img class="img mb-4"src="<?php echo base_url('upload/'. $v->photo);?>"  alt="avatar">
          <h6>Upload your photo...</h6>

          <input type="file" name="photo">
          <input type="hidden" name="_token" value="">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-7 personal-info">

        <h3>Personal info</h3>

        <!-- Change this to a <form> to reproduce your original issue -->
        <div class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="<?php echo $v->name; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <!-- <input class="form-control" name="address" type="text" value="<?php echo $v->address; ?>"> -->
              <textarea class="form-control" name="address"><?php echo $v->address; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Pincode:</label>
            <div class="col-lg-8">
              <input class="form-control" name="pincode" type="text" value="<?php echo $v->pincode; ?>">
            </div>
          </div>


          <div class="form-group">
          <label class="col-lg-3 control-label">District:</label>
          <div class="col-lg-8">
                        <select name="district" class="form-control">
                     <option><?php echo $v->district; ?></option>          
                <option>Thiruvananthapuram</option>
                <option>Kollam</option>
                <option>Pathanamthitta</option>
                <option>Alapuzha</option>
                <option>Kottayam</option>
                <option>Idukki</option>
                <option>Eranakulam</option>
                <option>Thrissur</option>
                <option>Palakkad</option>
                <option>Malappuram</option>
                <option>Kozhikkod</option>
                <option>Vayanad</option>
                <option>Kannur</option>
                <option>Kasargod</option>
                </select></div>
</div>
          

          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <input class="form-control" name="city" type="text" value="<?php echo $v->city; ?>" >
            </div>
          </div>
          <?php
                if($v->gender=='male')
                {
                    ?>
                    <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                Male
              <input type="radio" class="form-radio mt-1" name="gender" value="male" checked>&nbsp;&nbsp;
              Female<input type="radio" class="form-radio mt-1" name="gender" value="female" >
            </div>
          </div>







<?php
                }
                else if($v->gender=='female')
                {
                    ?>
                    <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                Male
              <input type="radio" class="form-radio mt-1" name="gender" value="male" >&nbsp;&nbsp;
              Female<input type="radio" class="form-radio mt-1" name="gender" value="female" checked>
            </div>
          </div>

                    



<?php
                }
                ?>

          <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" name="age" type="text" value="<?php echo $v->age; ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="contact" type="text" value="<?php echo $v->contactno; ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $v->email; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <a href="<?php echo base_url();?>User/userprofileview"> <input type="button" href="/home2" class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
                         }
                         ?>
        

<!-- <hr> -->
</form>
</div>
<!-- Return to post -->