<?php

$servername = "localhost";
$username = "administrator";
$password = 'eC$%C85bxM4aCX$z@zb8';
$dbname = "BestMountainEver";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

try {
    // Creazione dell'istanza PDO
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Impostazione degli attributi PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gestione dell'errore di connessione
    die("Errore di connessione: " . $e->getMessage());
}
        
?>
