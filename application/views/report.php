<!-- hospitaltransfer.php -->
<html>
    <head>
        <title></title>
    </head>
    <body align="center">
    <?php
            if($t!=null)
            {
                ?>
        <form enctype="multipart/form-data" action="<?php echo base_url();?>Hospital/reportadd" method="POST">
            <h2 align="center"><i>data</i> </h2>
            
            <table align="center">
               
                    <tr>
                    <input type="hidden" name="rhid" value="<?php echo $rhid;?>">
                <td>user data</td>
                <td>
                    <!-- <input type="file" name="report"> -->
                    <div class="mb-3">
  <label for="formFileSm" class="form-label"> </label>
  <input class="form-control form-control-sm" id="formFileSm" type="file" name="report">
</div>
                </td>
                </tr>
              
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>
            <?php
            }
            else{
            ?>
            <h2>no data found</h2>
            <?php
            }
            ?>

        </form>
    </body>
</html>