<?php

// This page updates the user password
require("includes/common.php");

$password_new = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'new_password'));
$pass_new= md5($password_new);

$password_confirm = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'confirm_password'));
$pass_confirm= md5($password_confirm);

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
if(strlen($password_new)<6)
{
    $m = "<span class='red'>The new password's length must be greater than 6</span>";
    header("location: settings.php?m2=" . $m);exit;
  }
 else {
if ($pass_new != $pass_confirm) {
    $m = "<span class='red'>The new passwords and its confirm don't match</span>";
    header("location: update_pass.php?m1=" . $m);exit;
  }
else {   $query = "UPDATE  users SET password = '" . $pass_new . "' WHERE email = '" . $email . "'";
        $mysqli_result=mysqli_query($con, $query) or die($mysqli_error($con));
        $m = "<span class='green'>Password Updated!!!</span>";
        header("location: update_pass.php?m2=" . $m);exit;
    } 
 }
?>