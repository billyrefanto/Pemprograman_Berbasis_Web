<?php 
session_start();

session_unset();
session_destroy();

setcookie('login', '', time() - 30);
setcookie('status', '', time() - 30);

header('Location: index.php');

?>