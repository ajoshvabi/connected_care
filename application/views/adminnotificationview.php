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
                                    <th>Message</th>
                                    <!-- <th>Address</th>
                                    <th>Pincode</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                     -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <!-- <th>Name</th> -->
                                    <th>Message</th>
</tr>
                            </tfoot>
                            <tbody>
                            <?php  foreach($view as $v)
                         { ?>
                                <tr>
                                <td><?php echo $v->notification; ?>		</td>
                                <td><a href="<?php base_url();?>editnotification/<?php echo $v->nid?>">
                                    <button>Edit</button>
                                   </a></td>
                                   <td><a href="<?php base_url();?>deletenotification/<?php echo $v->nid?>">
                                    <button>remove</button>
                                   </a></td>
                              

                                </tr>
                                <?php
                         }
                            ?>
                                
                            
                                
                        
                                
                            </tbody>
                          
                        </table>
                    </div>
                </div>