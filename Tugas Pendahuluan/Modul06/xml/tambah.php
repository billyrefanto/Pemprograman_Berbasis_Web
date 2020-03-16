<?php
    require '../config/database.php';
    $list = $_POST['list'];
    mysqli_query ($koneksi, "INSERT INTO list VALUES ('','$list')");

    $query = mysqli_query($koneksi, "SELECT * FROM list ORDER BY id_todo DESC LIMIT 1");
    
    

    // xml
    // $data = simplexml_load_file('../index.xml');
    // foreach ($query as $row) {
    //     $dt = $data -> addChild ('todo');
    //     $dt -> addAttribute('id' , $row['id_todo']);
    //     $dt -> addChild('value', $row['list']);
    // }
    // file_put_contents('../index.xml', $data -> asXML());

    



?>