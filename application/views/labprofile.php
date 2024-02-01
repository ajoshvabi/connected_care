<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
<style>
  img {
  display: inline-block; position: relative; width: 150px; height: 150px; overflow: hidden; border-radius: 50%; } .circular--landscape img { width: auto; height: 100%; margin-left: -50px;
}
</style>
  <!-- This element is added by Laravel -->
  <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Lab/labupdateprofile">
    <!-- <h1>Edit Profile</h1> -->
    <!-- <hr> -->


    <div class="row">
      <!-- left column -->
      <!-- <div class="col-md-3">
        <div class="text-center">

          <img src="" alt="avatar">
          <h6>Upload your photo...</h6>
        

          
          <input type="hidden" name="_token" value="">
        </div>
      </div> -->

      <!-- edit form column -->
      <div class="col-md-7 personal-info">

        <h3>Update profile</h3>

        <!-- Change this to a <form> to reproduce your original issue -->
        <div class="form-horizontal" role="form">
       
        <!-- <input type="hidden" value="<?php echo $hid ?>" name="hid"> -->
        <?php
        foreach($view as $v)
        {
            ?>
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="<?php echo $v->labname; ?>">
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
           
              <textarea class="form-control" name="address"><?php echo $v->labaddress; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Pincode:</label>
            <div class="col-lg-8">
              <input class="form-control" name="pincode" type="text" value="<?php echo $v->labpin; ?>">
            </div>
          </div>


          <div class="form-group">
          <label class="col-lg-3 control-label">District:</label>
          <div class="col-lg-8">
                        <select name="district" class="form-control">
                            <option><?php echo $v->labdistrict; ?></option>
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
          

          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <input class="form-control" name="city" type="text"  >
            </div>
          </div> -->
         
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
              <input class="form-control" name="contact" type="text" value="<?php echo $v->labcontactno; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $v->email; ?>">
            </div>
          </div>
          
          <?php
        }
        ?>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save changes">
              <span></span>
              <a href="<?php echo base_url();?>Lab/profileview"> <input type="button" href="/home2" class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
        

<!-- <hr> -->
</form>
</div>
<!-- Return to post