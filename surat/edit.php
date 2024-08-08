<?php 	
include_once('koneksi.php');
$db = new database();
$data_users = $db->ambil_data_user();
$id_surat = $_GET['id'];
if(! is_null($id_surat))
{
	$data_surat = $db->get_by_id($id_surat);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Surat</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id_surat" value="<?php echo $data_surat['id_surat']; ?>"/>
<table>
<tr>
		<td>ID Mahasiswa</td>
		<td>:</td>
        <td>
            <select name="id_mhs">
                <option value="">Pilih User</option>
                <?php 
                foreach ($data_users as $data_user) {
                    echo '<option value="' . $data_user['id_mhs'] . '"' . ($data_user['id_mhs'] == $data_surat['id_mhs'] ? ' selected' : '') . '>' . $data_user['nim'] . '</option>';
                }
                ?>
            </select>
        </td>
	</tr>
	<tr>
		<td>ID Pelapor</td>
		<td>:</td>
		<td><input type="text" name="id_pelapor" value="<?php echo $data_surat['id_pelapor']; ?>"/></td>
	</tr>
	<tr>
		<td>ID Bag Perpustakaan</td>
		<td>:</td>
		<td><input type="text" name="id_bag_perpustakaan" value="<?php echo $data_surat['id_bag_perpustakaan']; ?>"/></td>
	</tr>
	<tr>
		<td>ID Bag Keuangan</td>
		<td>:</td>
		<td><input type="text" name="id_bag_keuangan" value="<?php echo $data_surat['id_bag_keuangan']; ?>"/></td>
	</tr>
    <tr>
		<td>ID Dosen</td>
		<td>:</td>
		<td><input type="text" name="id_dosen" value="<?php echo $data_surat['id_dosen']; ?>"/></td>
	</tr>
    <tr>
		<td>ID Kajur</td>
		<td>:</td>
		<td><input type="text" name="id_kajur" value="<?php echo $data_surat['id_kajur']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Surat</td>
		<td>:</td>
		<td><input type="text" name="nama_surat" value="<?php echo $data_surat['nama_surat']; ?>"/></td>
	</tr>
    <tr>
		<td>Tanggal Surat</td>
		<td>:</td>
		<td><input type="date" name="tgl_surat" value="<?php echo $data_surat['tgl_surat']; ?>"/></td>
	</tr>
    <tr>
		<td>No. Surat</td>
		<td>:</td>
		<td><input type="text" name="no_surat" value="<?php echo $data_surat['no_surat']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>