<html>
<body>

<title>CS143 Project 1B</title>
<!-- <?php
//require($DOCUMENT_ROOT . "./index.php");
?> -->

<?php

	$db_connection = mysql_connect("localhost", "cs143", "");
	if(!$db_connection) {
		$err_msg = mysql_error($db_connection);
		print "Connection failed: $errmsg <br/>";
		exit(1);
	}

	mysql_select_db("CS143", $db_connection);

	$result = @mysql_query("SELECT * FROM Actor ORDER BY last", $db_connection);
	if(!$result) {
		$message = "Invalid query: " . mysql_error() . "\n";
		die($message);
	}
?>


<table align="center" width="1000" class="searchtablesm">
	<tr>
		<td align="left"><font>
			<form action="./actors.php" method="GET">
			</br>
			Actor:
			<select name="id">
			<?php
			while($row = @mysql_fetch_assoc($result)) {
				echo "<option value='" . $row['id'] . "'>";
				echo $row['first'] . " " . $row['last'];
				echo "</option>";
			}
			?>
			</option>
			</select>
			<input type="submit" value="Search"/>
			</form>
			<hr/></font>
		</td>
	</tr>
</table>
<p>
<table align="center" width="1000" class="searchtablesm">
	<tr>
		<td align="left"><font>
<br/>
Search for another actors: <br/>
<form action="./search.php" method="POST">
<input type ="hidden" name="clicked" value="yes" />
<input type="text" name="search" placeholder="Find Movies, Celebrities.."/><input type="submit" value="Search" />
</form>
		</td>
	</tr>
</table>
</p>


</body>
</html> 
