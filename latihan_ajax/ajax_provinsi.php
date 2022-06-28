<?php 
	// 1. MENGAMBIL FILE JSON
	$data 	= file_get_contents("data/provinsi.json");

	// 2. KONVERSI JSON MENJADI ARRAY ASSOCIATIVE
	$option = json_decode($data, true);

	// 3. MENAMPILKAN DATA ARRAY
	echo "<option disabled selected>PILIH</option>";
	foreach ($option as $key => $value) {
		echo "<option value='".$option[$key]['id']."'>";
		echo $option[$key]['name'];
		echo "</option>";
	}
?>