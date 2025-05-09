<?php
require_once 'auth.php'; // Inclusione del file di autenticazione
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escursioni in Montagna - Le Nostre Escursioni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Le nostre escursioni</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="escursioni.php">Escursioni</a></li>
                    <li><a href="contatti.php">Contatti</a></li>
                    <!-- Mostra il pulsante di logout solo se l'utente è autenticato -->
                    <?php if (isset($_COOKIE['authToken'])): ?>
                        <li><a href="logout.php" class="btn-logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="escursioni-list">
        <div class="container">
            <h2>Le nostre escursioni guidate</h2>
            <div class="escursione">
                <h3><a href="commenti-monte-bianco.php">Monte Bianco</a></h3>
                <p>Durata: 5 ore | Difficoltà: Alta</p>
                <p>Un'escursione impegnativa, ideale per chi cerca un'avventura ad alta quota.</p>
            </div>
            <div class="escursione">
                <h3><a href="commenti-gran-paradiso.php">Gran Paradiso</a></h3>
                <p>Durata: 3 ore | Difficoltà: Media</p>
                <p>Un'escursione spettacolare nel parco del Gran Paradiso, perfetta per gli amanti della natura.</p>
            </div>
            <div class="escursione">
                <h3><a href="commenti-dolomiti.php">Dolomiti</a></h3>
                <p>Durata: 4 ore | Difficoltà: Facile</p>
                <p>Escursione facile adatta a famiglie e bambini, con panorami mozzafiato.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
