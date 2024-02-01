<!-- <html>
    <head>
        <title>notification</title>
    </head>
    <body>
        <table class="table table-striped table-hover" border="1" align='center'>
            <tr>
                <th>name</th>
                <th>contact</th>
                <th>subject</th>
               <th>complaint</th> 
               <th>Reply</th>
               <th>date</th>
               
            </tr>
            <?php
                foreach($view as $b)
                {?>
            <tr>
            <td><?php echo $b->name ?></td> 
            <td><?php echo $b->contactno ?></td> 
            
               <td><?php echo $b->subject ?></td> 
               <td><?php echo $b->complaint ?></td> 
               <td><?php echo $b->reply ?></td> 
               <td><?php echo $b->date ?></td> 
               <td>
                <a href="<?php base_url();?>admincomplaintreply/<?php echo $b->comid?>">
                <button >Reply</button>
                </a>
                </td>
               

            </tr>
            <?php
                }
                ?>
            
        </table>
    </body>
</html> -->



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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        
                        <thead>
                            <tr>
                            <th>Name</th>
                <th>Contact</th>
                <th>Subject</th>
               <th>Complaint</th> 
               <th>Reply</th>
               <th>Date</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>Name</th>
                <th>Contact</th>
                <th>Subject</th>
               <th>Complaint</th> 
               <th>Reply</th>
               <th>Date</th>
                             </tr>
                        </tfoot>
                        <tbody>
                   
            <?php
                foreach($view as $b)
                {?>
            <tr>
            <td><?php echo $b->name ?></td> 
            <td><?php echo $b->contactno ?></td> 
            
               <td><?php echo $b->subject ?></td> 
               <td><?php echo $b->complaint ?></td> 
               <td><?php echo $b->reply ?></td> 
               <td><?php echo $b->date ?></td> 
               <td>
                <a href="<?php base_url();?>admincomplaintreply/<?php echo $b->comid?>" class='btn btn-primary'>
                Reply
                </a>
                </td>
               

            </tr>
            <?php
                }
                ?>
            
        </table>
                        
                    </div>
                </div>