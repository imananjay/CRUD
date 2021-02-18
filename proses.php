<?php 

	include 'databasesiswa.php';
	$db=new datasiswa();

	$aksi=$_GET['aksi'];
	if ($aksi=="tambah") {
		$db->input($_POST['nama'], $_POST['usia'], $_POST['alamat'], $_POST['no_telepon']);
		header("location:index.php");
	}

 ?>