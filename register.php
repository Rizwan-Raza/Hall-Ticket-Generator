<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Hall Ticket Generator</title>
	<?php include 'components/head.php'; ?>
</head>
<body>
<?php
include 'actions/detecter.php';
include 'components/nav.php';
include 'components/login.html';
// include 'components/footer.html';
?>
<div class="container">
	<form class="form-horizontal" action="actions/register.php" method="post" enctype="multipart/form-data" onsubmit="return validate(this)">
		<div class="form-group">
			<label class="control-label col-sm-2" for="name">Candidate&apos;s Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" placeholder="Enter Name" minlength="3" maxlength="30" required name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="rollno">Candidate&apos;s Roll No.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="rollno" placeholder="Enter Roll Number" minlength="9" maxlength="9" required name="rollno">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="enroll">Enrollment No.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="enroll" placeholder="Enter Enrollment No." minlength="7" maxlength="7" required name="enroll">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="fname">Father&apos;s Name</label>
			<div class="col-sm-10"> 
				<input type="text" class="form-control" id="fname" placeholder="Enter Father's Name" minlength="3" maxlength="30" required name="fname">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="course">Course/Examination</label>
			<div class="col-sm-10"> 
				<input type="text" class="form-control" id="course" placeholder="Enter Course/Examination Name" required name="course" id="course">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="year">Year/Semester</label>
			<div class="col-sm-10"> 
				<input type="number" class="form-control" id="year" placeholder="Enter Year/Semester Name" required name="year" id="year">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="address">Address</label>
			<div class="col-sm-10"> 
				<textarea class="form-control" placeholder="Enter Addresss" required name="address" id="address"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="mob">Telephone/Mobile No.</label>
			<div class="col-sm-10"> 
				<input type="text" class="form-control" placeholder="Enter Telephone/Mobile No." required name="mob" id="mob">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label col-sm-4" for="photo">Photograph</label>
					<div class="col-sm-8"> 
						<input type="file" class="form-control" placeholder="Attach Photograph" required name="photo" id="photo">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label col-sm-4" for="sign">Signature</label>
					<div class="col-sm-8"> 
						<input type="file" class="form-control" placeholder="Attach Signature" required name="sign" id="sign">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label col-sm-4" for="pass">New Password for Login</label>
					<div class="col-sm-8"> 
						<input type="password" class="form-control" placeholder="Enter New Password" required name="pass" id="pass" minlength="6" maxlength="30">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label col-sm-4" for="repass">Confirm Password</label>
					<div class="col-sm-8"> 
						<input type="password" class="form-control" placeholder="Re-Enter Password" required name="repass" id="repass" minlength="6" maxlength="30">
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="courses">List of Courses</label>
			<div class="col-sm-10"> 
				<table class="table table-responsive table-bordered table-striped">
					<thead>
						<tr>
							<th>Paper Code</th>
							<th>Paper Name</th>
							<th>Paper Type</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" name="ccode1" minlength="6" maxlength="7" class="form-control" placeholder="Enter Course Code" required>
							</td>
							<td>
								<input type="text" name="cname1" class="form-control" placeholder="Enter Course Name" required>
							</td>
							<td>
								<select name="ctype1" class="form-control" required>
									<option value="Theory">Theory</option>
									<option value="Practical">Practical</option>
								</select>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3">
								<button type="button" class="btn btn-danger btn-xs center-block"><i class="fa fa-fw fa-plus"></i> Add More Course</button>
							</td>
						</tr>						
					</tfoot>
				</table>
			</div>
		</div>
		<div class="form-group"> 
			<button type="submit" class="btn btn-success center-block"><i class="fa fa-fw fa-check"></i> Submit</button>
		</div>
	</form>
</div>
<?php
include 'components/footer.html';
?>
</body>
</html>