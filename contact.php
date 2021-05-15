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
                <title>Contact Us | E- Store</title>
        </head>

    <body style="padding-top: 50px;">
        <!-- Header -->
            <?php
            include 'includes/header.php';
            ?>
        <!--Header end-->
        
        <!--Main body-->
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h3>LIVE SUPPORT</h3>
                    <div class="heading_con">24 hours | 7 days a week | 365 days a year Live Technical Support</div>
                    It is a long established fact that a reader will be distracted by the readable content of a page 
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less 
                    normal distribution of letters. There are many variations of  passages of Lorem Ipsum available, 
                    but the majority have suffered alteration in some form, by injected humour, or randomised words 
                    which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, 
                    you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    
                </div>
                <div class="col-sm-2">
                    <center><img src="img/contact.png" alt=""></center>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h3>CONTACT US</h3>
                    <form  action="contact_script.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input class="form-control" name="name" id="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" name="message" id="message" rows="5"></textarea>                 
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                    </div>
                <div class="col-sm-4">
                    <h3>Company Information : </h3>
                    <p>500 Lorem Ipsum Dolor Sit,</p>
                    <p>22-56-2-9 Sit Amet, Lorem</p>
                    <p>USA</p>
                    <p>Phone:(00) 222 666 444</p>
                    <p>Fax:(000) 000 00 00 0</p>
                    <p>Email: info@mycompany.com</p>
                    <p>Follow on: Facebook, Twitter</p>
                </div>
            </div>
        </div>
        <!--Main content end-->
        <br>
        <!-- Footer -->
            <?php
            include 'includes/footer.php';
            ?>
        <!--Footer end-->
        
    </body>
</html>