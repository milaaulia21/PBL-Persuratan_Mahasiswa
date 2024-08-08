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
		$data = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs)
	{
		mysqli_query($this->koneksi,"insert into mahasiswa values ('','$id_user','$nim','$kelas_mhs','$prodi_mhs','$ttd_mhs')");
	}

	function get_by_id($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

	function update_data($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs,$id_mhs)
	{
        $ttd_mhs = mysqli_real_escape_string($this->koneksi, $ttd_mhs);
        mysqli_query($this->koneksi,
		"UPDATE mahasiswa SET 
		id_user='$id_user',
		nim='$nim',
		kelas_mhs='$kelas_mhs',
		prodi_mhs='$prodi_mhs',
		ttd_mhs='$ttd_mhs'
		WHERE id_mhs='$id_mhs'");
	}

	function delete_data($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"delete from mahasiswa where id_mhs='$id_mhs'");
	}

    function ambil_data_user()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}
?>