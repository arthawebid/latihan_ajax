<?php 
	// 0. MENGAMBIL DATA ID PROVINSI
	$province_id = $_POST['province_id'];

	// 1. MENGAMBIL FILE JSON
	$data 	= file_get_contents("data/kabupaten.json");

	// 2. KONVERSI JSON MENJADI ARRAY ASSOCIATIVE
	$option = json_decode($data, true);

	// 3. MENAMPILKAN DATA ARRAY
	echo "<option disabled selected>PILIH</option>";
	foreach ($option as $key => $value) {
		if ($option[$key]['province_id'] == $province_id) {
			echo "<option value='".$option[$key]['id']."'>";
			echo $option[$key]['name'];
			echo "</option>";
		}
	}
?>