<html>
    <head>
        <title>Doner</title>
    </head>
    <body>
        <form action="<?php echo base_url();?>User/contactdonner" method="POST">
            <table  align="center">
            <!-- <input type="hidden" name="uid" value="<?php echo $id;?>"> -->
            

            
                <tr>
                <input type="hidden" name="doid" value="<?php echo $donerid?>">
                <td>Date</td>

                <td><input class="input-group" type="date" name="date"></td></tr>
                <tr>
                    <td>Time</td>
                <td><input class="input-group" type="time" name="time"></td></tr>
                <tr>
                    <td>Place
                    </td>
                    <td><textarea name="place" id="" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>