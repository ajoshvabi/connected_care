<!-- hospitaltransfer.php -->
<html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form enctype="multipart/form-data" action="<?php echo base_url();?>Doctor/addtestdata" method="POST">
            <h2 align="center"><i>data</i> </h2>
            <table align="center">
               
                    <tr>
                        <td>Select lab</td>
                        <td>
				<select name="lab" class="form-control mt-3" >
                <option>select lab...</option>  
                    <?php
                    foreach($view as $v)
                    {
                    ?>
                <option value="<?php echo $v->loginid; ?>"><?php echo $v->labname; ?></option>  
        
                <?php
                    }
                    ?>  
                    
                </select></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="bid" value="<?php echo $bid;?>">
                <td>Test type</td>
                <td>
                   <textarea name="tests" id="" cols="30" rows="10"></textarea>
                    <!-- <div class="mb-3">
  <label for="formFileSm" class="form-label"> </label>
  <input class="form-control form-control-sm" id="formFileSm" type="file" name="report">
</div> -->
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