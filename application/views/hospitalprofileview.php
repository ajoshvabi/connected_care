<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Profile</u></h2>
    
    <form enctype="multipart/form-data" method="POST" action="<?php base_url();?>updateprofile">
        <?php
        foreach($view1 as $v)
        {?>
        <table>
           
            
             <tr><td>Hospital Name</td><td><input type="text" name="hname" value="<?php echo $v->hospitalname; ?>"></td></tr>
             <tr><td>Address</td><td><textarea name="address"><?php echo $v->address; ?></textarea></td></tr>
             <tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $v->pincode; ?>"></td></tr>
             <tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3" >
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
             </tr>
                <tr><td>City</td><td><input type="text" name="city" value="<?php echo $v->city; ?>"></td></tr>
                <tr><td>Contact Number</td><td><input type="text" name="contact" value="<?php echo $v->contactno; ?>"></td></tr>
                <tr><td>Contact Number</td><td><input type="text" name="contact" value="<?php echo $v->photo; ?>"></td></tr>

                <tr><td>Photo</td><td><input type="file" name="photo" value="<?php echo $v->photo; ?>"></td></tr>
                <td>Photo<img src="<?php echo base_url('upload/'. $v->photo);?>" height="100px" width="100px"></td>
                <td><input type="file" name="photo" value="a">
                </td></img>
                <td>
                
                <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $v->email; ?>"></td></tr>
               




             <tr><td></td><td><input type="submit" value="Apply"></td></tr>
            
       
        </table>
        <?php
        }
        ?>
    </form>
    
    </center>
</body>
</html> -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
<style>
  img {
  display: inline-block; position: relative; width: 150px; height: 150px; overflow: hidden; border-radius: 50%; } .circular--landscape img { width: auto; height: 100%; margin-left: -50px;
}
</style>
  <!-- This element is added by Laravel -->
  <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Hospital/updateprofile">
    <!-- <h1>Edit Profile</h1> -->
    <!-- <hr> -->


    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">

          <img src="<?php echo base_url('upload/'. $v->photo);?>"  alt="avatar">
          <h6>Upload your photo...</h6>

          <input type="file" name="photo">
          <input type="hidden" name="_token" value="">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-7 personal-info">

        <h3>Add personal info</h3>

        <!-- Change this to a <form> to reproduce your original issue -->
        <div class="form-horizontal" role="form">
       
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Hospital name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="hname" type="text" value="<?php echo $v->hospitalname; ?>">
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Photo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="file" name="photo">
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
           
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
              <input class="form-control" name="city" type="text" value="<?php echo $v->city; ?>"  >
            </div>
          </div>
         
                    <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                Male
              <input type="radio" class="form-radio mt-1" name="gender" value="male">&nbsp;&nbsp;
              Female<input type="radio" class="form-radio mt-1" name="gender" value="female" >
            </div>
          </div> -->




                    


          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" name="age" type="text"  >
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="contact" type="text" value="<?php echo $v->contactno; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $v->email; ?>">
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" name="password" type="password" >
            </div>
          </div> -->

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save change">
              <span></span>
              <a href="<?php echo base_url();?>User/userprofileview"> <input type="button" href="/home2" class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
        

<!-- <hr> -->
</form>
</div>
<!-- Return to post -->