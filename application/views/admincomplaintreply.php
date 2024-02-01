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
        <form action="<?php echo base_url();?>Admin/adminreplayadd" method="POST">
        <input type="hidden" name="comid" value="<?php echo $comid;?>">
            <h1>Complaint</h1>
            <table align="center">
                <td>Add reply</td>
                <?php
                foreach($view as $b)
                {?>
                <td>
                    <textarea name="reply" id="" cols="30" rows="10">
                        <?php echo $b->reply;?>
                    </textarea></td>
                    <?php
                }
                ?>
                </tr>
               
                <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
        </div>
                </div>