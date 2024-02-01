<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>Hospital/adddoctorsalary" method="POST">
        <input type="hidden" name="did" value="<?php echo $did;?>">
            <h2 align="center"><i>Doctor salary</i> </h2>
            <table align="center">
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                    <tr>
                        <td>Amount</td>
                        <td><input class="input-group" type="text" name="amount"></td>
                    </tr>
                <tr>
                <td></td>
                <td>    <input type="submit" value="Pay salary" class="btn btn-primary"></td>
                </tr>

            </table>

        </form>
    </body>
</html>