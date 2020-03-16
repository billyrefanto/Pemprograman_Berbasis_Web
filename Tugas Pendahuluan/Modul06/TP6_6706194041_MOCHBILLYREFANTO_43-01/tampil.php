<?php 
    // ambil file json
    $todolist = file_get_contents('json/data.json');
    $data = json_decode($todolist, true);
    $jumlah = count($data);
?>

<?php foreach ($data as $row) : ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-dark" aria-current="page"><?= $row['isi']; ?></li>
            <li class="text-dark">
            </li>
            <li class="text-dark">
                <a href="#" class="hapus" onclick="hapus(<?= $row['id'] ?>);"><i class="fas fa-trash"></i></a>
            </li>
        </ol>
    </nav>
<?php endforeach; ?>
<div class="jumlah">
    <p class="text-light item"><?= $jumlah ?> item(s)</p>
</div>
<div class="deleteAll">
    <button onclick="deleteAll()" class="btn btn-primary float-right">Remove All</button>
</div>

<script src="ajax/ajax.js"></script>