<?php
$country="International";
$title="CalendarEarth-$country Calendar";
$description="Download $country calendar with days and without days";
$keyword="international days,global calendar,global events,global days";
?>
<?php include '../../partials/header.php' ?>
<div class="holiBox container">
<div class="holidyContainer">
        <h2>All International Days</h2>
 </div>
 <div class="interbody">
  <?php include "interJanuary.php"; ?>
  <?php include "interFebruary.php"; ?>
  <?php include "interMarch.php";?>
  <?php include "interApril.php"; ?>
  <?php include "interMay.php"; ?> 
  <?php include "interJune.php"; ?> 
  <?php include "interJuly.php"; ?>  
  <?php include "interAugust.php"; ?>  
  <?php include "interSeptember.php"; ?>  
  <?php include "interOctober.php"; ?>  
  <?php include "interNovember.php"; ?>  
  <?php include "interDecember.php"; ?>  
    </div>
</div>
<?php include'../../partials/yearly_download.php'?>
<?php
  include '../../partials/footer.php'   
?>
