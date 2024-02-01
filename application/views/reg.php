<html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    <form method="POST" action="<?php echo base_url();?>Registration/regfun">
        <table>
        <tr><td>Name</td><td><input type="text" name="name"></td></tr>
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
</html>