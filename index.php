<?php
$title="CalendarEarth";
$description="online printable calendars for any year, including public holidays and observances for countries worldwide.";
$keyword="calendarearth ,calendar, online calendar,yearly calendar,download calendar,calendar download,global events,international days,monthly events";
?>
<?php include'partials/header.php'; ?>
<div id="today" class="thisDate">
  
</div>
<div class="container" id="monthView">
<div id="eventCalendarContainer"></div>      
<div id=m-calen></div>
</div>
<script src="js/build_calendar_month_year.js"></script>
<script src="js/weekly.js"></script>
<script src="js/new.js"></script>
<script>
    var dt=new Date();
    var curr = new Date;
	var b=dt.getMonth();
    var year=dt.getFullYear();
    var first = curr.getDate() - curr.getDay()+1;
    var firstday = new Date(curr.setDate(first));
    var lastday = new Date(curr.setDate(last));
    var last = first + 6;
    var fdMonth=firstday.getMonth();
    var fdYear=firstday.getFullYear();
    var $mCalendar = document.getElementById("m-calen");
    var todayDate=document.getElementById("today");
    var calendarize = new Calendarize();
    //change month view:
	var all = document.getElementsByClassName('month');
    for (var i = 0; i < all.length; i++) {
			
		all[i].style.width = "100%";
        all[i].style.height = "auto";
	}		
    calendarize.buildMonthCalendar($mCalendar,b,year);
    eventCalendar(firstday,fdMonth,fdYear);
    today(todayDate);
</script>

<?php include'partials/events_&_holidays.php'?>
<?php include'partials/yearly_download.php'?>
<div class="container"> <p> For calendars with country holidays go to respective page of the country....</p></div>
<?php include'partials/footer.php'?>