<?php
session_start(); // Avvia la sessione

// Cancella tutte le variabili di sessione
$_SESSION = [];

// Distruggi la sessione
session_destroy();

// Cancella il cookie di autenticazione
setcookie('authToken', '', time() - 3600, '/');

// Messaggio di conferma e reindirizzamento
echo "<script>
        alert('Logout effettuato');
        window.location.href = 'index.php';
      </script>";
?>
