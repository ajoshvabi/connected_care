<html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    <form method="POST" action="<?php echo base_url();?>Registration/appfun">
        <table>
        <tr><td>Full Name</td><td><input type="text" name="fname"></td></tr>
        <tr><td>Address</td><td><textarea name="address"></textarea></td></tr>
        <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female</td></tr>
        <tr><td>DOB</td><td><input type="date" name="dob"></td></tr>
        <tr><td>Contact</td><td><input type="text" name="contact"></td></tr>
        <tr><td>Email</td><td><input type="email" name="email"></td></tr>
        <tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3">
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
        <tr><td></td><td><input type="submit" value="Apply"></td></tr>
        </table>
    </form>
    </center>
</body>
</html>