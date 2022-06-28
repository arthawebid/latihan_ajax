<?php 
	// 0. MENGAMBIL DATA ID PROVINSI
	$district_id = $_POST['district_id'];

	// 1. MENGAMBIL FILE JSON
	$data 	= file_get_contents("data/desa.json");

	// 2. KONVERSI JSON MENJADI ARRAY ASSOCIATIVE
	$option = json_decode($data, true);

	// 3. MENAMPILKAN DATA ARRAY
	echo "<option disabled selected>PILIH</option>";
	foreach ($option as $key => $value) {
		if ($option[$key]['district_id'] == $district_id) {
			echo "<option value='".$option[$key]['id']."'>";
			echo $option[$key]['name'];
			echo "</option>";
		}
	}
?>