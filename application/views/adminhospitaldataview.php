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
                                    <th>Hospital Name</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Hospital Name</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                 </tr>
                            </tfoot>
                            <tbody>
                            <?php  foreach($hview as $v)
                         { ?>
                                <tr>
                                <td><?php echo $v->hospitalname; ?>	</td>
                                <td><?php echo $v->address; ?>	</td>
                                <td><?php echo $v->pincode; ?>	</td>
                                <td><?php echo $v->district; ?>	</td>
                                <td><?php echo $v->city; ?>	</td>
                                <td><?php echo $v->contactno; ?>	</td>
                                <td><?php echo $v->email; ?>	</td>
                                    <?php
                                    if($v->status!=1)
                                    {?>
                                    <td><a href="<?php base_url();?>hospitalaccept/<?php echo $v->loginid?>"class="btn btn-info">
                                    Accept
                                   </a></td>
                                   <?php
                                   }
                                   ?>
                                   <td><a href="<?php base_url();?>hospitalreject/<?php echo $v->loginid?>" class="btn btn-secondary">
                                    Reject
                                   </a></td>

                                </tr>
                                <?php
                         }
                            ?>
                           
                                
                            
                                
                        
                                
                            </tbody>
                          
                        </table>
                    </div>
                </div>