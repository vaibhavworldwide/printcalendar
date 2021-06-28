var monthNames = ["January", "February", "March", "April", "May", "June",
                      "July", "August", "September", "October", "November", "December"
                    ];
var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];


function eventCalendar(fday,b,year){
	var dt=new Date(fday);
	var element=document.getElementById("eventCalendarContainer");
	var $elementContainer=document.createElement('div');
	var $eventNode=document.createElement('div');
	var $titletext=document.createElement('div');
	var text="Weekly view";
	var $dateSwitchContainer=document.createElement('div');
    var $titleContainer=document.createElement('div');
    var $titleNode=document.createElement('div');
	$elementContainer.classList.add('elementcontainer');
	//embedding title, title content and switch button:
	//First the switch button with titleNode:
	for(var k=0;k<2;k++){
		var $spanContainer=document.createElement('div');
		$spanContainer.classList.add('switchButton');
		var $span=document.createElement('span');
		if(k===0){
				  $span.innerText='<';
				  $spanContainer.appendChild($span);
				  $spanContainer.onclick = function() { switchMonth(3);};
				  $dateSwitchContainer.appendChild($spanContainer);
				}
		$titleNode.innerText =monthNames[b]+" "+year;
		$titleNode.classList.add('eventdate');
		$dateSwitchContainer.classList.add('dateSwitchContainer');
		$dateSwitchContainer.appendChild($titleNode);
		if(k===1){
				 $span.innerText='>';
				 $spanContainer.appendChild($span);
				 $spanContainer.onclick = function() { switchMonth(4);};
				 $dateSwitchContainer.appendChild($spanContainer);
				}		 

	}
    $titleContainer.appendChild($dateSwitchContainer);
	$titletext.innerText=text;
	$titleContainer.appendChild($titletext);
	$titleContainer.classList.add('eventtitle');
	$eventNode.appendChild($titleContainer);
	$elementContainer.appendChild($eventNode);
	var $dayContainer=document.createElement('div');
	$dayContainer.classList.add("daycontnr");
	for(var i=0;i<7;i++)
	{   
		var $dayNode=document.createElement('div');
		var $titleNode=document.createElement('div');
		$titleNode.classList.add("dayDate");
		var $dayname=document.createElement('div');
		var $date=document.createElement('div');
		$dayname.innerText=weekdays[dt.getDay()] 
		var mon=dt.getMonth()+1;
		$date.innerText=dt.getDate()+"/"+mon+"/"+dt.getFullYear();
		$titleNode.appendChild($dayname);
		$titleNode.appendChild($date);
		$dayNode.appendChild($titleNode);
		 $dayContainer.appendChild($dayNode);
	     dt.setDate(dt.getDate()+1);
	}
	$elementContainer.appendChild($dayContainer);
	element.appendChild($elementContainer);
}
