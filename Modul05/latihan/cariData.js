window.onload = function() {
    document.getElementById('keyword').addEventListener('keyup', function() {
        var keyword = document.getElementById('keyword').value;
        var url = 'tampilCari.php?keyword=' + keyword;

        request.open('GET', url, true);

        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById('tampilkan').innerHTML = request.responseText;
            }
        };

        request.send(null);
    });
};
