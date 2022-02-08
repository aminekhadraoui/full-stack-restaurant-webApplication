<?php

$conn = mysqli_connect(
    "localhost","root","","restaurant");
    $username = $_POST["username"];
	   if (empty($username)) {
		echo "<script> alert('All Fields Must Be Filled'); window.location='login.html';</script>";
		 }
	$phone = $_POST["phonenumber"];
	
	if (empty($phone)) {
		echo "<script> alert('All Fields Must Be Filled'); window.location='login.html';</script>";
		 }


	$pass = $_POST["password"];
	if (empty($pass)) {
		echo "<script> alert('All Fields Must Be Filled'); window.location='login.html';</script>";
		 }
	$rp=$_POST["rp"];
	
	
//controle saisie password


	if (strcmp($rp,$pass) !== 0) {

			echo "<script>alert('Password Doesnt Match'); window.location='login.html'; </script>";

	}

      else {

	

	$mail = $_POST["mail"];
	if (empty($mail)) {
		echo "<script> alert('All Fields Must Be Filled'); window.location='login.html';</script>";
		 }
	$req = "INSERT INTO user(email,phone,name,password) VALUES ('$mail','$phone','$username','$pass')";
    $r = mysqli_query($conn,$req);

	echo "<script>alert('Signed Up Successfully'); window.location='login.html';</script>";
          }
	
?>