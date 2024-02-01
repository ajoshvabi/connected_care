<html>
    <head>
        <title>Search</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    </head>
   
    <body>
        <form action="<?php echo base_url();?>User/doctorbookingdata" method="post">
            <table align="center">
                <tr><h3>SELECT DATE AND TIME</h3></tr>
            <input type="hidden" name="did" value="<?php echo $id;?>">
            <input type="hidden" name="doctorid" value="<?php echo $doctorid;?>">

                <tr>
                    <td>Date</td>
                    <td><input type="text" name="date" id="my-date-input"></td>
                    
               </tr>
               <tr>
               <td>Time</td>
                
                    <td><input type="time" name="time"></td>
                    <tr>
                    <td><input type="submit" value="ok" class="btn btn-primary"></td>
</tr>
                </tr>
            </table>
        </form>

        

    </body>
<!-- include jQuery and jQuery UI files -->



<!-- initialize jQuery UI datepicker -->

<script>
      var days = ['1', '5'];
    var jq = $.noConflict();
jq(document).ready(function() {
    jq.ajax({
    type: "POST",
    data: {
        did: <?php echo $id;?>
    },
    url: '<?php echo base_url();?>Hospital/get_days_array',
    dataType: "json",
    success: function(days) {
        console.log(days);
        var myArray = days[0]['day'].split(",");
        jq("#my-date-input").datepicker({

beforeShowDay: function(date) {
  var dayOfWeek = date.getDay().toString();
  if (jq.inArray(dayOfWeek, myArray) !== -1) {
    return [true, "highlight"];
    // var selectedDate = $(this).datepicker('getDate');
    //     console.log(selectedDate);
  } else {
    return [false, "", ""];
  }
}
//,
// onSelect: function(dateText, inst) {
//         // Do something with the selected date
//         console.log(dateText);
});
    },
    error: function() {
        alert("Error retrieving days array");
    }
});
 
});




</script>

</html>








<!-- 
<script>
      var days = ['1', '5'];
    var jq = $.noConflict();
jq(document).ready(function() {
    jq.ajax({
    type: "POST",
    data: {
        did: <?php echo $id;?>
    },
    url: '<?php echo base_url();?>Hospital/get_days_array',
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




</script> -->