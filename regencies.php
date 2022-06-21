<?php
	require_once 'connection.php';

	// tampung id provinsi
	$prov_id = $_POST['id_provinsi'];

	$sql_kota = mysqli_query (
		$con, "SELECT * FROM regencies WHERE id_provinsi = $prov_id");

	echo '<option>Pilih Kota</option>';
	while ($row_kota = mysqli_fetch_array($sql_kota)) {
		echo '<option value="'.$row_kota['id_kota'].'">'
		.$row_kota['nama_kota']
		.'</option>';
	}
?>