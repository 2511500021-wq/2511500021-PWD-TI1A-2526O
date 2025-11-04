<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML.</p>
            <?php
                echo "Hello world!";
                echo "Nama saya Wulan";
            ?>
        </section>
        <section id="about">
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong>2511500021 </p>
            <p><strong>Nama Lengkap:</strong> WULAN DARI &#128526;</p>
            <p><strong>Tempat Lahir:</strong> BELINYU</p>
            <p><strong>Tanggal Lahir:</strong> 21 AGUSTUS 2006</p>
            <p><strong>Hobi:</strong> OLAHRAGA &#127926;</p>
            <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
            <p><strong>Pekerjaan:</strong> MAHASISWA &copy; 2025</p>
            <p><strong>Nama Orang Tua:</strong> Bapak DARMA PUTERA dan Ibu MASAMAH</p>
            <p><strong>Nama Kakak:</strong> MARCO PUTRA</p>
            <p><strong>Nama Adik:</strong> BERLIANT KHADAFI GALATSHRAY</p>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">
                <label for="txtNama">
                    <span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>

                <label for="txtEmail">
                    <span>Email:</span>
                    <input type="text" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>

                <label for="txtPesan">
                    <span>Pesan:</span>
                    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>

                <div class="button">
                    <button type="reset">Batal</button>
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Wulan Dari [2511500021]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>