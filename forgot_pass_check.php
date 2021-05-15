<?php

// This page updates the user password
require("includes/common.php");

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$contact = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'contact'));

$user_check_query = "SELECT * FROM users WHERE email = '$email' AND contact = '$contact' ";
$mysqli_result = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
$num = mysqli_num_rows($mysqli_result);

if ($num == 0) {
    $m = "<span class='red'>The email, contact no or both does not exists...TRY AGAIN!!!</span>";
    header("location: forgot_pass.php?m1=" . $m);exit;
}
 else {
    header("location: update_pass.php");
    exit;
}
