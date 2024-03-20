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

    $cover = '';
    $dokumen = '';

    if (isset($_FILES['cover']) && $_FILES['cover']['error'] === UPLOAD_ERR_OK) {
        $cover = $_FILES['cover']['name'];
        $tmp_name = $_FILES['cover']['tmp_name'];
        move_uploaded_file($tmp_name, 'uploads/' . $cover);
    }

    if (isset($_FILES['dokumen']) && $_FILES['dokumen']['error'] === UPLOAD_ERR_OK) {
        $dokumen = $_FILES['dokumen']['name'];
        $tmp_name = $_FILES['dokumen']['tmp_name'];
        move_uploaded_file($tmp_name, 'uploads/book/' . $dokumen);
    }

    $file_content = "penulis: $penulis\n";
    $file_content .= "email: $email\n";
    $file_content .= "nomor telepon: $telephone\n";
    $file_content .= "alamat: $alamat\n";
    $file_content .= "pekerjaan: $pekerjaan\n";
    $file_content .= "judul: $judul\n";
    $file_content .= "genre: $genre\n";
    $file_content .= "halaman: $halaman\n";
    $file_content .= "sinopsis: $sinopsis\n";
    $file_content .= "cover: $cover\n";
    $file_content .= "dokumen: $dokumen\n";
    $file_content .= "-----------------------------------------------------\n\n";

    $file_path = "uploads/data.txt";
    file_put_contents($file_path, $file_content, FILE_APPEND);
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
            padding-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        .cover {
            width: 180px;
            height: 240px;
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
        .container_info {
            margin-top: 2em;
            width: 100%;
            padding-left: 150px;
            padding-right: 150px;
            margin-bottom: 1em;
        }
        .container_info h4 {
            font-size: medium;
            font-weight: 600;
            color: gray;
        }
        .container_info p {
            line-height: 28px;
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
                <img class="cover" src="uploads/<?php echo $cover; ?>" alt="">
                <h4><?php echo $judul; ?></h4>
                <div class="container_penulis">
                    <p>karya <?php echo $penulis; ?></p>
                    <p>|</p>
                    <p><?php echo $genre; ?></p>
                    <p>|</p>
                    <p><?php echo $halaman; ?> halaman</p>
                </div>
            </div>
            <div class="container_info">
                <h4>Sinopsis</h4>
                <p><?php echo $sinopsis; ?></p>
            </div>
            <div class="container_info">
                <h4>Catatan</h4>
                <p>Dengan penuh antusiasme, kami menerima pengajuan buku Anda untuk dipertimbangkan dalam proses penerbitan kami. Tim kami akan dengan seksama meninjau karya yang telah Anda ajukan ini. Kami berkomitmen untuk menyampaikan hasil peninjauan tersebut kepada Anda melalui email konfirmasi dalam waktu maksimal 24x7 atau satu minggu setelah penerimaan pengajuan ini.

Email konfirmasi akan kami kirimkan ke alamat <span style="color: #1b4b8e;"> <?php echo $email; ?></span>yang telah Anda berikan. Namun demikian, jika dalam periode tersebut Anda belum menerima email dari kami, mohon untuk segera menghubungi contact person yang telah disediakan.

Selain itu, untuk memfasilitasi proses peninjauan lebih lanjut, kami juga berencana untuk mengirimkan prototipe buku kepada Anda. Mohon konfirmasi alamat pengiriman lengkap ke alamat <span style="color: #1b4b8e;"> <?php echo $alamat; ?></span>agar kami dapat mengirimkan prototipe tersebut dengan tepat.

Kami menghargai kepercayaan yang Anda berikan kepada kami dalam mempertimbangkan karya Anda untuk diterbitkan. Terima kasih atas partisipasi Anda dalam proses ini dan kami berharap untuk dapat bekerja sama dalam mewujudkan keberhasilan karya ini.</p>
            </div>

        </div>
    </section>
    <?php include 'footer.php';?>
</body>
</html>