
<?php
session_start();
include "../koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="../admin.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">FIKILSSTORE</h6>
                        <span>Dashboard-admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="../admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Data Master</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="../registrasi.php" class="dropdown-item">Registrasi</a>
                            <a href="input_gelombang.php" class="dropdown-item">Input Gelombang</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>pendaftaran</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="daftar_baru.php" class="dropdown-item">Daftar Baru</a>
                            <a href="data_siswa.php" class="dropdown-item">Data Siswa</a>
                            <a href="data_kaos.php" class="dropdown-item">Data kaos</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Pembayaran</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="transaksi.php" class="dropdown-item">Transaksi</a>
                            <a href="data_pembayaran.php" class="dropdown-item">Data Pembayaran</a>
                           
                        </div>
                    </div>
                    <a href="../index.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
                    <
                </div>
            </nav>
        </div>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        
            <!-- Navbar End -->
            

            <!-- Sale & Revenue Start -->
           
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
           
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            
            <!-- Widgets End -->
          
            <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Transaksi </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
              </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card animated" id="animatedCard">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Transaksi</h4>
                    <form class="needs-validation" action="proses/proses_bayar.php" method="post" novalidate="">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="lastName">Tanggal</label>
                          <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="firstName">Nama Siswa</label>
                          <input type="text" class="form-control" name="nama_siswa" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <label for="firstName">Asal Sekolah</label>
                          <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="firstName">Gelombang</label>
                          <input type="text" class="form-control" name="gelombang" id="gelombang" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <!-- Kode PHP -->
                        <!-- Kode PHP -->
                        <div class="col-md-6 mb-3">
                          <label for="nominal">Jumlah</label>
                          <input type="number" class="form-control" id="nominal" name="nominal" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>

                        <div class="col-md-2 mb-3">
                          <label for="bayar">Pembayaran</label>
                          <input type="text" class="form-control" id="bayar" name="bayar" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kembalian">Kembalian</label>
                          <input type="text" class="form-control" id="kembalian" name="kembalian" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="sisa">Sisa Bayar</label>
                          <input type="text" class="form-control" id="sisa" name="sisa" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>


                        <!-- Kode JavaScript -->



                        <div class="col-md-4 mb-3">
                          <label for="firstName">Keterangan</label>
                          <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>
                      <script>
                        function triggerAnimation() {
                          var animatedElement = document.getElementById('animatedCard');
                          animatedElement.classList.add('active');
                        }

                        // Panggil fungsi triggerAnimation saat halaman dimuat
                        document.addEventListener("DOMContentLoaded", function() {
                          triggerAnimation();
                        });
                        function sisabayar() {
                          var bayar = parseFloat(document.getElementById("bayar").value);
                          var jumlah = parseFloat(document.getElementById("nominal").value);

                          var sisa = jumlah-bayar ;

                          if (jumlah => bayar) {
                            document.getElementById("sisa").value = sisa.toFixed(2);
                          }
                        }
                        document.getElementById("bayar").addEventListener("input", sisabayar);
                        
                        function hitungKembalian() {
                          var total_belanja = parseFloat(document.getElementById("nominal").value);
                          var pembayaran = parseFloat(document.getElementById("bayar").value);

                          var kembalian = pembayaran - total_belanja;

                          if (pembayaran => total_belanja) {
                            document.getElementById("kembalian").value = kembalian.toFixed(2);
                            document.getElementById('keterangan').value = 'Lunas';
                          } else {
                            document.getElementById('kembalian').value = '';
                            document.getElementById('keterangan').value = 'Belum Lunas';
                          }
                        }

                        // Menjalankan fungsi hitungKembalian saat ada perubahan pada input pembayaran
                        document.getElementById("bayar").addEventListener("input", hitungKembalian);
                      </script>
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Bayar</button>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <style>
            @keyframes fadeIn {
              0% {
                opacity: 0;
              }

              100% {
                opacity: 1;
              }
            }



            /* Animasi */
            .animated {
              transform: translateY(-100%);
              transition: transform 0.7s ease-in-out;
              animation: fadeIn 0.7s ease-in-out;
            }

            .animated.active {
              transform: translateY(0);
            }
          </style>
        </div>
        <!-- TUTUP NAVBAR ISI -->

        <!-- partial:../../partials/_footer.html -->

        <!-- FOOTER -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
          </div>
        </footer>
        <!-- TUTUP FOOTER -->


        <!-- partial -->
      </div>


            <!-- Footer Start -->
           
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $('#no_pendaftaran').on('change', function(){
        var no_pendaftaran = $(this).val();
        $.ajax({
          method: 'POST',
          url:'proses/ambil_data.php',
          data: {
            no_pendaftaran: no_pendaftaran
          },
          success: function(response){
            var data = JSON.parse(response);
            $('#firstName').val(data.nama_siswa);
            $('#asal_sekolah').val(data.asal_sekolah);
            $('#gelombang').val(data.gelombang);
            $('#nominal').val(data.nominal);
          },
          error: function(xhr, status, error){
            console.error(error);
          }
          
        });
      });
    });
    </script>
</html>