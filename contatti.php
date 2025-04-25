<?php
require_once 'auth.php'; // Inclusione del file di autenticazione

// Verifica che l'utente sia loggato
richiedeAutenticazione();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattaci - Escursioni in Montagna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Contattaci</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="escursioni.php">Escursioni</a></li>
                    <li><a href="contatti.php">Contattaci</a></li>
                    <li><a href="login.php">Login</a></li>
                    <!-- Mostra il pulsante di logout solo se l'utente è autenticato -->
                    <?php if (isset($_COOKIE['authToken'])): ?>
                        <li><a href="logout.php" class="btn-logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-form">
        <div class="container">
            <p> Mail: BME@BME.com <br>
            Indirizzo: BME 25 <br>
            Cap: 00BME (ETH)<br>
            Numero di tefono: 12345<br>
            Cellulare: 3489648523<br>
            Vi vogliamo bene a tutti =)</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
