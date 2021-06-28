
<?php include'partials/header.php'; 
	$heading = "The World Clock – Worldwide List";
?>
<?php include'filter.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
<div id="diff">    
<div class="diffHeadr">
    <h2><?php echo $heading ?></h2>
</div> 
</div>

 
		<?php
		function d($str, $word, $l)
		{
			$s = ltrim($str, $word);
			return rtrim($s, $l);
		}
		echo "<html><body><center><table><tr><th>Countries</th><th>Capitals</th>
          
		
		

		
		<th>Offset</th></tr>\n\n";

		$file = fopen("countries.csv", "r");
            //  var_dump($data[1]);
		while (($data = fgetcsv($file)) !== false) {

            $string = $data[0];
			$string = $data[1];

			$string = $data[2];
			$str_arr = explode(",", $string);
			//var_dump($data[2]);
			echo "<tr>";
			  echo "<td> <a href=state.php?id=".$data[3]."&id1=".d($str_arr[2], "gmtOffsetName:'", "'") . ">". $data[0] . "</td>";
             echo "<td>". $data[1] . "</td>";
            

			echo "<td>" . d($str_arr[2], "gmtOffsetName:'", "'") . "</td>";
			echo "</tr>";
			
		}

	
		fclose($file);

		echo "\n</table></center></body></html>";
		?>


</div>

<?php include'partials/footer.php'?>


