<?php

	
class user{
	public $ID;
	public $fullname;
	public $email;
	public $dob;
	public $password;
	public $usertypeid;
	
	
	
	public function user(){
		
	}
	
	public function add($object){
	$servername="localhost";
	$serveruser="root";
	$password="";
	$databasename="se";
	$con=new mysqli($servername,$serveruser,$password,$databasename);
	
	$sql="INSERT INTO `user`(`Fullname`, `Email`, `DOB`, `Password`, `UsertypeID`)
	VALUES ('".$object->fullname."','".$object->email."','".$object->dob."','".$object->password."','1')";
		
	mysqli_query($con,$sql);
	
}

	public function login($mail,$pass){
	$servername="localhost";
	$serveruser="root";
	$password="";
	$databasename="se";
	$con=new mysqli($servername,$serveruser,$password,$databasename);

	$sql="SELECT * from 'user' WHERE Email=$mail AND Password=$pass";
	mysqli_query($con,$sql);
	
	}
}
?>