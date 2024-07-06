<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natta Farm | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>


    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-white">
            <h1>Toko Online Agribisnis</h1>
            <h3 class="text-warning">Mau Cari Apa?<h3/>
            <div class="col-md-6">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Produk</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Highlighted Kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-4">
                <div class="col-md-3 p-3">
                    <div class="highlighted-kategori kategori-pertanian d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Pertanian">Pertanian</a></h4>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="highlighted-kategori kategori-peternakan d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Peternakan">Peternakan</a></h4>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="highlighted-kategori kategori-perkebunan d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Perkebunan">Perkebunan</a></h4>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="highlighted-kategori kategori-perikanan d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Perikanan">Perikanan</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
     <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">
            Sistem yang akan kami buat yaitu sistem informasi penjualan perlengkapan agribisnis dengan menggunakan platform website. Sistem ini menggunakan database untuk menyimpan data pelanggan, data produk, dan data penjualan perlengkapan agribisnis. Sistem ini dirancang untuk meningkatkan keakuratan dalam pengelolaan inventaris dan penjualan, serta efisiensi waktu bagi karyawan PT Natta Farm Jakarta, sehingga dapat memberikan layanan yang lebih cepat dan akurat kepada pelanggan.
            </p>
        </div>
     </div>

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp.<?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn 
                            warna1 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-warning mt-3 p-3" href="produk.php">See More<a/>
        </div>
    </div>

    <!-- footer -->
     <?php require "footer.php"; ?>

    <scrip src="bootstrap/js/bootstrap.bundle.min.js"></scrip>
    <scrip src="fontawesome/js/all.min.js"></scrip>
</body>
</html>