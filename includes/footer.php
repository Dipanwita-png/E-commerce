<?php
        include 'modal.php';            
?>
<style>
    a{
        color: #ffffff;
    }
    a:active, a:hover{
        color: #a9a9a9;
    }
</style>
<footer>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="heading">
                Information
            </div>         
            <a href="about.php"> About Us</a><br>
            <a href="contact.php"> Contact Us</a> 
        </div>
        <div class="col-sm-4">
            <div class="heading">
                My Account
            </div> 
            <a data-toggle="modal" data-target="#loginModal"> Login</a><br>
            <a href="signup.php"> Signup</a> 
        </div>
        <div class="col-sm-4">
            <div class="heading">
                Contact Us
            </div>  
            <div class="content">
            Contact: +91-123-000000
            </div>
        </div>
    </div>
</div>
</footer>

<!-- the footer (grid system and the links.)
It is not included in the container-fluid and given a manual css with width:100%. This section will contain one 
row divided into three columns.
Information, My Account and Contact Us are text but beneath them all are links except the number below the 
contact us. Login link below the My Account will again trigger the modal.-->
