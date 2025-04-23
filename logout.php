<?php
// Cancella il cookie
setcookie('authToken', '', time() - 3600, '/');

echo "<script>
                alert('Logout effettuato');
                window.location.href = 'index.php';
              </script>";
?>
