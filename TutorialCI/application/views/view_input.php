<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Tambah Barang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Form Halaman Barang</h1>
    <form action="<?php echo base_url('welcome/ProsesBarang') ?>" method="post">
        <p><b>Kode Barang : </b> <input type="text" name="kode"></p>
        <p><b>Nama Barang : </b> <input type="text" name="nama"></p>
        <p><b>Stok Barang : </b> <input type="text" name="stok"></p>
        <p><b>Harga Barang : </b> <input type="text" name="harga"></p>
        <p><button>Tombol Tambah</button></p>
    </form>
</body>

</html>