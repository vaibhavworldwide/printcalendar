<?php
$title="CalendarEarth-Contact Us";
$description="Contact with CalendarEarth";
$keyword="contact us";
?>
<?php include'partials/header.php'; ?>

<div class="container">
<div class="form">
 <form action="" method="POST">
    <label for="fname">Name</label>
    <input class="txt" type="text" id="name" name="name" placeholder="Your name..">

    <label for="country">Country</label>
    <select class="select" id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="lname">Email</label>
    <input class="txt" type="email" id="email" name="email" placeholder="Your Email ..">
    
    <label for="lname">Contact Number</label>
    <input class="tel" type="tel" id="tel" name="tel" placeholder="Your Contact Number ..">

    <label for="subject">Message</label>
    <textarea class="txt-area" id="subject" name="subject" placeholder="Write something.." style="height:auto"></textarea>

    <input class="submit" type="submit" value="Submit">
   </form>
 </div>
</div>
<?php include'partials/footer.php'; ?>

