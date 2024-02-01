<html>
    <head>
        <title>notification</title>
    </head>
    <body>
        <table class="table table-striped table-hover">
            <tr>
                <th></th>
                <th>subject</th>
               <th>complaint</th> 
               <th>date</th>
               <th>Reply</th>
               <th></th>
               <th></th>
            </tr>
            <?php
                foreach($view as $b)
                {?>
            <tr>
               
                <td></td>
               <td><?php echo $b->subject ?></td> 
               <td><?php echo $b->complaint ?></td> 
               <td><?php echo $b->date ?></td> 
               <td><?php echo $b->reply ?></td>
               
               <?php
               if($b->reply=='')
               {
                ?>
               <td>
                <a class="btn btn-primary" href="<?php base_url();?>usereditcomplaint/<?php echo $b->comid?>">
                Edit
                </a>
                </td>
               <td>
                <a class="btn btn-info" href="<?php base_url();?>deletecomplaint/<?php echo $b->comid?>">
                delete</a>
                </td>
                <?php
               }
               else
               {
               ?>
               <td></td><td></td>
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