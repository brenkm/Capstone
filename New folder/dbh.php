<?php

$conn = mysqli_connect("localhost", "root", "", "site_database");

if(!$conn){
	die("Connection failed: ".msqli_connect_error());
}

?>