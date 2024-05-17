<?php
$koneksi = mysqli_connect("localhost","root","","ppdb_fikri");


if (mysqli_connect_errno()){
    echo "koneksi database gagal :". mysql_connect_error();
}

?>
