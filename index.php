<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nama_penulis = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['telephone'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $judul_buku = $_POST['judul'];
    $jumlah_halaman = $_POST['halaman'];
    $genre = $_POST['genre'];
    $sinopsis = $_POST['sinopsis'];

    // Lakukan sesuatu dengan data yang ditangkap, misalnya simpan ke database

    // Redirect ke halaman baru
    header("Location: halaman_baru.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    
</head>
<body>

    <?php include 'navbar.php';?>
    <?php include 'footer.php';?>
</html>

