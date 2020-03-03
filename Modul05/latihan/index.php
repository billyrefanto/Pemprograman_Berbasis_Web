<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <h1>Data mahasiswa</h1>
    <input type="text" id="keyword" placeholder="Cari disini">
    <input type="hidden" id="id">
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" id="nim"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" id="username"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" id="nama_lengkap"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button id="button" onclick="aksiData()">Tambah Data</button>
                <button onclick="lihatData()">Lihat Data</button>
            </td>
        </tr>
    </table> 

    <div id="tampilkan"></div>

    <script src="ajax.js"></script>
    <script src="cariData.js"></script>
</body>
</html>