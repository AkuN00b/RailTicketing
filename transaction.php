<?php 
	include 'connection.php';

	$fullname = $_POST['fullname'];
	$provinces = $_POST['provinces'];
	$regencies = $_POST['regencies'];
	$provincess = $_POST['provincess'];
	$regenciess = $_POST['regenciess'];
	$travel_date = $_POST['travel_date'];

	// $_POST['travel_date'] = stripslashes($_POST['travel_date']);
	// $date = mysqli_real_escape_string($_POST['travel_date']);
	// $date = date("d-m-Y", strtotime($date));
	 
	mysqli_query($con, "INSERT INTO transactions (name, departure_province_id, departure_regency_id, arrive_province_id, arrive_regency_id, travel_date) VALUES ('$fullname', '$provinces', '$regencies', '$provincess', '$regenciess', '$travel_date')");

	echo "<script type='text/javascript'>alert('Transaction Successfull');
			window.location='index.php';
			</script>"
?>