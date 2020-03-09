<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<!-- Variabel $user menajdi $u(sebagai variabel perantara ) -->
		<?php foreach($user as $u){ ?> 
		<tr>
			<!-- menapilkan data yang disimpan dalam $u pada kolom nama -->
			<td><?php echo $u->nama ?></td> 
			<!-- menapilkan data yang disimpan dalam $u pada kolom alamat -->
			<td><?php echo $u->alamat ?></td>
			<!-- menapilkan data yang disimpan dalam $u pada kolom pekerjaan -->
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>