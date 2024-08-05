<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete dan Update Data</title>
</head>

<body>
    <h1>Halaman Aksi Data Mahasiswa</h1>
    <form action="<?php echo base_url('Home/ProsesAksi') ?>" method="post">
        <select name="nim_mhs">
            <?php foreach ($mahasiswa as $row) : ?>
            <option value="<?= $row->nim ?>"><?= $row->nama_mhs ?></option>
            <?php endforeach; ?>
        </select>
        <button name="aksi" value="update">Update</button>
        <button name="aksi" value="delete">Delete</button>
    </form>
</body>

</html>