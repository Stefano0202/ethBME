<?php
require_once 'auth.php'; // Inclusione del file di autenticazione
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commenti - Escursione al Gran Paradiso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Commenti - Escursione al Gran Paradiso</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="escursioni.php">Escursioni</a></li>
                <li><a href="contatti.php">Contatti</a></li>
                <?php if (isset($_COOKIE['authToken'])): ?>
                        <li><a href="logout.php" class="btn-logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

<section class="intro">
    <div class="container">
        <h2>Esperienze dei partecipanti</h2>
        <p>Leggi cosa dicono gli escursionisti che hanno partecipato all'escursione al Gran Paradiso.</p>
    </div>
</section>

<section class="highlights">
    <div class="container">
        <div class="media-stelle">⭐ Media valutazione: 4.2 / 5</div>

        <div class="commenti">
            <div class="commenti-singolo">
                <h5>Sara</h5>
                <div class="stelle">★★★★☆</div>
                <p>Posto magnifico, ma il sentiero era un po’ affollato. Comunque da rifare!</p>
            </div>

            <div class="commenti-singolo">
                <h5>Marco</h5>
                <div class="stelle">★★★★★</div>
                <p>Esperienza fantastica! Ottima guida e panorami mozzafiato.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Elena</h5>
                <div class="stelle">★★★☆☆</div>
                <p>Mi aspettavo qualcosa di più. La vista è bella, ma il meteo non ha aiutato.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Amilcare</h5>
                <div class="stelle">★★★★☆</div>
                <p>Bella esperienza, buon livello di difficoltà, ma il rifugio era molto affollato.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Chiara</h5>
                <div class="stelle">★★★★★</div>
                <p>Tutto perfetto: natura, gruppo simpatico e una guida esperta. La consiglio!</p>
            </div>
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
