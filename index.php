<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Restoran ABC</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <div class="container">
          <div class="row">
               <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top px-5">
                         <div class="container-fluid mx-5">
                              <a class="navbar-brand" href="#">
                                   <img src="images/logo.png" alt="" class="img-fluid" width="100px">
                              </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" aria-current="page" href="#"><b><font size="4">Home</font></b></a>
                                        </li>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link active" href="#"><b><font size="4">Menu</font></b></a>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" href="#"><b><font size="4">Outlet</font></b></a>
                                        </li>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" href="#"><b><font size="4">Promotion</font></b></a>
                                        </li>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" href="#"><b><font size="4">Corporate</font></b></a>
                                        </li>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" href="#"><b><font size="4">News & Event</font></b></a>
                                        </li>
                                        <li class="nav-item mx-2">
                                             <a class="nav-link" href="#"><b><font size="4">Contact Us</font></b></a>
                                        </li>
                                   </ul>
                                   <div class="d-flex" role="search">
                                        <button class="btn btn-danger mx-4" type="submit"><b>Order Now</b></button>
                                   </div>
                              </div>
                         </div>
                    </nav>
               </div>
          </div>
          <div class="row">
               <div class="col text-center mb-2 mt-2">
                    <img src="images/banner.png" width="100%" alt="">
               </div>
          </div>
          <div class="row">
               <div class="col text-center">
                    <hr>
                    <h3><u>Our Menu</u></h3>
               </div>
          </div>
          <div class="row">  
               <?php
                    // Array $menuPakets untuk menampung semua data paket menu
                    $menuPakets = [
                         [
                              'kode'         => 'p1',
                              'nama_paket'	=> 'WAFU CURRY BEEF RAMEN + CHIKUWA + OCHA', 
                              'isi_paket'    => 'WAFU CURRY BEEF RAMEN + CHIKUWA + OCHA',
                              'harga_paket'	=> 65000,
                              'gambar'       => 'paket1.png'
                         ],
                         [
                              'kode'         => 'p2',
                              'nama_paket'	=> 'WAFU SHOYU RAMEN + CHIKUWA + OCHA', 
                              'isi_paket'    => 'WAFU SHOYU RAMEN + CHIKUWA + OCHA',
                              'harga_paket'	=> 56000,
                              'gambar'       => 'paket2.png'
                         ],
                         [
                              'kode'         => 'p3',
                              'nama_paket'	=> 'SPICY RAMEN REGULER + CHIKUWA + OCHA', 
                              'isi_paket'    => 'SPICY RAMEN REGULER + CHIKUWA + OCHA',
                              'harga_paket'	=> 58000,
                              'gambar'       => 'paket3.png'
                         ],
                         [
                              'kode'         => 'p4',
                              'nama_paket'	=> 'TORI PAITAN RAMEN REGULER + CHIKUWA + OCHA', 
                              'isi_paket'    => 'TORI PAITAN RAMEN REGULER + CHIKUWA + OCHA',
                              'harga_paket'	=> 56000,
                              'gambar'       => 'paket4.png'
                         ],
                         [
                              'kode'         => 'p5',
                              'nama_paket'	=> 'HOKKAIDO MISO RAMEN REGULER + CHIKUWA + OCHA', 
                              'isi_paket'    => 'HOKKAIDO MISO RAMEN REGULER + CHIKUWA + OCHA',
                              'harga_paket'	=> 56000,
                              'gambar'       => 'paket5.png'
                         ],
                         [
                              'kode'         => 'p6',
                              'nama_paket'	=> '<br>WAFU SHOYU RAMEN', 
                              'isi_paket'    => 'WAFU SHOYU RAMEN',
                              'harga_paket'	=> 45000,
                              'gambar'       => 'paket6.png'
                         ],
                         [
                              'kode'         => 'p7',
                              'nama_paket'	=> '<br>WAFU CURRY BEEF RAMEN', 
                              'isi_paket'    => 'WAFU CURRY BEEF RAMEN',
                              'harga_paket'	=> 61000,
                              'gambar'       => 'paket7.png'
                         ],
                         [
                              'kode'         => 'p8',
                              'nama_paket'	=> '<br>SPICY RAMEN REGULER', 
                              'isi_paket'    => 'SPICY RAMEN REGULER',
                              'harga_paket'	=> 38000,
                              'gambar'       => 'paket4.png'
                         ],
                         
                    ];
               
               // lakukan perulangan array(foreach) untuk menampilkan data yang ada di array $menuPakets didalam col dan card
               foreach ($menuPakets as $data) {
               ?>
               <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card mb-3">
                         <img src="images/<?php echo $data['gambar'] ?>" class="card-img-top p-2" alt="...">
                         <div class="card-body">
                              <h6 class="card-title text-center"><?php echo $data['nama_paket'] ?></h6>
                              <!-- Button trigger modal detail-->
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['kode'] ?>">
                              Detail Paket
                              </button>
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pesanModal<?php echo $data['kode'] ?>">
                              Pesan Sekarang
                              </button>
                         </div>
                    </div>
               </div>

               <!-- Modal Detail-->
               <div class="modal fade" id="exampleModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h1 class="modal-title fs-5" id="exampleModalLabel">Detail <?php echo $data['nama_paket'] ?></h1>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                   <table class="table">
                                        <tr>
                                             <th>Isi Paket</th>
                                             <td><?php echo $data['isi_paket'] ?></td>
                                        </tr>
                                        <tr>
                                             <th>Harga Per Paket</th>
                                             <td><?php echo $data['harga_paket'] ?></td>
                                        </tr>
                                   </table>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pesanModal<?php echo $data['kode'] ?>">
                              Pesan Sekarang
                              </button>
                              </div>
                         </div>
                    </div>
               </div> <!-- End Modal -->

               <!-- Modal Pesan-->
               <div class="modal fade" id="pesanModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Lengkapi Data Pesanan <br><?php echo $data['nama_paket'] ?></h1>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>     
                              </div>
                              <br><img src="images/<?php echo $data['gambar'] ?>" class="p-2" alt="...">
                              <form action="order.php" method="post" target="_blank">
                                   <div class="modal-body">
                                        <div class="form-group">
                                             <label for="">Nama Pelanggan</label>
                                             <input type="text" name="namaPelanggan" class="form-control">
                                             <input type="text" name="namaPaket" value="<?= $data['nama_paket'] ?>" hidden>
                                             <input type="text" name="hargaPaket" value="<?= $data['harga_paket'] ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                             <label for="">Jumlah Pesanan</label>
                                             <input type="number" name="jumlahPaket" class="form-control">
                                        </div>
                                        <div class="form-group">
                                             <label for="">Uang Tunai</label>
                                             <input type="text" name="uangTunai" class="form-control">
                                        </div>
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="btnPesan" class="btn btn-primary">Pesan</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div> <!-- End Modal -->
          <?php
               }    
          ?>
          </div><!-- End Row -->
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>