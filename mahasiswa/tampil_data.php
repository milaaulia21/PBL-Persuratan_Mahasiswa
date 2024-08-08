<?php 	
include('koneksi.php');
$db = new database();
$data_mahasiswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>ID User</th>
			<th>NIM</th>
			<th>Kelas</th>
			<th>Prodi</th>
            <th>Tanda Tangan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_mahasiswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id_user']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['kelas_mhs']; ?></td>
				<td><?php echo $row['prodi_mhs']; ?></td>
                <td><img src="data:image/png;base64,<?php echo base64_encode($row['ttd_mhs']); ?>" width="100px"></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_mhs']; ?>">Update</a>
					<a href="proses_data.php?action=delete&id=<?php echo $row['id_mhs']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>