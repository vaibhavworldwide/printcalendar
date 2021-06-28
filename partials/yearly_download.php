<div class="container yearDownload">
<br>
<div class="yearButton">
<button onclick="prevYear()">< prev Year</button>
<button onclick="nextYear()">next Year ></button> 
</div>   
<h4>Download Yearly Calendar of <span id="ydown"></span> without INTERNATIONAL DAYS:</h4>
<a href="<?php echo $base_site_url; ?>calendar/jpg/without_days/2020.jpg" target="_blank" id="calenLinkjpg1">JPEG </a><br>
<a href="<?php echo $base_site_url; ?>calendar/pdf/without_days/2020.pdf" target="_blank" id="calenLinkpdf1">PDF </a>
<h4>Download Yearly Calendar of <span id="ywh"></span> with INTERNATIONAL DAYS:</h4>
<a href="<?php echo $base_site_url; ?>calendar/jpg/with_days/2020.jpg" target="_blank" id="calenLinkjpg2">JPEG </a><br>
<a href="<?php echo $base_site_url; ?>calendar/pdf/with_days/2020.pdf" target="_blank" id="calenLinkpdf2">PDF </a> <br><br>
</div>
<script>
    var y=2020;
    var dt=new Date();
    var year=document.getElementById("ydown");
    year.innerText=dt.getFullYear();
    var ywh=document.getElementById("ywh");
    ywh.innerText=dt.getFullYear();
    function nextYear(){
    if(y<2100){    
    y=y+1;
    var linkjpg1=document.getElementById("calenLinkjpg1");
    var linkpdf1=document.getElementById("calenLinkpdf1");
    var linkjpg2=document.getElementById("calenLinkjpg2");
    var linkpdf2=document.getElementById("calenLinkpdf2");
    linkjpg1.href="<?php echo $base_site_url; ?>calendar/jpg/without_days/"+y+".jpg";
    linkpdf1.href="<?php echo $base_site_url; ?>calendar/pdf/without_days/"+y+".pdf";
    linkjpg2.href="<?php echo $base_site_url; ?>calendar/jpg/with_days/"+y+".jpg";
    linkpdf2.href="<?php echo $base_site_url; ?>calendar/pdf/with_days/"+y+".pdf";
    var year=document.getElementById("ydown");
    year.innerText=y;
    var ywh=document.getElementById("ywh");
    ywh.innerText=y;
    }
    else{
        alert("Calendars are not available above 2100");
        }
    }
    function prevYear(){
     if(y>2000){ 
    y=y-1;
    var linkjpg1=document.getElementById("calenLinkjpg1");
    var linkpdf1=document.getElementById("calenLinkpdf1");
    var linkjpg2=document.getElementById("calenLinkjpg2");
    var linkpdf2=document.getElementById("calenLinkpdf2");
    linkjpg1.href="<?php echo $base_site_url; ?>calendar/jpg/without_days/"+y+".jpg";
    linkpdf1.href="<?php echo $base_site_url; ?>calendar/pdf/without_days/"+y+".pdf";
    linkjpg2.href="<?php echo $base_site_url; ?>calendar/jpg/with_days/"+y+".jpg";
    linkpdf2.href="<?php echo $base_site_url; ?>calendar/pdf/with_days/"+y+".pdf";
    var year=document.getElementById("ydown");
    year.innerText=y;
    var ywh=document.getElementById("ywh");
    ywh.innerText=y;
     }
    else{
        alert("Calendars are not available below 2000");
        }
    }
</script>