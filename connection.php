<?php

$servername = "localhost";
$username = "administrator";
$password = 'eC$%C85bxM4aCX$z@zb8';
$dbname = "BestMountainEver";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    echo "Connessione fallita";
}
else
    echo "Connessione riuscita!";

$sql = "INSERT INTO Test (prova) VALUES ('ciaociao')";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "Dati inseriti correttamente nella tabella!";
    } catch (Exception $e) {
        echo "Errore durante l'inserimento: " . $e->getMessage();
    }
?>
