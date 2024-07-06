<?php
    require "session.php";
    require "../koneksi.php";

    $queryProduk = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.
    kategori_id=b.id");
    $jumlahProduk = mysqli_num_rows($queryProduk);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css.fontawesome.min..css">
</head>

<style>
    .no-decoration {
        text-decoration: none;
    }

    form div{
        margin-bottom: 10px;
    }
</style>

<body>

<div class="mt-3 mb-5">
            <h2>List Produk</h2>
            
            <div class="table-responsive mt-5">
                <table class="table table-bordered" border="1">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Detail</th>
                            <th>Ketersediaan Stok</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($jumlahProduk==0){
                        ?>
                            <tr>
                                <td colspan=8 class="text-center">Data produk tidak tersedia</td>
                            </tr>
                        <?php            
                            }
                            else{
                                $jumlah = 1;
                                while($data=mysqli_fetch_array($queryProduk)){
                        ?>
                                <tr>
                                    <td><?php echo $jumlah; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td><?php echo $data['foto']; ?></td>
                                    <td><?php echo $data['detail']; ?></td>
                                    <td><?php echo $data['ketersediaan_stok']; ?></td>
                                </tr>
                        <?php
                                $jumlah++;            
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
<script>window.print()</script>
</body>
</html>