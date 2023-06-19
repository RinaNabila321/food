<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millecrepes</title>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,300;1,700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Best<span>Food.</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Daftar Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Makan Cemilan<span>Millecrepes</span></h1>
            <p>Cemilan yang sedang viral</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <section id="about" class="about">
        <h2><span>Tentang </span>Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="ini.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa Memilih Millecrepes ini?</h3>
                <p>Mille crepes sedang viral di media sosial seperti Twitter hingga TikTok. Saking viralnya, banyak penjual mille crepe rumahan yang diserbu. Pelanggan bahkan rela antre untuk mendapatkan kue crepe berlapis ini.</p>
                <p>Mille crepes sendiri merupakan lapisan kue krep tipis yang dilengkapi dengan olesan krim. Biasanya kue ini bisa dibeli secara utuh maupun per potong. Ada banyak varian rasa pada mille crepe, mulai dari rasa original cokelat, vanilla, strawberry, matcha, hingga Milo</p>
            </div>
    </section>

    <section id="menu" class="menu">
        <h2><span>Menu</span>Kami</h2>
        <p>Kami mempunyai 6 menu yang best seller, anda dapat melihatnya dibawah ini .</p>
        <div class="row">
            <div class="menu-card">
                <img src="1.jpg" alt="Oreo" class="menu-card-img">
                <h3 class="menu-card-title">-Oreo-</h3>
                <p class="menu-card-price">IDR 15.000</p>
            </div>
            <div class="menu-card">
                <img src="2.jpg" alt="Matcha" class="menu-card-img">
                <h3 class="menu-card-title">-Matcha-</h3>
                <p class="menu-card-price">IDR 15.000</p>
            </div>
            <div class="menu-card">
                <img src="3.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">-Coklat-</h3>
                <p class="menu-card-price">IDR 15.000</p>
            </div>
            <div class="menu-card">
                <img src="4.jpg" alt="Strawbery" class="menu-card-img">
                <h3 class="menu-card-title">-Strawbery-</h3>
                <p class="menu-card-price">IDR 15.000</p>
            </div>
            <div class="menu-card">
                <img src="5.jpg" alt="Blubery" class="menu-card-img">
                <h3 class="menu-card-title">-Oreo-</h3>
                <p class="menu-card-price">IDR 15.000</p>
            </div>
            <div class="menu-card">
                <img src="6.jpg" alt="Cilok" class="menu-card-img">
                <h3 class="menu-card-title">- Cilok Kuah-</h3>
                <p class="menu-card-price">IDR 10.000</p>
            </div>
    </section>

    <section id="contact" class="contact">
        <h2><span>Kontak</span>Kami</h2>
        <p>Jika anda tertarik dengan cemilan kami silahkan untuk menghubungi dibawah ini, atau anda juga bisa langsung datang ke toko kami ya.</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7870815380575!2d107.57009649999998!3d-6.795740900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e2262412c2a3%3A0xfadddf884fb0792f!2sCisarua%2C%20Kertawangi%2C%20Kec.%20Cisarua%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat%2040551!5e0!3m2!1sid!2sid!4v1685863830588!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                <form action="simpan.php" method="POST">
<div class="input-group">
<td>nama</td>
<input type="text" name="nama" required>
</div>
<div class="input-group">
<td>no_hp</td>
<input type="number" name="no_hp" required>
</div>
<div class="input-group">
<td>aLamat</td>
<input type="text" name="alamat" required>
</div>
<tr>
<td></td>
<td>
<button type="submit" class="btn">Kirim Pesan</button>
<button type="reset" class="btn">Batal</button>
</td>
</tr>
</form>
        </div>
        </section>
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Daftar Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="credit">
            <p>Created by <a href="">RinaNabila</a>.| &copy; 2023.</p>
        </div>
    </footer>
    <script>
        feather.replace()
    </script>
    <script src="script.js"></script>
</body>

</html>