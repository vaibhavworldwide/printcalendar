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
    <h2>Calculate Days Between Dates</h2>
</div> 
<div class="diffStart">
 <div>   
    <label for="">Start Date:</label>
 <input type="date" id="date1">
 </div>   
 <div>
 <label for="">End Date: &nbsp</label>
 <input type="date" id="date2">
 </div>
 </div> <br><br>
 <div class="diffSubmit">
<input id="diffSubmit" type="submit" onclick="submit()">
</div>
<div class="diffText">
<h4>First Date: <span id="firstDate"></span></h4>
<h4>Second Date: <span id="secondDate"></span></h4>
<h4> The Seconds in Between are: <span id="second"></span> </h4>
<h4> The Minutes in Between are: <span id="minute"></span> </h4>
<h4> The Hours in Between are: <span id="hour"></span> </h4>
<div id="reset">
    <button onclick="reset()">Reset</button>
</div>
<h4>The Number Of Days In Between Are: <span id="diffrence"></span></h4>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<script src="js/build_calendar_month_year.js"></script>
<script>
function submit(){
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var $mCalendar = document.getElementById("diff");
   var calendarize = new Calendarize();
   var firDt=document.getElementById("firstDate");
   var secDt=document.getElementById("secondDate");
   var input1=document.getElementById('date1').value;
   dt1=new Date(input1);
   firDt.innerText=dt1.getDate()+" "+monthNames[dt1.getMonth()]+" "+dt1.getFullYear();
   var input2=document.getElementById('date2').value;
   dt2=new Date(input2);
   secDt.innerText=dt2.getDate()+" "+monthNames[dt2.getMonth()]+" "+dt2.getFullYear();
   var diff=input1-input2;
   var input1=input1.split('-');
   var dt_t1=new Date(input1[0],input1[1]-1,input1[2]);
   var dt_t1_tm=dt_t1.getTime();
   var input2=input2.split('-');
   var dt_t2=new Date(input2[0],input2[1]-1,input2[2]);
   var dt_t2_tm=dt_t2.getTime();
   var one_day = 24*60*60*1000;
   var seconds=1000;
   var min=60*1000;
   var hour=60*60*1000;
   var diff_days=Math.abs((dt_t1_tm-dt_t2_tm)/one_day);
   var diff_days_sec=Math.abs((dt_t1_tm-dt_t2_tm)/seconds);
   var diff_days_min=Math.abs((dt_t1_tm-dt_t2_tm)/min);
   var diff_days_hr=Math.abs((dt_t1_tm-dt_t2_tm)/hour);
   diff_days=Math.floor(diff_days);
   diff_days_sec=Math.floor(diff_days_sec);
   diff_days_min=Math.floor(diff_days_min);
   diff_days_hr=Math.floor(diff_days_hr);
   var diffSec=document.getElementById('second');
   var diffMin=document.getElementById('minute');
   var diffHr=document.getElementById('hour');
   var diffrence=document.getElementById('diffrence');
   diffSec.innerText=diff_days_sec+" "+"seconds";
   diffMin.innerText=diff_days_min+" "+"minutes";
   diffHr.innerText=diff_days_hr+" "+"hours";
   diffrence.innerText= diff_days+" "+"Days";
}
function reset(){
 location.reload();
}
</script>
<?php include'partials/footer.php'?>