
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title  ?></title>
    <?php include 'var.php';
    ?>
    <meta name="description" content="<?php echo $description  ?>">
    <meta name="keywords" content="<?php echo $keyword  ?>">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="<?php echo $base_site_url; ?>style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="header ">
      <h2>Calendar-Earth</h2>
    </div>
    <div class="menu-container ">
      <div class="container">
      <div class="menu">
        <div class="active" >
         <a href="<?php echo $base_site_url; ?>index.php">Home</a>
        </div>
      <div class="search-container">
         <form action="header.php" id="frmSearch">
          <input class="search" id="txtSearch" type="text" placeholder="Search.." name="search">
         <button class="sumit" type="submit"><i class="fa fa-search"></i></button>
         </form>
       </div>
     <div class="menu-icon">
      <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
      </div>
     </div>
     </div>
    </div>
  <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="search-container-menu">
             <form action="header.php" id="frmSearchMenu">
             <input class="search" id="txtSearchMenu" type="text" placeholder="Search.." name="search">
             <button class="sumit" type="submit"><i class="fa fa-search"></i></button>
             </form>
            </div>
            <a href="<?php echo $base_site_url; ?>index.php" >Home</a>
        <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-calendr')" >Calendars
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-calendr"  class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>yearly.php">Yearly View</a>
            <a href="<?php echo $base_site_url; ?>two-months.php"">Two Month View</a>
            <a href="<?php echo $base_site_url; ?>school_calendar.php">School Calendar</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-holiday')">Country Holidays 
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-holiday" class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/algeria.php">Algeria</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/argentina.php">Argentina</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/australia.php">Australia</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/belgium.php">Belgium</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/brazil.php">Brazil</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/canada.php">Canada</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/china.php">China</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/colombia.php">Colombia</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/denmark.php">Denmark</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/egypt.php">Egypt</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/france.php">France</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/germany.php">Germany</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/greece.php">Greece</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/hongkong.php">Hong Kong</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/hungary.php">Hungary</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/india.php">India</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/indonesia.php">Indonesia</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/ireland.php">Ireland</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/japan.php">Japan</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/kenya.php">Kenya</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/malaysia.php">Malaysia</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/mauritius.php">Mauritius</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/mexico.php">Mexico</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/netherlands.php">Netherlands</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/newzealand.php">New Zealand</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/norway.php">Norway</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/pakistan.php">Pakistan</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/philippines.php">Philippines</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/romania.php">Romania</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/russia.php">Russia</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/singapore.php">Singapore</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/southafrica.php">South Africa</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/southkorea.php">South Korea</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/spain.php">Spain</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/sweden.php">Sweden</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/thailand.php">Thailand</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/turkey.php">Turkey</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/uae.php">UAE</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/unitedkingdom.php">United Kingdom</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/unitedstates.php">United States</a>
            <a href="<?php echo $base_site_url; ?>holidays/countries/2020/vietnam.php">Vietnam</a>
         </div>
        </div>
        <a href="<?php echo $base_site_url; ?>holidays/international/international.php">All International Days</a>
        

       <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-zone')" >Time Zone
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-zone"  class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>timezone/TimeAbbreviations.php">Timezone Abbreviations</a> 
            <a href="<?php echo $base_site_url; ?>daylight.php">DayLights Saving Time</a> 
            <a href="<?php echo $base_site_url; ?>time-zone.php">Timezone Converter</a>
             
            
          </div>
        </div>


       <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-clock')" >World Clock
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-clock"  class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>worldclock.php">Main World</a> 
            
            <a href="<?php echo $base_site_url; ?>time-zone.php">UTC</a>
             
          </div>
        </div>


      



        <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-dates')" >Dates Calculator
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-dates"  class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>diff_btwn_dates.php">Diff of Dates</a>
             <a href="<?php echo $base_site_url; ?>business.php">Business Date To Date</a> 
            <a href="<?php echo $base_site_url; ?>dateadd.php">Date Calculator(add/subtract</a> 
            <a href="<?php echo $base_site_url; ?>weekday.php">Weekday Calculor</a> 
            <a href="<?php echo $base_site_url; ?>weeknum.php">Week Number Calculator</a> 
          </div>
        </div>


        <div class="dropdown">
          <button class="dropbtn" onclick="returnId('dropdown-times')" >Timer
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="dropdown-times"  class="dropdown-content">
            <a href="<?php echo $base_site_url; ?>stopwatch.php">Stop Watch</a>
             <a href="<?php echo $base_site_url; ?>timer.php">Timer</a> 
            
          </div>
        </div>

        
        <br>
        <a href="<?php echo $base_site_url; ?>about.php">About</a>
 </div>


<script>
<?php include 'variable.php'?>
var stringV = 'http://www.google.com/search?q=site:<?php Print($url); ?>'// 
 document.getElementById('frmSearch').onsubmit = function() {
        window.location.href =stringV+ document.getElementById('txtSearch').value;
        return false;
    }
 document.getElementById('frmSearchMenu').onsubmit = function() {
        window.location.href =stringV+ document.getElementById('txtSearchMenu').value;
        return false;
    }
</script>