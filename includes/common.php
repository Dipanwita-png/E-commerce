<?php

if(!isset($_SESSION)) { 
        session_start(); 
} 

$con=mysqli_connect("remotemysql.com","mpqvLM5qTK","1YkSYLmHao","mpqvLM5qTK")or die(mysqli_error($con));

?>
