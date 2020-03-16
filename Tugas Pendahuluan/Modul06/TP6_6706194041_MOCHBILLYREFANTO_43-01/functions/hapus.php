<?php 
    require 'koneksi.php';

    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM todo WHERE id = '$id'");

    // kirim data ke json
    $data = [];
    $kirim = mysqli_query($koneksi, "SELECT * FROM todo");

    while ($row = mysqli_fetch_assoc($kirim)) {
        $data[] = $row;
    }
    
    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../json/data.json', $jsonfile);
?>