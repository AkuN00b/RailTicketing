<?php
	$con = mysqli_connect('localhost:3307', 'root', '', 'indonesiaprovince');

	if (!$con) {
		die(mysqli_connect_error());
	}
?>