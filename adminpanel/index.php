<?php
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);

    $queryPelanggan = mysqli_query($con, "SELECT * FROM pelanggan");
    $jumlahPelanggan = mysqli_num_rows($queryPelanggan);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css.fontawesome.min..css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: #FA7070;
        border-radius: 15px;
    }

    .summary-produk {
        background-color: #0086ff;
        border-radius: 15px;
    }

    .summary-pelanggan {
        background-color: #E7D37F;
        border-radius: 15px;
    }

    .no-decoration{
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-house-chimney"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Halo <?php echo $_SESSION['username']; ?></h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-list fa-6x"></i>
                            </div>
                            <div class="col-6">
                                <h3 class="fs-3">Kategori</h3>
                                <p class="fs-5"><?php echo $jumlahKategori; ?> Kategori</p>
                                <p><a href="kategori.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-list fa-6x"></i>
                            </div>
                                <div class="col-6">
                                    <h3 class="fs-3">Produk</h3>
                                    <p class="fs-5"><?php echo $jumlahProduk; ?> Produk</p>
                                    <p><a href="produk.php" class="text-white no-decoration">Lihat
                                     Detail</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="summary-pelanggan p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-list fa-6x"></i>
                            </div>
                            <div class="col-6">
                                <h3 class="fs-3">Pelanggan</h3>
                                <p class="fs-5"><?php echo $jumlahPelanggan; ?> Pelanggan</p>
                                <p><a href="pelanggan.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>  
        </div>
    </div>     

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>

</body>

</html>