<!-- <html>
    <head>
        <title></title>
    </head>
    <body align="center">
        <form action="<?php echo base_url();?>Admin/adminnotificationadd" method="POST">
        
            <h1>Notification</h1>
            <table align="center">
               
                <td>Add notification</td>
                <td>
                    <textarea name="notification" id="" cols="30" rows="10">

                    </textarea></td>
                </tr>
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit"></td>
                </tr>

            </table>

        </form>
    </body>
</html>

 -->

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">DataTables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">DataTables</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Table</div>
                    </div>
                    <div class="ibox-body">
                    <form action="<?php echo base_url();?>Admin/adminnotificationadd" method="POST">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        
                        <!-- <form action="<?php echo base_url();?>Admin/adminnotificationadd" method="POST"> -->
        <!-- <input type="hidden" name="id" value="<?php echo $id;?>"> -->
            <h1>Notification</h1>
            <!-- <table align="center"> -->
                <!-- <tr>
                <td>fee</td>
                <td><input type="text" name="fee"></td>
                </tr>
                <tr> -->
                <td>Add notification</td>
                <td>
                    <textarea name="notification" id="" cols="100" rows="10">

                    </textarea></td>
                </tr>
                <tr>
                <td></td>
                <td>    <input type="submit" value="submit" class='btn btn-primary'></td>
                </tr>

            </table>

        </form>
                        </table>
                    </div>
                </div>