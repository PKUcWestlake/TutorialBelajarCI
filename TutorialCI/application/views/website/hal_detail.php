<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>
    <p>NIM : <input type="text" value="<?= $mahasiswa->nim ?>" readonly></p>
    <p>NAMA : <input type="text" value="<?= $mahasiswa->nama_mhs ?>" readonly></p>
    <p>JURUSAN : <input type="text" value="<?= $mahasiswa->nama_jurusan ?>" readonly></p>
    <p>KELAS : <input type="text" value="<?= $mahasiswa->kelas ?>" readonly></p>
    <p>NOMOR HP : <input type="text" value="<?= $mahasiswa->no_telp ?>" readonly></p>
    <p>ALAMAT : <textarea readonly><?= $mahasiswa->alamat ?></textarea></p>
</body>

</html>