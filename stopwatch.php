<?php
$title="StopWatch";
$description="This Calculator calculates the number of days between two dates.";
$keyword="stopwatch with milisecond";
?>
<?php include'partials/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>Stopwatch</h2>
</div>
</div> 

<br>
<br>
        <script type="text/javascript">
            
         var timeBegan = null
    , timeStopped = null
    , stoppedDuration = 0
    , started = null;

function start() {
    if (timeBegan === null) {
        timeBegan = new Date();
    }

    if (timeStopped !== null) {
        stoppedDuration += (new Date() - timeStopped);
    }
    console.log(stoppedDuration);

    started = setInterval(clockRunning, 10);  
}

function stop() {
    timeStopped = new Date();
    clearInterval(started);
}
 
function reset() {
    clearInterval(started);
    stoppedDuration = 0;
    timeBegan = null;
    timeStopped = null;
    document.getElementById("display-area").innerHTML = "00:00:00.000";
}

function clockRunning(){
    var currentTime = new Date()
        , timeElapsed = new Date(currentTime - timeBegan - stoppedDuration)
        , hour = timeElapsed.getUTCHours()
        , min = timeElapsed.getUTCMinutes()
        , sec = timeElapsed.getUTCSeconds()
        , ms = timeElapsed.getUTCMilliseconds();

    document.getElementById("display-area").innerHTML = 
        (hour > 9 ? hour : "0" + hour) + ":" + 
        (min > 9 ? min : "0" + min) + ":" + 
        (sec > 9 ? sec : "0" + sec) + "." + 
        (ms > 99 ? ms : ms > 9 ? "0" + ms : "00" + ms);
};




        </script>
        <style>
            #display-area { font-size: 50pt; background-color: white; border: transparent; border-radius: 5%;}
            .col{
                background-color: #3B5998;
            }
        </style>
<div class="col">
    <br>
    <br>
        <div>
            <center><output id="display-area">00:00:00.000</output></center>
        </div><br>
        <div><center>
            <button id="toggle-button" onClick="start()">Start</button>
            <button id="toggle-button" onClick="stop()">Stop</button>
            <button id="reset-button" onClick="reset()">Reset</button></center>
        </div>
        <br><br>
    </div>
    </div>
<br>
<br>
    <script src="js/build_calendar_month_year.js"></script>
<?php include'partials/footer.php'?>