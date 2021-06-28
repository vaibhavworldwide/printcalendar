
function today($contain){
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var dt=new Date();
      var date=dt.getDate();
      var day=dt.getDay();
      var month=dt.getMonth();
      var year=dt.getFullYear();
      var Dat=dayNames[day]+" "+date+" "+monthNames[month]+" "+year;
      var todayDate=document.createElement('h2');
      todayDate.innerText=Dat;
      $contain.appendChild(todayDate);
  }