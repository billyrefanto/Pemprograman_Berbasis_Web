<?php
$connect = mysqli_connect("localhost","root","","pbw");
$query = 'SELECT * FROM mahasiswa';
$result = mysqli_query($connect, $query);
?>

<table border="1">
    <tr>
        <th>#Id</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
    <?php
        foreach ($result as $row) :
    ?>
        <tr>
            <td><?= $row['id_mhs'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
        </tr>
    <?php endforeach ?>

</table> 