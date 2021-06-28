<?php
$title="CalendarEarth-Yearly Calendar";
$description="Print yearly calendars for any year with and without international days and holidays of countries.";
$keyword="yearly calendar,download calendar,calendar with international days";
?>
<?php include'partials/header.php'; ?>
<div class="">
<h2 class="yearlyTitle">Full year view of <span id="year">2020</span></h2>
</div>
<div class="yearlyButton">
<button onclick="prev()">< prev</button>
<button onclick="current()">current</button>
<button onclick="next()">next ></button>
</div>
<div class="container" id="yearView">
	
<div id="calen"></div>
</div>
<script src="js/build_calendar_month_year.js"></script>
<script>
var currentYear = new Date().getFullYear();
var calendarize = new Calendarize();
var $calendar=document.getElementById("calen");
calendarize.buildYearCalendar($calendar, currentYear);
set();
function set(){
	var all = document.getElementsByClassName('month');
	var allbutton = document.getElementsByClassName('switchButton');
        for (var i = 0; i < all.length; i++) {
			if (screen.width<600){
			
			all[i].style.width = "100%";
			}
			else if (screen.width>600&&screen.width<1000){
			
			all[i].style.width = "45%";
			}
			if (screen.width>1000){
			
			all[i].style.width = "30%";
			}
			all[i].style.height="550px";
			all[i].style.margin="1.6%";
			
		}
		for(var j=0;j<24;j++){
			allbutton[j].style.display="none";
		}
}

function prev(){
	
    var year=document.getElementById("year");
	currentYear=currentYear-1;
	year.innerText=currentYear;
	clearcontent("calen");
	calendarize.buildYearCalendar($calendar, currentYear);
	set();

}	
function current(){
	var year=document.getElementById("year");
	var dt=new Date();
	currentYear = new Date().getFullYear();
	year.innerText=currentYear;
	clearcontent("calen");
	calendarize.buildYearCalendar($calendar, currentYear);
	set();
}

function next(){
	var year=document.getElementById("year");
	currentYear=currentYear+1;
	year.innerText=currentYear;
	clearcontent("calen");
	calendarize.buildYearCalendar($calendar, currentYear);
	set();
}	
function submit(){
	var input=document.getElementById("input").value;
}

</script>
<?php include'partials/yearly_download.php'?>
<?php include'partials/footer.php'?>