<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Halaman Utama Website BlogBelajar</h1>
    <a href="<?php echo base_url('item/tambah') ?>">
        Halaman Tambah Produk
    </a>

    <br>
    <a href="<?php echo base_url('login') ?>">
        Halaman Login
    </a>
    <br>
    <a href="<?php echo base_url() . generateSlugURL() ?>">Halaman Berita</a>
</body>

</html>

<?php
function generateSlugURL()
{
    $judul = "Tutorial Lengkap Praktikum Slug URL";
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));
    return $slug;
}
?>