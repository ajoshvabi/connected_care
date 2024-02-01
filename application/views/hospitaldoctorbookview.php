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
                <!-- <td><?php echo $d->hid; ?></td> -->
              
              
            </tr>
            <?php
            }
        
        ?>
        </table>
        

    </body>
</html>