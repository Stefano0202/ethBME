<?php
// Configurazione
define('SECRET_KEY', '%Ssgo*&94W$3AG1@M0Z8');

// Funzione per generare un token
function generaToken($username) {
    $payload = [
        'username' => $username,
        'scadenza' => time() + 3600 // 1 ora di validità
    ];
    return base64_encode(json_encode($payload)) . '.' . hash_hmac('sha256', json_encode($payload), SECRET_KEY);
}

// Login dell'utente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $pdo;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara la query per verificare l'utente nel database
    $stmt = $pdo->prepare("SELECT password FROM Utenti WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "Prima dell'if";

    if ($user && password_verify($password, $user['password'])) { // Confronta la password usando password_verify
        echo "Prima della generazione del token";
        $token = generaToken($username);

        echo "Dopo l'if";
        // Imposta il cookie di autenticazione
        setcookie('authToken', $token, [
            'expires' => time() + 3600,
            'path' => '/',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Strict',
        ]);

        echo "Login effettuato con successo!";
    } else {
        echo "Credenziali errate!";
    }
}
?>
