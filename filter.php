<div class="filter-container">
<div>
	<h2><?php echo $heading." Search"; ?></h2>
</div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
</div>
<script type="text/javascript">
	 window.onload = function() {
		var tr = document.getElementById("myuly");
		var td = tr.getElementsByTagName("td");
		for (i = 0; i < td.length; i++){
			td[i].style.display = "none";
		}		
	}; 
	function myFunction() {
	var input, filter, tr, td, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    tr = document.getElementById("myuly");
    td = tr.getElementsByTagName("td");
    for (i = 0; i < td.length; i++) {
        a = td[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            td[i].style.display = "";
        } else {
            td[i].style.display = "none";
        }
		}
	}
	document.onclick = function(e){
	tr = document.getElementById("myuly");
    td = tr.getElementsByTagName("td");
	if(e.target.id != "myuly"){
		for (i = 0; i < td.length; i++) {
			td[i].style.display = "none";
		}
	}
	}
</script>




<?php 
function display($str, $word, $l)
{
$s = ltrim($str, $word);
return rtrim($s, $l);
}
echo "<html><div class=\"search-table\"><table id='myuly'>\n\n";
$file = fopen("countries.csv", "r");
while (($data = fgetcsv($file)) !== false) {
$string = $data[0];
$string = $data[1];
$string = $data[2];
$str_arr = explode(",", $string);
echo "<tr >";
echo "<td> <a href=state.php?id=".$data[3]."&id1=".d($str_arr[2], "gmtOffsetName:'", "'") . ">". $data[0] . "</td>";
echo "</tr>";
}

fclose($file);
echo "\n</table></div></html>";
?>