<html>
    <head>
        <title>Booking</title>
    </head>
    <body>
        <h1 align="center">Test result</h1>
        

        <table class="table table-striped table-hover">
        
            <tr>
                <?php
                foreach($labresult as $l)
                {
                    ?>
                <!-- <td><?php echo $l->testreport; ?></td> -->
                <td ><a href="<?php echo base_url();?>upload/<?php echo $l->testreport;?>" Download>Click download</a></td>
                <?php
                }
                ?>
            </tr>
        




        
        
        
        </table>
        

    </body>
</html>