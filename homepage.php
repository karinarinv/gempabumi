<?php
$cards = [
    [
        "title" => "PAPUA",
        "img" => "https://assets.koranpagionline.com/wp-content/uploads/2023/02/Kerusakan-akibat-gempa-54-SR-yang-mengguncang-Papua.-Ist..jpg",
        "link" => "https://bbmkg5.bmkg.go.id/blogs/Siaran-Pers/gempabumi-tektonik-m5-4-di-pegunungan-bintang-papua-pegunungan-tidak-berpotensi-tsunami",
        "text" => "Gempa sering terjadi di Pegunungan Tengah Papua dan sekitarnya. Masyarakat diimbau waspada terutama saat musim hujan."
    ],
    [
        "title" => "SUMATRA",
        "img" => "https://awsimages.detik.net.id/community/media/visual/2021/06/04/gempa-bumi-terlama-selama-32-tahun-ternyata-pernah-melanda-sumatera-pakar-berlomba-temukan-fenomena-serupa-di-era-modern.jpeg?w=1200",
        "link" => "https://www.pom.go.id/berita/informasi-bencana-gempa-di-sumatra-barat",
        "text" => "Sumatra Barat dan Aceh termasuk zona rawan gempa tektonik, akibat aktivitas patahan Semangko dan subduksi lempeng."
    ],
    [
        "title" => "JAWA",
        "img" => "https://jatengprov.go.id/wp-content/uploads/2018/04/7C1A0222-1.jpg",
        "link" => "https://staklim-jatim.bmkg.go.id/index.php/geofisika/555556675-memahami-potensi-gempa-jawa-timur",
        "text" => "Gempa terjadi terutama di daerah selatan Jawa karena pertemuan lempeng Indo-Australia dan Eurasia.       "
    ],
    [
        "title" => "SULAWESI",
        "img" => "https://asset.kompas.com/crops/wew6RargGuc6sF7TsQwh0TW5O6E=/22x46:918x643/1200x800/data/photo/2021/01/15/60010da31b075.jpg",
        "link" => "https://www.bmkg.go.id/gempabumi/gempabumi-realtime",
        "text" => "Zona Palu-Koro di Sulawesi Tengah merupakan salah satu zona rawan gempa dan tsunami di Indonesia."
    ],
    [
        "title" => "KALIMANTAN",
        "img" => "https://static.republika.co.id/uploads/images/inpicture_slide/warga-memandang-rumah-yang-rusak-akibat-gempa-di-tarakan-_151221102843-193.jpg",
        "link" => "https://kalbar.bmkg.go.id/?page=data-gempabumi-kalimantan-barat",
        "text" => "Kalimantan umumnya jarang terjadi gempa besar, namun beberapa wilayah seperti Berau (Kaltim) dan Tarakan (Kaltara) pernah diguncang gempa berskala menengah."
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwasGempa.id | Beranda</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <nav class="floating-nav">
        <div class="logo">AwasGempa.id</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Beranda</a></li>
            <li><a href="tentang-gempa-bumi.php">Tentang Gempa Bumi</a></li>
            <li><a href="penyebab.php" class="active">Penyebab</a></li>
            <li><a href="dampak.php">Dampak</a></li>
            <li><a href="penanggulangan.php">Penanggulangan Dan Mitigasi</a></li>
        </ul>
    </nav>

    <?php include 'navbar.php'; ?>
    <section class="hero">
        <div class="hero-content">
            <h1>Waspada, Kenali, dan Siaga terhadap Gempa Bumi</h1>
            <p>
                AwasGempa.id hadir untuk memberikan edukasi tentang gempa bumi, mulai dari pengertian, 
                penyebab, dampak, hingga langkah penanggulangan dan mitigasinya.
            </p>
        </div>
    </section>


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
