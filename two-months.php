<?php
$title="CalendarEarth-Two Month Calendars";
$description="View and download two month calendars for all years in doc format.";
$keyword="two month calendar,download calendar,calendar with two month";
?>
<?php include'partials/header.php'; ?>
<div class="yearlyButton">
<button onclick="prev()">< prev</button>
<button onclick="next()">next ></button>
</div>
<div class="container">
<div id=twom-calen>
</div>
</div>
<div class="container yearDownload">
<br>
<div class="yearButton">
<button onclick="prevYear()">< prev Year</button>
<button onclick="nextYear()">next Year ></button> 
</div>   
<h4>Download Two Month Calendar of <span id="twoMonthCalen"></span>:</h4>
<a href="<?php echo $base_site_url; ?>two-months/2020.docx" target="_blank" id="Linkdocx">DOCX</a><br>
 <br><br>
</div>
<script src="js/build_calendar_month_year.js"></script>
<script>
    var dt=new Date();
	var b=dt.getMonth();
    var year=dt.getFullYear();
    var $mCalendar = document.getElementById("twom-calen");
    var nextMonth=b+1;
    var calendarize = new Calendarize();
    //change month view:
    calendarize.buildMonthCalendar($mCalendar,b,year);
    calendarize.buildMonthCalendar($mCalendar,nextMonth,year);
    set();
function set(){
	  var allbutton = document.getElementsByClassName('switchButton');
      var all = document.getElementsByClassName('month');
      for (var i = 0; i < 2; i++) {
			if (screen.width<600){
			
			all[i].style.width = "100%";
			}
			else if (screen.width>600){
			
			all[i].style.width = "45%";
			}
			all[i].style.height="550px";
			all[i].style.margin="1.6%";
			
		}
        for(var j=0;j<4;j++){
			allbutton[j].style.display="none";
        }
    }   
var swDate=new Date();   
function prev(){
    var calendarize = new Calendarize();
	var $mCalendar = document.getElementById("twom-calen");
    swDate=new Date(swDate.setMonth(swDate.getMonth() - 1));
    var dat=new Date(swDate);
    var b=swDate.getMonth();
    var year1=swDate.getFullYear();
    var next=new Date(dat.setMonth(dat.getMonth()+1));
    var year2=next.getFullYear();
    var nextMonth=next.getMonth();
	clearcontent("twom-calen");
    calendarize.buildMonthCalendar($mCalendar,b,year1);
    calendarize.buildMonthCalendar($mCalendar,nextMonth,year2);
    set();

}	

function next(){
    var calendarize = new Calendarize();
	var $mCalendar = document.getElementById("twom-calen");
    swDate=new Date(swDate.setMonth(swDate.getMonth() + 1));
    var dat=new Date(swDate);
    var b=swDate.getMonth();
    var year1=swDate.getFullYear();
    var next=new Date(dat.setMonth(dat.getMonth()+1));
    var year2=next.getFullYear();
    var nextMonth=next.getMonth();
	clearcontent("twom-calen");
    calendarize.buildMonthCalendar($mCalendar,b,year1);
    calendarize.buildMonthCalendar($mCalendar,nextMonth,year2);
    set();
}
var year=document.getElementById("twoMonthCalen");
    year.innerText=dt.getFullYear();
    var y=2020;
function nextYear(){
if(y<2080){    
    y=y+1;
    var Linkdocx=document.getElementById("Linkdocx");
    Linkdocx.href="<?php echo $base_site_url; ?>two-months/"+y+".docx";
    var year=document.getElementById("twoMonthCalen");
    year.innerText=y;
    }
    else{
        alert("Two Month Calendars are not available above 2080");
        }
    }
function prevYear(){
    if(y>2010){    
    y=y-1;
    var Linkdocx=document.getElementById("Linkdocx");
    Linkdocx.href="<?php echo $base_site_url; ?>two-months/"+y+".docx";
    var year=document.getElementById("twoMonthCalen");
    year.innerText=y;
    }
    else{
        alert("Two Month Calendars are not available below 2010");
        }
}    
</script>

<?php include'partials/footer.php'?>