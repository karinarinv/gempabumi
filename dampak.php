<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwasGempa.id - Dampak Gempa Bumi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .impact-section {
            margin-bottom: 4rem;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .impact-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section-header {
            background-color: var(--sapphire);
            color: var(--swan-wing);
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .section-header:hover {
            background-color: var(--royal-blue);
        }

        .section-header i {
            font-size: 1.5rem;
            transition: transform 0.3s;
        }

        .section-header.active i {
            transform: rotate(90deg);
        }

        .section-content {
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, padding 0.3s ease;
        }

        .section-content.active {
            max-height: 1000px;
        }

        .text-content {
            line-height: 1.7;
        }

        .text-content h3 {
            color: var(--royal-blue);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .text-content ul {
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .text-content li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .image-content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .image-pair {
            display: flex;
            gap: 1rem;
        }

        .image-box {
            flex: 1;
            height: 200px;
            background-color: var(--chellstone);
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .image-box:hover {
            transform: scale(1.03);
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.5rem;
            text-align: center;
            font-size: 0.9rem;
        }


        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .modal.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
            overflow: hidden;
            transform: scale(0.8);
            transition: transform 0.3s;
        }

        .modal.active .modal-content {
            transform: scale(1);
        }

        .modal img {
            width: 100%;
            height: auto;
            display: block;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-modal:hover {
            color: var(--quicksand);
        }

        .disaster-example {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 4rem;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease 0.3s;
        }

        .disaster-example.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .example-content {
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .disaster-info {
            line-height: 1.7;
        }

        .disaster-info h3 {
            color: var(--royal-blue);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .disaster-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .stat-box {
            background-color: var(--swan-wing);
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--sapphire);
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }

        .copyright {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        .footer {
            background: #112250;
            color: #E0C58F;
            text-align: center;
            padding: 30px 20px;
            margin-top: 60px;
        }

        .footer p {
            margin: 5px 0;
        }

        /* Responsif */
        @media (max-width: 900px) {

            .section-content,
            .example-content {
                grid-template-columns: 1fr;
            }

            .image-pair {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .floating-nav {
                padding: 1rem;
                flex-direction: column;
                gap: 1rem;
            }

            .floating-nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .page-header h1 {
                font-size: 2.2rem;
            }

            .main-content {
                padding-top: 180px;
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
            <li><a href="dampak.php" class="active">Dampak</a></li>
            <li><a href="mitigasi.php">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>

    <div class="modal" id="imageModal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Gambar dampak gempa">
        </div>
    </div>


    <div class="main-content">
        <header class="page-header">
            <h1>Dampak Gempa Bumi</h1>
            <p>Gempa bumi tidak hanya menyebabkan kerusakan fisik, tetapi juga memberikan dampak yang luas terhadap kehidupan sosial, ekonomi, lingkungan, dan psikologis masyarakat.</p>
        </header>
        <div class="content-container">

            <section class="impact-section">
                <div class="section-header">
                    <i class="fas fa-building"></i>
                    <h2>Dampak Fisik</h2>
                </div>
                <div class="section-content active">
                    <div class="text-content">
                        <h3>Kerusakan Bangunan dan Infrastruktur</h3>
                        <p>Gempa bumi dapat menyebabkan kerusakan parah pada berbagai jenis bangunan dan infrastruktur vital:</p>
                        <ul>
                            <li>Runtuhnya bangunan tempat tinggal dan perkantoran</li>
                            <li>Kerusakan jalan raya, jembatan, dan terowongan</li>
                            <li>Rusaknya jaringan listrik, air, dan telekomunikasi</li>
                            <li>Kerusakan fasilitas publik seperti sekolah dan rumah sakit</li>
                            <li>Retaknya bendungan dan infrastruktur pengairan</li>
                        </ul>
                        <p>Kerusakan infrastruktur ini dapat menghambat proses evakuasi dan bantuan kemanusiaan pasca gempa.</p>
                    </div>
                    <div class="image-content">
                        <div class="image-pair">
                            <div class="image-box">
                                <img src="https://getlost.id/wp-content/uploads/2022/01/Baiturrahman_1303539688-1068x712.jpg" alt="Masjid Baiturrahman sebelum gempa">
                                <div class="image-label">Sebelum Gempa</div>
                            </div>
                            <div class="image-box">
                                <img src="https://gdb.voanews.com/40213efe-56ca-41bd-9666-63f599dc8b77_w1023_r1_s.jpg" alt="Kerusakan bangunan setelah gempa">
                                <div class="image-label">Setelah Gempa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="impact-section">
                <div class="section-header">
                    <i class="fas fa-users"></i>
                    <h2>Dampak Sosial dan Ekonomi</h2>
                </div>
                <div class="section-content active">
                    <div class="text-content">
                        <h3>Gangguan pada Kehidupan Sosial dan Ekonomi</h3>
                        <p>Dampak sosial dan ekonomi gempa bumi sangat luas dan dapat berlangsung dalam jangka panjang:</p>
                        <ul>
                            <li>Pengungsian massal dan kehilangan tempat tinggal</li>
                            <li>Gangguan sistem pendidikan dan kesehatan</li>
                            <li>Kehilangan mata pencaharian dan peningkatan pengangguran</li>
                            <li>Kerusakan sektor pariwisata dan perdagangan</li>
                            <li>Biaya rekonstruksi yang sangat besar</li>
                            <li>Penurunan produktivitas ekonomi regional</li>
                        </ul>
                        <p>Pemulihan ekonomi pasca gempa membutuhkan waktu bertahun-tahun dan investasi yang signifikan.</p>
                    </div>
                    <div class="image-content">
                        <div class="image-pair">
                            <div class="image-box">
                                <img src="https://infopublik.id/assets/upload/headline//pasar-tradisional-ok.jpg" alt="Pasar tradisional aktif">
                                <div class="image-label">Kondisi Ekonomi Normal</div>
                            </div>
                            <div class="image-box">
                                <img src="https://imgcdn.cna.com.tw/Ind/WebIndPhotos/800/2025/20251001/1024x768_694865227779.jpg" alt="Kondisi ekonomi pasca gempa">
                                <div class="image-label">Pasca Gempa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="impact-section">
                <div class="section-header">
                    <i class="fas fa-globe-asia"></i>
                    <h2>Dampak Lingkungan dan Psikologis</h2>
                </div>
                <div class="section-content active">
                    <div class="text-content">
                        <h3>Perubahan Lingkungan dan Trauma Psikologis</h3>
                        <p>Selain dampak fisik, gempa bumi juga menyebabkan perubahan lingkungan dan masalah psikologis:</p>
                        <ul>
                            <li>Perubahan topografi dan permukaan tanah</li>
                            <li>Likuifaksi (pencairan tanah)</li>
                            <li>Longsor dan perubahan aliran sungai</li>
                            <li>Trauma psikologis (PTSD) pada korban</li>
                            <li>Gangguan kecemasan dan depresi</li>
                            <li>Gangguan tidur dan konsentrasi</li>
                        </ul>
                        <p>Dampak psikologis dapat bertahan lama bahkan setelah kondisi fisik telah pulih, memerlukan pendampingan khusus.</p>
                    </div>
                    <div class="image-content">
                        <div class="image-pair">
                            <div class="image-box">
                                <img src="https://akcdn.detik.net.id/community/media/visual/2018/10/03/ebdd1d15-f512-4488-ad1d-91b4029d2afb_169.jpeg?w=620" alt="Likuifaksi akibat gempa">
                                <div class="image-label">Likuifaksi</div>
                            </div>
                            <div class="image-box">
                                <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/12/04/3862880912.png" alt="Tanah longsor pasca gempa">
                                <div class="image-label">Tanah Longsor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="disaster-example">
                <div class="section-header">
                    <i class="fas fa-landmark"></i>
                    <h2>Contoh Bencana Besar di Indonesia</h2>
                </div>
                <div class="example-content">
                    <div class="disaster-info">
                        <h3>Gempa dan Tsunami Aceh 2004</h3>
                        <p>Pada 26 Desember 2004, gempa berkekuatan 9.1-9.3 Mw mengguncang Samudra Hindia lepas pantai barat Aceh. Gempa ini memicu tsunami dahsyat yang menghantam pesisir 14 negara.</p>
                        <p>Di Indonesia, dampaknya sangat parah terutama di Provinsi Aceh dan Sumatera Utara. Ribuan bangunan hancur, infrastruktur lumpuh, dan korban jiwa mencapai angka yang sangat besar.</p>

                        <div class="disaster-stats">
                            <div class="stat-box">
                                <div class="stat-value">9.1 Mw</div>
                                <div class="stat-label">Kekuatan Gempa</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">230.000+</div>
                                <div class="stat-label">Korban Jiwa</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">500.000+</div>
                                <div class="stat-label">Kehilangan Tempat Tinggal</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-value">$4.5M</div>
                                <div class="stat-label">Kerugian (USD)</div>
                            </div>
                        </div>
                    </div>
                    <div class="image-content">
                        <div class="image-box" style="height: 300px;">
                            <img src="https://cdn.timesmedia.co.id/images/2021/03/22/Tsunami-Aceh.jpg" alt="Gempa dan Tsunami Aceh 2004">
                            <div class="image-label">Gempa dan Tsunami Aceh 2004</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <footer class="footer">
        <p>&copy; 2023 AwasGempa.id - Semua Hak Dilindungi</p>
        <p>Website Informasi Gempa Bumi Indonesia</p>
    </footer>

    <script>

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.impact-section, .disaster-example').forEach(section => {
            observer.observe(section);
        });


        document.querySelectorAll('.section-header').forEach(header => {
            header.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isActive = this.classList.contains('active');

                document.querySelectorAll('.section-header').forEach(h => {
                    h.classList.remove('active');
                });
                document.querySelectorAll('.section-content').forEach(c => {
                    c.classList.remove('active');
                });

                if (!isActive) {
                    this.classList.add('active');
                    content.classList.add('active');
                }
            });
        });


        document.querySelector('.section-header').classList.add('active');
        document.querySelector('.section-content').classList.add('active');


        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        document.querySelectorAll('.image-box').forEach(box => {
            box.addEventListener('click', function() {
                const img = this.querySelector('img');
                if (img) {
                    modalImage.src = img.src;
                    modalImage.alt = img.alt;
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        document.querySelector('.close-modal').addEventListener('click', function() {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });


        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>
</html>
