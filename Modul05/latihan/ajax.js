var request = new XMLHttpRequest();

function lihatData() {
    var url = 'tampil.php';
    request.open('GET', url, true);

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById('tampilkan').innerHTML = request.responseText;
        }
    };

    request.send(null);
}

function aksiData() {
    var tombol = document.getElementById('button').textContent;

    if (tombol == 'Tambah Data') {
        tambahData();
    } else if (tombol == 'Update') {
        update();
    }
}

function tambahData() {
    var nim = document.getElementById('nim').value;
    var username = document.getElementById('username').value;
    var namaLengkap = document.getElementById('nama_lengkap').value;

    var url = 'tambahData.php';
    request.open('POST', url, true);
    request.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById('nim').value = '';
            document.getElementById('username').value = '';
            document.getElementById('nama_lengkap').value = '';
            lihatData();
        }
    };

    request.send(`nim=${nim} & username=${username} & nama_lengkap=${namaLengkap}`);
}

function hapusData(id) {
    var url = 'hapusData.php?id=' + id;
    request.open('GET', url, true);

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            lihatData();
        }
    };

    request.send(null);
}

function updateData(data) {
    data = JSON.parse(data);
    document.getElementById('nim').value = data.nim;
    document.getElementById('username').value = data.username;
    document.getElementById('nama_lengkap').value = data.nama_lengkap;
    document.getElementById('id').value = data.id;
    document.getElementById('button').innerText = 'Update';
}

function update() {
    var nim = document.getElementById('nim').value;
    var username = document.getElementById('username').value;
    var namaLengkap = document.getElementById('nama_lengkap').value;
    var id = document.getElementById('id').value;

    var url = `updateData.php?id=${id} & nim=${nim} & username=${username} & nama_lengkap=${namaLengkap}`;
    request.open('GET', url, true);

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            lihatData();
            document.getElementById('button').innerText = 'Tambah Data';
            document.getElementById('nim').value = '';
            document.getElementById('username').value = '';
            document.getElementById('nama_lengkap').value = '';
        }
    };

    request.send(null);
}
