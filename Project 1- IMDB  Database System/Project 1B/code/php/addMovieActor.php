<html>
<body>


<title>Add Movie Actor Relations</title>

<?php

	$db_connection = mysql_connect("localhost", "cs143", "");
	if(!$db_connection) {
		$err_msg = mysql_error($db_connection);
		print "Connection failed: $errmsg <br/>";
		exit(1);
	}

	mysql_select_db("CS143", $db_connection);

	$result1 = @mysql_query("SELECT * FROM Actor ORDER BY last", $db_connection);

	$result2 = @mysql_query("SELECT title, year, id FROM Movie ORDER BY title", $db_connection);
	

	if(!$result1 || !$result2) {
		$message = "Invalid query: " . mysql_error() . "\n";
		die($message);
	}
?>

<form method="POST">
<table align="center" width="1000" class="searchtablesm">
	<tr>
		<td><font>
			</br>
			Actor:
			<select name="actor">
			<?php
			while($row = @mysql_fetch_assoc($result1)) {
				echo "<option value='" . $row['id'] . "'>";
				echo $row['first'] . " " . $row['last'];
				echo "</option>";
			}
			?>
			</option>
			</select>
			<hr/></font>
		</td>
	</tr>
</table>
<p>

<table align="center" width="1000" class="searchtablesm" >
	<tr>
		<td><font>
			</br>
			Movie:
			<select name="movie">
			<?php
			while($row = @mysql_fetch_assoc($result2)) {
				echo "<option value='" . $row['id'] . "'>";
				echo $row['title'];
				echo "</option>";
			}
			?>
			</option>
			</select>
			<hr/></font>
		</td>
	</tr>
</table>
<br/>
<table align="center" width="1000" class="searchtablesm">
	<tr>
		<td align="left"><font>
<h4>Role : <input type="text" name="role" maxlength="50"/></h4>
<p><input type="submit" value="Add Relation" name="clicked"/></p>
</form>
</td>
	</tr>
</table>
<?php

if($_POST["actor"] && $_POST["movie"] && $_POST["role"]){

	$aid = $_POST["actor"];
	$mid = $_POST["movie"];	
	$role = $_POST["role"];

	$db = mysql_connect("localhost", "cs143", "");
	 if(!$db) {
		$errmsg = mysql_error($db);
		 print "Connection failed: $errmsg <br />";
		 exit(1);
	 }
	 
	mysql_select_db("CS143", $db);
	
	if (str_replace(" ", "", $role) == ""){
		echo "Please enter a valid role!";
	} else {
	
		$Role = mysql_real_escape_string($role);
	
		$relation = "INSERT IGNORE INTO MovieActor VALUES ($mid, $aid, '$Role')";
	
		if (mysql_query($relation, $db)){
			echo "<p><b><u>Successfully added actor to movie! </b></u>";
			echo "<br/>View the new relation <a href='./movies.php?id=$mid'>here</a></p>";
		} else { echo "<b>Couldn't add actor to movie!</b>"; }
	}

	mysql_close($db);
} elseif ($_POST["clicked"] && !$_POST["role"]){
	echo "<b>Please enter a role!</b>";
}


?>


</body>
</html>
