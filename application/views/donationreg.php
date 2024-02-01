<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    <form method="POST" action="<?php echo base_url();?>Registration/regfun">
        <table>
        <tr><td> your blood group</td>
        <td>
				<select name="bloodgroup" class="form-control mt-3" >   
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>O+</option>
				<option>O-</option>
				<option>AB+</option>
                <option>AB-</option>
                </select></td></tr>
        <tr><td>Address</td><td><textarea name="address"></textarea></td></tr>
        <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female</td></tr>
        <tr><td>Email</td><td><input type="email" name="email"></td></tr>
        <tr><td>Password</td><td><input type="password" name="password"></td></tr>
        <tr><td></td><td><input type="submit" value="Register"></td></tr>
        </table>
    </form>
    </center>
</body>
</html> -->












<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
    <form method="POST" action="<?php echo base_url();?>user/donationregdata">
    


    <div class="row">
 
     

      <div class="col-md-7 personal-info">

        <h3>Blood donation registration</h3>

        <div class="form-horizontal" role="form">
       
        
         


          <div class="form-group">
          <label class="col-lg-3 control-label">Select your blood group</label>
          <div class="col-lg-8">
          <select name="bloodgroup" class="form-control mt-3" >   
            <!-- <option disable>ghj</option> -->
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>O+</option>
				<option>O-</option>
				<option>AB+</option>
                <option>AB-</option>
                </select></div>
</div>
          

         
                    <div class="form-group">
            <label class="col-lg-3 control-label">DO you have any previous blood donation history:</label>
            <div class="col-lg-8">
                Yes
              <input type="radio" class="form-radio mt-1" name="pbh" value="yes">&nbsp;&nbsp;
              No<input type="radio" class="form-radio mt-1" name="pbh" value="no" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Did you use any drugs:</label>
            <div class="col-lg-8">
                Yes
              <input type="radio" class="form-radio mt-1" name="duse" value="yes">&nbsp;&nbsp;
              No<input type="radio" class="form-radio mt-1" name="duse" value="no" >
            </div>
          </div>




                    


         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Register">
              <span></span>
              <!-- <a href="<?php echo base_url();?>User/userprofileview"> -->
               <!-- <input type="button" href="<?php echo base_url();?>User/userreg" class="btn btn-default" value="Cancel"></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
   
        


</form>
</div>

 


