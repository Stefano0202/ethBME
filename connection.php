<?php
$servername = "localhost";  // O l'indirizzo IP del tuo server MySQL se è remoto
$username = "nome_utente";
$password = "password";
$dbname = "nome_del_tuo_database";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connessione riuscita!";
?>
