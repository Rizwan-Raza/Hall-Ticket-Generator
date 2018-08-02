<?php
session_start();
$enroll = $_POST['enroll'];
$pass = $_POST['psw'];
include 'database.php';
$conn = getConnection();
$sql = "SELECT * FROM students WHERE enroll='$enroll' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if ($result) {
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
		$_SESSION['rollno'] = $row['rollno'];
		$_SESSION['enroll'] = $row['enroll'];
		$_SESSION['fname'] = $row['fname'];
		$_SESSION['course'] = $row['course'];
		$_SESSION['year'] = $row['year'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['mob'] = $row['mob'];
		$_SESSION['photo'] = $row['photo'];
		$_SESSION['sign'] = $row['sign'];
		$_SESSION['sid'] = $row['sid'];
		$_SESSION['log'] = 'active';
		header("Location: ../card.php");
	} else {
		header("Location: ../index.php?error=auth&process=login");
	}
} else {
	header("Location: ../index.php?error=query&process=login");
}
?>