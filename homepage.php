<?php
$cards = [
    [
        "title" => "PAPUA",
        "img"   => "https://assets.koranpagionline.com/wp-content/uploads/2023/02/Kerusakan-akibat-gempa-54-SR-yang-mengguncang-Papua.-Ist..jpg",
        "link"  => "https://bbmkg5.bmkg.go.id/blogs/Siaran-Pers/gempabumi-tektonik-m5-4-di-pegunungan-bintang-papua-pegunungan-tidak-berpotensi-tsunami",
        "text"  => "Gempa sering terjadi di Pegunungan Tengah Papua dan sekitarnya. Masyarakat diimbau waspada terutama saat musim hujan."
    ],
    [
        "title" => "SUMATRA",
        "img"   => "https://awsimages.detik.net.id/community/media/visual/2021/06/04/gempa-bumi-terlama-selama-32-tahun-ternyata-pernah-melanda-sumatera-pakar-berlomba-temukan-fenomena-serupa-di-era-modern.jpeg?w=1200",
        "link"  => "https://www.pom.go.id/berita/informasi-bencana-gempa-di-sumatra-barat",
        "text"  => "Sumatra Barat dan Aceh termasuk zona rawan gempa tektonik, akibat aktivitas patahan Semangko dan subduksi lempeng."
    ],
    [
        "title" => "JAWA",
        "img"   => "https://jatengprov.go.id/wp-content/uploads/2018/04/7C1A0222-1.jpg",
        "link"  => "https://staklim-jatim.bmkg.go.id/index.php/geofisika/555556675-memahami-potensi-gempa-jawa-timur",
        "text"  => "Gempa terjadi terutama di daerah selatan Jawa karena pertemuan lempeng Indo-Australia dan Eurasia."
    ],
    [
        "title" => "SULAWESI",
        "img"   => "https://asset.kompas.com/crops/wew6RargGuc6sF7TsQwh0TW5O6E=/22x46:918x643/1200x800/data/photo/2021/01/15/60010da31b075.jpg",
        "link"  => "https://www.bmkg.go.id/gempabumi/gempabumi-realtime",
        "text"  => "Zona Palu-Koro di Sulawesi Tengah merupakan salah satu zona rawan gempa dan tsunami di Indonesia."
    ],
    [
        "title" => "KALIMANTAN",
        "img"   => "https://static.republika.co.id/uploads/images/inpicture_slide/warga-memandang-rumah-yang-rusak-akibat-gempa-di-tarakan-_151221102843-193.jpg",
        "link"  => "https://kalbar.bmkg.go.id/?page=data-gempabumi-kalimantan-barat",
        "text"  => "Kalimantan umumnya jarang terjadi gempa besar, namun beberapa wilayah seperti Berau (Kaltim) dan Tarakan (Kaltara) pernah diguncang gempa berskala menengah."
    ]
];

$current = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwasGempa.id | Beranda</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #F5F0E9;
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
            padding: 8px 14px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .floating-nav ul li a:hover,
        .floating-nav ul li a.active {
            background-color: rgba(255,255,255,0.25);
            color: #8fbae0;
        }

        .hero {
            background-image: url('https://images.pexels.com/photos/15823381/pexels-photo-15823381.jpeg');
            background-size: cover;
            background-position: center;
            height: 88vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(17,34,80,0.45);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 850px;
            background: rgba(245,240,233,0.2);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            padding: 2.5rem;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: #F5F0E9;
        }

        .hero p {
            font-size: 1.1rem;
            color: #ffffff;
            line-height: 1.6;
        }

        .video-section {
            padding: 3.5rem 2rem;
            text-align: center;
        }

        .video-section h2 {
            font-size: 2rem;
            color: #112250;
            margin-bottom: 2rem;
        }

        .video-container {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .video-box {
            width: 45%;
            min-width: 300px;
        }

        .video-desc {
            margin-top: 1.5rem;
            max-width: 850px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
            font-size: 1.15rem;
            color: #112250;
        }

        .topics-title {
            text-align: center;
            font-size: 2rem;
            color: #112250;
            margin: 2rem 0 1rem;
        }

        .topics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
            gap: 2rem;
            padding: 0 1rem 3rem;
        }

        .card {
            background: rgba(245, 240, 233, 0.25);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            transition: transform 0.4s, box-shadow 0.4s;
            display: flex;
            flex-direction: column;
            height: 100%;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.3);
        }

        .card-img-top {
            width: 100%;
            height: 160px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-title {
            font-size: 1.2rem;
            color: #3C507D;
            margin-bottom: 0.7rem;
        }

        .card-text {
            font-size: 0.95rem;
            color: #112250;
            line-height: 1.4;
            flex-grow: 1;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
    </style>
</head>
<body>
    <nav class="floating-nav">
        <div class="logo">AwasGempa.id</div>
        <ul class="nav-links">
            <li><a href="homepage.php" class="<?= $current=='homepage.php' ? 'active' : '' ?>">Beranda</a></li>
            <li><a href="tentanggempa.php" class="<?= $current=='tentanggempa.php' ? 'active' : '' ?>">Tentang Gempa Bumi</a></li>
            <li><a href="penyebab.php" class="<?= $current=='penyebab.php' ? 'active' : '' ?>">Penyebab</a></li>
            <li><a href="dampak.php" class="<?= $current=='dampak.php' ? 'active' : '' ?>">Dampak</a></li>
            <li><a href="mitigasi.php" class="<?= $current=='mitigasi.php' ? 'active' : '' ?>">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>Waspada, Kenali, dan Siaga terhadap Gempa Bumi</h1>
            <p>AwasGempa.id hadir untuk memberikan edukasi tentang gempa bumi, mulai dari penyebab, dampak, hingga bagaimana kita dapat meningkatkan kesiapsiagaan dalam menghadapi bencana.</p>
        </div>
    </section>

    <section class="video-section">
        <h2>Memahami Fenomena Gempa Bumi</h2>
        <div class="video-container">
            <div class="video-box">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/_r_nFT2m-Vg" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-box">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/G61B0FVeyZA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <p class="video-desc">
            Gempa bumi merupakan getaran pada permukaan bumi yang muncul akibat pergeseran lapisan batuan di bawah tanah. Melalui video di atas, Anda dapat melihat bagaimana energi yang dilepaskan dari pergerakan lempeng dapat dirasakan sebagai guncangan oleh masyarakat di permukaan.
        </p>
    </section>

    <h2 class="topics-title">Info Gempa di Berbagai Wilayah Indonesia</h2>
    <section class="topics">
        <?php foreach($cards as $card): ?>
        <a href="<?= $card['link']; ?>" target="_blank" class="card-link">
            <div class="card">
                <img src="<?= $card['img']; ?>" alt="<?= $card['title']; ?>" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title"><?= $card['title']; ?></h3>
                    <p class="card-text"><?= $card['text']; ?></p>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </section>

    <footer class="footer">
        <p>&copy; 2023 AwasGempa.id - Semua Hak Dilindungi</p>
        <p>Website Informasi Gempa Bumi Indonesia</p>
    </footer>
</body>
</html>
