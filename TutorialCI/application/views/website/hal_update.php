<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Update</title>
</head>

<body>
    <h1>Update Mahasiswa</h1>
    <form action="<?php echo base_url('Home/update') ?>" method="post">
        <p>NIM : <input type="text" name="nim" value="<?= $mhs->nim ?>" readonly></p>
        <p>NAMA : <input type="text" name="nama_mhs" value="<?= $mhs->nama_mhs ?>"></p>
        <p>JURUSAN :
            <select name="id_jurusan">
                <?php
                foreach ($jur as $row) :
                    $aksi = ($mhs->id_jurusan == $row->id_jurusan) ? "selected" : "";
                ?>
                <option value="<?= $row->id_jurusan ?>" <?= $aksi ?>>
                    <?= $row->nama_jurusan ?>
                </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>KELAS : <input type="text" name="kelas" value="<?= $mhs->kelas ?>"></p>
        <p>NOMOR HP : <input type="text" name="no_telp" value="<?= $mhs->no_telp ?>"></p>
        <p>ALAMAT : <textarea name="alamat"><?= $mhs->alamat ?></textarea></p>
        <button>Simpan Data</button>
    </form>
</body>

</html>