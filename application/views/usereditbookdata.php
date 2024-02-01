<html>
    <head>
        <title>Search</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
        <form action="<?php echo base_url();?>User/updatebookdata" method="post">
            <table align="center">
            <?php
            foreach($data as $d)
            {
          
        ?>
        <input type="hidden" name="bookid" value="<?php echo $d->id;?>">
        <tr>
            <!-- <td>Doctor name</td>
            <td><input type="text" value="<?php echo $d->name;?>" disabled></td> -->


        </tr>

                <tr>
                    <td>Date</td>
                    <td><input type="text" id="my-date-input" name="date" value="<?php echo $d->date;?>"></td>
                    
               </tr>
               <tr>
               <td>Time</td>
                
                    <td><input type="time" name="time" value="<?php echo $d->time;?>"></td>
                    <tr>
                    <td><input type="submit" class='btn btn-primary'></td>

                </tr>
                <?php
            }
            ?>
            </table>
        </form>

        

    </body>
    <script>
      var days = ['1', '5'];
    var jq = $.noConflict();
jq(document).ready(function() {
    jq.ajax({
    type: "POST",
    data: {
        bookid: <?php echo $id;?>
    },
    url: '<?php echo base_url();?>Hospital/get_days_array_edit',
    dataType: "json",
    success: function(days) {
        console.log(days);
        var myArray = days[0]['day'].split(",");
        jq("#my-date-input").datepicker({

beforeShowDay: function(date) {
  var dayOfWeek = date.getDay().toString();
  if (jq.inArray(dayOfWeek, myArray) !== -1) {
    return [true, "highlight"];
  } else {
    return [false, "", ""];
  }
}
});
    },
    error: function() {
        alert("Error retrieving days array");
    }
});
 
});




</script>
</html>