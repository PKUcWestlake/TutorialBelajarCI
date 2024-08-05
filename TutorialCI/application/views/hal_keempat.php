<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Keempat</title>
</head>

<body>
    <h1>List Jurusan Populer</h1>
    <ul>
        <?php foreach ($jurusan as $jur) { ?>
        <li><?php echo $jur ?></li>
        <?php } ?>
    </ul>
</body>

</html>