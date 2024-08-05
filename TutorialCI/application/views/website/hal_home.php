<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Home</title>
</head>

<body>
    <h1>Tabel Jurusan</h1>
    <table border="1">
        <tr style="font-weight: bold;">
            <td>ID JURUSAN</td>
            <td>NAMA JURUSAN</td>
        </tr>
        <?php foreach ($jurusan as $row) : ?>
        <tr>
            <td><?= $row->id_jurusan ?></td>
            <td><?= $row->nama_jurusan ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>