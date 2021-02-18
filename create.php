<!DOCTYPE html>
<html>
<head>
	<title>daftar siswa</title>
	<style>
		body{
			
			background-color: cyan;
		}
		h1 {
			text-align: center;

		}

		.td {
			text-align: center;
		}

		.tabel {
			text-align: center;
			border: 2px solid black;
			padding-right: 20px;
			padding-left: : 30px;
			padding-bottom: 10px;
		}

		


	</style>
</head>
<body>
		

		<h1>Isi data diri</h1>

	<form action="proses.php?aksi=tambah" method="post">

	<table align="center"class="tabel">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Usia</td>
			<td><input type="text" name="usia"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>

		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="no_telepon"></td>
		</tr>

		

		<td></td>
		<td><button type="submit" name="submit">submit</button></td>
	</table>
	
</form>
</body>
</html>