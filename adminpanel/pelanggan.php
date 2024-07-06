<?php
    require "session.php";
    require "../koneksi.php";

    $queryPelanggan = mysqli_query($con, "SELECT * FROM pelanggan");
    $jumlahPelanggan = mysqli_num_rows($queryPelanggan);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
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

    <?php require "navbar.php"; ?>

    <div class="container mt-5">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../adminpanel" class="no-decoration text-muted">
                        <i class="fas fa-house-chimney"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Pelanggan
                </li>
            </ol>
        </nav>

        <!-- tambah pelanggan -->
        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Pelanggan</h3>

            <form action="" method="post">
                <div>
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="number" id="id_pelanggan" name="id_pelanggan" placeholder="input id pelanggan" 
                    class="form-control">
                </div>
                <div>
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="input nama pelanggan" 
                    class="form-control">
                </div>
                <div>
                    <label for="alamat_pelanggan">Alamat Pelanggan</label>
                    <input type="text" id="alamat_pelanggan" name="alamat_pelanggan" placeholder="input alamat pelanggan" 
                    class="form-control">
                </div>
                <div>
                    <label for="no_telepon">No Telp Pelanggan</label>
                    <input type="text" id="no_telepon" name="no_telepon" placeholder="input no telp pelanggan" 
                    class="form-control">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                </div>

            <?php
                if(isset($_POST['simpan'])){
                    $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
                    $nama_pelanggan = htmlspecialchars($_POST['nama_pelanggan']);
                    $alamat_pelanggan = htmlspecialchars($_POST['alamat_pelanggan']);
                    $no_telepon = htmlspecialchars($_POST['no_telepon']);

                    if($id_pelanggan=='' || $nama_pelanggan=='' || $alamat_pelanggan=='' || $no_telepon==''){
            ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            id, nama, alamat, dan no_hp wajib diisi !!!
                        </div>
            <?php
                    }
                        // query insert to pelanggan table
                        $queryTambah = mysqli_query($con, "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, 
                        no_telepon) VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat_pelanggan', '$no_telepon')");

                        if($queryTambah){
            ?>
                            <div class="alert alert-primary mt-3" role="alert">
                                Pelanggan Berhasil Tersimpan
                            </div>

                            <meta http-equiv="refresh" content="2; url=pelanggan.php" />
            <?php
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }
            ?>
        </div>

        <div class="mt-3 mb-5">
            <h2>List Pelanggan</h2>
            <div class="text-center">
                <a href="laporan_pelanggan.php" target="_blank" class="btn btn-primary"><i class="fa-solid fa-print"></i> Print</a>
                <a href="laporan_pelanggan_excel.php" class="btn btn-success"><i class="fa-solid fa-download"></i> Download Excel</a>
            </div>
            <div class="table-responsive mt-5"> 
                
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>ID Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat Pelanggan</th>
                            <th>No HP Pelanggan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($jumlahPelanggan==0){
                        ?>
                            <tr>
                                <td colspan=8 class="text-center">Data Pelanggan Tidak Tersedia !!!</td>
                            </tr>
                        <?php            
                            }
                            else{
                                $jumlah = 1;
                                while($data=mysqli_fetch_array($queryPelanggan)){
                        ?>
                                <tr>
                                    <td><?php echo $jumlah; ?></td>
                                    <td><?php echo $data['id_pelanggan']; ?></td>
                                    <td><?php echo $data['nama_pelanggan']; ?></td>
                                    <td><?php echo $data['alamat_pelanggan']; ?></td>
                                    <td><?php echo $data['no_telepon']; ?></td>
                                    <td>
                                        <a href="pelanggan_detail.php?q=<?php echo $data['id_pelanggan']; ?>"
                                        class="btn btn-info"><i class="fas fa-search"></i></a>
                                    </td>
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
</body>
</html>