<?php 
$mysqli=new mysqli("localhost", "root", "", "siswa") or die ($mysqli->error); 
	

	$name="";
	$age="";
	$home="";
	$number="";

	$id=0;
	if (isset($_GET['edit'])) {
		$id=$_GET['edit'];
		$hasil=$mysqli->query("SELECT * FROM data_siswa WHERE id=$id") or die ($mysqli->error);

		if ($hasil->num_rows) {
			$ada = $hasil->fetch_array();
			$name = $ada['nama'];
			$age = $ada['usia'];
			$home = $ada['alamat'];
			$number = $ada['no_telepon'];


		}  
	}

	if (isset($_POST['simpan'])) {
		$id=$_POST['id'];
		$nama = $_POST['nama'];
		$usia = $_POST['usia'];
		$alamat = $_POST['alamat'];
		$no_telepon = $_POST['no_telepon'];
		$mysqli->query("UPDATE data_siswa SET nama='$nama', usia='$usia', alamat='$alamat', no_telepon='$no_telepon' WHERE id='$id' ") or die($mysqli->error);
		header("location: index.php");
	}
		
		
	
	
	
	


 ?>