<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$amount = $_POST['amount'];
	$sql = "INSERT INTO donation_details (name,phone_number,email,amount)VALUES('$name','$phone_number','$email','$amount')";
	if (mysqli_query($conn, $sql)){
		
		echo '<script>window.location.href = "https://rzp.io/l/MDyumpWINE";</script>';
	}
	else{
		echo "Error:" .$sql ."" .mysqli_error($conn);
	}
}mysqli_close($conn);
?>