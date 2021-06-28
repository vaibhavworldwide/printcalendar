<?php
$title="CalendarEarth-Diffrence Between Dates";
$description="This Calculator calculates the number of days between two dates.";
$keyword="diffrence between dates,days diffrence,number of days between,days in between";
?>
<?php include'partials/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>Business Date to Date</h2>
</div> 
<div class="diffStart">
 <div>   
    <label for="">Start Date:</label>
 <input type="date" id="d1">
 </div>   
 <div>
 <label for="">End Date: &nbsp</label>
 <input type="date" id="d2">
 </div>
 </div> <br><br>
<p style="text-align: center;">Working days count: <span id="dif"></span></p>

<div class="diffStart">
<button id="calc">Calculate</button>
<div id="reset">
    <button onclick="reset()">Reset</button>

</div>
</div>
<br>
<br>
</div>

</div>
<!-- <input type="date" id="d1" value="2021-06-03">
 -->
 <!-- <input type="date" id="d2" value="2021-07-03"> -->
<br>
<br>
<br>
<br>

<script src="js/build_calendar_month_year.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
    
    $(document).ready(function(){
    $('#calc').click(function(){
  var d1 = $('#d1').val();
  var d2 = $('#d2').val();
  // alert(d1);
        $('#dif').text(workingDaysBetweenDates(d1,d2));
    });
});
function workingDaysBetweenDates(d0, d1) {
    var startDate = parseDate(d0);
    var endDate = parseDate(d1);  
    // Validate input
    if (endDate < startDate)
        return 0;
    
    // Calculate days between dates
    var millisecondsPerDay = 86400 * 1000; // Day in milliseconds
    startDate.setHours(0,0,0,1);  // Start just after midnight
    endDate.setHours(23,59,59,999);  // End just before midnight
    var diff = endDate - startDate;  // Milliseconds between datetime objects    
    var days = Math.ceil(diff / millisecondsPerDay);
    
    // Subtract two weekend days for every week in between
    var weeks = Math.floor(days / 7);
    days = days - (weeks * 1);

    // Handle special cases
    var startDay = startDate.getDay();
    var endDay = endDate.getDay();
    
    // Remove weekend not previously removed.   
    if (startDay - endDay > 1)         
        days = days - 2;      
    
    // Remove start day if span starts on Sunday but ends before Saturday
    if (startDay == 0 && endDay != 6)
        days = days - 1  
            
    // Remove end day if span ends on Saturday but starts after Sunday
    if (endDay == 6 && startDay != 0)
        days = days - 1  
    
    return days;
}
function parseDate(input) {
    // Transform date from text to date
  var parts = input.match(/(\d+)/g);
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
}


function reset(){
 location.reload();
}


</script>

<?php include'partials/footer.php'?>


