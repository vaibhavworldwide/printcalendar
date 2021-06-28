<?php
   if( $_GET["id"]) {
     // echo "Welcome ". $_GET['id']. "<br />";
   	$utc=$_GET["id1"];
   	$cc=$_GET["id"];
   	//echo $utc;
      $u= $_SERVER['REQUEST_URI'];
      $ut=substr($u,-6);
     // echo $ut;
 
   }
?>

<?php include'partials/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>State Worldwide List</h2>
</div> 
</div>
		


		<?php
		function d($str, $word, $l)
		{
			$s = ltrim($str, $word);
			return rtrim($s, $l);
		}
	
		echo "<html><body><center><table><tr><th>State Name</th><th>Time zone name</th>
          
		</tr>\n\n";

		$file = fopen("state.csv", "r");

		while (($data = fgetcsv($file)) !== false) {
             //var_dump($data[2]);
             if($data[2]==$cc){
             
            

			echo "<tr>";

			

			echo "<td> <a href=city.php?id=".$data[0]."&id1=".$ut.">". $data[1] . "</td>";
			echo "<td>" . $utc. "</td>";


			echo "</tr>";
			}
		}

	
		fclose($file);

		echo "\n</table></center></body></html>";
		?>
	</div>

<?php include'partials/footer.php'?>