<html>

<h1>Database Query</h1>

<style>
body {
    background-color: White;
}
h1 {
    color: Black;
    text-align: center;
}
h2 {
    color: Black;
    font-family: "verdana";
}
table, th, td {
    border: 1.5px solid black;
    border-collapse: collapse;
    font-family: "Arial";
}
tr:nth-child(odd)		{ background-color:"white"; }
tr:nth-child(even)		{ background-color:"white"; }
</style>

<body>
<p>
<font size="4" color="Black" face="verdana"><b>Type a SQL query in the following box:</b></font>
</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
<textarea name="query" cols="60" rows="10"></textarea>
<br>
<input type="submit" value="Submit">
</form>
<br>

</body>
</html>
<?php
function printResult($rs) {
	if (!$rs) {
		echo 'Could not run query: ' . mysql_error();
    	exit;
	}
	$fields_num = mysql_num_fields($rs);
	$rows_num = mysql_num_rows ($rs);
	if ($rows_num == 0) {
		echo "No qualified tuple found";
		return;
	}
	echo '<table border="1" style="width:50%" bgcolor="White"';
	echo '<tr>';
    for($j = 0; $j < $fields_num; $j++) {
        $field = mysql_fetch_field($rs);
        echo "<td>{$field->name}</td>";
    }
    echo '</tr>';
    while($row = mysql_fetch_row($rs)) {
        echo "<tr>";
        $size = sizeof($row);
		for ($i = 0; $i < $size; $i++) {
			if (is_null($row[$i])) {
				echo "<td>N/A</td>";
			}
			else {
				echo '<td>' . $row[$i]. '</td>';
			}	
		}
		echo '</tr>';
    }
	echo '</table>';
}

 //mysql_select_db("cs143", $db_connection);
if($_GET["query"]) {
	echo "<h2>Result</h2>"; 
	$db_connection = mysql_connect("localhost", "cs143", "");
	mysql_select_db("CS143", $db_connection);
	$rs = mysql_query($_GET["query"], $db_connection);
    printResult($rs);
	disconnect($db_connection);
}
?>