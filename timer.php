<?php include'partials/header.php'; ?>

<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>Timer</h2>
</div> 
</div>

<script type="text/javascript"1>
      days = 2; //starting number of days
  hours = 0; // starting number of hours
 minutes = 2; // starting number of minutes
 seconds = 5;   
totalSeconds =
days * 60 * 60 * 24 + hours * 60 * 60 + minutes * 60 + seconds;

//temporary seconds holder
let tempSeconds = totalSeconds;
const convert = (value, inSeconds) => {
if (value > inSeconds) {
    let x = value % inSeconds;
    tempSeconds = x;
    return (value - x) / inSeconds;
} else {
    return 0;
}
};

//sets seconds
const setSeconds = (s) => {
document.querySelector("#seconds").textContent = s + "s";
};

//sets minutes
const setMinutes = (m) => {
document.querySelector("#minutes").textContent = m + "m";
};

//sets hours
const setHours = (h) => {
document.querySelector("#hours").textContent = h + "h";
};

//sets Days
const setDays = (d) => {
document.querySelector("#days").textContent = d + "d";
};

// Update the count down every 1 second
var x = setInterval(() => {
//clears countdown when all seconds are counted
if (totalSeconds <= 0) {
    clearInterval(x);
}
setDays(convert(tempSeconds, 24 * 60 * 60));
setHours(convert(tempSeconds, 60 * 60));
setMinutes(convert(tempSeconds, 60));
setSeconds(tempSeconds == 60 ? 59 : tempSeconds);
totalSeconds--;
tempSeconds = totalSeconds;
}, 1000);

    </script>
    <style type="text/css"> 

 #countdown-container {
    display: inline-block; /*displays divs on a line*/
    width: 300px; /*gives the div element a width of 300px*/
    margin: 20px 0; /*gives 20px space at the top and bottom of the div element*/
    border-radius: 5px; /*curves the edges of the div element by 5px;*/
    background: #1d81af; /*gives the div element a background color*/
}
#countdown {
    font-family: "Fira Sans", sans-serif; /*changes the text font in the divelement */
    display: inline-block; /*displays divs on a line*/
    padding: 30px; /*creates 30px space between the content of the div element and the walls of the div element*/
    background: #1d81af;
    color: white; /*changes the text color in the div element*/
}

#countdown span {
    font-weight: bold; /*boldens text in the span element*/
    font-size: 30px; /*changes the text size in the span element*/
}









    </style>

        
       <center>
            <div id="countdown-container">
            <div id="countdown">
            <span id="days">0d</span> : <span id="hours">0h</span> :
            <span id="minutes">0m</span> : <span id="seconds">0s</span>
        </div>
        
    </div>
</center>



</div>




<script src="js/build_calendar_month_year.js"></script>
<?php include'partials/footer.php'?>