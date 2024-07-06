<?php
    require "session.php";
    require "../koneksi.php";

    $queryPelanggan = mysqli_query($con, "SELECT * FROM pelanggan");
    $jumlahPelanggan = mysqli_num_rows($queryPelanggan);
    $data = mysqli_fetch_array($queryPelanggan);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css.fontawesome.min..css">
</head>

    <style>
        form div{
            margin-bottom: 10px;
        }
    </style>

<body>

    <?php require "navbar.php"; ?>

    
    <div class=" container mt-5">
        <h2>Detail Pelanggan</h2>

        <div class="col-12 col-md-6 mb-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" value="<?php echo $data['id_pelanggan'];;
                    ?>"class="form-control">
                </div>
                <div>
                    <label for="id_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan'];;
                    ?>"class="form-control">
                </div>
                <div>
                    <label for="id_pelanggan">Alamat Pelanggan</label>
                    <input type="text" id="alamat_pelanggan" name="alamat_pelanggan" value="<?php echo $data['alamat_pelanggan'];;
                    ?>"class="form-control">
                </div>
                <div>
                    <label for="id_pelanggan">No Telepon</label>
                    <input type="text" id="no_telepon" name="no_telepon" value="<?php echo $data['no_telepon'];;
                    ?>"class="form-control">
                </div>
                <div class="mt-5 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                </div>
            </form>

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
                    else{
                        $queryUpdate = mysqli_query($con, "UPDATE pelanggan SET id_pelanggan='$id_pelanggan', 
                        nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', no_telepon='$no_telepon'
                        WHERE id_pelanggan=$id_pelanggan");
                    
                    if($queryUpdate){
            ?> 
                    <div class="alert alert-primary mt-3" role="alert">
                        Pelanggan Berhasil Diupdate
                    </div>

                    <meta http-equiv="refresh" content="2; url=pelanggan.php" />
            <?php                           
                    }
                    else{
                        echo mysqli_error($con);
                    }
                }
            }
                    if(isset($_POST['hapus'])){
                        $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
                        $nama_pelanggan = htmlspecialchars($_POST['nama_pelanggan']);
                        $alamat_pelanggan = htmlspecialchars($_POST['alamat_pelanggan']);
                        $no_telepon = htmlspecialchars($_POST['no_telepon']);

                    if($queryHapus){
            ?>
                    <div class="alert alert-primary mt-3" role="alert">
                        Pelanggan Berhasil Dihapus
                    </div>

                    <meta http-equiv="refresh" content="2; url=pelanggan.php" />
            <?php        
                }
            }
            ?>



        </div>
    </div>
    


    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>