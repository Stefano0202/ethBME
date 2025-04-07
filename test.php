<?php
$host = 'localhost';        // o IP del server
$db   = 'BestMountainEver';    // nome del tuo database
$user = 'administrator';       // username MySQL
$pass = 'eC$%C85bxM4aCX$z@zb8';     // password MySQL
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    // Impostazioni opzionali per errori
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connessione riuscita!";
} catch (PDOException $e) {
    echo "❌ Errore di connessione: " . $e->getMessage();
}
?>
