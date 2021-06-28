
<?php include'../partials/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2>Time Zone Abbreviations – Worldwide List</h2>
</div> 
</div>

 
		<?php
		function d($str, $word, $l)
		{
			$s = ltrim($str, $word);
			return rtrim($s, $l);
		}
		echo "<html><body><center><table><tr><th>Abbreviation</th><th>Time zone name</th>
          
		<th>Location</th>
		

		
		<th>Offset</th></tr>\n\n";

		$file = fopen("c.csv", "r");

		while (($data = fgetcsv($file)) !== false) {


			$string = $data[1];
			$str_arr = explode(",", $string);
			echo "<tr>";

			echo "<td><a href=../state.php?id=".$data[0]."&id1=".d($str_arr[2], "gmtOffsetName:'", "'") . "> " . d($str_arr[3], "abbreviation:'", "'") . " </a></td>";
			echo "<td>" . d($str_arr[4], "tzName:'", "'}]") . "</td>";
			$l = d($str_arr[0], "[{zoneName:'", "'");
			$token = strtok($l, "\/");
			echo "<td>" . $token . "</td>";

			echo "<td>" . d($str_arr[2], "gmtOffsetName:'", "'") . "</td>";
			echo "</tr>";
			
		}

	
		fclose($file);

		echo "\n</table></center></body></html>";
		?>


</div>

<?php include'../partials/footer.php'?>


