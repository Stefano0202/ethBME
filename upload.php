<?php
// Mostra tutti gli errori per il debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cartella dove salvare i file caricati
$targetDir = "img/";

// Verifica se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Controlla se un file è stato caricato
    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];
        
        // Percorso completo per il file caricato
        $targetFile = $targetDir . basename($file['name']);
        
        // Controlla se la cartella esiste; altrimenti la crea
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Controlla eventuali errori durante l'upload
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Controlla che il file non esista già
            if (!file_exists($targetFile)) {
                // Carica il file
                if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                    echo "<script>alert('File caricato con successo!');</script>";
                } else {
                    echo "<script>alert('Errore durante il caricamento del file!');</script>";
                }
            } else {
                echo "<script>alert('Il file esiste già!');</script>";
            }
        } else {
            echo "<script>alert('Errore durante l\'upload: " . $file['error'] . "');</script>";
        }
    } else {
        echo "<script>alert('Nessun file selezionato!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caricamento File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="file"] {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carica un File</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="fileToUpload">Seleziona un file:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <br>
            <button type="submit">Carica</button>
        </form>
    </div>
</body>
</html>
