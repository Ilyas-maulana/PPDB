
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
            <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Data Pembayaran </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:yellow;">
                        <tr align="center">
                          <th> No Transaksi </th>
                          <th> Tanggal </th>
                          <th> Nama Siswa </th>
                          <th> Keterangan </th>
                          <th> Action </th>
                          <th> Cetak </th>
                        </tr>
                      </thead>
                      <?php
                      $query = "SELECT * FROM data_bayar ORDER BY no_pendaftaran asc";
                     
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id'];// ID modal yang unik
                        $id = $row['id']; 
                      ?>
                        <tbody style="background-color: white;">
                          <td style="text-align: center;"><?php echo $row["no_pendaftaran"]; ?></td>
                          <td><?php echo $row["tanggal"]; ?></td>
                          <td><?php echo $row["nama_siswa"]; ?></td>
                          <td align="center"><?php if($row['keterangan'] == 'Lunas') {
                                                                echo '<div class = "badge badge-success" style="width: 70px;"> <b>Lunas</b> </div>';
                                                                }
                                                        ?>
                                                        <?php if($row['keterangan'] == 'Belum Lunas') {
                                                            echo '<div class = "badge badge-danger" style="width: 100px;"> <b>Belum Lunas</b> </div>';
                                                            }
                                                    ?>
                                          </td>
                          <td style="text-align: center;"> <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal" style="font-size: 15px;" data-target="#<?php echo $edit_modal_id; ?>">Edit</button></td>
                          <td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="cetak(<?php echo $row['id']; ?>)">Cetak</button></td>
                          <script>
                            function cetak(id) {
                                window.location.href = '../cetak.php?id=' + id;
                                  }
                                    </script>





                          <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="needs-validation" action="proses/pelunasan.php" method="post">
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">No Pendaftaran</label>
                                        <input type="text" class="form-control" style="color: black;" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="lastName">Tanggal</label>

                                        <input type="text" class="form-control" name="tanggal" style="color: black;" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                        <input type="hidden" name="ba" value="<?php echo $row['bayar']; ?>" />
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">Nama Siswa</label>
                                        <input type="text" class="form-control" style="color: black;" name="nama_siswa" id="firstName" placeholder="" value="<?php echo $row['nama_siswa'] ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <div class="col-md-6 mb-3">
                                        <label for="nominal">Sisa Pembayaran</label>
                                        <input type="number" class="form-control sisa-pembayaran" id="nominal_<?php echo $row['id']; ?>" style="color: black;" name="nominal" placeholder="" value="" required="" readonly>
                                        <input type="hidden" class="sisa" data-nom="<?php echo $row['jumlah']; ?>" data-pem="<?php echo $row['bayar']; ?>">
                                        <input type="hidden" name="sisaba" id="sisa" value="<?php echo $row ['sisa'];?>" >
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="bayar">Pembayaran</label>
                                        <input type="text" class="form-control bayar" id="bayar_<?php echo $row['id']; ?>" name="bayar" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="kembalian">Kembalian</label>
                                        <input type="text" class="form-control kembalian" id="kembalian_<?php echo $row['id']; ?>" name="kembalian" placeholder="" value="<?php echo $row['kembalian'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="firstName">Keterangan</label>
                                        <input type="text" class="form-control keterangan" id="keterangan_<?php echo $row['id']; ?>" name="keterangan" placeholder="" value="<?php echo $row['keterangan'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <script>
                                        function hitungSisaPembayaran() {
                                          var sisaElements = document.querySelectorAll(".sisa");

                                          sisaElements.forEach(function(item) {
                                            var nom = parseFloat(item.getAttribute("data-nom"));
                                            var pem = parseFloat(item.getAttribute("data-pem"));

                                            var bali = nom - pem;

                                            if (bali < 0) {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = "";
                                            } else {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = bali.toFixed(2);
                                            }
                                          });
                                        }

                                        function hitungKembalian() {
                                          // Ambil elemen-elemen yang diperlukan
                                          var parent = this.closest('.modal-body');
                                          var sisaPembayaranElement = parent.querySelector(".sisa-pembayaran");
                                          var bayarElement = parent.querySelector(".bayar");
                                          var kembalianElement = parent.querySelector(".kembalian");
                                          var keteranganElement = parent.querySelector(".keterangan");

                                          // Periksa apakah elemen-elemen ditemukan
                                          if (!sisaPembayaranElement || !bayarElement || !kembalianElement || !keteranganElement) {
                                            console.error("One or more elements not found");
                                            return;
                                          }

                                          // Ambil nilai dari input
                                          var total_belanja = parseFloat(sisaPembayaranElement.value);
                                          var pembayaran = parseFloat(bayarElement.value);

                                          // Periksa apakah nilai-nilai valid
                                          if (isNaN(total_belanja) || isNaN(pembayaran)) {
                                            console.error("Invalid input values");
                                            return;
                                          }

                                          // Hitung kembalian
                                          var kembalian = pembayaran - total_belanja;

                                          // Update nilai kembalian dan keterangan
                                          if (kembalian < 0) {
                                            kembalianElement.value = '';
                                            keteranganElement.value = 'Belum Lunas';
                                          } else {
                                            kembalianElement.value = kembalian.toFixed(2);
                                            keteranganElement.value = 'Lunas';
                                          }
                                        }




                                        document.addEventListener("DOMContentLoaded", hitungSisaPembayaran);

                                        document.querySelectorAll('.bayar').forEach(item => {
                                          item.addEventListener('input', hitungKembalian);
                                        });

                                        document.querySelectorAll('.form-control').forEach(item => {
                                          item.addEventListener('input', hitungSisaPembayaran);
                                        });
                                      </script>





                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </tbody>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>
                  </div>

                </div>
              </div>
            </div>
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
      </div>
            

            <!-- Sale & Revenue Start -->
           
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
           
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            
            <!-- Widgets End -->


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
    <script src="js/main.js"></script>
</body>

</html>