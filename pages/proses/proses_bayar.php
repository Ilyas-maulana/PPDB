<?php
include('../../koneksi.php');

$noPendaftaran = $_POST['no_pendaftaran'];
$query_check = "SELECT COUNT(*) as count FROM data_bayar WHERE no_pendaftaran = '$noPendaftaran'";
$result_chek = mysqli_query($koneksi, $query_check);
$row_check = mysqli_fetch_assoc($result_chek);
$count = $row_check['count'];

if($count>0){
    echo"<script>alert('Pembayaran sudah pernah dilakukan'); window.location.href = '../transaksi.php';</script>";
} else {
    $namaSiswa = $_POST['nama_siswa'];
    $tanggal = $_POST['tanggal'];
    $asal = $_POST['asal_sekolah'];
    $gel = $_POST['gelombang'];
    $nominal = $_POST['nominal'];
    $bayar = $_POST['bayar'];
    $kembalian = $_POST['kembalian'];
    $sisa = $_POST['sisa'];
    $keterengan = $_POST['keterangan'];

    $query = "INSERT INTO data_bayar (no_pendaftaran, tanggal, nama_siswa, asal_sekolah, gelombang, jumlah, bayar, kembalian, sisa, keterangan)
              VALUES ('$noPendaftaran', '$tanggal', '$namaSiswa', '$asal', '$gel', '$nominal', '$bayar', '$kembalian','$sisa', '$keterengan')";

    if (mysqli_query($koneksi, $query)) {
        header("location:../data_pembayaran.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
 mysqli_close($koneksi);