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
		<title>Welcome | E- Store</title>
     	</head> 
        
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include('includes/header.php');
        include('includes/check-if-added.php');
        $select_query="SELECT id, name, price FROM items ";
        $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
        ?>
        <!--Header end-->
        <br><br>
            <!--Item categories listing-->
            <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Redmi</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                <img src="img/redmi-note8.jpg" alt="Redmi Note8">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>

    <li>6.3 inches (16 cm) display with waterdrop notch
    <li>Qualcomm Snapdragon 665 Octa core Processor
    <li>4 GB RAM
    <li>64 GB internal storage, expandable upto 512 GB
    <li>48 + 8 + 2 + 2 MP Quad Rear Cameras
    <li>13 MP Front Camera
    <li>4000 mAh battery with Fast Charging
    <li>Dual SIM: Nano + Nano with VoLTE support
    <li>Rear Fingerprint Sensor 
    <li>Face Unlock
    <li><strong>Rs 10000</strong></ul></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=1" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Nokia</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                <img src="img/nokia 5310.jpg" alt="Nokia 5310">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>
                                    <li>Numeric keypad</li>    
                                    <li>2.4 inches (6.1 cm)</li>
                                    <li>8 MB RAM</li>
                                    <li>16 MB internal storage, expandable upto 32 GB</li>
                                    <li>0.3 MP rear camera</li>
                                    <li>1200 mAh battery</li>
                                    <li>Single Mini SIM </li>
                                    <li>2G Bands: GSM 1800 / 900 MHz GPRS:Available</li>
                                    <li>usb connectivity microUSB 2.0</li>
                                    <li>MP3 Music supported</li>
                                    <li>Bluetooth supported</li>
                                    <li><strong>Rs 3000</strong></li>
                                </ul></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=2" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Vivo</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                <img src="img/vivo v17 pro.jpg" alt="Vivo V17 Pro">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>
        <li>6.44 inches (16.36 cm) screen 
        <li>Qualcomm Snapdragon 675 Octa core Processor
        <li>8 GB RAM
        <li>128 GB internal storage, expandable upto 256 GB
        <li>48 + 8 + 2 + 2 MP Quad Rear Cameras
        <li>32 MP Front Camera
        <li>4500 mAh battery with Fast Charging
        <li>Dual SIM: Nano + Nano with VoLTE support
        <li>On-screen Fingerprint Sensor 
        <li><strong>Rs. 21000</strong></ul></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=3" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Motorola</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                <img src="img/moto.jpg" alt="Motorola PEBL VU20">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>
                                    <li>Flip Phone with numeric keypad</li>
                                    <li>2.2 inches (5.59 cm) display</li>
                                    <li>2 MB internal storage, expandable upto 4 GB</li>
                                    <li>Micro SD Card slot</li>
                                    <li>2 MP Primary Camera</li>
                                    <li>950 mAh battery</li>
                                    <li>Single Mini SIM</li>
                                    <li>3G and 2G network Available</li>
                                    <li><strong>Rs 7000</strong></li>
                                </ul></p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=4" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Samsung</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                <img src="img/samsung.jpg" alt="Samsung">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>
                                    <li>Alphanumeric Input Mechanism</li>
                                    <li>2.1 inches (5.6 cm) display</li>
                                    <li>50 MB internal memory, expandable upto 8 GB</li>
                                    <li>microSD card, upto 8 GB supported</li>
                                    <li>3.15 MP Primary Camera</li>
                                    <li>SpecsQVGA Camera Video supported</li>
                                    <li>Single Mini SIM</li>
                                    <li>2G Bands: GSM 850/900/1800/1900</li>
                                    <li>800 mAh battery</li>
                                    <li>Bluetoothv2.0 with A2DP</li>
                                    <li><strong>Rs 4050</strong></li>
                                </ul></p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=5" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Apple</h4>
                            </div>
                            <div class="panel-body">
                                <div class="thumbnail">
                                    <img src="img/apple.jpg" alt="Apple">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p><ul>
                                    <li>Apple A13 Bionic processor</li>
                                    <li>6.1 inches (15.49 cm) display</li>
                                    <li>4 GB RAM</li>
                                    <li>64 GB internal memory, not expandable</li>
                                    <li>12 MP + 12 MP Rear Camera</li>
                                    <li>12 MP Front Camera</li>
                                    <li>sim slots : Dual SIM, GSM+GSM</li>
                                    <li>sim size: SIM1- Nano, SIM2- eSIM</li>
                                    <li>3110 mAh battery, with quick charging</li>
                                    <li>Water resistant, Dust proof</li>
                                    <li>3D Touchscreen, Multi-touch facility supported</li>
                                    <li><strong>Rs 65000</strong></li>
                                </ul></p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                            <p><button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#loginModal">Order Now!</button></p>
                            <?php
                               } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                            ?>
                            <a href="cart-add.php?id=6" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                            } }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Item categories listing end-->
        <!-- Footer -->
            <?php
                if (!isset($_SESSION['email'])) {
                    include 'includes/footer.php';
                }
            ?>
        <!--Footer end-->
        
    </body>
</html>
