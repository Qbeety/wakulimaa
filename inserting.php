<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


if (!empty($firstname) || !empty($lastname) || !empty($email) ||  !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registration";
    
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
    
     $INSERT = "INSERT Into register (firstname, lastname, email, password) values('$firstname','$lastname','$email','$password')";
     //Prepare statement
    
		if(mysqli_query($conn,$INSERT)){
		echo "New record inserted sucessfully";	
		}
	
      
      else {
      echo "Someone already register using this email";
     }
   
  
    }
} else {
 echo "All field are required";
 die();
}
?>