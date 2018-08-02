<?php 
function getConnection() {
	$conn = mysqli_connect("localhost", "root", "", "jmi") or die("<div class='alert alert-danger'><b>Error: </b>Can&apos;t connect with database.</div>");
	return $conn;
}
?>
