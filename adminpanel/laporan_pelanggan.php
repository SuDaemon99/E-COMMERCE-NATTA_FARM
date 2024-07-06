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
<body>

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
            <h2>List Pelanggan</h2>

            <div class="table-responsive mt-5"> 
                <table class="table table-bordered" border="1">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>ID Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat Pelanggan</th>
                            <th>No HP Pelanggan</th>
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