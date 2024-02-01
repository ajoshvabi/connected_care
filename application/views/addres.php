<!-- hospitaltransfer.php -->
<html>
    <head>
        <title></title>
    </head>
    <body align="center">
    
        <form enctype="multipart/form-data" action="<?php echo base_url();?>Lab/addlabresult" method="POST">
            <h2 align="center"><i>data</i> </h2>
            
            <table align="center">
               
                    <tr>
                    <input type="hidden" name="tid" value="<?php echo $tid;?>">
                    <input type="hidden" name="bid" value="<?php echo $bid;?>">
                <td>Add result</td>
                <td>
                   
                    <div class="mb-3">
  <label for="formFileSm" class="form-label"> </label>
  <input class="form-control form-control-sm" id="formFileSm" type="file" name="treport">
</div>
                </td>
                </tr>
              
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>
        

        </form>
    </body>
</html>