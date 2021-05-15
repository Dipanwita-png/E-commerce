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
        </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4" id="settings-container">
                    <h4>FORGOT PASSWORD?</h4>
                    <form action="forgot_pass_check.php" method="POST">
                        <p>As you have forgot your password, we will check other information and confirm whether you can change your password</p>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required>         
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact No:</label>
                            <input type="text" class="form-control" maxlength="10" size="10" name="contact" id="contact" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Check</button>
                        <?php echo filter_input(INPUT_GET, 'm1');?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>