<?php
session_start();
if (isset($_SESSION) and isset($_SESSION['log']) and $_SESSION['log'] == 'active') {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Print | Hall Ticket Genrator</title>
	<?php include 'components/head.php'; ?>
</head>
<body>
<?php
include 'components/nav.php';
include 'components/logout.html';
?>
<div class="container unprint">
	<button class="btn btn-success btn-lg center-block" value="Print this page" onclick="$('.unprint').hide();window.print();$('.unprint').show();">Print</button>
	<br>
</div>
<div id="card">
	<div class="container card">
		<div class="row">
			<div class="col-xs-3">
				<img src="img/Jamia_Millia_Islamia_Logo_Green.png" alt="Jamia Millia Islamia" class="img center-block" height="120px" id="jmi-logo">
			</div>
			<div class="col-md-6 col-sm-9 text-center">
				<h3 class="text-uppercase">Jamia Millia Islamia, New Delhi</h3>
				<h4><?php echo $_SESSION['course']; ?> - <span class="text-uppercase">Exams</span>, <?php echo (date("Y")-1)."-".date("y"); ?></h4>
				<h3 class="text-uppercase">Admit Card</h3>
				<br>
			</div>
			<div class="col-xs-3 hidden-sm hidden-xs"></div>
		</div>
		<div class="dashed-bottom"></div>
		<br>
		<div class="row">
			<div class="col-xs-3">
				<div class="posrel posrel-1">
					<div class="user center-block posabs posabs-2" style="background-image: url('<?php echo $_SESSION["photo"]; ?>');"></div>
					<img src="<?php echo $_SESSION['photo']; ?>" alt="Candidate's Photo" class="posabs center-block posabs-1" id="user-pic">
				</div>
				<div class="posrel posrel-2">
					<div class="signature center-block posabs posabs-2" style="background-image: url('<?php echo $_SESSION["sign"]; ?>');"></div>
					<img src="<?php echo $_SESSION['sign']; ?>" alt="Candidate's Signature" class="posabs center-block posabs-1 user-sign">
				</div>
				<h5 class="text-center">(Signature of the Candidate)</h5>
			</div>
			<div class="col-xs-9">
				<div class="col-xs-4 text-bold">Candidate&apos;s Name: </div>
				<div class="col-xs-5 text-bold text-uppercase"><?php echo $_SESSION['name']; ?></div>
				<div class="col-xs-3 close-box text-center">Regular Paper</div>
				<div class="col-xs-4 text-bold">Father&apos;s Name: </div>
				<div class="col-xs-8 text-uppercase"><?php echo $_SESSION['fname']; ?></div>
				<div class="col-xs-4 text-bold">Course/Examination: </div>
				<div class="col-xs-8"><?php echo $_SESSION['course']; ?></div>
				<div class="col-xs-4 text-bold">Year/Semester: </div>
				<div class="col-xs-8"><?php echo $_SESSION['year']; ?></div>
				<div class="col-xs-4 text-bold">Address: </div>
				<div class="col-xs-8"><?php echo $_SESSION['address']; ?></div>
				<div class="col-xs-4 text-bold">Telephone/Mobile: </div>
				<div class="col-xs-8"><?php echo $_SESSION['mob']; ?></div>
				<div class="col-xs-12">
					<br>
				</div>
				<div class="col-xs-12">
					<b>All subjects/papers in which the candidate wishes to appear: </b>
				</div>
				<div class="col-xs-12">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="3" class="text-center text-uppercase">List of Courses</th>
							</tr>
							<tr>
								<th class="text-center text-uppercase">Paper Code</th>
								<th class="text-center text-uppercase">Paper Name</th>
								<th class="text-center text-uppercase">Type</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								include 'actions/database.php';
								$conn = getConnection();
								$sql = "SELECT code, name, type FROM courses WHERE sid='$_SESSION[sid]' ORDER BY code";
								$result = mysqli_query($conn, $sql);
								if ($result) {
									$num = mysqli_num_rows($result);
									for ($i=0; $i < $num; $i++) { 
										$row = mysqli_fetch_assoc($result);
										echo "<tr>
											<td>$row[code]</td>
											<td>$row[name]</td>
											<td class='text-center'>$row[type]</td>
										</tr>";
									}
								} else {
							?>
							<tr>
								<td colspan="3">Query Error</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6 text-bold">
					<div class="close-box">
						<div class="col-xs-5">Roll No:</div>
						<div class="col-xs-7 text-uppercase"><?php echo $_SESSION['rollno']; ?></div>
						<div class="clearfix"></div>
						<div class="col-xs-5">Enrollment No:</div>
						<div class="col-xs-7"><?php echo $_SESSION['enroll']; ?></div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-2"></div>
				<div class="col-xs-4">
					<div class="posrel posrel-2">
						<div class="signature center-block posabs posabs-2" style="background-image: url('<?php echo $_SESSION["sign"]; ?>');"></div>
						<img src="<?php echo $_SESSION['sign']; ?>" alt="Candidate's Signature" class="posabs center-block posabs-1 user-sign">
					</div>
					<!-- <div class="signature center-block" style="background-image: url('<?php echo $_SESSION["sign"]; ?>');"></div> -->
					<div class="dotted-bottom"></div>
					<h5 class="text-center">Signature of the Candidate</h5>
				</div>
			</div>
		</div>
		<div>
			<img src="img/controller.jpg" alt="Signature of Controller of Examination" class="img" height="100px" id="sign-controller">
			<div class="row">
				<div class="col-xs-1 text-center"><b>N.B</b></div>
				<div class="col-xs-11">
					<ol type="a">
						<li>The Examination will be held according to the "Scheme of Examination" (Date Sheet) displayed on the Notice Board of Controller of Examinations Office and Dean Office.</li>
						<li>Candidates must bring their own pen, pencil, ink-pot, Identity Card etc.</li>
						<li>Order of the question papers given in the Date Sheet shall not be guranteed.</li>
						<li>The examination rule is governed by the ordinance No. 15(XV) Page 30, 31.</li>
						<li>The medium of examination will be as per the desicion of the department.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'components/footer.html';
?>
</body>
</html>
<?php
} else {
	header("Location: index.php?error=card");
}
?>