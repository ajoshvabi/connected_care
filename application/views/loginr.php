<html>
    <head>
        <title>login</title>
</head>
<body align='center'>
    <h2>Login</h2>
    <table align="center" boader="1">
        <form method="post" action="<?php echo base_url();?>Registration/login">
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" value="login"></tr></td>
       </form>
</table>
