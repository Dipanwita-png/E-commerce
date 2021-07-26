<?php

require('includes/common.php');

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$password = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));
$pass= md5($password);
$name = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'name'));
$contact = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'contact'));
$city = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'city'));
$address = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'address'));

//$regex_name = "^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$";
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[6789][0-9]{9}$/";

$user_check_query = "SELECT * FROM users WHERE email = '$email' ";
$mysqli_result = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
$num = mysqli_num_rows($mysqli_result);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header("location: signup.php?m1=" . $m . "& name=$name & contact=$contact & city=$city & address=$address");exit;
  } /*else if (!preg_match($regex_name, $email)) {
    $m = "<span class='red'>Not a valid Name</span>";
    header('location: signup.php?m3=' . $m);exit;
  }*/  else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header("location: signup.php?m1=" . $m . "& name=$name & contact=$contact & city=$city & address=$address");exit;
  }else if(strlen($password) < 6) {
    $m = "<span class='red'>Password length must be greater than 6</span>";
    header("location: signup.php?m4=" . $m . "& name=$name & contact=$contact & city=$city & address=$address");exit;
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header("location: signup.php?m2=" . $m . "& name=$name & city=$city & address=$address");exit;
  } else {
    //use insert query and store the data in the database.
    $user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('" . $name . "','" . $email . "','" . $pass . "','" . $contact . "','" . $city . "','" . $address . "')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con); 
    header("location: index.php");
    exit;
 } 

 
?>


