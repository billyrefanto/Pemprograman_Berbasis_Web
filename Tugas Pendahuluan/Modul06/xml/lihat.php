<?php
$main = simplexml_load_file('../index.xml');
?>

<?php foreach ($main as $list) : ?>
    <li>
        <p><?= $list->value; ?></p>
        <button id="update" onclick="updateButton(this.value)" value='<?= json_encode($todo) ?>'>Edit</button>
        <button id="delete" onclick="deleteTodo(this.value)" value="<?= $todo['id']; ?>">Hapus</button>
    </li>
<?php endforeach; ?>