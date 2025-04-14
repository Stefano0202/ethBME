<?php
// Cancella il cookie
setcookie('authToken', '', time() - 3600, '/');

echo "Logout effettuato!";
?>
