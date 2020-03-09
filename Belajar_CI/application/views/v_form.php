<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<!-- Jika terjadi validasi error -->
	<?php echo validation_errors(); ?> 
	<!-- menetapkan aksi dari form ke method aksi pada controller form -->
	<?php echo form_open('form/aksi'); ?>
		<!-- membuat label dan input type untuk memasukkan kata -->
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>