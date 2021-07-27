<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
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
		<title>Settings | E- Store</title>
        </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password"  placeholder="Old Password" required><?php echo filter_input(INPUT_GET, 'm1');?>         
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" placeholder="New Password" required><?php echo filter_input(INPUT_GET, 'm4');?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password"  placeholder="Re-type New Password" required><?php echo filter_input(INPUT_GET, 'm2');?>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                            <div class="col-sm-5 col-sm-offset-3">
                                <a href="index.php">Back to Home page</a>    
                            </div>
                        </div>
                        <?php echo filter_input(INPUT_GET, 'm3');?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
