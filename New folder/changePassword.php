<?php
session_start();
include 'dbh.php';

$oldPword = $_POST['oldpwordinput'];
$newPword = $_POST['newpwordinput'];
$newPword2 = $_POST['newpwordinput2'];

$sql = "SELECT * FROM user WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($conn, $sql);
$pword = mysqli_fetch_array($result);

if($oldPword == $pword[2] && $newPword == $newPword2){
	$sql = "UPDATE user SET password='$newPword' WHERE id='{$_SESSION['id']}'";
	$result = mysqli_query($conn, $sql);

	header("Location: settings.php");
}
else{
	//echo "error";
	///echo "$oldPword";
	echo "error";
	///echo "$newPword";
	///echo "$newPword2";
}

?>