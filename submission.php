<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <style>
    h4 {
        color: gray;
        font-size: medium;
    }

    .container_form {
        padding-left: 3em;
        padding-right: 3em;
    }

    label {
        font-size: 14px;
    }

    @media (min-width: 768px) {
        .form-penulis {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 2em;
            grid-row-gap: 1em;

        }

        .form-buku {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-column-gap: 2em;
            grid-row-gap: 1em;

        }
    }


    .grup-formulir {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .input {
        border: none;
        padding-left: 1em;
        padding-top: 8px;
        padding-bottom: 8px;
        width: auto;
        font-size: small;

    }

    .input:focus {
        outline: none;
    }

    .input::placeholder {
        font-size: x-small;
    }

    .hide-me {
        position: absolute;
        transform: translateX(118px);
        padding-top: 80px;
        color: transparent;
    }

    textarea {
        min-height: 100px;
        max-height: 100%;
    }
    input[type="submit"] {
    all: unset;
    margin-left: 14em;
    margin-right: 14em;
    background-color: transparent;
    color: #144f9f
;
    height: 3em;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    margin-top: 3em;
    border: solid 2px #144f9f;

    }
    .submit:hover {
        background-color: #144f9f;
        transition: ease-in-out;
        transition: 0.6s;
        cursor: pointer;
        color: white;
    }
</style>
</head>
<body>

    <?php include 'navbar.php';?>

    <section class="section-submission" style="margin-top: 6em;">
        <div class="d-flex flex-column rounded pb-4" style="background-color: #e8e8e8;">
            <div class=" pt-4 pb-2 d-flex justify-content-center border-bottom border-bottom border-3 border-white ">
                <h3>PENGAJUAN BUKU</h3>
            </div>
            <form class="container_form d-flex flex-column gap-3 mt-4" action="hasil.php" method="POST">
                <h4>Informasi Penulis</h4>
                <div class="form-penulis">
                    <div class="grup-formulir">
                        <label for="">Nama Penulis</label>
                        <input name="penulis" class="input rounded" type="text"
                            placeholder="Pisahkan dengan (koma) jika lebih dari satu">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Email</label>
                        <input name="email" class="input rounded" type="mail" placeholder="Masukkan email yang valid">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Nomor Telepon</label>
                        <input name="telephone" class="input rounded" type="text/number"
                            placeholder="Masukkan awalan +62 untuk region Indonesia">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Alamat</label>
                        <input name="alamat" class="input rounded" type="text" placeholder="Masukkan alamat lengkap">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Pekerjaan</label>
                        <input name="pekerjaan" class="input rounded" list="pekerjaan" placeholder="Masukkan bidang pekerjaan">
                        <datalist id="pekerjaan">
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Penulis lepas">Penulis lepas</option>
                            <option value="Penulis staf"></option>
                            <option value="Penulis teknis">Penulis Teknis</option>
                            <option value="Wartawan / Jurnalis">Wartawan / Jurnalis</option>
                            <option value="Peneliti">Peneliti</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Guru">Guru</option>
                            <option value="Pengusaha">Pengusaha</option>
                            <option value="Psikolog">Psikolog</option>
                            <option value="Konsultan">Konsultan</option>
                            <option value="Seniman / Penyair">Seniman / Penyair</option>
                            <option value="Penggiat Sosial">Penggiat Sosial</option>
                            <option value="Pengacara">Pengacara</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Ahli Teknologi">Ahli Teknologi</option>
                            <option value="Desainer">Desainer</option>
                            <option value="Koki / Food Blogger">Koki / Food Blogger</option>
                            <option value="Pengelola Keuangan">Pengelola Keuangan</option>
                            <option value="Pelatih / Konselor">Pelatih / Konselor</option>
                            <option value="Ilustrator / Seniman Visual">Ilustrator / Seniman Visual</option>
                            <option value="Aktor / Sutradara">Aktor / Sutradara</option>
                            <option value="Musisi / Komponis">Musisi / Komponis</option>
                            <option value="Penyunting / Editor">Penyunting / Editor</option>
                            <option value="Pendeta / Pendeta">Pendeta / Pendeta</option>
                            <option value="Diplomat">Diplomat</option>
                            <option value="Petani / Peternak">Petani / Peternak</option>
                            <option value="Petugas Kesehatan">Petugas Kesehatan</option>
                            <option value="Pelaut / Penjelajah">Pelaut / Penjelajah</option>
                            <option value="Pengemudi">Pengemudi</option>
                            <option value="Penjaga Taman">Penjaga Taman</option>
                            <option value="Pengajar Yoga / Instruktur Fitness">Pengajar Yoga / Instruktur Fitness
                            </option>
                            <option value="Pekerja Sosial">Pekerja Sosial</option>
                            <option value="Pengusaha Kecil / Pelaku Usaha Mikro">Pengusaha Kecil / Pelaku Usaha
                                Mikro
                            </option>

                            <option value="Lainnya ..."></option>
                        </datalist>

                    </div>
                </div>
                <h4 class=" mt-5">Informasi Buku</h4>
                <div class="form-buku">
                    <div class="grup-formulir">
                        <label for="">Judul Buku</label>
                        <input name="judul"  class="input rounded" type="text" maxlength="60"
                            placeholder="Masukkan judul dengan maksimal 60 karakter">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Jumlah Halaman</label>
                        <input name="halaman" class="input rounded" type="number" placeholder="Masukkan jumlah halaman">

                    </div>
                    <div class="grup-formulir">
                        <label for="">Genre</label>
                        <input name="genre"class="input rounded" list="genre" placeholder="Masukkan bidang pekerjaan">
                        <datalist id="genre">
                            <option value="Fantasi">
                            <option value="Misteri">
                            <option value="Horor">
                            <option value="Roman">
                            <option value="Drama">
                            <option value="Puisi">
                            <option value="Biografi">
                            <option value="Otomotif">
                            <option value="Kuliner">
                            <option value="Pendidikan">
                            <option value="Psikologi">
                            <option value="Teknologi">
                            <option value="Bisnis">
                            <option value="Gaya Hidup">
                            <option value="Fashion">
                            <option value="Sejarah">
                            <option value="Hukum">
                            <option value="Filsafat">
                            <option value="Agama">
                            <option value="Lainnya ...">

                        </datalist>
                    </div>
                    <div class="grup-formulir">
                        <label for="">Sinopsis</label>
                        <textarea name="sinopsis" class="input rounded" type="text" maxlength="250"
                            placeholder="Masukkan sinopsis dengan maksimal 250 karakter"></textarea>
                    </div>
                    <div class="grup-formulir-upload">
                        <label for="file" class="custum-file-upload d-flex flex-column align-items-center pt-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z" />
                                    <circle cx="9.503" cy="7.497" r="1.503" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2m0 14H5V5c0-.806.55-.988 1-1h13z" />
                                </svg>
                            </div>
                            <div class="text">
                                <span id="file-label">Upload cover</span>
                            </div>
                            <input id="foto" name="cover" class="hide-me" type="file" accept="image/jpeg, image/png"
                                onchange="updateLabel()">
                        </label>

                    </div>
                    <div class="grup-formulir-upload">
                        <label for="file" class="custum-file-upload d-flex flex-column align-items-center pt-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M19 10h7v2h-7zm0 5h7v2h-7zm0 5h7v2h-7zM6 10h7v2H6zm0 5h7v2H6zm0 5h7v2H6z" />
                                    <path fill="currentColor"
                                        d="M28 5H4a2.002 2.002 0 0 0-2 2v18a2.002 2.002 0 0 0 2 2h24a2.002 2.002 0 0 0 2-2V7a2.002 2.002 0 0 0-2-2M4 7h11v18H4Zm13 18V7h11v18Z" />
                                </svg>
                            </div>
                            <div class="text">
                                <span id="file-label">Upload Dokumen</span>
                            </div>
                            <input name="dokumen" class="hide-me" id="file" type="file" accept="application/pdf"
                                onchange="updateLabel()">
                        </label>

                    </div>
                </div>
                <input name="submit" type="submit" class="submit">
            </form>
        </div>
    </section>



</body>
<?php include 'footer.php';?>
</html>

