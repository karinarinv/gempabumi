<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Gempa Bumi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0a2342;
            color: white;
            overflow-x: hidden;
        }

        /* Floating Navbar */
        .floating-nav {
            position: sticky;
            top: 0;
            width: 100%;
            background-color: rgba(17, 34, 80, 0.95);
            backdrop-filter: blur(8px);
            padding: 2rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            z-index: 1000;
        }

        .floating-nav .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #E0C58F;
        }

        .floating-nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .floating-nav ul li a {
            color: #E0C58F;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .floating-nav ul li a:hover,
        .floating-nav ul li a.active {
            background-color: rgba(255, 255, 255, 0.25);
            color: #8fbae0;
        }

        /* Hero banner: show full image using an <img> so it isn't cropped */
        .hero {
            width: 100%;
            position: relative;
            margin-top: 0; /* sits under the sticky nav */
            overflow: hidden;
        }

        .hero img.hero-img {
            width: 100%;
            max-height: 70vh; /* batasi tinggi gambar agar tidak terlalu besar */
            height: auto;
            display: block;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 600px) {
            .hero img.hero-img {
            max-height: 40vh; /* lebih kecil di layar kecil */
            }
        }

        .hero .overlay {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: calc(100% - 120px);
            max-width: 980px;
            background: rgba(255,255,255,0.18);
            color: #fff;
            padding: 28px 32px;
            text-align: center;
            border-radius: 12px;
            backdrop-filter: blur(6px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.25);
        }

        .hero .overlay h1 {
            margin: 0;
            font-size: 34px;
            color: #ffffff;
            text-shadow: 0 2px 8px rgba(0,0,0,0.4);
        }
        
/* ini animasi text */
    .overlay .typing{
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    width: 0;
    border-right: .12em solid rgba(255,255,255,0.9);
    animation: typing 2s steps(24,end) forwards, blink-caret .7s step-end infinite;
    font-family: inherit;
    }

    @keyframes typing {
    from { width: 0; }
    to   { width: 40%; }
    }
    @keyframes blink-caret {
    50% { border-color: transparent; }
    }

        /* Main Section - article-style container for Pengertian and content */
        .section {
            padding: 42px 36px;
            background: #ffffff;
    
           
            width: 100%;
            color: #0a2342;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        /* Article two-column layout */
        .section .layout { display:flex; gap:32px; align-items:flex-start; }
        .section .content { flex: 1 1 66%; min-width:0; }
        .section .sidebar { flex: 0 0 32%; }

        .section h2,
        .section p,
        .section ul,
        .section li { color: #0a2342; }

        /* Typography similar to BMKG profile */
        .lead { font-size: 20px; color: #2b2b2b; margin-bottom:18px; }
        h1 { font-size: 34px; }
        h2 { font-size: 20px; margin-top:20px; color:#0a2342; }
        p, ul { font-size:16px; line-height:1.7; color:#333; }

        /* Sidebar / fact box */
        .fact-box { background:#f8f9fb; padding:16px; border-radius:8px; }

        /* Map in sidebar: full width */
        .peta-img { width:100%; height:auto; border-radius:8px; display:block; }

        /* Map slider (CSS-only, no JavaScript) - show full images without cropping */
        .map-slider { position:relative; width:100%; border-radius:8px; overflow:visible; background:#fff; box-shadow: 0 6px 18px rgba(0,0,0,0.06); }
        .map-slider input[type="radio"] { display:none; }
        .map-slider .slides { position:relative; }
        /* Slides flow in the document; only the checked slide is displayed so container height follows image */
        .map-slider .slide { display:none; width:100%; box-sizing:border-box; }
        .map-slider .slide img { width:100%; height:auto; object-fit:contain; display:block; }
        .map-slider .map-meta { padding:12px 14px; }
        .map-slider .map-date { color:#6b7280; font-size:13px; margin-bottom:6px; }
        .map-slider .map-title { font-size:15px; margin:0 0 8px 0; color:#0a2342; font-weight:700; line-height:1.2; }
        .map-slider .map-read { color:#1e40af; text-decoration:none; font-weight:600; }

        /* Show only the checked slide; container height will follow image height (no cropping) */
        #map-slide-1:checked ~ .slides .s1,
        #map-slide-2:checked ~ .slides .s2,
        #map-slide-3:checked ~ .slides .s3 { display:block; }

        /* Dots / controls */
        .map-slider .dots { display:flex; justify-content:center; gap:8px; padding:10px 0 12px; background:transparent; }
        .map-slider .dots label { width:10px; height:10px; border-radius:50%; background:#c7c7c7; display:inline-block; cursor:pointer; transition:all 160ms ease; }
        #map-slide-1:checked ~ .dots label[for="map-slide-1"],
        #map-slide-2:checked ~ .dots label[for="map-slide-2"],
        #map-slide-3:checked ~ .dots label[for="map-slide-3"] { background:#1e40af; transform:scale(1.05); }

        @media (max-width:480px) {
            .map-slider .map-title { font-size:14px; }
        }

        @media (min-width:900px) {
            .map-slider .map-title { font-size:16px; }
        }

        @media (max-width:900px) {
            .section .layout { flex-direction:column; }
            .section { padding:28px 20px; max-width: 95%; }
        }

        /* Article typography and media styling */
        .hero .overlay h1 {
            /* keep hero title large and centered */
            font-size: 34px;
            text-align: center;
        }

        .section h1 {
            font-size: 28px;
            text-align: left;
            margin-bottom: 16px;
            color: #0a2342;
            font-weight: 700;
        }

        .section h2 {
            margin-top: 24px;
            color: #0a2342;
            font-size: 35px;
            font-weight: 700;
        }

        .section h3 {
            margin-top: 20px;
            color: #0a2342;
            font-size: 30px;
            font-weight: 700;
        }

        .section p,
        .section ul {
            line-height: 1.75;
            font-size: 30px;
            color: #333;
        }

        /* Map and images inside article */
        .peta-img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            margin: 12px 0;
            display: block;
        }

        /* Site footer */
        .site-footer { background: #0b2a57; color: #E0C58F; text-align: center; padding: 10px 16px; border-top: 6px solid #f2efe6; }
        .site-footer .container { max-width: 1200px; margin: 0 auto; font-size:13px; }
    </style>
</head>
<body>

<nav class="floating-nav">
    <div class="logo">AwasGempa.id</div>
    <ul class="nav-links">
        <li><a href="homepage.php">Beranda</a></li>
        <li><a href="tentang-gempa-bumi.php" class="active">Tentang Gempa Bumi</a></li>
        <li><a href="penyebab.php">Penyebab</a></li>
        <li><a href="dampak.php">Dampak</a></li>
        <li><a href="penanggulangan.php">Penanggulangan & Mitigasi</a></li>
    </ul>
</nav>
<!-- Hero banner: background image with only the main title -->
<div class="hero">
    <img src="gempabumi.jpg" alt="Gambar Gempa Bumi" class="hero-img">
    <div class="overlay">
        <h1><span class="typing">Tentang Gempa Bumi</span></h1>
    </div>
</div>

<div class="section" id="pengertian">
    <div class="layout">
        <div class="content">
            <p class="lead">Gempa bumi merupakan salah satu bencana alam yang paling sering terjadi di berbagai belahan dunia, termasuk Indonesia. Secara sederhana, gempa bumi adalah getaran atau guncangan yang muncul di permukaan bumi akibat pelepasan energi secara tiba-tiba dari dalam kerak bumi. 
                Pelepasan energi ini menimbulkan gelombang seismik yang merambat dan kemudian dirasakan sebagai guncangan oleh makhluk hidup di permukaan. <br>
                Fenomena ini tidak terjadi secara sembarangan. Bumi terus bergerak melalui pergeseran lempeng tektonik, aktivitas magma, hingga perubahan struktur batuan bawah tanah. Ketika tekanan yang terkumpul di dalam bumi mencapai batas maksimum, energi pun dilepaskan, menghasilkan getaran yang kita kenal sebagai gempa bumi.
            </p>

            <h2 id="karakteristik">Karakteristik Gempa Bumi</h2>
            <ul>
                <li><strong>Berlangsung dalam waktu yang sangat singkat:</strong> 
                    Gempa bumi umumnya terjadi hanya dalam hitungan detik hingga puluhan detik, 
                    tetapi meski singkat, energi yang dilepaskan dapat menyebabkan kerusakan besar pada bangunan dan lingkungan.</li>

                <li><strong>Terjadi di lokasi tertentu:</strong> 
                    Gempabumi tidak terjadi secara acak. Fenomena ini biasanya muncul di daerah yang memiliki patahan aktif, 
                    pertemuan lempeng tektonik, atau kawasan vulkanik.</li>

                <li><strong>Dapat menimbulkan bencana:</strong> 
                    Dampaknya dapat berupa keruntuhan bangunan, korban jiwa, longsor, kebakaran, likuifaksi, hingga tsunami 
                    jika sumber gempa berada di bawah laut.</li>

                <li><strong>Berpotensi terulang kembali:</strong> 
                    Wilayah yang berada di zona patahan aktif atau pertemuan lempeng tektonik berpeluang mengalami gempa kembali 
                    karena pergerakan lempeng terus berlangsung.</li>

                <li><strong>Belum dapat diprediksi:</strong> 
                    Hingga saat ini, tidak ada teknologi yang mampu memprediksi kapan gempa akan terjadi, 
                    berapa besar kekuatannya, dan di mana lokasi pastinya.</li>

                <li><strong>Tidak dapat dicegah, tetapi dampaknya dapat dikurangi:</strong> 
                    Gempabumi tidak bisa dihentikan, tetapi melalui mitigasi seperti bangunan tahan gempa, edukasi masyarakat, 
                    tata ruang yang aman, dan sistem peringatan dini, risiko dan dampak kerusakan dapat diminimalkan.</li>
            </ul>

            <h2 id="skala">Skala Pengukuran Gempa</h2>
            <p><strong>Skala Richter</strong> – Mengukur magnitudo, yaitu jumlah energi yang dilepaskan dari sumber gempa.
                Magnitudo bersifat tetap dan tidak berubah di mana pun gempa diukur.
            </p>
            <p><strong>Skala MMI (Modified Mercalli Intensity)</strong> – Mengukur dampak dan tingkat kerusakan yang dirasakan di permukaan bumi, mulai dari skala I (hampir tidak terasa) hingga XII (kehancuran total).
                Intensitas dipengaruhi oleh lokasi, kondisi tanah, dan jarak dari episentrum.
            </p>
            
            <h2 id="wilayah">Wilayah Rawan Gempa di Indonesia</h2>
            <p>Indonesia berada pada pertemuan tiga lempeng besar sehingga memiliki tingkat aktivitas seismik tinggi, terutama di wilayah Sumatera, Jawa, Bali, Nusa Tenggara, Sulawesi, dan Maluku.</p>
        </div>

        <aside class="sidebar">
            <div class="fact-box">
                <h3>Ringkasan</h3>
                <p>Informasi singkat tentang gempa bumi dan area-area yang paling berisiko di Indonesia.</p>
                <ul class="fact-list">
                    <li><strong>Resiko:</strong> Tinggi</li>
                    <li><strong>Provinsi Rawan:</strong> Sumatera, Jawa, Bali, Nusa Tenggara</li>
                    <li><strong>Rekomendasi:</strong> Siaga, Persiapan Evakuasi</li>
                </ul>
            </div>

            <div style="height:16px"></div>

            <div class="fact-box">
                <h3>Aksi Darurat Saat Gempa</h3>
                    <ul class="fact-list">
                        <li><strong>Drop:</strong> Turun dan merunduk.</li>
                         <li><strong>Cover:</strong> Lindungi kepala dan tubuh.</li>
                        <li><strong>Hold On:</strong> Pegangi meja atau benda kokoh.</li>
                     </ul>
            </div>

            <div style="height:16px"></div>
            
            <div class="fact-box">
                <h3>Kontak Darurat</h3>
                <p>BPBD setempat, Polri, dan layanan tanggap bencana.</p>
            </div>

            <div style="height:16px"></div>

            <div class="fact-box">
                <h3>Peta Lokasi</h3>
                <div class="map-slider">
                    <input type="radio" name="map-slide" id="map-slide-1" checked>
                    <input type="radio" name="map-slide" id="map-slide-2">
                    <input type="radio" name="map-slide" id="map-slide-3">

                    <div class="slides">
                        <div class="slide s1">
                            <img src="peta1.webp" alt="Peta Isoeismal Sarmi">
                            <div class="map-meta">
                                <div class="map-date">01 Oktober 2025</div>
                                <div class="map-title">Peta Isoeismal Gempabumi Sarmi 16 Oktober 2025</div>
                                <a class="map-read" href="https://www.bmkg.go.id/gempabumi/peta-isoseismal/peta-isoseismal-gempabumi-tenggara-sarmi-16-oktober-2025" target="_blank" rel="noopener">Baca selengkapnya →</a>
                            </div>
                        </div>

                        <div class="slide s2">
                            <img src="peta2.webp" alt="Peta Isoeismal Sumenep">
                            <div class="map-meta">
                                <div class="map-date">30 September 2025</div>
                                <div class="map-title">Peta Isoeismal Gempabumi Sumenep 30 September 2025</div>
                                <a class="map-read" href="https://www.bmkg.go.id/gempabumi/peta-isoseismal/peta-isoseismal-gempabumi-sumenep-30-september-2025" target="_blank" rel="noopener">Baca selengkapnya →</a>
                            </div>
                        </div>

                        <div class="slide s3">
                            <img src="peta3.webp" alt="Peta Isoeismal Example">
                            <div class="map-meta">
                                <div class="map-date">25 September 2025</div>
                                <div class="map-title">Peta Isoeismal - Contoh</div>
                                <a class="map-read" href="https://www.bmkg.go.id/gempabumi/peta-isoseismal/peta-isoseismal-gempabumi-banyuwangi-25-september-2025" target="_blank" rel="noopener">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>

                    <div class="dots">
                        <label for="map-slide-1" aria-label="Slide 1"></label>
                        <label for="map-slide-2" aria-label="Slide 2"></label>
                        <label for="map-slide-3" aria-label="Slide 3"></label>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

        <footer class="site-footer" role="contentinfo">
            <div class="container">
                <p style="color: white;">© 2025 AwasGempa.id | Edukasi Mitigasi Bencana Alam Indonesia</p>
            </div>
        </footer>

    </body>
    </html>