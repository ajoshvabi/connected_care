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
                <th>Hospital</th>
                <th>Patient name</th>
                <th>Address</th>
                <th>District</th>
                <th>City</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Contact</th>
         
                <th></th><th></th>
            </tr>
        <?php
            foreach($view as $d)
            {
          
        ?>
        
        
            <tr>
                <td></td>
                <td><?php echo $d->hospitalname; ?></td>
            <td><?php echo $d->name; ?></td>

            <td><?php echo $d->address; ?></td>

             <td><?php echo $d->district; ?></td>
                <td><?php echo $d->city; ?></td>
                <td><?php echo $d->gender; ?></td>


                <td><?php echo $d->age; ?></td>
                <td><?php echo $d->contactno; ?></td>

        <?php
        if($d->report==null)
        {
            ?>
                <td><a href="<?php echo base_url();?>/Hospital/addpreport/<?php echo $d->rhid?>/<?php echo $d->contactno; ?>"  class="btn btn-primary" >Add report</a></td>
        <?php
        }
        ?>

<td></td>
                <td></td>


                <!-- <td><a href="<?php echo base_url();?>/User/editbookdata/<?php echo $d->id?>"  class="btn btn-primary" >Edit</a></td> -->
                <!-- <td><a href="<?php echo base_url();?>/User/deletebook/<?php echo $d->id?>" class="btn btn-info">Delete</a></td> -->

            </tr>
            <?php
            }
        
        ?>
        </table>
        

    </body>
</html>