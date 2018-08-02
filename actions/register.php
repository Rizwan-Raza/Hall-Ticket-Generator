<?php 
$pass = $_POST['pass'];
$repass = $_POST['repass'];
if ($pass == $repass) {
	session_start();
	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$enroll = $_POST['enroll'];
	$fname = $_POST['fname'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$address = $_POST['address'];
	$mob = $_POST['mob'];
	$photo = "uploads/photoes/".$enroll.$_FILES['photo']['name'];
	$sign = "uploads/signs/".$enroll.$_FILES['sign']['name'];
	$ccode = array();
	$cname = array();
	$ctype = array();
	$i = 1;
	$error = false;
	while (isset($_POST['ccode'.$i]) and isset($_POST['cname'.$i]) and isset($_POST['ctype'.$i])) {
		array_push($ccode, $_POST['ccode'.$i]);
		array_push($cname, $_POST['cname'.$i]);
		array_push($ctype, $_POST['ctype'.$i]);
		$i++;
	}
	include 'database.php';
	$conn = getConnection();
	if (!move_uploaded_file($_FILES['photo']['tmp_name'], "../".$photo)) {
		$error = true;
	}
	if (!move_uploaded_file($_FILES['sign']['tmp_name'], "../".$sign)) {
		$error = true;
	}
	if ($error) {
		header("Location: ../register.php?error=u_img&process=register");
	}
	$sql = "INSERT INTO students(name, rollno, enroll, fname, course, year, address, mob, photo, sign, password) VALUES ('$name', '$rollno', '$enroll', '$fname', '$course', $year, '$address', '$mob', '$photo', '$sign', '$pass')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$sid = mysqli_insert_id($conn);
		array_reverse($ccode);
		array_reverse($cname);
		array_reverse($ctype);
		for ($j=1; $j < $i; $j++) { 
			$csql = "INSERT INTO courses(sid, code, name, type) VALUES ($sid, '".array_pop($ccode)."', '".array_pop($cname)."', '".array_pop($ctype)."')";
			$r2 = mysqli_query($conn, $csql);
			if (!$r2) {
				$error = true;
			}
		}
		if (!$error) {
			header("Location: ../register.php?registered=ok");
		} else {
			// echo "Error: ".mysqli_error($conn);
			header("Location: ../register.php?error=query&process=register");
		}
	}
	mysqli_close($conn);
} else {
	header("Location: ../register.php?error=auth&process=register");
}
?>
