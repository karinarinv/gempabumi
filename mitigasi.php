<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitigasi Gempa Bumi | AwasGempa.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        
  :root {
  --sapphire: #305070;
    --royal-blue: #112260;
    --quicksand: #EDC58F;
    --swan-wing: #F5F0E9;
    --chellstone: #D9CBC2;
        }
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    margin: 0;
    padding: 0;
    background-color: #F5F0E9;
    color: #112250;
}


.floating-nav {
    position: sticky;
    top: 0;                
    left: 0;
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
    color:#8fbae0; 
            background-color: rgba(255, 255, 255, 0.25);
}


.main-content {
    padding-top: 140px; 
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

         .page-header {
            background: linear-gradient(to right, var(--royal-blue), var(--sapphire));
            color: var(--swan-wing);
            padding: 6rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23000" fill-opacity="0.1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,192C672,181,768,139,864,138.7C960,139,1056,181,1152,197.3C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            position: relative;
            animation: fadeInDown 1s ease;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            position: relative;
            animation: fadeInUp 1s ease 0.3s both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

   
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
            flex-grow: 1; 
        }

        .mitigation-card ul li {
            margin-bottom: 0.75rem;
            padding-left: 1.8rem;
            position: relative;
            line-height: 1.6;
        }

        .mitigation-card ul li::before {
            content: '✓'; 
            position: absolute;
            left: 0;
            color: #059669; 
            font-weight: 700;
        }

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


.site-footer { 
    background: #0b2a57; 
    text-align: center; 
    padding: 30px 20px; 
    color: #E0C58F; 
}

.site-footer p { 
    color: #E0C58F; 
    margin: 5px 0; 

}

        @media (max-width: 768px) {
            .content-section {
                padding: 2rem 1rem 3rem;
            }

            .grid-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .mitigation-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <nav class="floating-nav">
        <div class="logo">AwasGempa.id</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Beranda</a></li>
            <li><a href="tentanggempa.php">Tentang Gempa Bumi</a></li>
            <li><a href="penyebab.php">Penyebab</a></li>
            <li><a href="dampak.php">Dampak</a></li>
            <li><a href="mitigasi.php" class="active">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>


    <div class="page-header">
        <h1>Mitigasi dan Kesiapsiagaan Gempa Bumi</h1>
        <p>Kesiapsiagaan adalah kunci. Pelajari langkah-langkah mitigasi struktural dan non-struktural untuk meminimalkan risiko bahaya gempa bumi.</p>
    </div>

    <div class="content-section">
        <h2 class="step-heading">1. Mitigasi Bencana</h2>
        <div class="grid-container">
 
            <div class="mitigation-card">
                <h3>Pra Bencana</h3>
                <ul>
                    <li>Menyiapakan rencana untuk penyelamatan diri apabila gempa bumi terjadi.Menyiapakan rencana untuk penyelamatan diri apabila gempa bumi terjadi..</li>
                    <li>Melakukan latihan yang dapat bermanfaat dalam menghadapi reruntuhan saat gempa bumi, seperti merunduk, perlindungan terhadap kepala, berpegangan ataupun dengan bersembunyi di bawah meja..</li>
                    <li>Menyiapkan alat pemadam kebakaran, alat keselamatan standar, dan persediaan obat-obatan.</li>
                </ul>
            </div>

            <div class="mitigation-card">
                <h3>Saat Bencana</h3>
                <ul>
                  <li>Berlindung di bawah meja untuk menghindari dari benda-benda yang mungkin jatuh.</li>
                    <li>Tetap lindungi kepala dan segera menuju ke lapangan terbuka.</li>
                    <li>Hindari menggunakan lift dan eskalator, dan gunakan tangga darurat.</li>
                </ul>
            </div>

            <div class="mitigation-card">
                <h3>Pasca Bencana</h3>
                <ul>
                   <li>Tetap waspada terhadap gempa bumi susulan.</li>
                    <li>Periksa keberadaan api dan potensi terjadinya bencana kebakaran.</li>
                    <li>Berdirilah di tempat terbuka jauh dari gedung dan instalasi listrik dan air.</li>
                </ul>
            </div>
        </div>

        <h2 class="step-heading">2. Tindakan Saat Terjadi Gempa</h2>
        <div class="grid-container">
            
            <div class="mitigation-card">
                <h3>Jika Anda di Dalam Ruangan</h3>
                <ul>
                    <li>Tetap tenang, jangan panik. Lakukan "Drop, Cover, and Hold On".</li>
                    <li>Berlindung di bawah meja yang kokoh atau di dekat dinding interior.</li>
                    <li>Jauhi jendela, pintu kaca, dan perabotan yang mungkin roboh.</li>
                    <li>Jangan gunakan lift.</li>
                </ul>
            </div>

          
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

        <h2 class="step-heading">3. Penggulangan Gempa bumi</h2>
        <div class="grid-container">
            <div class="mitigation-card">
                <h3>Langkah Pasca Gempa</h3>
                <ul>
                   <li>Periksa penggunaan listrik dan gas.</li>
                    <li>Mendirikan bangunan sesuai aturan baku (tahan gempa).</li>
                    <li>Menyimpan persediaan air, makanan, obat-obatan, dan peralatan darurat.</li>
                    <li>Kenali jalur evakuasi.</li>
                    <li>empatkan perabotan pada tempat yang proporsional.</li>
                    <li>Kenali lokasi bangunan tempat Anda tinggal.</li>
                    <li>Catat nomor telepon penting.</li>
                    <li>Ikuti kegiatan simulasi mitigasi bencana gempa.</li>
                </ul>
            </div>
        </div>
    </div>

<footer class="site-footer">
    <p> &copy; 2023 AwasGempa.id - Semua Hak Dilindungi</p>
    <p>Website Informasi Gempa Bumi Indonesia</p>
</footer>

</body>

</html>

