<?php
session_start();
include 'dbh.php';

$uname = $_POST['unameinputSI'];
$pword = $_POST['pwordinputSI'];


$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pword'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "Username or password is incorrect.";
}
else{
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $row['username'];
	header("Location: home.php");
}


//header("Location: index.php");




?>