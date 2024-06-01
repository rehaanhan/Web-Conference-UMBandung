<?php
$servername = "localhost";
$username = "root";
$password = ""; // Kosongkan jika tidak ada password

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="css/styleRegist.css">
</head>
<body>
	<div class="container">
		<h2>Halaman Registrasi</h2>
		<form>
			<div class="form-group">
				<label for="nama_lengkap" class="label">Full Name</label>
				<input type="text" id="nama_lengkap" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email" class="label">Email:</label>
				<input type="email" id="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="phone_number" class="label">Phone Number:</label>
				<input type="text" id="phone_number" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="salutation" class="label">Salutation:</label>
				<select id="salutation" class="select-control" required>
					<option value="">-- Pilih --</option>
					<option value="mr">Mr.</option>
					<option value="mrs">Mrs.</option>
					<option value="ms">Ms.</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status_participant" class="label">Status Participant:</label>
				<select id="status_participant" class="select-control" required>
					<option value="">-- Pilih --</option>
					<option value="teachers_staff">Teachers/Staff</option>
					<option value="undergraduate_student">Undergraduate Student</option>
					<option value="postgraduate_student">Postgraduate Student</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nationality" class="label">Kewarganegaraan:</label>
				<select id="nationality" class="select-control" required>
					<option value="">-- Pilih --</option>
					<!-- isi dengan pilihan kewarganegaraan -->
				</select>
			</div>
			<div class="form-group">
				<label for="from_campus_a" class="label">Apakah dari Kampus A?</label>
				<select id="from_campus_a" class="select-control" required>
					<option value="">-- Pilih --</option>
					<option value="yes">Ya</option>
					<option value="no">Tidak</option>
				</select>
				<div id="other_campus" style="display: none;">
					<label for="other_campus_name" class="label">Nama Kampus Asal:</label>
					<input type="text" id="other_campus_name" class="form-control">
				</div>
			</div>
			<button class="button" type="submit">Daftar</button>
		</form>
	</div>
	
	<script>
		document.getElementById('from_campus_a').addEventListener('change', function() {
			if (this.value === 'no') {
				document.getElementById('other_campus').style.display = 'block';
			} else {
				document.getElementById('other_campus').style.display = 'none';
			}
		});
	</script>
</body>
</html>