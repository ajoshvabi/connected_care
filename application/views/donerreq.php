<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">Donation request</h1>
        

        <table class="table table-striped table-hover">
            <tr>
                <!-- <th>Doctor</th> -->
                <th></th>
                <th>Name</th>
                <th>District</th>
                <th>Date</th>
                <th>Time</th>
                <th>Place</th>
                <!-- <th>Lab report</th> -->
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
                if($d->dstatus==0)
                {
                ?>
                <td><a href="<?php echo base_url();?>User/dreqaccept/<?php echo $d->bdid; ?>" class="btn btn-info">Accecpt</a></td> 
                <td><a href="<?php echo base_url();?>User/dreqreject/<?php echo $d->bdid; ?>" class="btn btn-info">Reject</a></td> 
                <?php
                }
                elseif($d->dstatus==1)
                {
                ?>
                <td><a href="<?php echo base_url();?>User/dreqreject/<?php echo $d->bdid; ?>" class="btn btn-info">Reject</a></td> 
                <?php
                }
                elseif($d->dstatus==2)
                {
                ?>
                <td><a href="<?php echo base_url();?>User/dreqaccept/<?php echo $d->bdid; ?>" class="btn btn-info">Accecpt</a></td> 
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