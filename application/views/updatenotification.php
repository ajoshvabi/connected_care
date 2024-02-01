<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>Admin/updatenot" method="POST">
            <h1>Notification</h1>
            <table align="center">
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                <?php  foreach($view as $v)
                         { ?>
                                 <input type="hidden" name="nid" value="<?php echo $v->nid;?>">

                <td>Add notification</td>
                <td>
                    <textarea name="notification" id="" cols="30" rows="10" ><?php echo $v->notification ?>

                    </textarea></td>
                </tr>
                <?php
                         }
                            ?>
                                
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit"></td>
                </tr>

            </table>

        </form>
    </body>
</html>