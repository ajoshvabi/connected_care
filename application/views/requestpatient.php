<html>
    <head>
        <title></title>
    </head>
    <!-- <link href="<?php echo base_url();?>user/plugins/toastr/css/toastr.min.css" rel="stylesheet"> -->
    <body align="center">
        <form action="<?php echo base_url();?>Hospital/reqpatientdata" method="POST">
        
        <h2 align="center"><i>Patient data</i> </h2>
            <table align="center">
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                
                    <!-- <input type="hidden" name="comid" value="<?php echo $b->comid;?>"> -->
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
                        <td>Patient data</td>
                        <td><input class="input-group" type="text" name="name" ></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input class="input-group" type="text" name="contact" ></td>
                    </tr>
                    <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female</td></tr>
                    <tr>
                        <td>Age</td>
                        <td><input class="input-group" type="text" name="age" ></td>
                    </tr>
                   
              
                <tr>
                <!-- <td>   <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button></td> -->
                <td></td>
                <td>    <input type="submit" value="submit" class="btn btn-primary"></td>
                </tr>

            </table>

        </form>
        <!-- <script src="<?php echo base_url();?>user/plugins/toastr/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>user/plugins/toastr/js/toastr.init.js"></script> -->
    </body>
</html>