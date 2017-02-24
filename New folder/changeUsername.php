<?php
session_start();
include 'dbh.php';

$uname = $_POST['unameinputCU'];

$sql = "UPDATE user SET username='$uname' WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($conn, $sql);

header("Location: settings.php");

?>