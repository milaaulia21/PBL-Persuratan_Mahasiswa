<?php 
include('koneksi_mysqli.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['id_user']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_user = $_GET['id'];
	$koneksi->delete_data($id_user);
	header('location:tampil_data.php');
}


?>