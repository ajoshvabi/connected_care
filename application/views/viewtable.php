<html>
    <head>
        <title></title>
    </head>
        <body>
            <table align="center" border="1">
                <tr>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Gender</td>
                    <td>Email</td>
                </tr>
                <?php foreach($view as $row)
                {
                ?>
                    <tr>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->address;?></td>
                        <td><?php echo $row->gender;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><a href="<?php echo base_url();?>Registration/edittab/<?php echo $row->regid?>">Edit</a></td>
                        <td><a href="<?php echo base_url();?>Registration/table_del/<?php echo $row->regid?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
                
         
            </table>
            <center><a href="<?php echo base_url();?>Registration/logout" >Logout</a></center>
        </body>
</html>
