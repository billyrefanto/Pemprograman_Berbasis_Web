<?php 
    require 'koneksi.php';
    mysqli_query($koneksi, "TRUNCATE TABLE todo");
    
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