<?php 
include_once('koneksi.php');
$user = new database();
$data_users = $user->ambil_data_user();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Surat</h3>
<hr/>
<form method="post" action="proses_data.php?action=add">
<table>
	<tr>
		<td>ID Mahasiswa</td>
		<td>:</td>
        <td>
            <select name="id_mhs">
                <option value="">Pilih User</option>
                <?php 
                foreach ($data_users as $data_user) {
                    echo '<option value="' . $data_user['id_mhs'] . '">' . $data_user['nim'] . '</option>';
                }
                ?>
            </select>
        </td>
	</tr>
	<tr>
		<td>ID Pelapor</td>
		<td>:</td>
		<td><input type="text" name="id_pelapor"/></td>
	</tr>
	<tr>
		<td>ID Bag Perpustakaan</td>
		<td>:</td>
		<td><input type="text" name="id_bag_perpustakaan"/></td>
	</tr>
	<tr>
		<td>ID Bag Keuangan</td>
		<td>:</td>
		<td><input type="text" name="id_bag_keuangan"/></td>
	</tr>
    <tr>
		<td>ID Dosen</td>
		<td>:</td>
		<td><input type="text" name="id_dosen"/></td>
	</tr>
    <tr>
		<td>ID Kajur</td>
		<td>:</td>
		<td><input type="text" name="id_kajur"/></td>
	</tr>
    <tr>
		<td>Nama Surat</td>
		<td>:</td>
		<td><input type="text" name="nama_surat"/></td>
	</tr>
    <tr>
		<td>Tanggal Surat</td>
		<td>:</td>
		<td><input type="date" name="tgl_surat"/></td>
	</tr>
    <tr>
		<td>No. Surat</td>
		<td>:</td>
		<td><input type="text" name="no_surat"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>