<?php
     require "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>


    <!-- Tentang Kami -->
     
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 class="text-black text-center mb-5">Tentang Kami</h1>
                </div>

                <div class="text-center mb-3">
                    <img src="image/farmbuilding.png" class="rounded 100px" alt="...">
                </div>

                <div class="container-fluid py-5">
                    <div class="container">
                        <p>
                           Sistem yang akan kami buat yaitu sistem informasi penjualan perlengkapan agribisnis 
                           dengan menggunakan platform website. Sistem ini menggunakan database untuk menyimpan data 
                           pelanggan, data produk, dan data penjualan perlengkapan agribisnis. Sistem ini dirancang 
                           untuk meningkatkan keakuratan dalam pengelolaan inventaris dan penjualan, serta efisiensi 
                           waktu bagi karyawan PT Natta Farm Jakarta, sehingga dapat memberikan layanan yang lebih 
                           cepat dan akurat kepada pelanggan. 

                        </p>

                        <p>
                           Teknologi informasi telah menjadi pilar utama dalam meningkatkan efisiensi dan produktivitas 
                           di berbagai sektor industri, termasuk agribisnis. Sebagai sektor ekonomi yang krusial, 
                           agribisnis tidak hanya memenuhi kebutuhan pangan masyarakat, tetapi juga berperan penting dalam 
                           mendukung perekonomian negara.
                        </p>

                        <p>
                           "Sektor agribisnis merupakan penghasil lapangan kerja dan pendapatan utama
                           diseluruh dunia dan berkontribusi terhadap ketahanan pangan dan gizi (Rodriguez Orozco, 2021)".
                        </p>

                        <p>
                           PT. Natta Farm Jakarta merupakan perusahaan yang bergerak di sektor agribisnis. Saat ini,
                           PT. Natta Farm Jakarta masih mengandalkan sistem penjualan manual dalam operasional 
                           sehari-harinya. Proses ini tidak hanya memakan waktu, tetapi juga rentan terhadap kesalahan 
                           dan keterlambatan dalam memenuhi pesanan pelanggan. Untuk meningkatkan efisiensi dan daya 
                           tanggap, perusahaan ini dituntut untuk beradaptasi dengan teknologi informasi guna
                           meningkatkan kualitas layanan kepada pelanggan dan efisiensi dalam pengelolaan bisnisnya. 
                        </p>

                        <p>
                           Oleh karena itu, pengenalan sistem informasi penjualan berbasis situs web tidak hanya menjadi
                           langkah dalam menanggapi tren teknologi, tetapi juga merupakan strategi untuk meningkatkan
                           efisiensi operasional dan memberikan layanan yang lebih baik kepada pelanggan. 
                           Hal ini memberikan fondasi yang kuat bagi pertumbuhan dan keberlanjutan bisnis 
                           PT. Natta Farm di Jakarta di masa mendatang.
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
        
    <scrip src="bootstrap/js/bootstrap.bundle.min.js"></scrip>
    <scrip src="fontawesome/js/all.min.js"></scrip>
</body>
</html>