<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">Test</h1>
        

        <table class="table table-striped table-hover">
            <tr>
                <!-- <th>Doctor</th> -->
                <th></th>
                <!-- <th>Hospital</th> -->
                <th>Patient name</th>
                <th>Test</th>
                <th>Date</th>
                <th>Contact</th>
                <th>Result</th>
                <!-- <th>Gender</th> -->
                <!-- <th>Age</th> -->
                
         
                <th></th><th></th>
            </tr>
        <?php
            foreach($view as $d)
            {
          
        ?>
        
        
            <tr>
                <td></td>
              
            <td><?php echo $d->name; ?></td>

            <td><?php echo $d->test; ?></td>



                <td><?php echo $d->cdate; ?></td>
                <td><?php echo $d->contactno; ?></td>
                <!-- <td><?php echo $d->testreport; ?></td> -->
                <td><a href="<?php echo base_url();?>upload/<?php echo $d->testreport?>" ><?php echo $d->testreport; ?></a></td>
        
               

                <?php
                if($d->testreport==null)
                {
                    ?>


                <td><a href="<?php echo base_url();?>/Lab/labresult/<?php echo $d->tid?>/<?php echo $d->id?>"  class="btn btn-primary" >Add result</a></td>
                <!-- /<?php echo $d->id?> -->
                <!-- <td><a href="<?php echo base_url();?>/User/deletebook/<?php echo $d->id?>" class="btn btn-info">Delete</a></td> -->
                <?php
                }
                else
                {
                    ?>
                    <td><a href="<?php echo base_url();?>/Lab/labresult/<?php echo $d->tid?>/<?php echo $d->id?>"  class="btn btn-primary" >Update result</a></td>
               
                <td></td>
                <td></td>

            </tr>
            <?php
                }
            }
        
        ?>
        </table>
        

    </body>
</html>