<div class="container dates">
  <div class="Clndr-cntr">
    <h2 style="color:white">Global Events of <span> Month</span></h2>
 </div>
<div class="container">
  <div class="tbl-box" id="contentBox">
    <?php 
    $month = date('F');
    $variable='inter'.$month.'.php';
    include 'holidays/international/'.$variable;
    ?>
  </div>
</div>
</div>
