<?php

$dbc = @mysqli_connect("localhost","root","","site_database")
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());


?>