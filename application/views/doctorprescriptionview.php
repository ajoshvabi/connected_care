<html>
    <head>
        <title>Doctor Prescription</title>
    </head>
    <body>
        <form action="<?php echo base_url();?>Doctor/updatepresc" method="POST">
            <table  align="center">
            <!-- <input type="hidden" name="uid" value="<?php echo $id;?>"> -->
            
            <?php
            foreach($view as $v)
            {
            ?>
            
                <tr>
                <input type="hidden" name="bid" value="<?php echo $v->id;?>">
                    <td>Prescription View
                    </td>
                    <td><textarea name="presc" id="" cols="30" rows="10"><?php echo $v->presc?></textarea></td>
                </tr>
                <?php
                }?>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>