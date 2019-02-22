<?php
include("user.php");



$myobject=new user("");
$myobject->fullname=$_POST['Fname'];
$myobject->dob=$_POST['DOB'];
$myobject->email=$_POST['email'];
$myobject->password=$_POST['psw'];
$myobject->add($myobject);


?>