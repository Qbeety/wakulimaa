<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'registration');

$name=$_POST['firstname'];
$pass=$_POST['password'];

$s = "select *  from register where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
	echo "username already taken";
}
else{
	$reg="insert into register(name , password) values ('$name' , '$pass')";
	mysqli_query($con,$reg);
	echo "registration successful";
}


?>