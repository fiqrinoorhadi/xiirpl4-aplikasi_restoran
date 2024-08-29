<?php 
date_default_timezone_set('asia/jakarta'); 

$namaPelanggan = $_POST['namaPelanggan'];
$namaPaket     = $_POST['namaPaket'];
$hargaPaket    = $_POST['hargaPaket'];
$jumlahPaket   = $_POST['jumlahPaket'];
$totalHarga    = $jumlahPaket * $hargaPaket;
$pajak         = 10/100*$totalHarga;
$grandTotal    = $totalHarga + $pajak;
$uangTunai     = $_POST['uangTunai'];
$uangKembali   = $uangTunai - $grandTotal;

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Invoice</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
                    <img src="images/logoinv.png" class="img-fluid mx-auto d-block" alt="">
                    <h3 class="text-center"><i><b>CALL US AT</b></i></h3>
                    <h3 class="text-center">1-505-500</h3>
               </div>
          </div>
          <div class="row justify-content-center">
               <di class="col-lg-6 col-md-8 col-sm-12 bg-light">
                    <table width="100%">
                         <tr>
                              <td>Atas Nama</td>
                              <td>&nbsp;: <?= $namaPelanggan ?></td>
                         </tr>
                         <tr>
                              <td>Waktu Transaksi</td>
                              <td>&nbsp;: <?= date('d F Y h:i:s')?></td>
                         </tr>
                    </table>
               </di>
          </div>
          <div class="row justify-content-center">
               <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
                    <hr>
               <table class="table">
                    <tr>
                         <th>Nama Paket</th>
                         <td> : <?= $namaPaket ?></td>
                    </tr>
                    <tr>
                         <th>Harga Paket</th>
                         <td> : Rp <?= number_format($hargaPaket,2) ?></td>
                    </tr>
                    <tr>
                         <th>Jumlah Pesanan</th>
                         <td> : <?= $jumlahPaket ?></td>
                    </tr>
                    <tr>
                         <th>Total Harga</th>
                         <td> : Rp <?= number_format($totalHarga,2)  ?></td>
                    </tr>
                    <tr>
                         <th>PPN 10%</th>
                         <td> : Rp <?= number_format($pajak,2)  ?></td>
                    </tr>
                    <tr>
                         <th>Grand Total Bayar</th>
                         <td> : Rp <?= number_format($grandTotal,2)  ?></td>
                    </tr>
                    <tr>
                         <th>Uang Tunai</th>
                         <td> : Rp <?= number_format($uangTunai,2)  ?></td>
                    </tr>
                    <tr>
                         <th>Uang Kembali</th>
                         <td> : Rp <?= number_format($uangKembali,2)  ?></td>
                    </tr>
               </table>
               </div>
          </div>
          <div class="row justify-content-center ">
               <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
                    <p class="text-center">
                         HOKBEN - JAWA BARAT - WA:098653978754<br>ARIGATOU GOZAIMASU
                    </p>
               </div>
          </div>
     </div>
</body>
</html>