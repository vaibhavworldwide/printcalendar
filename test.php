<html>
<head>
<script language="JavaScript">


function calcTime(city, offset) {
    d = new Date();
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);

    nd = new Date(utc + (3600000*offset));
console.log(nd.toLocaleString());

    return "The local time in " + city + " is " + nd.toLocaleString();

}


alert(calcTime('Bombay', '+5.5'));


alert(calcTime('Singapore', '+8'));

alert(calcTime('London', '+11'));

</script>
</head>
<body>

</body>
</html>