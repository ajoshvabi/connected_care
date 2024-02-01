<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">Patient data</h1>
        

        <table class="table table-striped table-hover">
            <tr>
                <!-- <th>Doctor</th> -->
                <th></th>
                <th>Patient name</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Status</th>
                <th>Medical reports</th>
                
                <th></th><th></th>
            </tr>
        <?php
            foreach($view as $d)
            {
          
        ?>
        
        
            <tr>
                <td></td>
            <td><?php echo $d->name; ?></td>

            <td><?php echo $d->contactno; ?></td>
                <td><?php echo $d->gender; ?></td>


                <td><?php echo $d->age; ?></td>
                <?php
                if($d->approvestatus=='1' and $d->report==null)
                {
                    ?>
                    <td class="text-primary">Processing</td>
                    <?php
                }
                ?>

                <?php
                if($d->report!=null)
                {
                    ?>
                    <td></td>
                    
                <td><a href="<?php echo base_url();?>upload/<?php echo $d->report;?>" download>Click to download</a></td>
                <!-- <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button> -->
                <?php
                }
                else
                {
                    if($d->approvestatus=='0')
                    {
                        ?>

                        <td class="text-warning">Waiting for user confirmation</td>
                        <?php
                    }
                }
                    ?>

                
                
                <!-- <td><a href="<?php echo base_url();?>upload/<?php echo $d->report;?>"><?php echo $d->report; ?>gfffflh</a></td> -->

               
<td></td>
                <td></td>


                <!-- <td><a href="<?php echo base_url();?>/User/editbookdata/<?php echo $d->id?>"  class="btn btn-primary" >Edit</a></td>
                <td><a href="<?php echo base_url();?>/User/deletebook/<?php echo $d->id?>" class="btn btn-info">Delete</a></td> -->

            </tr>
            <?php
            }
        
        ?>
        </table>
        

    </body>
</html>