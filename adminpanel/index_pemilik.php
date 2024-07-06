<?php
    require "session.php";
    require "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pemilik</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css.fontawesome.min..css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .no-decoration{
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar_pemilik.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-house-chimney"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Halo Pemilik</h2>

        <?php
 
 $dataPoints = array(
     array("x"=> 10, "y"=> 41, "indexLabel"=> "Januari"),
     array("x"=> 20, "y"=> 35, "indexLabel"=> "Febuari"),
     array("x"=> 30, "y"=> 50, "indexLabel"=> "Maret"),
     array("x"=> 40, "y"=> 45, "indexLabel"=> "April"),
     array("x"=> 50, "y"=> 52, "indexLabel"=> "Mei"),
     array("x"=> 60, "y"=> 68, "indexLabel"=> "Juni"),
     array("x"=> 70, "y"=> 38, "indexLabel"=> "Juli"),
     array("x"=> 80, "y"=> 71, "indexLabel"=> "Agustus"),
     array("x"=> 90, "y"=> 52, "indexLabel"=> "September"),
     array("x"=> 100, "y"=> 60, "indexLabel"=> "Oktober"),
     array("x"=> 110, "y"=> 36, "indexLabel"=> "November"),
     array("x"=> 120, "y"=> 49, "indexLabel"=> "Desember"),
 );
     
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>  
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "Laporan Penjual"
     },
     axisY:{
         includeZero: true
     },
     data: [{
         type: "column", //change type to bar, line, area, pie, etc
         //indexLabel: "{y}", //Shows y value on all Data Points
         indexLabelFontColor: "#5A5757",
         indexLabelPlacement: "outside",   
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 </head>
 <body>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 </body>
 </html>                       


    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>

</body>

</html>