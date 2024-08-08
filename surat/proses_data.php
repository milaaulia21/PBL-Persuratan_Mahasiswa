<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id_mhs'],$_POST['id_pelapor'],$_POST['id_bag_perpustakaan'],$_POST['id_bag_keuangan'],$_POST['id_dosen'],$_POST['id_kajur'],$_POST['nama_surat'],$_POST['tgl_surat'],$_POST['no_surat']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['id_mhs'],$_POST['id_pelapor'],$_POST['id_bag_perpustakaan'],$_POST['id_bag_keuangan'],$_POST['id_dosen'],$_POST['id_kajur'],$_POST['nama_surat'],$_POST['tgl_surat'],$_POST['no_surat'],$_POST['id_surat']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_surat = $_GET['id'];
	$koneksi->delete_data($id_surat);
	header('location:tampil_data.php');
}
?>