<?php

echo "sono entrato nel file di configurazione";
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
echo "Connessione riuscita!";

//$sql = "INSERT INTO Test (prova) VALUES ('ciao')";

//    try {
//        $stmt = $conn->prepare($sql);
  //      $stmt->execute();

      //  echo "Dati inseriti correttamente nella tabella!";
    //} catch (PDOException $e) {
      //  echo "Errore durante l'inserimento: " . $e->getMessage();
    //}
?>
