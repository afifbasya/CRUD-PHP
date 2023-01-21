<?php
include 'database.php';
$db = new database();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>CRUD OOP PHP MySQL</title>
</head>

<body>
	<div class="container">
		<h1>CRUD OOP PHP</h1>
		<a href="input.php" class="btn btn-primary">Input Data</a>
		<table border="1" class="mt-2 table">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Usia</th>
				<th>Opsi</th>
			</tr>
			<?php
			$no = 1;
			foreach ($db->tampil_data() as $siswa) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $siswa['nama']; ?></td>
					<td><?php echo $siswa['alamat']; ?></td>
					<td><?php echo $siswa['nohp']; ?></td>
					<td>
						<a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $siswa['id']; ?>&aksi=edit">Edit</a>
						<a class="btn btn-danger btn-sm" href="proses.php?id=<?php echo $siswa['id']; ?>&aksi=hapus">Hapus</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>

</html>