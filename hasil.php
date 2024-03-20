<?php include 'navbar.php';?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $foto = $_FILES["foto"]["name"];
    $temp_name = $_FILES["foto"]['tmp_name'];
    move_uploaded_file($temp_name, "uploads/" . $foto);

    echo "<h2>Informasi buku</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
    echo "<p><strong>Telepon:</strong> $telephone</p>";

    // echo "<p><strong>Foto Pasien:</strong> <img src='uploads/' width='200'></p>";

}

?>
<img src="uploads/<?php echo $foto?>" alt="">
        </div>
    </div>
</div>

<?php include 'footer.php';?>
