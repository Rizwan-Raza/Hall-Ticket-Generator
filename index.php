<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Hall Ticket Generator</title>
	<?php include 'components/head.php'; ?>
</head>
<body style="position: static;">
<?php
include 'actions/detecter.php';
include 'components/nav.php';
include 'components/login.html';
include 'components/logout.html';
?>
<div class="container">
<!-- 	<div class="well">
		<img src="img/Jamia_Millia_Islamia_Logo_Black.png" alt="Jamia Millia Islamia" class="center-block img" height="100px">
	</div> -->
	<div class="jumbotron">
		<h1><img src="img/Jamia_Millia_Islamia_Logo_Green.png" alt="Jamia Millia Islamia" class="img" height="100px"> Welcome!</h1> 
		<p>Welcome to Hall Ticket Generator web portal. Here you can generate your examination hall ticket by registering yourself first and then login and click and Generate and Print.</p> 
	</div>
	<?php if (isset($_SESSION['log']) and $_SESSION['log'] == 'active') { ?>
		<p>For generating your hall ticket, click on <b>Admit Card</b> button shown below and above at top right.</p> 
		<p>If you are already generated and printed your hall ticket, click on <b>Logout</b> button shown below and top right of the screen.</p> 
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<a href="card.php" class="btn_link"><button class="btn btn-success btn-lg btn-block"><i class="fa fa-fw fa-user-circle"></i> Admit Card</button></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-fw fa-sign-in"></i> Logout</button>
			</div>
		</div>
	<?php } else { ?>
		<p>For registering yourself, click on <b>Register</b> button shown below and above at top right.</p> 
		<p>If you are already registered and want to generate your hall ticket, click on <b>Login</b> button shown below and top right of the screen and after that click <b>Generate Hall Ticket.</b></p> 
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<a href="register.php" class="btn_link"><button class="btn btn-success btn-lg btn-block"><i class="fa fa-fw fa-user-circle"></i> Register</button></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#loginModal"><i class="fa fa-fw fa-sign-in"></i> Login</button>
			</div>
		</div>
	<?php } ?>
</div>
<?php
include 'components/footer.html';
?>
</body>
</html>