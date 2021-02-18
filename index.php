<!DOCTYPE html>
<html>
<head>
	<title>Data siswa</title>

</head>
<body>
	<?php require_once "edit.php" ?>

	<a href="create.php">Buat</a>
	<table border="1">
		 <tr>
		 	<th>No</th>
		 	<th>Nama</th>
		 	<th>Usia</th>
		 	<th>Alamat</th>
		 	<th>No telepon</th>
		 	<th>Aksi</th>
		 </tr>
		 <?php $mysqli=new mysqli("localhost", "root", "", "siswa") or die ($mysqli->error); ?>

		 <?php $hasil=$mysqli->query("SELECT * FROM data_siswa")or die ($mysqli->error); ?>
	<?php 
		$no=1;
		while($ada=$hasil->fetch_assoc()):
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $ada['nama']; ?></td>
			<td><?php echo $ada['usia']; ?></td>
			<td><?php echo $ada['alamat']; ?></td>
			<td><?php echo $ada['no_telepon']; ?></td>
			<td>
				<a href="hapus.php?hapus=<?php echo $ada["id"] ?>">hapus</a>
				<a href="index.php?edit=<?php echo $ada["id"] ?>" name="edit">edit</a>
			</td>
		</tr>

		<?php 
			endwhile;	
		?> 
		
		<div>
			<form>
				<input placeholder="nama" type="text" name="nama" value="<?php echo $name ?>"><br>
				<input maxlength="2" placeholder="usia" type="text" name="usia" value="<?php echo $age ?>"><br>
				<input placeholder="alamat" type="text" name="alamat" value="<?php echo $home ?>"><br>
				<input maxlength="15" placeholder="no_telepon" type="text" name="no_telepon" value="<?php echo $number ?>"><br>
				<button type="submit" name="simpan">simpan</button>
				
			</form>
		</div>
</body>
</html>