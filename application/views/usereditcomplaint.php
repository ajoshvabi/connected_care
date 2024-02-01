<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>User/updatecomplaint" method="POST">
        
        <h2 align="center"><i>Complaint</i> </h2>
            <table align="center">
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                    <?php
                    foreach($view as $b)
                    {?>
                    <input type="hidden" name="comid" value="<?php echo $b->comid;?>">
                    <tr>
                        <td>Subject</td>
                        <td><input class="input-group" type="text" name="subject" value="<?php echo $b->subject ?>"></td>
                    </tr>
                    <tr>
                <td>Complaint details</td>
                <td>
                    <textarea class="input-group" name="complaint" id="" cols="30" rows="5"><?php echo $b->complaint ?>

                    </textarea></td>
                </tr>
                <?php
                    }
                    ?>
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>

        </form>
    </body>
</html>