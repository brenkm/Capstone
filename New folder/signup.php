<?php
//session_start();
include 'dbh.php';

$uname = $_POST['unameinputCA'];
$pword = $_POST['pwordinputCA'];
$pword2 = $_POST['pwordinputCA2'];

if($pword==$pword2){
	$sql = "INSERT INTO user (username, password) 
	VALUES ('$uname', '$pword')";
	$result = mysqli_query($conn, $sql);

	header("Location: accountcreated.php");
}
else{
	echo "Error: passwords do not match";
}



?>