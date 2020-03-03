<?php
    require 'koneksi.php';
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nim LIKE '%$keyword%' OR 
                username LIKE '%$keyword%' OR nama_lengkap LIKE '%$keyword%'";
    $result = mysqli_query($koneksi, $query);
?>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Username</th>
        <th>Nama Lengkap</th>
        <th>Aksi</th>
    </tr>

    <?php foreach($result as $data) : ?>
        <tr >
            <td><?= $data['nim'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['nama_lengkap'] ?></td>
            <td>
                <a href="#" onclick="hapusData(<?= $data['id'] ?>)">hapus</a>
                <button onclick="updateData(this.value)" value='<?= json_encode($data) ?>'>update</button>
            </td>
        </tr>
    <?php endforeach ?>
</table>