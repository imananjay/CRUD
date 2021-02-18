<?php 
	$mysqli=new mysqli("localhost", "root", "", "siswa") or die ($mysqli->error); 

	if (isset($_GET["hapus"])) {
		$id=$_GET["hapus"];
		$mysqli->query("DELETE FROM data_siswa WHERE id=$id") or die ($mysqli->error);
		header("location:index.php");
	}
		
	
	

?>