<?php

print("start");
	// Get data
	$customer_name = $_POST["customer_name"];
	$customer_email = $_POST["customer_email"];
	$customer_sex = $_POST["customer_sex"];
	$customer_age = $_POST["customer_age"];
print("1");	 
	 
	// Database connection
	$conn = mysqli_connect("localhost","root","","odbc_wp_2");
	if(!$conn) {
		die('Problem in database connection: ' . mysql_error());
	}
print("2"); 
	// Data insertion into database
	$query = "INSERT INTO customer_info ( Name, Email, Sex, Age ) VALUES ( '$customer_name', '$customer_email', '$customer_sex', '$customer_age' )";
	mysqli_query($conn, $query);
print("3");
	// Redirection to the success page
	header("Location: http://www.google.com");
?>