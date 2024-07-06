<?php 
    require "koneksi.php";

    $id = $_GET['q'];

    $query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.
    kategori_id=b.id WHERE a.id='$id'");
    
    $data = mysqli_fetch_array($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

    $queryProdukTerkait = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$data[kategori_id]
    ' AND id!='$data[id]' LIMIT 4");

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require "navbar.php"; ?>
    
    <!-- Detail Produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 class="text-black text-center mb-5">Detail Produk</h1>
                </div>
                <div class="col-md-5 mb-4">
                    <img src="image/<?php echo $data['foto'] ?>" class="w-100" alt="">
                </div>
                    <div class="col-md-6 offset-md-1">
                        <h4><label for="nama">Nama Produk : <?php echo $data['nama']; ?></label></h4>
                        <p class="fs-5">
                            <label for="nama">Kategori :  <?php echo $data['nama_kategori']; ?>
                        </p>
                        <p class="fs-5">
                            <label for="detail">Deskripsi :  <?php echo $data['detail']; ?>
                        </p>
                        <P class="text-harga">
                            <label for="harga">Harga : Rp. <?php echo $data['harga']; ?>,-</label>
                        </P>
                        <p class="fs-5">
                            <label for="stok">Stok :  <?php echo $data['ketersediaan_stok']; ?>
                        </p>
                    </div>
                    <p></p>                    
                    <div class="d-grid gap-2">
                    <a href="produk.php" onclik="history.back()" class="btn btn-primary" >Kembali</a>
                    <a href="#" onclik="history.back()" class="btn btn-success" >Buy Now</a>  
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <!-- Produk Terkait -->
    <div class="container-fluid py-5 warna2"
        <div class="container">
            <h2 class="text-center text-white mb-5">Produk Terkait</h2>

            <div class="row">
                <?php while($data=mysqli_fetch_array($queryProdukTerkait)){ ?>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="produk_detail.php?nama=<?php echo $data['nama']; ?>">
                            <img src="image/<?php echo $data['foto']; ?>" class="img-fluid img-thumbnail" alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>    

    <!-- footer -->
    <?php require "footer.php"; ?>

    <scrip src="bootstrap/js/bootstrap.bundle.min.js"></scrip>
    <scrip src="fontawesome/js/all.min.js"></scrip>
</body>
</html>