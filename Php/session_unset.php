<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "Sesion telah di hapus";

// destroy the session
session_destroy();
?>

</body>
</html>