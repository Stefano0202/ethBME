<?php
// Configurazione
define('SECRET_KEY', 'chiaveSegretaSuperSicura');

// Funzione per validare il token
function validaToken($token) {
    $parts = explode('.', $token);
    if (count($parts) !== 2) {
        return false;
    }

    $payload = json_decode(base64_decode($parts[0]), true);
    $signature = $parts[1];

    // Controllo validità firma e scadenza
    if (hash_hmac('sha256', json_encode($payload), SECRET_KEY) === $signature) {
        if ($payload['scadenza'] > time()) {
            return $payload['username'];
        }
    }
    return false;
}

// Funzione per controllare se l'utente è loggato
function isUtenteLoggato() {
    if (isset($_COOKIE['authToken'])) {
        return validaToken($_COOKIE['authToken']);
    }
    return false;
}

// Funzione per redirigere se non loggato
function richiedeAutenticazione() {
    if (!isUtenteLoggato()) {
        header('Location: /login.php'); // Modifica con il percorso del tuo login
        exit();
    }
}
?>
