<?php
    require 'koneksi.php';

    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $namaLengkap = $_POST['nama_lengkap'];

    $query = "INSERT INTO mahasiswa VALUES('', '$nim', '$username', '$namaLengkap')";
    mysqli_query($koneksi, $query);
?>