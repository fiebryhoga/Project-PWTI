<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $foto = $_FILES["foto"]["name"];
    $temp_name = $_FILES["foto"]['tmp_name'];
    move_uploaded_file($temp_name, "uploads/" . $foto);

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

    <style>
        section {
            margin-top: 6em;
            background-color:#e8e8e8 ;
            border-radius: 7px;
            padding-top: 2em;
            padding-bottom: 3em;
            margin-left: 10em;
            margin-right: 10em;
            font-weight: 700;
            font-size: large;
            display: flex;
            flex-direction: row;
            justify-content: center;

        }
        .container_hasil {
            width: 100%;

        }
        .header-hasil {
            width: full;
            border-bottom: solid 2px white;
            display: flex;
            justify-content: center;
        }
    </style>
</head>




<?php include 'navbar.php';?>

<section class="section-hasil">
    <div class="container_hasil">
        <div class="header-hasil">
            <h3>PENGAJUAN BUKU</h3>
        </div>
        <div class="container_hasil">

        </div>
    </div>
</section>

<?php include 'footer.php';?>


</html>