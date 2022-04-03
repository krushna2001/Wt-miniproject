<?php
include "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
    $number = $_POST['number1'];
    $address = $_POST['address1'];
    $city = $_POST['city'];
    $state = $_POST['state1'];
    $gender = $_POST['gender'];
    $zip = $_POST['zip'];
    

	
		$sql = "SELECT * FROM profile WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO profile (fname, lname, email, number, address, city, state, gender, zip)
					VALUES ('$fname', '$lname', '$email', '$number', '$address', $city', '$state', '$gender', '$zip')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$fname = "";
            	$lname = "";
            	$email = "";
                $number = "";
                $address = "";
                $city = "";
                $state = "";
                $gender = "";
                $zip = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	 
}





?>