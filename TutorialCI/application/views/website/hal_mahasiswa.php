<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Mahasiswa</title>
</head>

<body>
    <h1>Tabel Jurusan</h1>
    <table border="1">
        <tr style="font-weight: bold;">
            <td>NIM</td>
            <td>NAMA MAHASISWA</td>
            <td>KELAS</td>
            <td>JURUSAN</td>
        </tr>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $row->nim ?></td>
            <td><?= $row->nama_mhs ?></td>
            <td><?= $row->kelas ?></td>
            <td><?= $row->id_jurusan ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>