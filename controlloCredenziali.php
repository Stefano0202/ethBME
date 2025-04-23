<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'connection.php';

define('SECRET_KEY', '%Ssgo*&94W$3AG1@M0Z8');

function generaToken($username) {
    $payload = [
        'username' => $username,
        'scadenza' => time() + 3600
    ];
    return base64_encode(json_encode($payload)) . '.' . hash_hmac('sha256', json_encode($payload), SECRET_KEY);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $pdo;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT password FROM Utenti WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();


    $passUser = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare("SELECT username FROM Utenti WHERE username = :username AND password = '" . $password . "';");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $usernameUser = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($passUser && $usernameUser) {
        $token = generaToken($usernameUser["username"]);

        setcookie('authToken', $token, [
            'expires' => time() + 3600,
            'path' => '/',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Strict',
        ]);

        echo "<script>
                alert('Benvenuto " . $usernameUser["username"] . "');
                window.location.href = 'login.php';
              </script>";
    } else {
         echo "<script>
                alert('Credenziali errate!');
                window.location.href = 'login.php';
              </script>";
    }
}
?>
