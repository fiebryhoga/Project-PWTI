<!-- <section class="form-submission">
    <div class="form-header">
        <h3>PENGAJUAN BUKU</h3>
    </div>
    <form class="container-form" action="">
        <div class="form-group">
            <label class="input-label" for="judul">Judul Buku</label>
            <input class="input-field" type="text" id="judul">
            <small class="form-text text-muted input-description">Judul Buku diharap maksimal 60 karakter</small>
        </div>
        <div class="form-group">
            <label class="input-label" for="kategori">Kategori Buku</label>
            <input list="kategori" name="kategori">
            <datalist id="kategori">
                <option value="Sejarah">
                <option value="Keuangan">
                <option value="self-development">
                <option value="Sains">
                <option value="Hukum">
                <option value="Sosial">
            </datalist>
        </div>
        <div class="form-group">
            <label class="input-label" for="jumlah_halaman">Jumlah Halaman</label>
            <input class="input-field" type="number" id="jumlah_halaman">
        </div>
        <div class="form-group">
            <label class="input-label" for="sinopsis">Sinopsis</label>
            <textarea class="input-field input-field-textarea" id="sinopsis"></textarea>
            <small class="form-text text-muted input-description">Berikan sinopsis yang menarik dengan maksimal 120
                kata</small>
        </div>
        <div class="form-group">
            <label class="input-label" for="file">Upload Cover Buku</label>
            <label for="file" class="custum-file-upload">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                fill=""></path>
                        </g>
                    </svg>
                </div>
                <div class="text">
                    <span>Click to upload image</span>
                </div>
                <input id="file" type="file">
            </label>
        </div>
    </form>
</section> -->



    <style>
        .container_form{
            padding-left: 3em;
            padding-right: 3em;
        }

        @media (min-width: 768px) {
        form {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-gap: 2em; /* Jarak antara kolom */
        }
    }

        .grup-formulir {
            display: flex;
            flex-direction: column;
            gap: 2;
        }
        .input {
            border: none;
            padding-left: 1em;
            padding-top: 6px;
            padding-bottom: 6px;
            width:auto;
            font-size: small;

        }
        .input:focus {
            outline: none;
        }
        .input::placeholder{
            font-size: x-small;
        }


    </style>

<body>
    <section class="section-submission" style="margin-top: 6em;">
    <div class="d-flex flex-column rounded" style="background-color:#e8e8e8;">
        <div class=" pt-4 pb-2 d-flex justify-content-center border-bottom border-bottom border-3 border-white ">
            <h3>PENGAJUAN BUKU</h3>
        </div>
        <div class="container_form d-flex flex-column gap-2 mt-4">
            <h4 style="color: gray; font-size:medium;">Informasi Penulis</h4>
            <form action="">
                <div class="grup-formulir">
                    <label for="">Nama Penulis</label>
                    <input class="input rounded" type="text" placeholder="Pisahkan dengan (koma) jika lebih dari satu">

                </div>
                <div class="grup-formulir">
                    <label for="">Email</label>
                    <input class="input rounded" type="mail" placeholder="Masukkan email yang valid">

                </div>
                <div class="grup-formulir">
                    <label for="">Nama Penulis</label>
                    <input class="input rounded" type="text/number" placeholder="Masukkan awalan +62 untuk region Indonesia">

                </div>
                <div class="grup-formulir">
                    <label for="">Alamat</label>
                    <input class="input rounded" type="text" placeholder="Masukkan alamat lengkap">

                </div>
                <div class="grup-formulir">
                    <label for="">Pekerjaan</label>
                    <input class="input rounded" list="pekerjaan">
                    <datalist id="pekerjaan">
                        <option value="Mahasiswa"></option>
                        <option value="Penulis lepas"></option>
                        <option value="Penulis"></option>
                    </datalist>

                </div>
                <div class="form-group">
            <label class="input-label" for="kategori">Kategori Buku</label>
            <input list="kategori" name="kategori">
            <datalist id="kategori">
                <option value="Sejarah">
                <option value="Keuangan">
                <option value="self-development">
                <option value="Sains">
                <option value="Hukum">
                <option value="Sosial">
            </datalist>
        </div>
            </form>
            <h4 style="color: gray; font-size:medium;">Informasi Buku</h4>
            <div>

            </div>
        </div>

    </div>

</section>

</body>
</html>
