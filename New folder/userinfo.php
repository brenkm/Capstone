<?php

require_once('my_sqli_connect.php');



$query = "SELECT id, username, password FROM user";

$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left"
	cellspacing="5" cellpadding="8">
	
	<tr><td align = "left"><b>id</b></td>
	<td align = "left"><b>username</b></td>
	<td align = "left"><b>password</b></td></tr>';
	
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['id'] . '</td><td align="left">' .
		$row['username'] . '</td><td align="left">' .
		$row['password'] . '</td><td align="left">';

		echo '</tr>';
	}
	
	echo '</table>';
	
    } else {
		echo "Couldn't issue database query<br />";
		echo mysqli_error($dbc);
	}
	
	mysqli_close($dbc);
	



?>