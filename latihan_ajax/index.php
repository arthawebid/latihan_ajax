<!DOCTYPE html>
<html>
<head>
	<title>Belajar AJAX</title>
</head>
<body>
	Provinsi:<br>
	<select id="select_provinsi" style="width:240px; display: block;" disabled=""></select>

	Kabupaten/Kota:<br>
	<select id="select_kabupaten" style="width:240px; display: block;" disabled=""></select>

	Kecamatan:<br>
	<select id="select_kecamatan" style="width:240px; display: block;" disabled=""></select>

	Desa:<br>
	<select id="select_desa" style="width:240px; display: block;" disabled=""></select>

	<!-- MENAMBAHKAN JQUERY -->
	<script type="text/javascript" src="jquery-3.6.0.js"></script>

	<!-- MENGGUNAKAN AJAX -->
	<script type="text/javascript">
		
		$(document).ready(function(){

			// 1. AJAX PROVINSI
			$.ajax({
				url		: "ajax_provinsi.php",
				method	: "POST",
				data	: "",
				success	: function(data){
					$("#select_provinsi").html(data);
					$("#select_provinsi").prop('disabled', false);
				}
			});

			// 2. AJAX KABUPATEN
			// JIKA PROVINSI SUDAH DIPILIH
			$("#select_provinsi").change(function(){
				// MAKA, TAMPILKAN KABUPATEN
				$.ajax({
					url		: "ajax_kabupaten.php",
					method	: "POST",
					data	: {province_id:$("#select_provinsi").val()},
					success	: function(data){
						console.log($("#select_provinsi").val());
						$("#select_kabupaten").html(data);
						$("#select_kabupaten").prop('disabled', false);
					}
				});
			});

			// 3. AJAX KECAMATAN
			$("#select_kabupaten").change(function(){
				// MAKA, TAMPILKAN KECAMATAN
				$.ajax({
					url		: "ajax_kecamatan.php",
					method	: "POST",
					data	: {regency_id:$("#select_kabupaten").val()},
					success	: function(data){
						console.log($("#select_kabupaten").val());
						$("#select_kecamatan").html(data);
						$("#select_kecamatan").prop('disabled', false);
					}
				});
			});

			// 4. AJAX DESA
			$("#select_kecamatan").change(function(){
				// MAKA, TAMPILKAN DESA
				$.ajax({
					url		: "ajax_desa.php",
					method	: "POST",
					data	: {district_id:$("#select_kecamatan").val()},
					success	: function(data){
						console.log($("#select_kecamatan").val());
						$("#select_desa").html(data);
						$("#select_desa").prop('disabled', false);
					}
				});
			});

		});

	</script>
</body>
</html>