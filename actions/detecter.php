<?php 
$modals = "";
include 'components/modalCreator.php';
echo "<script>
	$(document).ready(function(){";
		if(isset($_GET['registered'])) {
			if ($_GET['registered'] == 'ok') {
				$modals .= createModal("rokModal", "sm", "check", "Registered", "You are successfully registered to our portal. You can Login with the provided data.", true, false);
				echo "$('#rokModal').modal('show');";
			}
		}
		if (isset($_GET['error'])) {
			if ($_GET['error'] == 'query') {
				if (isset($_GET['process'])) {
					if ($_GET['process'] == 'register') {
						$modals .= createModal("qerrrModal", "sm", "warning", "Server Error", 'Something went wrong, can&apos;t complete the registeration process. <br><a href="register.php">Try again</a>', true, false);
						echo "$('#qerrrModal').modal('show');";
					} elseif ($_GET['process'] == 'login') {
						$modals .= createModal("qerrlModal", "sm", "warning", "Server Error", 'Something went wrong, can&apos;t complete the login process. <br><a href="#" data-toggle="modal" data-target="#loginModal">Try again</a>', true, false);
						echo "$('#qerrlModal').modal('show');";
					}
				}
			} elseif ($_GET['error'] == 'auth') {
				if (isset($_GET['process'])) {
					if ($_GET['process'] == 'register') {
						$modals .= createModal("aerrrModal", "sm", "warning", "Password Error", 'Password Mismatch, can&apos;t complete the login process. <br><a href="register.php">Try again</a>', true, false);
						echo "$('#aerrrModal').modal('show');";
					} elseif ($_GET['process'] == 'login') {
						$modals .= createModal("aerrlModal", "sm", "warning", "Authentication Error", 'Invalid enrollment number of password, can&apos;t complete the login process. <br><a href="#" data-toggle="modal" data-target="#loginModal">Try again</a>', true, false);
						echo "$('#aerrlModal').modal('show');";
					}
				}
			}
		}
echo "});
</script>
$modals";
?>
