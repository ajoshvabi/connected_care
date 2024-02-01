<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">Booked data</h1>
        

        <table class="table table-striped table-hover">
            <tr>
                <!-- <th>Doctor</th> -->
                <th></th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>District</th>
                <th>Date</th>
                <th>Time</th>
                <th>Token</th>
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
                <td><?php echo $d->age; ?></td>
                <td><?php echo $d->address; ?></td>
                <td><?php echo $d->district; ?></td>
                <td><?php echo $d->date; ?></td>
                <td><?php echo $d->time; ?></td>
                <td><?php echo $d->token; ?></td> 





                <?php
                if($d->presc==null)
                {
                    ?>
                <td><a href="<?php echo base_url();?>Doctor/doctoraddprescription/<?php echo $d->id?>" class="btn btn-primary">Add Prescripition</a></td>
                <?php
                }
                else
                {
                    ?>

                <td><a href="<?php echo base_url();?>Doctor/doctorprescriptionview/<?php echo $d->id?>" class="btn btn-info">Prescripition View</a></td>
                
              <?php
                }
                if($d->labstatus=='1')
                {
                ?>
                 
                <td><a href="<?php echo base_url();?>Doctor/labtestview/<?php echo $d->id?>" class="btn btn-info">Lab test view</a></td> 
                <?php
                }
                else{
                ?>
                <td><a href="<?php echo base_url();?>Doctor/labtest/<?php echo $d->id?>" class="btn btn-info">Lab test</a></td>
                <?php
                }
                if($d->reportstatus=='1')
                {
                ?>
                <!-- <td><a href="<?php echo base_url();?>Doctor/downloadreport/<?php echo $d->id?>" class="btn btn-info">Download</a></td> -->
                <td><a href="<?php echo base_url();?>upload/<?php echo $d->testreport?>" >Click to download</a></td>
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