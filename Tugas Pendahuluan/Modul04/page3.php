
<?php
session_start();
session_unset();
session_destroy();
echo "<h1>Anda sudah berhasil logout </h1><br>";
echo "Klik "."<a href='page1.php'>disini</a>"." untuk login <br>" ;
echo "anda sekarang tidak bisa masuk ke halaman lagi";
?>
