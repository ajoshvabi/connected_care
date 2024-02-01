<html>
    <head>
        <title>Doctor Prescription</title>
    </head>
    <body>
        <form action="<?php echo base_url();?>Doctor/addpresc" method="POST">
            <table  align="center">
            <input type="hidden" name="uid" value="<?php echo $id;?>">
                <tr>
                    <td>Add Prescription</td>
                    <td><textarea name="presc" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>