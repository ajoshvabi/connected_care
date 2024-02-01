<!-- hospitaltransfer.php -->
<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form enctype="multipart/form-data" action="<?php echo base_url();?>Hospital/addtrnsdata" method="POST">
            <h2 align="center"><i>data</i> </h2>
            <table align="center">
               
                    <tr>
                        <td>Select Hospital</td>
                        <td>
				<select name="hospital" class="form-control mt-3" >
                <option>select hospital...</option>  
                    <?php
                    foreach($view as $v)
                    {
                    ?>
                <option value="<?php echo $v->loginid; ?>"><?php echo $v->hospitalname; ?></option>  
        
                <?php
                    }
                    ?>  
                    
                </select></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="uid" value="<?php echo $uid;?>">
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

        </form>
    </body>
</html>