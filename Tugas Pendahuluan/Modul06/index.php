<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP MOdul 05</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<h1>Data Mahasiswa</h1>
<button class="tampilan">Tampilan Data</button>
<div class="lihatData"></div>

<script>
    $('.tampilan').click(tampilData);

    function tampilData(){
        $.ajax({
            type : "GET",
            url : 'tampil.php',
            success : function(){
                $('.lihatData').load('tampil.php');
            }
        });
    }
</script>
</body>
</html>