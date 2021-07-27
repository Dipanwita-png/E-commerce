<?php
require_once("includes/common.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!--jQuery library--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Change Password | E- Store</title>
        </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4" id="settings-container">
                    <h4>CHANGE PASSWORD</h4>
                    <form action="update_pass_script.php" method="POST">
                        <p>All your given information are correct. So, you are allowed to change your password and give a new password</p>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required>         
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm New Password:</label>
                            <input type="password" class="form-control" name="confirm_password"  placeholder="Re-type New Password" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4">
                        <button  class="btn btn-success" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                            </div>
                        </div>
                        <?php echo filter_input(INPUT_GET, 'm1');
                              echo filter_input(INPUT_GET, 'm2');?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
