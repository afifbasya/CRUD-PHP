<?php
include 'database.php';

$db = new Database();

$detail = $db->edit($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD OOP PHP mySQL</title>
</head>

<body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data User</h4>

        <form method="POST" action="proses.php?aksi=update">
            <?php
            foreach ($detail as $siswa) {
            ?>
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama'] ?>">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="nohp" class="form-label">No. HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $siswa['nohp'] ?>">
                </div>

            <?php
            }
            ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>