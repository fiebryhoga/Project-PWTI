<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $penulis = $_POST['penulis'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $sinopsis = $_POST['sinopsis'];
    $halaman = $_POST['halaman'];

    $cover = $_FILES['cover']['name'];
    $tmp_name = $_FILES['cover']['tmp_name'];
    move_uploaded_file($tmp_name, 'uploads/' . $cover);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>

    <style>
        body {
  margin: 0;
  padding-left: 3em;
  padding-right: 3em;
  font-family: "Poppins", sans-serif;
}
        section {
            margin-top: 6em;
            background-color: #e8e8e8;
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
            padding-bottom: 1em;
        }
        .proses {
            padding-top: 20px;
            padding-right: 20px;
            width: 100%;
            display: flex;
            justify-content: end;
        }
        .proses p {
            font-size: smaller;
            font-weight: 300;
            color: gray;
        }

        .container_buku {
            padding-top: 2em;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;

        }

        .cover {
            width: 100px;
            height: 160px;
            border-radius: 6px;
        }

        h4 {
            font-size: medium;
            font-weight: 700;
            letter-spacing: 1px;
            margin-top: 1em;
        }
        .container_penulis {
            display: flex;
            gap: 16px;
        }
        .container_penulis p{
            font-weight: 400;
            font-size: medium;
        }
        .container_sinopsis {
            margin-top: 2em;
            width: 100%;
            padding-left: 150px;
            padding-right: 150px;
        }
        .container_sinopsis h4 {
            font-size: medium;
            font-weight: 600;
            color: gray;
        }
        .container_sinopsis p {
            font-size: 14px;
            text-align: justify;
            font-weight: 400;

        }

    </style>
</head>



<body>

    <?php include 'navbar.php';?>


    <section class="section-hasil">
        <div class="container_hasil">
            <div class="header-hasil">
                <h3>PENGAJUAN BUKU</h3>
            </div>
            <div class="proses">
                <p>sedang dalam proses peninjauan</p>
            </div>
            <div class="container_buku">
                <img class="cover" src="uploads/<?php echo $cover_name ?>" alt="">

                <h4>
                    <?php echo $judul ?>
                </h4>
                <div class="container_penulis">
                    <p>karya <?php echo $penulis ?></p>
                    <p>|</p>
                    <p><?php echo $genre ?></p>
                                        <p>|</p>

                    <p><?php echo $halaman ?> halaman</p>

                </div>
            </div>
            <div class="container_sinopsis">
                <h4>Sinopsis</h4>
                <p>

                    <?php echo $sinopsis ?>

                </p>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>
</body>



</html>