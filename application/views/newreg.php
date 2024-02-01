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
                    <td>dob</td>
                    <td>contact</td>
                    <td>district</td>
                    <td>Email</td>
                </tr>
                <?php foreach($hello as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row->fname;?></td>
                        <td><?php echo $row->address;?></td>
                        <td><?php echo $row->gender;?></td>
                        <td><?php echo $row->dob;?></td>
                        <td><?php echo $row->contact;?></td>
                        <td><?php echo $row->district;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><a href="<?php echo base_url();?>Registration/newed/<?php echo $row->id?>">Edit</td>
                        <td><a href="<?php echo base_url();?>Registration/newdel/<?php echo $row->id?> ">Delete</td>
                        <?php
                }
                ?>

            </table>
        </body>
</html>
