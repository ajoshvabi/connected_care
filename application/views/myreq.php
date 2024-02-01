<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">My donation request</h1>
        

        <table class="table table-striped table-hover">
            <tr>
                <!-- <th>Doctor</th> -->
                <th></th>
                <th>Name</th>
                <th>District</th>
                <th>Date</th>
                <th>Time</th>
                <th>Place</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        <?php
            foreach($view as $d)
            {
          
        ?>
        
        
            <tr>
                <td></td>
                <td><?php echo $d->name; ?></td>
                <td><?php echo $d->district; ?></td>
                <td><?php echo $d->vdate; ?></td>
                <td><?php echo $d->vtime; ?></td>
                <td><?php echo $d->vplace; ?></td>
                <?php
                if($d->dstatus==1)
                {?>
                <td>Accecpt</td>
                <td></td>
                    <td></td>
                <?php
                }
                elseif($d->dstatus==2)
                {
                ?>
                    <td>Rejected</td>
                    <td><a href="<?php echo base_url();?>User/dsearch" class="btn btn-info">Find new donner</a></td>
                <?php
                }
                else
                {
                ?>
                    <td>Waiting</td>
                    <td></td>
                    <td></td>
                <?php
                }
                ?>
            </tr> 
            <?php
            }
        
        ?>
        
        
        
        </table>
        

    </body>
</html>