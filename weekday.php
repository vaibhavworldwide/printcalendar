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
    <h2>Week Day Calculator</h2>
</div> 

    <?php
       if(isset($_POST['submit']))
      {
       $date=$_POST['date'];

       $a= date('j F, Y', strtotime($date));
       $b='is a';
       $c=date('l', strtotime($date));

      $result= $a .' '.$b. ' '.$c;
  }
     
    ?>



<div class="diffStart">
 <div>
<form action="" name="myform" id="myform" method="post">
          <p>Date</p>
           <input type="date" name="date" class="form-control" />&nbsp;
           <input type="submit" name="submit" value="Calculate" id="findNewDate" /><br /><br />     
        </form>
</div>    
          <div ><h2>result here</h2>
          <div id="result"  style="margin-bottom: 70px"><?php if (!empty($result)){ echo $result; } ?></div>
            </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          
         <div id="reset">
           <a href="weekday.php"><button>Reset</button></a>

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