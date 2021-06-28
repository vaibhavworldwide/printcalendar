//getting days for weekly view:
	var $timeDayCon=document.createElement('div');
	var $timeContainer=document.createElement('div');
	var $fix=document.createElement('div');
	$fix.innerText='time';
	$fix.classList.add('fix');
	$timeContainer.appendChild($fix);
	var time=12;
	for(var k=0;k<12;k++){
		var $time=document.createElement('div');
		if(time===12){
			time++;
		}
		else{
			$time.innerText=k+" "+"AM";
		}
	$time.classList.add('time1');	
	$timeContainer.appendChild($time);
	}
	var antim=12;
	for(var s=0;s<12;s++){
		var $time=document.createElement('div');
		if(antim===12){
			$time.innerText=antim+" "+"PM";
			antim++;
		}
		else{
			$time.innerText=s+" "+"PM";
		}
	$time.classList.add('time2');	
	$timeContainer.appendChild($time);
	}
	$timeContainer.classList.add('timeContainer');
	$timeDayCon.appendChild($timeContainer);
	var $dayInnerContainer=document.createElement('div');
	var $dayOuterContainer=document.createElement('div');
	$dayInnerContainer.classList.add('eventInnerBox');
	//create nodes of each day of week:
	for(var i=0;i<7;i++)
	{   
		var $dayNode=document.createElement('div');
		var $titleNode=document.createElement('div');
		var $listOfEvents=document.createElement('ul');
		$listOfEvents.classList.add('eventUl');
		$titleNode.innerText=days[fday.getDay()]+" "+"/"+fday.getDate();
		$titleNode.classList.add('eventdays');
		$dayNode.appendChild($titleNode);
		for(var j=0;j<24;j++){
			var $input=document.createElement('input');
			$input.classList.add('eventList');
			$listOfEvents.appendChild($input);
		}
		$dayNode.appendChild($listOfEvents);
		$dayNode.classList.add('dayNode');
		$dayInnerContainer.appendChild($dayNode);
		fday.setDate(fday.getDate()+1);
	}
	fday=new Date(fday.setDate(fday.getDate()-7));
	$dayOuterContainer.classList.add('eventOuterBox');
	$dayOuterContainer.appendChild($dayInnerContainer);
	$timeDayCon.classList.add('timedaycon');
	$timeDayCon.appendChild($dayOuterContainer);	
	$elementContainer.appendChild($timeDayCon);
	