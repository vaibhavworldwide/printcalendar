var curr = new Date; // get current date
var first = curr.getDate() - curr.getDay()+1; // First day is the day of the month - the day of the week
var last = first + 6; // last day is the first day + 6

var firstday = new Date(curr.setDate(first));
var lastday = new Date(curr.setDate(last));
var fdMonth=firstday.getMonth();
var fdYear=firstday.getFullYear();
var monthNames = ["January", "February", "March", "April", "May", "June",
                      "July", "August", "September", "October", "November", "December"
                   ];
var days=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
var id="";
var dt = new Date();


//change month on clicking left or right arrow:
var c;
var swDate=new Date();
var swMonth=dt.getMonth();
function switchMonth(i){
	
	var calendarize = new Calendarize();
	var $mCalendar = document.getElementById("m-calen");
	if(i===1){
		swDate=new Date(swDate.setMonth(swDate.getMonth() - 1))
		var b=swDate.getMonth();
		var year=swDate.getFullYear();
		clearcontent("m-calen");
    calendarize.buildMonthCalendar($mCalendar,b,year);
	}  
	
  else if(i===2){
	swDate=new Date(swDate.setMonth(swDate.getMonth() + 1))
	var b=swDate.getMonth();
	var year=swDate.getFullYear();
	clearcontent("m-calen");
  calendarize.buildMonthCalendar($mCalendar,b,year);
  }  
  else if(i===3){  
    firstday=new Date(firstday.setDate(firstday.getDate()-7));
    var b=firstday.getMonth();
    var year=firstday.getFullYear();
    clearcontent("eventCalendarContainer");
    eventCalendar(firstday,b,year);
  }  
  else if(i===4){  
	firstday=new Date(firstday.setDate(firstday.getDate()+7));
  var b=firstday.getMonth();
	var year=firstday.getFullYear();
	clearcontent("eventCalendarContainer");
	eventCalendar(firstday,b,year);
  }  
   }


   //clear a container by its id:
function clearcontent(elementID) { 
	
	var div = document.getElementById(elementID); 
              
            while(div.firstChild) { 
                div.removeChild(div.firstChild);  
}}



// navbar functioning:
 function openNav() {
   if (screen.width<480){
    console.log("from 360");
    document.getElementById("mySidenav").style.width = "90%";
    }
  else if (screen.width>480&&screen.width<600){
      console.log("from 480");
      document.getElementById("mySidenav").style.width = "75%";
    }

else if (screen.width>600&&screen.width<801){
        console.log("from 600");
          document.getElementById("mySidenav").style.width = "50%";
   }
else if (screen.width>801&&screen.width<1025){
      document.getElementById("mySidenav").style.width = "40%";
    }
else if (screen.width>1025){
    console.log("from 1025");
    document.getElementById("mySidenav").style.width = "25%";
  }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function returnId(id){
    myFunction2(id);
  }

  function myFunction2(x) {
    document.getElementById(x).classList.toggle("show");
     }


	 // Close the dropdown if the user clicks outside of it  
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

// scroll to the diffrence of dates column:
window.smoothScroll = function(target) {
  var scrollContainer = target;
  do { //find scroll container
      scrollContainer = scrollContainer.parentNode;
      if (!scrollContainer) return;
      scrollContainer.scrollTop += 1;
  } while (scrollContainer.scrollTop == 0);

  var targetY = 0;
  do { //find the top of target relatively to the container
      if (target == scrollContainer) break;
      targetY += target.offsetTop;
  } while (target = target.offsetParent);

  scroll = function(c, a, b, i) {
      i++; if (i > 30) return;
      c.scrollTop = a + (b - a) / 30 * i;
      setTimeout(function(){ scroll(c, a, b, i); }, 20);
  }
  // start scrolling
  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

