<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitigasi Gempa Bumi | AwasGempa.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Menggunakan font Inter secara default */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f9; /* Latar belakang abu-abu muda */
            color: #1a1a1a;
        }

        /* --- STYLING NAVBAR (sesuai permintaan) --- */
        .floating-nav {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(17, 34, 80, 0.95); /* Biru tua transparan */
            backdrop-filter: blur(8px);
            padding: 1.5rem 3rem; /* Sedikit disesuaikan agar tidak terlalu besar */
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            z-index: 1000;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: #7dd3fc; /* Biru muda cerah untuk logo */
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2.5rem;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.5rem 0;
            transition: color 0.3s ease, border-bottom 0.3s ease;
        }

        .nav-links li a:hover,
        .nav-links li a.active {
            color: #fcd34d; /* Kuning emas saat hover/aktif */
            border-bottom: 3px solid #fcd34d;
        }

        /* Responsive Navbar */
        @media (max-width: 900px) {
            .floating-nav {
                padding: 1rem 1.5rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                margin-top: 1rem;
                flex-direction: column;
                gap: 0.8rem;
                width: 100%;
            }

            .nav-links li {
                width: 100%;
            }
        }

        /* --- STYLING MAIN CONTENT --- */
        .header {
            background-color: #112250;
            color: #ffffff;
            padding: 5rem 3rem 3rem;
            text-align: center;
            margin-top: -1px; /* Mengatasi celah kecil */
            box-shadow: inset 0 -10px 10px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            font-weight: 800;
        }

        .header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            color: #a8b3cf;
        }

        /* --- STYLING MITIGATION CARDS --- */
        .content-section {
            padding: 3rem 3rem 5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 2rem;
        }

        .mitigation-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .mitigation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .mitigation-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #112250;
            margin-top: 0;
            margin-bottom: 1rem;
            border-bottom: 3px solid #fcd34d;
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .mitigation-card ul {
            list-style: none;
            padding-left: 0;
            flex-grow: 1; /* Agar daftar mengisi ruang yang tersisa */
        }

        .mitigation-card ul li {
            margin-bottom: 0.75rem;
            padding-left: 1.8rem;
            position: relative;
            line-height: 1.6;
        }

        .mitigation-card ul li::before {
            content: '✓'; /* Ikon centang sebagai bullet */
            position: absolute;
            left: 0;
            color: #059669; /* Warna hijau */
            font-weight: 700;
        }

        /* Styling for the Before, During, and After sections */
        .step-heading {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 800;
            color: #112250;
            margin-top: 4rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .step-heading::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background-color: #fcd34d;
            border-radius: 5px;
        }

        /* --- STYLING FOOTER --- */
        .footer {
            background-color: #112250;
            color: #a8b3cf;
            text-align: center;
            padding: 2rem 3rem;
            font-size: 0.9rem;
        }

        .footer a {
            color: #fcd34d;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #fff;
        }

        /* Responsive Grid */
        @media (max-width: 768px) {
            .content-section {
                padding: 2rem 1rem 3rem;
            }

            .grid-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .header {
                padding: 3rem 1.5rem 2rem;
            }

            .header h1 {
                font-size: 2.5rem;
            }

            .mitigation-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- NAV BAR (Diletakkan di luar tag PHP jika hanya menyertakan HTML murni) -->
    <nav class="floating-nav">
        <div class="logo">AwasGempa.id</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Beranda</a></li>
            <li><a href="tentang-gempa-bumi.php">Tentang Gempa Bumi</a></li>
            <li><a href="penyebab.php">Penyebab</a></li>
            <li><a href="dampak.php">Dampak</a></li>
            <li><a href="penanggulangan.php" class="active">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>

    <!-- HEADER SECTION -->
    <div class="header">
        <h1>Mitigasi dan Kesiapsiagaan Gempa Bumi</h1>
        <p>Kesiapsiagaan adalah kunci. Pelajari langkah-langkah mitigasi struktural dan non-struktural untuk meminimalkan risiko bahaya gempa bumi.</p>
    </div>

    <!-- CONTENT SECTION - MITIGASI SEBELUM GEMPA -->
    <div class="content-section">
        <h2 class="step-heading">1. Langkah-langkah Sebelum Gempa</h2>
        <div class="grid-container">
            <!-- Card 1: Mitigasi Struktural (Bangunan) -->
            <div class="mitigation-card">
                <h3>Mitigasi Struktural</h3>
                <ul>
                    <li>Pastikan struktur bangunan Anda sesuai dengan Standar Nasional Indonesia (SNI) ketahanan gempa.</li>
                    <li>Periksa dan perkuat kembali struktur bangunan, termasuk pondasi, balok, dan kolom.</li>
                    <li>Jauhi pembangunan di zona bahaya, seperti di atas patahan aktif atau lereng yang curam.</li>
                    <li>Gunakan material bangunan yang berkualitas dan ringan namun kuat.</li>
                </ul>
            </div>

            <!-- Card 2: Mitigasi Non-Struktural (Kesiapan Rumah) -->
            <div class="mitigation-card">
                <h3>Kesiapan Internal Rumah</h3>
                <ul>
                    <li>Amankan benda-benda berat (lemari, rak buku) dengan mengikatnya ke dinding untuk mencegah roboh.</li>
                    <li>Letakkan benda-benda berat di bagian bawah rak.</li>
                    <li>Identifikasi dan amankan area rawan pecahan (kaca, cermin) dan bahan kimia berbahaya.</li>
                    <li>Siapkan Tas Siaga Bencana (Survival Kit) berisi makanan, air, obat-obatan, senter, dan radio.</li>
                </ul>
            </div>

            <!-- Card 3: Pendidikan dan Pelatihan -->
            <div class="mitigation-card">
                <h3>Edukasi dan Pelatihan</h3>
                <ul>
                    <li>Tentukan dan latih jalur evakuasi yang aman di rumah dan tempat kerja/sekolah.</li>
                    <li>Pelajari dan praktekkan teknik "Drop, Cover, and Hold On" (Tiarap, Lindungi, dan Bertahan). [Image of Drop Cover and Hold On]</li>
                    <li>Tentukan Titik Kumpul (Assembly Point) di luar ruangan, jauh dari bangunan, pohon, dan kabel listrik.</li>
                    <li>Ajarkan seluruh anggota keluarga cara mematikan listrik, gas, dan air.</li>
                </ul>
            </div>
        </div>

        <!-- CONTENT SECTION - MITIGASI SAAT GEMPA -->
        <h2 class="step-heading">2. Tindakan Saat Terjadi Gempa</h2>
        <div class="grid-container">
            <!-- Card 4: Dalam Ruangan -->
            <div class="mitigation-card">
                <h3>Jika Anda di Dalam Ruangan</h3>
                <ul>
                    <li>Tetap tenang, jangan panik. Lakukan "Drop, Cover, and Hold On".</li>
                    <li>Berlindung di bawah meja yang kokoh atau di dekat dinding interior.</li>
                    <li>Jauhi jendela, pintu kaca, dan perabotan yang mungkin roboh.</li>
                    <li>Jangan gunakan lift.</li>
                </ul>
            </div>

            <!-- Card 5: Di Luar Ruangan -->
            <div class="mitigation-card">
                <h3>Jika Anda di Luar Ruangan</h3>
                <ul>
                    <li>Segera menjauh dari bangunan, tiang listrik, pohon, dan papan reklame.</li>
                    <li>Pergi ke area terbuka yang lapang, seperti lapangan atau taman.</li>
                    <li>Jika sedang mengemudi, berhentilah di tempat terbuka dan jangan keluar dari mobil.</li>
                    <li>Jika di daerah pantai, segera bergerak ke tempat yang lebih tinggi (risiko tsunami).</li>
                </ul>
            </div>
        </div>

        <!-- CONTENT SECTION - MITIGASI SETELAH GEMPA -->
        <h2 class="step-heading">3. Tindakan Setelah Gempa</h2>
        <div class="grid-container">
            <!-- Card 6: Pasca Gempa -->
            <div class="mitigation-card">
                <h3>Langkah Pasca Gempa</h3>
                <ul>
                    <li>Tetap waspada terhadap gempa susulan (aftershock).</li>
                    <li>Periksa cedera diri sendiri dan orang lain, berikan pertolongan pertama jika memungkinkan.</li>
                    <li>Periksa kerusakan bangunan (gas, listrik, air) dan matikan jika ada kebocoran atau kerusakan.</li>
                    <li>Dengarkan informasi dari radio atau sumber resmi dan ikuti instruksi evakuasi.</li>
                    <li>Jangan memasuki bangunan yang sudah rusak parah.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="footer">
        &copy; <?php echo date("Y"); ?> AwasGempa.id. Semua hak dilindungi. | <a href="#">Kebijakan Privasi</a>
    </footer>

</body>
</html>