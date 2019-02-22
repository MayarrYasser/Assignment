<?php
include("user.php");

$email=$_POST['Email'];
$pass=$_POST['Password'];

$myobject=new user("");
$myobject->login($email,$pass);

?>