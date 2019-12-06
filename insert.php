<?php
include 'include/db.php';

if (isset($_POST['signup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];

	$query = mysqli_query($conn, "INSERT INTO signup(user_name, user_email, user_password, user_contact) VALUES ('$name', '$email', '$password', '$contact')") or die("Error");

	if ($query == 1) {
		echo "<script>alert('You are registered successfully !!!')</script>";
	} else {
		echo "<script>alert('Error while registration. Please try again !!!')</script>";
	}
}
?>
