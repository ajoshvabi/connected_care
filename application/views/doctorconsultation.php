<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>Doctor/doctorconsultdata" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">
            <h1 align="center">Consulation data</h1>
            <table align="center">
                <tr>
                <td>Fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr>
                <td>Days</td>
                <td><input type="text" name="time"></td>
                </tr>
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>

        </form>
    </body>
</html>