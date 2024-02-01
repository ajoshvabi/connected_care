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
                <th>Hospital</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
                <th>Token</th>
                <th>Prescription</th>
                <th></th><th></th>
            </tr>
        <?php
            foreach($data as $d)
            {
          
        ?>
        
        
            <tr>
                <td></td>
            <td><?php echo $d->hospitalname; ?></td>

            <td><?php echo $d->name; ?></td>

                <td><?php echo $d->date; ?></td>
                <td><?php echo $d->time; ?></td>
                <td><?php echo $d->token; ?></td>
                <td><?php echo $d->presc; ?></td>
                <?php
                if($d->presc == null)
                {
                    ?>
                
                <td><a href="<?php echo base_url();?>/User/editbookdata/<?php echo $d->id?>"  class="btn btn-primary" >Edit</a></td>
                <td><a href="<?php echo base_url();?>/User/deletebook/<?php echo $d->id?>" class="btn btn-info">Delete</a></td>
                <?php
                }?>

            </tr>
            <?php
            }
        
        ?>
        </table>
        

    </body>
</html>