<?php
$title="CalendarEarth-World Clock";
$description="World time for most of the cities across the world. International time right now. Takes into account all DST clock changes.";
$keyword="time zone,world clock,time in different places ";
?>

<?php include'partials/header.php'; ?>
<div class="container">
<table cellspacing="5px">
        <tr class="hrow">
        <td class="wctd">GMT</td>
        <td class="wctd">Vancouver</td>
        <td class="wctd">San Francisco</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="GMT"></span></td>
        <td class="wctd"><span id="Vancouver"></span></td>
        <td class="wctd"><span id="SanFrancisco"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Seattle</td>      
        <td class="wctd">Los Angeles</td>
        <td class="wctd">Denver</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Seattle"></span></td>      
        <td class="wctd"><span id="LosAngeles"></span></td>
        <td class="wctd"><span id="Denver"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Mexico City</td>
        <td class="wctd">Houston</td>      
        <td class="wctd">Minneapolis</td>
        </tr class="timerow">
        <tr class="timerow">
        <td class="wctd"><span id="MexicoCity"></span></td>
        <td class="wctd"><span id="Houston"></span></td>
        <td class="wctd"><span id="Minneapolis"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">New Orleans</td>
        <td class="wctd">Chicago</td>
        <td class="wctd">Montgomery</td>      
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="NewOrleans"></span></td>
        <td class="wctd"><span id="Chicago"></span></td>
        <td class="wctd"><span id="Montgomery"></span></td>      
        </tr>
        <tr class="hrow">
        <td class="wctd">Indianapolis</td>
        <td class="wctd">Atlanta</td>
        <td class="wctd">Detroit</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Indianapolis"></span></td>
        <td class="wctd"><span id="Atlanta"></span></td>
        <td class="wctd"><span id="Detroit"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Miami</td>      
        <td class="wctd">Washington DC</td>
        <td class="wctd">Philadelphia</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Miami"></span></td>      
        <td class="wctd"><span id="WashingtonDC"></span></td>
        <td class="wctd"><span id="Philadelphia"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">New York</td>
        <td class="wctd">Montreal</td>      
        <td class="wctd">Boston</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="NewYork"></span></td>
        <td class="wctd"><span id="Montreal"></span></td>      
        <td class="wctd"><span id="Boston"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Buenos Aires</td>
        <td class="wctd">Sao Paulo</td>
        <td class="wctd">Rio De Janeiro</td>      
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="BuenosAires"></span></td>
        <td class="wctd"><span id="SaoPaulo"></span></td>
        <td class="wctd"><span id="RioDeJaneiro"></span></td>      
        </tr>
        <tr class="hrow">
        <td class="wctd">Lisbon</td>
        <td class="wctd">Dublin</td>
        <td class="wctd">London</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Lisbon"></span></td>
        <td class="wctd"><span id="Dublin"></span></td>
        <td class="wctd"><span id="London"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Madrid</td>      
        <td class="wctd">Barcelona</td>
        <td class="wctd">Paris</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Madrid"></span></td>      
        <td class="wctd"><span id="Barcelona"></span></td>
        <td class="wctd"><span id="Paris"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Brussels</td>
        <td class="wctd">Amsterdam</td>      
        <td class="wctd">Frankfurt</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Brussels"></span></td>
        <td class="wctd"><span id="Amsterdam"></span></td>      
        <td class="wctd"><span id="Frankfurt"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Rome</td>
        <td class="wctd">Berlin</td>
        <td class="wctd">Prague</td>      
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Rome"></span></td>
        <td class="wctd"><span id="Berlin"></span></td>
        <td class="wctd"><span id="Prague"></span></td>      
        </tr>
        <tr class="hrow">
        <td class="wctd">Vienna</td>
        <td class="wctd">Stockholm</td>
        <td class="wctd">Athens</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Vienna"></span></td>
        <td class="wctd"><span id="Stockholm"></span></td>
        <td class="wctd"><span id="Athens"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Helsinki</td>      
        <td class="wctd">Minsk</td>
        <td class="wctd">Istanbul</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Helsinki"></span></td>      
        <td class="wctd"><span id="Minsk"></span></td>
        <td class="wctd"><span id="Istanbul"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Cairo</td>
        <td class="wctd">Jerusalem</td>      
        <td class="wctd">Beirut</td>
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Cairo"></span></td>
        <td class="wctd"><span id="Jerusalem"></span></td>      
        <td class="wctd"><span id="Beirut"></span></td>
        </tr>
        <tr class="hrow">
        <td class="wctd">Moscow</td>
        <td class="wctd">Baghdad</td>
        <td class="wctd">Dubai</td>      
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Moscow"></span></td>
        <td class="wctd"><span id="Baghdad"></span></td>
        <td class="wctd"><span id="Dubai"></span></td>           
        </tr>      
        <tr class="hrow">
        <td class="wctd">Bangkok</td>
        <td class="wctd">Jakarta</td>
        <td class="wctd">Hong Kong</td>     
        </tr>  
        <tr class="timerow">
        <td class="wctd"><span id="Bangkok"></span></td>
        <td class="wctd"><span id="Jakarta"></span></td>
        <td class="wctd"><span id="HongKong"></span></td>      
        </tr>  
        <tr class="hrow">
        <td class="wctd">Beijing</td>      
        <td class="wctd">Shanghai</td>
        <td class="wctd">Seoul</td>      
        </tr> 
        <tr class="timerow">
        <td class="wctd"><span id="Beijing"></span></td>      
        <td class="wctd"><span id="Shanghai"></span></td>
        <td class="wctd"><span id="Seoul"></span></td>      
        </tr>  
        <tr class="hrow">
        <td class="wctd">Tokyo</td>
        <td class="wctd">Melbourne</td>      
        <td class="wctd">Sydney</td>      
        </tr>
        <tr class="timerow">
        <td class="wctd"><span id="Tokyo"></span></td>
        <td class="wctd"><span id="Melbourne"></span></td>      
        <td class="wctd"><span id="Sydney"></span></td>       
        </tr>  
        <tr class="hrow">
        <td class="wctd">Brisbane</td>
        <td class="wctd">Vladivostok</td>
        <td class="wctd">Kamchatka</td>       
        </tr>  
        <tr class="timerow">
        <td class="wctd"><span id="Brisbane"></span></td>
        <td class="wctd"><span id="Vladivostok"></span></td>
        <td class="wctd"><span id="Kamchatka"></span></td>      
        </tr>       
        </table>
  </div>
        <script src="js/time-zone.js"></script>
<?php include'partials/footer.php'?>