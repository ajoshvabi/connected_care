<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>User/addcomplaint" method="POST">
        <!-- <input type="hidden" name="id" value="<?php echo $id;?>"> -->
            <h2 align="center"><i>Complaint</i> </h2>
            <table align="center">
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                    <tr>
                        <td>Subject</td>
                        <td><input class="input-group" type="text" name="subject" placeholder="Enter subject...."></td>
                    </tr>
                    <tr>
                <td>Complaint details</td>
                <td>
                    <textarea class="input-group" name="complaint" id="" cols="30" rows="5">

                    </textarea></td>
                </tr>
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>

        </form>
    </body>
</html>