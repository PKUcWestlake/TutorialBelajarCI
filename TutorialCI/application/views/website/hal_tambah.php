<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Tambah</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="<?php echo base_url('Home/tambah') ?>" method="post">
        <p>NIM : <input type="text" name="nim"></p>
        <p>NAMA : <input type="text" name="nama_mhs"></p>
        <p>JURUSAN :
            <select name="id_jurusan">
                <?php
                foreach ($jur as $row) :
                ?>
                <option value="<?= $row->id_jurusan ?>">
                    <?= $row->nama_jurusan ?>
                </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>KELAS : <input type="text" name="kelas"></p>
        <p>NOMOR HP : <input type="text" name="no_telp"></p>
        <p>ALAMAT : <textarea name="alamat"></textarea></p>
        <button>Tambah Data</button>
    </form>
</body>

</html>