<html>
    <head>
        <title>Search</title>
    </head>
    <body>
        
       <?php
         if($view!=null)
         {
          ?>

         <table class="table table-striped table-hover">
            <tr>
              <th></th>
                <th>Lab name</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>District</th>
                <th>Contact</th>
                <th></th>
            </tr>
        <?php
      
            foreach($view as $v)
            {
          
        ?>
        
            <tr>
              <td></td>
                <td><?php echo $v->labname; ?></td>
            
            

                <td><?php echo $v->labaddress; ?></td>
                <td><?php echo $v->labpin; ?></td>
                <td><?php echo $v->labdistrict; ?></td>

                <td><?php echo $v->labcontactno; ?></td>
                <!-- <td><a href="<?php echo base_url();?>Hospital/transfertohospital/<?php echo $v->loginid?>" class="btn btn-mian btn-small d-block mt-2">Transfer</a></td> -->
            </tr>
            <?php
            }
        }
        ?> 
        </table>
        

    </body>
</html>



