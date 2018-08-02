<?php
session_start();
if (isset($_GET['l']) and $_GET['l'] == 'ok') {
	session_destroy();
	header("Location: ../index.php");
}
?>