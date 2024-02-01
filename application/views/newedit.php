<html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    <?php  foreach($editv as $v)
    { ?>
    <form method="POST" action="<?php echo base_url();?>Registration/newupdate">
        <table>
        <tr><td>Full Name</td><td><input type="text" name="fname" value="<?php echo $v->fname; ?>" ></td></tr>
        <tr><td>Address</td><td><textarea name="address"><?php echo $v->fname;?></textarea></td></tr>
        <?php if($v->gender=='male')
        { ?>
        <tr><td>Gender</td><td><input type="radio" name="gender" value="male" checked>Male
        <input type="radio" name="gender" value="female">Female</td></tr>
        <?php } else { ?>
        <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female" checked>Female</td></tr>  
        <?php } ?> 
        <tr><td>DOB</td><td><input type="date" name="dob" value="<?php echo $v->dob; ?>"></td></tr>
        <tr><td>Contact</td><td><input type="text" name="contact" value="<?php echo $v->contact; ?>"></td></tr>
        <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $v->email; ?>"></td></tr>
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
            </tr><input type="hidden" name="id" value="<?php echo $v->id;?>"
        <tr><td></td><td><input type="submit" value="Apply"></td></tr>
        </table>
    </form>
    <?php } ?>
    </center>
</body>
</html>