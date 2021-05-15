<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$password_old = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'old_password'));
$pass_old= md5($password_old);

$password_new = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'new_password'));
$pass_new= md5($password_new);

$password_confirm = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'confirm_password'));
$pass_confirm= md5($password_confirm);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if(strlen($password_new)<6)
{
    $m = "<span class='red'>The new password's length must be greater than 6</span>";
    header("location: settings.php?m4=" . $m);exit;
  }
 else {
if ($pass_new != $pass_confirm) {
    $m = "<span class='red'>The new passwords and its confirm don't match</span>";
    header("location: settings.php?m2=" . $m);exit;
  }
else {
    if ($pass_old == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $pass_new . "' WHERE email = '" . $_SESSION['email'] . "'";
        $mysqli_result=mysqli_query($con, $query) or die($mysqli_error($con));
        $m = "<span class='green'>Password Updated!!!</span>";
        header("location: settings.php?m3=" . $m);exit;
    } else {
        $m = "<span class='red'>Wrong Old Password</span>";
        header("location: settings.php?m1=" . $m);exit;
    }
}
 }
?>