<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>Doctor/doctorleavedata" method="POST">
        <input type="hidden" name="hid" value="<?php echo $hid;?>">
            <h1>Leave</h1>
            <table align="center">
                <tr>
                <td>Leave</td>
                <td><input class="input-group" type="date" name="leave"></td>
                </tr>
                <tr>
                <td>No of days</td>
                <td><input class="input-group" type="text" name="day"></td>
                </tr>
                <tr>
                <td>Description</td>
                <td>
                <textarea class="input-group" name="description" id="" cols="30" rows="5"></textarea>
            </td>
                </tr>
                <tr>
                <td></td>
                <td>    <input class="btn btn-primary" type="submit" value="submit"></td>
                </tr>

            </table>

        </form>
    </body>
</html>