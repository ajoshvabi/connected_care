<html>
    <head>
        <title>Search</title>
    </head>
    <body>
        <form action="<?php echo base_url();?>User/donationsearch" method="post">

            <div class="sidebar-widget search card p-4 mb-3 border-3">
		<input type="text" class="form-control" placeholder="search . . . . . . . . ." name="search">
		<!-- <a href="<?php echo base_url();?>User/usersearch" class="btn btn-mian btn-small d-block mt-2">search</a> -->
    <input type="submit" class="btn btn-mian btn-small d-block mt-2">
	</div>
        </form>
        <?php
        if($view<>null)
        {
            ?>

        <table class="table table-striped table-hover">
            <tr>
              <th></th>
                <th>Donar Name </th>
                <th>Blood Group</th>
                <th>District</th>
                <th>City</th>
                <th></th>
            </tr>
            <?php
            foreach($view as $v)
            {
            ?>
            <tr>
              <th></th>
                <td><?php echo $v->name;?></td>
                <td><?php echo $v->bloodgroup;?></td>
                <td><?php echo $v->district;?></td>
                <td><?php echo $v->city;?></td>
                <td><a href="<?php base_url();?>contactdonerview/<?php echo $v->loginid?>"  class="btn btn-primary">Contact</a></td>
                <th></th>
            </tr>
            <?php
            }
        }
            ?>
      
        </table>
        

    </body>
</html>




















