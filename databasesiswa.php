<?php   

	class datasiswa {

		var $host="localhost";
		var $uname="root";
		var $pass="";
		var $db="siswa";

		public function __construct()
		{
			$this->sambung=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			
		}
		function input($nama, $usia, $alamat, $no_telepon){
			mysqli_query($this->sambung, "insert into data_siswa values('','$nama', '$usia', '$alamat', '$no_telepon')");
		}

	}
 ?>