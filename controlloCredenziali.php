<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'connection.php';

define('SECRET_KEY', '%Ssgo*&94W$3AG1@M0Z8');

// Funzione per generare il token
function generaToken($username) {
    $payload = [
        'username' => $username,
        'scadenza' => time() + 3600
    ];
    return base64_encode(json_encode($payload)) . '.' . hash_hmac('sha256', json_encode($payload), SECRET_KEY);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "sto per creare la sessione";
    session_start(); // Avvia la sessione
    echo "sessione creata";
    global $pdo;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara e esegue la query per recuperare la password
    $stmt = $pdo->prepare("SELECT password FROM Utenti WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $passUser = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "recuperata password";
    $stmt = $pdo->prepare("SELECT username FROM Utenti WHERE username = :username AND password = '" . $password . "';");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $usernameUser = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "recuperato username";
    if ($passUser && $usernameUser) {
        // Genera il token
        $token = generaToken($usernameUser["username"]);
        echo "sono dentro l'if";
        // Salva il token nei cookie
        setcookie('authToken', $token, [
            'expires' => time() + 3600,
            'path' => '/',
            'secure' => false,
            'httponly' => true,
            'samesite' => 'Strict',
        ]);
        echo "cookie settato";
        // Salva lo username nella sessione
        $_SESSION['username'] = $usernameUser["username"];
        echo "inserita variabile sessione";
        echo "<script>
                alert('Benvenuto " . htmlspecialchars($usernameUser["username"]) . "');
                window.location.href = 'index.php';
              </script>";
    } else {
         echo "<script>
                alert('Credenziali errate!');
                window.location.href = 'login.php';
              </script>";
    }
}
?>
