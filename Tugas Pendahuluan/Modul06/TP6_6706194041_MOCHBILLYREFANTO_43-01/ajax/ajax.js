var req = new XMLHttpRequest();

// Buat Fungsi Post 
function tambah() {
    console.log('ok');
    var data = document.getElementById('data').value;
    var url = "functions/tambah.php";

    req.open("POST", url, true);
    req.setRequestHeader("content-type", "application/x-www-form-urlencoded");

    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            tampilkan();
            document.getElementById('data').value = "";
        }
    }
    req.send('data=' + data);
}

//Buat fungsi get post 
function tampilkan() {
    var url = "tampil.php";
    req.open('GET', url, true);
    req.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById('hasil').innerHTML = req.responseText;
        }
    }
    req.send(null);
}

//fungsi delete post 
function hapus(id) {
    console.log(id);
    var url = "functions/hapus.php?id=" + id;
    req.open('GET', url, true);
    req.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            tampilkan();
        }
    }
    req.send(null);
}

//fungsi hapus semua
function deleteAll() {
    var url = "functions/deleteAll.php";
    req.open('GET', url, true);
    req.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            tampilkan();
        }
    }
    req.send(null);
}