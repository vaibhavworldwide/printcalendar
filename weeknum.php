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
<?php if(isset($_POST['submit'])){
  $current_date=$_POST['date'];

 $date = new DateTime($current_date);
$weeks = $date->format("W");
$weeks="Weeknummer : ".$weeks;


} ?>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>Week Number Calculator</h2>
</div> 
<div class="diffStart">
  <center>
 <div>   
  <form method="post">
  <label for=""> Date:</label>
 <input type="date" name="date" id="date1">
    
 
 <div class="diffSubmit">
  <br><br>
<input id="diffSubmit" name="submit" type="submit" onclick="submit()">
</div></form>



</div>

<br><br>

</center>

<p><?php if (!empty($weeks)) {
echo $weeks;
} ?></p>


<div class="diffText">

<div id="reset">
    <a href="weeknum.php"><button>Reset</button>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<script src="js/build_calendar_month_year.js"></script>

<?php include'partials/footer.php'?>
