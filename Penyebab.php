<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyebab Gempa Bumi - AwasGempa.id</title>
    <style>
        :root {
            --sapphire: #305070;
            --royal-blue: #112260;
            --quicksand: #EDC58F;
            --swan-wing: #F5F0E9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--swan-wing);
            color: #112250;
        }

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
            color: var(--quicksand);
        }

        .floating-nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .floating-nav ul li a {
            color: var(--quicksand);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .floating-nav ul li a:hover,
        .floating-nav ul li a.active {
            color: #8fbae0;
            background-color: rgba(255,255,255,0.25);
        }


        .page-header {
            background: linear-gradient(to right, var(--royal-blue), var(--sapphire));
            color: var(--swan-wing);
            padding: 6rem 2rem;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            animation: fadeInDown 1s ease;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            animation: fadeInUp 1s ease 0.3s both;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .causes-section {
            display: flex;
            flex-direction: column;
            gap: 40px;
            margin: 60px 2rem;
        }

        .section-title {
            font-size: 2.2rem;
            color: #112250;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--quicksand);
            border-radius: 2px;
        }

        .causes-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .cause-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .cause-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .cause-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .cause-content h3 {
            font-size: 1.5rem;
            color: #112250;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .cause-content h3::before {
            content: '';
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .cause-card:nth-child(1) h3::before { background-color: #E63946; }
        .cause-card:nth-child(2) h3::before { background-color: #457B9D; }
        .cause-card:nth-child(3) h3::before { background-color: #2A9D8F; }
        .cause-card:nth-child(4) h3::before { background-color: #E9C46A; }

        .cause-content p {
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .cause-details {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-top: auto;
        }

        .cause-details h4 {
            font-size: 1.1rem;
            color: #112250;
            margin-bottom: 10px;
        }

        .cause-details li {
            padding: 5px 0;
            color: #555;
            position: relative;
            padding-left: 15px;
        }

        .cause-details li::before {
            content: '•';
            color: var(--quicksand);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

 
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .example-section {
            margin: 60px 2rem;
        }

        .example-section h2 {
            font-size: 2rem;
            color: #112250;
            margin-bottom: 25px;
            text-align: center;
        }

        .example-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .example-card {
            background: #f8f9fa;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .example-card:hover {
            transform: translateY(-5px);
        }

        .example-image {
            height: 160px;
            overflow: hidden;
        }

        .example-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .example-content {
            padding: 20px;
        }

        .example-content h4 {
            font-size: 1.2rem;
            color: #112250;
            margin-bottom: 10px;
        }

        .example-content p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }


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

        @media (max-width: 1200px) {
            .causes-container { grid-template-columns: repeat(2, 1fr); }
            .example-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            .floating-nav {
                padding: 1rem 1.5rem;
                flex-direction: column;
                gap: 15px;
            }

            .floating-nav ul {
                gap: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .page-header h1 { font-size: 2.5rem; }
            .page-header p { font-size: 1.1rem; padding: 20px; }

            .causes-container,
            .example-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>


    <nav class="floating-nav">
        <div class="logo">AwasGempa.id</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Beranda</a></li>
            <li><a href="tentanggempa.php">Tentang Gempa Bumi</a></li>
            <li><a href="penyebab.php" class="active">Penyebab</a></li>
            <li><a href="dampak.php">Dampak</a></li>
            <li><a href="mitigasi.php">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>


    <div class="main-content">


        <div class="page-header">
            <h1>Penyebab Gempa Bumi</h1>
            <p>Gempa bumi dapat terjadi karena berbagai faktor alamiah maupun aktivitas manusia. Berikut adalah penjelasan mengenai jenis-jenis penyebab gempa bumi.</p>
        </div>

        <div class="causes-section">
            <h2 class="section-title">Jenis-Jenis Penyebab Gempa Bumi</h2>
            <div class="causes-container">

                <div class="cause-card">
                    <div class="cause-image">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/lrV0eZXV52E" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="cause-content">
                        <h3>Gempa Tektonik</h3>
                        <p>Gempa tektonik terjadi akibat pergerakan lempeng tektonik di bawah permukaan bumi.</p>
                        <div class="cause-details">
                            <h4>Karakteristik:</h4>
                            <ul>
                                <li>Paling sering terjadi</li>
                                <li>Kekuatan bisa sangat besar</li>
                                <li>Dapat menyebabkan tsunami</li>
                                <li>Terjadi di batas lempeng tektonik</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cause-card">
                    <div class="cause-image">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/0SK-jYdEgfE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="cause-content">
                        <h3>Gempa Vulkanik</h3>
                        <p>Gempa vulkanik terjadi akibat aktivitas magma di dalam gunung berapi.</p>
                        <div class="cause-details">
                            <h4>Karakteristik:</h4>
                            <ul>
                                <li>Terjadi di sekitar gunung berapi</li>
                                <li>Kekuatan biasanya kecil hingga sedang</li>
                                <li>Dapat menjadi peringatan letusan</li>
                                <li>Getaran dangkal</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="cause-card">
                    <div class="cause-image">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/RqqqSnaTfQo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="cause-content">
                        <h3>Gempa Runtuhan</h3>
                        <p>Gempa runtuhan terjadi ketika bagian atas kerak bumi runtuh, biasanya di area pertambangan atau gua.</p>
                        <div class="cause-details">
                            <h4>Karakteristik:</h4>
                            <ul>
                                <li>Kekuatan sangat kecil</li>
                                <li>Jangkauan terbatas</li>
                                <li>Terjadi di area pertambangan</li>
                                <li>Disebabkan oleh keruntuhan batuan</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="cause-card">
                    <div class="cause-image">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/LK--3lXQ5BI" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="cause-content">
                        <h3>Gempa Buatan</h3>
                        <p>Gempa buatan disebabkan oleh aktivitas manusia seperti ledakan atau pengeboran.</p>
                        <div class="cause-details">
                            <h4>Karakteristik:</h4>
                            <ul>
                                <li>Disebabkan aktivitas manusia</li>
                                <li>Kekuatan bervariasi</li>
                                <li>Dapat dikontrol</li>
                                <li>Terjadi di lokasi spesifik</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="example-section">
            <h2>Contoh Kejadian Gempa Bumi di Indonesia</h2>
            <div class="example-grid">

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://idws.id/assets/kcfinder/upload/images/tsunami-aceh-2004-2303.jpg" alt="Gempa Aceh 2004">
                    </div>
                    <div class="example-content">
                        <h4>Gempa & Tsunami Aceh 2004</h4>
                        <p>Gempa 9.1-9.3 Mw di lepas pantai Sumatra, tsunami dahsyat menewaskan 230.000 orang di 14 negara.</p>
                    </div>
                </div>

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/05/27/3985974010.jpg" alt="Gempa Yogyakarta 2006">
                    </div>
                    <div class="example-content">
                        <h4>Gempa Yogyakarta 2006</h4>
                        <p>Gempa 6.4 Mw mengguncang Yogyakarta & Jawa Tengah, menewaskan 5.700 orang dan menghancurkan 300.000 rumah.</p>
                    </div>
                </div>

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2018/10/01/9ef20dd8-ef7e-49d5-a895-850be5a008f4_169.jpeg?w=700&q=90" alt="Gempa Palu 2018">
                    </div>
                    <div class="example-content">
                        <h4>Gempa Palu 2018</h4>
                        <p>Gempa 7.5 Mw disusul tsunami & likuifaksi di Palu, menewaskan 4.300 orang dan menyebabkan kerusakan parah.</p>
                    </div>
                </div>

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://statik.tempo.co/data/2018/08/09/id_724901/724901_720.jpg" alt="Gempa Lombok 2018">
                    </div>
                    <div class="example-content">
                        <h4>Gempa Lombok 2018</h4>
                        <p>Serangkaian gempa di Lombok, gempa utama 6.9 Mw, menyebabkan 500 korban jiwa.</p>
                    </div>
                </div>

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://1.bp.blogspot.com/-9tZrNe-pla0/Wc8n3-NTwtI/AAAAAAAAQaY/_4UxJgKJOckk8DF69-9VlvTnwxRbaWOIACLcBGAs/s640/Gempa%2BSumbar%2B1.png" alt="Gempa Padang 2009">
                    </div>
                    <div class="example-content">
                        <h4>Gempa Padang 2009</h4>
                        <p>Gempa 7.6 Mw mengguncang Padang, menewaskan 1.100 orang & merusak 180.000 bangunan.</p>
                    </div>
                </div>

                <div class="example-card">
                    <div class="example-image">
                        <img src="https://static.republika.co.id/uploads/images/inpicture_slide/suasana-rumah-dan-jalan-yang-hancur-akibat-gempa-di_221122200858-173.jpg" alt="Gempa Cianjur 2022">
                    </div>
                    <div class="example-content">
                        <h4>Gempa Cianjur 2022</h4>
                        <p>Gempa 5.6 Mw mengguncang Cianjur, menewaskan 300 orang & merusak puluhan ribu rumah.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <footer class="footer">
        <p>&copy; 2023 AwasGempa.id - Semua Hak Dilindungi</p>
        <p>Website Informasi Gempa Bumi Indonesia</p>
    </footer>

</body>
</html>
