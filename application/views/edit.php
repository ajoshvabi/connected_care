<html>
<head>
    <title></title>
</head>
<body>
    <center><h2><u>Registration</u></h2>
    <?php foreach($view as $r)
    {
        ?>
    <form method="POST" action="<?php echo base_url();?>Registration/updatetab">
        <table>
        <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $r->name;?>"></td></tr>
        <tr><td>Address</td><td><textarea name="address" ><?php echo $r->address;?></textarea></td></tr>
        <tr><td>Gender</td><td>
            <?php 
            if($r->gender=='male')
              {?><input type="radio" name="gender" value="male" checked>Male
        <input type="radio" name="gender" value="female">Female</td></tr>
        <?php } else { ?>
            <input type="radio" name="gender" value="male" >Male
        <input type="radio" name="gender" value="female" checked>Female</td></tr>
        <?php } ?>
        <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $r->email;?>"></td></tr>
        <input type="hidden" name="id" value="<?php echo $r->regid;?>">
        <tr><td></td><td><input type="submit" value="Edit"></td></tr>
        </table>
    </form>
    <?php
    }
    ?>
    </center>
</body>
</html>