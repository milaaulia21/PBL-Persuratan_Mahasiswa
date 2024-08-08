<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "persuratan_mahasiswa";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($kode_role,$username,$email,$password)
	{
		mysqli_query($this->koneksi,"insert into user values ('','$kode_role','$username','$email','$password')");
	}

	function get_by_id($id_user)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM user where id_user='$id_user'");
		return $query->fetch_array();
	}

	function update_data($kode_role,$username,$email,$password,$id_user)
	{
		$query = mysqli_query($this->koneksi,"update user set kode_role='$kode_role',username='$username',email='$email',password='$password' where id_user='$id_user'");
	}

	function delete_data($id_user)
	{
		$query = mysqli_query($this->koneksi,"delete from user where id_user='$id_user'");
	}


}
?>