<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    
    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Doctor/login">
        <table>
        <tr><td>Doctor Name</td><td><input type="text" name="name" ></td></tr>
        <tr><td>Address</td><td><textarea name="address"></textarea></td></tr>
        <tr><td>Pincode</td><td><input type="text" name="pincode"></td></tr>
       
        <tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3" >
                <option></option>    
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
                <tr><td>City</td><td><input type="text" name="city"></td></tr>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female</td></tr>
                <tr><td>Date Of Birth</td><td><input type="date" name="dob"></td></tr>
                <tr><td>Specialization</td><td><input type="text" name="spe"></td></tr>



                

                <tr><td>Contact Number</td><td><input type="text" name="contact"></td></tr>
                <tr><td>Photo</td><td><input type="file" name="photo"></td></tr>
                <tr><td>Email</td><td><input type="email" name="email"></td></tr>
                <tr><td>Password</td><td><input type="password" name="password"></td></tr>




            </tr><input type="hidden" name="id" >
        <tr><td></td><td><input type="submit" value="Apply"></td></tr>
        </table>
    </form>
    
    </center>
</body>
</html> -->
<!-- <html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    
    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>user/login">
        <table>
        <tr><td>Name</td><td><input type="text" name="name" required></td></tr>
        <tr><td>Address</td><td><textarea name="address" required></textarea></td></tr>
        <tr><td>Pincode</td><td><input type="text" name="pincode" required></td></tr>
       
        <tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3" required>
                <option></option>    
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
                <tr><td>City</td><td><input type="text" name="city" required></td></tr>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="male" required>Male
                <input type="radio" name="gender" value="female" required>Female</td></tr>
                <tr><td>Age</td><td><input type="text" name="age"required></td></tr>

                <tr><td>Contact Number</td><td><input type="text" name="contact" required></td></tr>
                <tr><td>Photo</td><td><input type="file" name="photo"></td></tr>
                <tr><td>Email</td><td><input type="email" name="email" required></td></tr>
                <tr><td>Password</td><td><input type="password" name="password" required></td></tr>




            </tr><input type="hidden" name="id" >
        <tr><td></td><td><input type="submit" value="Apply"></td></tr>
        </table>
    </form>
    
    </center>
</body>
</html> -->


<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
<style>
  img {
  display: inline-block; position: relative; width: 150px; height: 150px; overflow: hidden; border-radius: 50%; } .circular--landscape img { width: auto; height: 100%; margin-left: -50px;
}
</style>
 
  <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Doctor/login">
   >


    <div class="row">
      
      <div class="col-md-7 personal-info">

        <h3>Add personal info</h3>

        
        <div class="form-horizontal" role="form">
       
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Doctor name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Photo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="file" name="photo">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
           
              <textarea class="form-control" name="address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Pincode:</label>
            <div class="col-lg-8">
              <input class="form-control" name="pincode" type="text" >
            </div>
          </div>


          <div class="form-group">
          <label class="col-lg-3 control-label">District:</label>
          <div class="col-lg-8">
                        <select name="district" class="form-control">
                            
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
              <input class="form-control" name="city" type="text"  >
            </div>
          </div>
         
                    <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                Male
              <input type="radio" class="form-radio mt-1" name="gender" value="male">&nbsp;&nbsp;
              Female<input type="radio" class="form-radio mt-1" name="gender" value="female" >
            </div>
          </div>




                    


          <div class="form-group">
            <label class="col-lg-3 control-label">Date of birth:</label>
            <div class="col-lg-8">
              <input class="form-control" name="dob" type="date"  >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Specialization:</label>
            <div class="col-lg-8">
              <input class="form-control" name="spe" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="contact" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" name="password" type="password" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Register">
              <span></span>
              <a href="<?php echo base_url();?>User/userprofileview"> <input type="button" href="/home2" class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
        

</form>
</div> -->
<!-- Return to post -->





<!-- 



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>user/login">


    <div class="row">
 
     

      <div class="col-md-7 personal-info">

        <h3>Add personal info</h3>

        <div class="form-horizontal" role="form">
       
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Photo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="file" name="photo">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
           
              <textarea class="form-control" name="address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Pincode:</label>
            <div class="col-lg-8">
              <input class="form-control" name="c" type="text" >
            </div>
          </div>


          <div class="form-group">
          <label class="col-lg-3 control-label">District:</label>
          <div class="col-lg-8">
                        <select name="district" class="form-control">
                            
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
              <input class="form-control" name="city" type="text"  >
            </div>
          </div>
         
                    <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                Male
              <input type="radio" class="form-radio mt-1" name="gender" value="male">&nbsp;&nbsp;
              Female<input type="radio" class="form-radio mt-1" name="gender" value="female" >
            </div>
          </div>




                    


          <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" name="age" type="text"  >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="contact" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" name="password" type="password" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Register">
              <span></span>
              <a href="<?php echo base_url();?>User/userprofileview">
               <input type="button" href="<?php echo base_url();?>User/userreg" class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
        


