<?php 	
include('koneksi.php');
$db = new database();
$data_surat = $db->tampil_data();
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
			<th>ID Mahasiswa</th>
			<th>ID Pelapor</th>
			<th>ID Bag Perpustakaan</th>
			<th>ID Bag Keuangan</th>
            <th>ID Dosen</th>
			<th>ID Kajur</th>
			<th>Nama Surat</th>
			<th>Tanggal Surat</th>
            <th>No. Surat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_surat as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id_mhs']; ?></td>
				<td><?php echo $row['id_pelapor']; ?></td>
				<td><?php echo $row['id_bag_perpustakaan']; ?></td>
				<td><?php echo $row['id_bag_keuangan']; ?></td>
                <td><?php echo $row['id_dosen']; ?></td>
				<td><?php echo $row['id_kajur']; ?></td>
				<td><?php echo $row['nama_surat']; ?></td>
				<td><?php echo $row['tgl_surat']; ?></td>
                <td><?php echo $row['no_surat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_surat']; ?>">Update</a>
					<a href="proses_data.php?action=delete&id=<?php echo $row['id_surat']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>