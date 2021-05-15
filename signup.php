<?php
require "includes/common.php";
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
                <title>Signup | E- Store</title>
    </head>
    <body>
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!--Header end-->
        
        <!--Main content-->
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <center><img src="img/sign.jpg" alt=""></center>
                    </div>
                    <div class="col-sm-4">
                        <?php echo filter_input(INPUT_GET, 'm5'); ?>
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <?php if(isset($_GET['name'])) {
                                    $name=$_GET['name'];
                                echo '<input class="form-control" placeholder="Name" name="name" id="name" required value="'.$name.'">';
                                }
                                else {
                                echo '<input class="form-control" placeholder="Name" name="name" id="name" required>';
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" id="email" required>
                                <?php echo filter_input(INPUT_GET, 'm1'); ?>
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                    <?php echo filter_input(INPUT_GET, 'm4'); ?>
                            </div>
                            <div class="form-group">
                                <?php if(isset($_GET['contact'])) {
                                    $contact=$_GET['contact'];
                                echo '<input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" id="contact" required value="'.$contact.'">';
                                }
                                else {
                                echo '<input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" id="contact" required>';
                                echo filter_input(INPUT_GET, 'm2'); 
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <?php if(isset($_GET['city'])) {
                                    $city=$_GET['city'];
                                echo '<input  type="text" class="form-control"  placeholder="City" name="city" id="city" required value="'.$city.'">';
                                }
                                else {
                                echo '<input  type="text" class="form-control"  placeholder="City" name="city" id="city" required>';
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <?php if(isset($_GET['address'])) {
                                    $address=$_GET['address'];
                                echo '<input  type="text" class="form-control"  placeholder="Address" name="address" id="address" required value="'.$address.'">';
                                }
                                else {
                                echo '<input  type="text" class="form-control"  placeholder="Address" name="address" id="address" required>';
                                }
                                ?>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Main content end-->

        <!--Footer-->
        <?php
        include('includes/footer.php');
        ?>
        <!--Footer end-->

    </body>
</html>

