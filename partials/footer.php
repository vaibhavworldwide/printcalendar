
<div class="footer-container">
<div class="footer">
   <br>
  <div>
  <a href="<?php echo $base_site_url; ?>contact.php">Contact US</a>
  </div>
  <br>
  <div>
  <a href="<?php echo $base_site_url; ?>about.php">About us</a>
  </div>
   <br>
  <div>
  <a href="<?php echo $base_site_url; ?>privacy-policy.php">Privacy Policy</a>
  </div>
  <br>
  <div>
  <label for="">Share Us</label>  
  <br>
  <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>" class="fa fa-facebook" target="_blank" style="display: inline-block !important"></a>  
  <a href="https://twitter.com/share?url=<?php echo $actual_link ?>" class="fa fa-twitter" target="_blank" style="display: inline-block !important"></a> 
  
  </div>
  <br>
  <?php include 'var.php'; ?>
 <script src="<?php echo $base_site_url; ?>js/main1.js"></script>
  </body>
</html>
