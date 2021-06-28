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
    <h2>Dates Calculators</h2>
</div> 
<div class="diffStart">
<?php 

              if (isset($_POST['search'])) {
                
                
                  $start_date=$_POST['selDate'];
                  $date=$_POST['selDate'];

                  $addsub=$_POST['addsub'];

                  if (!empty($date) and !empty($addsub)) {
                    
                    if($addsub=='+')
                    {
                      if (!empty($_POST['years'])) {
                        $date = date('m/d/Y', strtotime($date. ' + '.$_POST['years'].' year'));   
                      }
                      if (!empty($_POST['months'])) {
                        $date = date('m/d/Y', strtotime($date. ' + '.$_POST['months'].' months'));    
                      }
                      if (!empty($_POST['days'])) {
                        $date = date('m/d/Y', strtotime($date. ' + '.$_POST['days'].' days'));    
                      }
                      
                      
                    }
                    else
                    {
                      if (!empty($_POST['years'])) {
                        $date = date('m/d/Y', strtotime($date. ' - '.$_POST['years'].' year'));   
                      }
                      if (!empty($_POST['months'])) {
                        $date = date('m/d/Y', strtotime($date. ' - '.$_POST['months'].' months'));    
                      }
                      if (!empty($_POST['days'])) {
                        $date = date('m/d/Y', strtotime($date. ' - '.$_POST['days'].' days'));    
                      }
                      
                      
                    }
                  
                  }
                }

               
             ?>

 <div>
<form action="" name="myform" id="myform" method="post">
            Select a date:  <input type="date" name="selDate" value="<?php if (!empty($date)){ echo $start_date; } ?>" /><br /><br />
            Add or Sub <select name="addsub" style="padding: 3px;"><option>+</option><option>-</option></select><br /><br />
            Days <input type="number" min="0" max="10000" value="0" name="days" />&nbsp;
            Months <input type="number" min="0" max="10000" value="0" name="months" />&nbsp;
            Years <input type="number" min="0" max="10000" value="0" name="years" />&nbsp;
            &nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search" value="Calculate" id="findNewDate" /><br /><br />     
        </form>
</div>    
          <div><h2>result here</h2>
          <div id="result"><?php if (!empty($date)){ echo $date; } ?></div>
            </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          
         <div id="reset">
           <a href="dateadd.php"><button>Reset</button>

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