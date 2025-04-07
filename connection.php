<?php
$servername = "localhost";
$username = "administrator";
$password = 'eC$%C85bxM4aCX$z@zb8';
$dbname = "BestMountainEver";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connessione riuscita!";
?>
