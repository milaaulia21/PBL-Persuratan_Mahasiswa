<?php 	
include_once('koneksi.php');
$db = new database();
$data_users = $db->ambil_data_user();
$id_mhs = $_GET['id'];
if(! is_null($id_mhs))
{
	$data_mahasiswa = $db->get_by_id($id_mhs);
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
<h3>Update Data Mahasiswa</h3>
<hr/>
<form method="post" action="proses_data.php?action=update" enctype="multipart/form-data">
<input type="hidden" name="id_mhs" value="<?php echo $data_mahasiswa['id_mhs']; ?>"/>
<table>
    <tr>
		<td>ID User</td>
		<td>:</td>
        <td>
            <select name="id_user">
                <option value="">Pilih User</option>
                <?php 
                foreach ($data_users as $data_user) {
                    echo '<option value="' . $data_user['id_user'] . '"' . ($data_user['id_user'] == $data_mahasiswa['id_user'] ? ' selected' : '') . '>' . $data_user['username'] . '</option>';
                }
                ?>
            </select>
        </td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" value="<?php echo $data_mahasiswa['nim']; ?>"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas_mhs" value="<?php echo $data_mahasiswa['kelas_mhs']; ?>"/></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type="text" name="prodi_mhs" value="<?php echo $data_mahasiswa['prodi_mhs']; ?>"/></td>
	</tr>
    <tr>
		<td>Tanda Tangan</td>
		<td>:</td>
		<td><input type="file" name="ttd_mhs"></td>
        <td><img src="data:image/png;base64,<?php echo base64_encode($data['ttd_mhs']); ?>" width="100px"></td>
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