</form>
</div> -->

<!-- sdx -->



<!DOCTYPE html >
<html lang="en" dir="ltr" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Doctor Signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>  
    <link rel="stylesheet" href="<?php echo base_url();?>reg/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Doctor Signup</header>
    
      <div class="form-outer" ng-controller="cntrl">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Doctor/login" name="SaveForm" ng-submit="funcSave()">
          <div class="page slide-page">
           
            <div class="field">
              <div class="label">Name
              <span style="color:red" ng-show="SaveForm.name.$dirty && SaveForm.name.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Name.! </font>
                 </span>
              </div>
              <input type="text" name="name" required  maxlength="60" ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" ng-model="name">
             
            </div>
            <div class="field">
              <div class="label">Address
              <span style="color:red" ng-show="SaveForm.address.$dirty && SaveForm.address.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Address.! </font>
                 </span>
              </div>
             
              <textarea name="address" id="" cols="50" rows="10" required ng-model="address"></textarea>
             
              
            </div>
            <div class="field">
              <div class="label">Photo
              <span style="color:red" ng-show="SaveForm.photo.$dirty && SaveForm.photo.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Photo.! </font>
                 </span>
              </div>
              <input type="file" name="photo" required ng-model="photo">
             
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title"><p> 

            </p></div>
            <div class="field">
              <div class="label">Pincode
              <span style="color:red" ng-show="SaveForm.pincode.$dirty && SaveForm.pincode.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Pincode.! </font>
                 </span>
              </div>
              <input type="number" name="pincode" required maxlength="6" ng-pattern="/^[1-9][0-9]{5}$/"  ng-model="pincode">
              
            </div>
            <div class="field">
              <div class="label">District</div>
              <select name="district" class="form-control">
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
                <option>Wayanad</option>
                <option>Kannur</option>
                <option>Kasargod</option>
              </select>
            </div>
            <div class="field">
              <div class="label">City 
              <span style="color:red" ng-show="SaveForm.city.$dirty && SaveForm.city.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  City.! </font>
                 </span>
              </div>
              <input type="text" name="city" required  maxlength="60" ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" ng-model="city">
             
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
           
            <div class="field">
              <div class="label">Doctor id
              <span style="color:red" ng-show="SaveForm.doctorid.$dirty && SaveForm.doctorid.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Doctor id.! </font>
                 </span>
              </div>
              <input type="text" name="doctorid" required ng-model="doctorid">
               
            </div>
            
            <div class="field">
              <div class="label">Gender</div>
              <select name="gender" class="form-control">
                <option>Male</option>
                <option>Female</option>
                
              </select>
            </div>
            <div class="field">
              <div class="label">Date Of Birth
              <span style="color:red" ng-show="SaveForm.dob.$dirty && SaveForm.dob.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Date Of Birth.! </font>
                 </span>
              </div>
              <input type="date" name="dob" required ng-model="dob">
                
            </div>
           
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>
           <div class="page">
       
           
            <div class="field">
              <div class="label">Specialization
              <span style="color:red" ng-show="SaveForm.spe.$dirty && SaveForm.spe.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Specialization.! </font>
                 </span>
              </div>
              <input type="text" name="spe" required ng-model="spe">
              
            </div>
            <div class="field">
              <div class="label">Phone Number
              <span style="color:red" ng-show="SaveForm.contact.$dirty && SaveForm.contact.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Phone Number.! </font>
                 </span>
              </div>
              <input type="Number" name="contact"  required maxlength="10" ng-pattern="/^[6-9][0-9]{9}$/" ng-model="contact" >
            
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="next-3 next">Next</button>
            </div>
          </div>

        
           <div class="page">
            <div class="title">Log:</div>
            <div class="field">
              <div class="label">Email Address
              <span style="color:red" ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Email.! </font>
                 </span>
              </div>
              <input type="email" name="email" maxlength="100" required ng-pattern="/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/" ng-model="email">
              
              </div>
            <div class="field">
              <div class="label">Password
              <span style="color:red" ng-show="SaveForm.password.$dirty && SaveForm.password.$invalid" class="ng-hide"> 
              <font size="-2">Please Enter Valid  Password.! </font>
                 </span>
              </div>
              <input type="password" name="password" minlength="8" required ng-model="password">
              
            </div>
            <div class="field btns">
              <button class="prev-4 prev">Previous</button>
              <button class="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="<?php echo base_url();?>reg/script.js"></script>
    <script>  
 var app = angular.module("myApp", []);  
      app.controller('cntrl',function($scope){  
          
      //  $scope.funcSave = function()  
      //  {  
      //     // if($scope.SaveForm.$valid) {  
      //     //    alert("Form is Valid..!!");  
      //     //    }  
      //     // else  
      //     // {  
      //     // alert("Form is not Valid..!!");  
      //     // }  
      //  }  
         
       })      
            
</script>  

  </body>
</html>

