<?php
require_once 'auth.php'; // Inclusione del file di autenticazione
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commenti - Escursione alle Dolomiti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Commenti - Escursione alle Dolomiti</h1>
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
        <p>Leggi cosa dicono gli escursionisti che hanno partecipato all'escursione alle Dolomiti.</p>
    </div>
</section>

<section class="highlights">
    <div class="container">
        <div class="media-stelle">⭐ Media valutazione: 4.4 / 5</div>

        <div class="commenti">
            <div class="commenti-singolo">
                <h5>Giulia</h5>
                <div class="stelle">★★★★★</div>
                <p>Paesaggi da cartolina! Escursione ben organizzata e adatta anche a chi non è esperto.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Alessandro</h5>
                <div class="stelle">★★★☆☆</div>
                <p>Bello ma troppo affollato. La vista è fantastica, ma poca tranquillità.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Marta</h5>
                <div class="stelle">★★★★★</div>
                <p>Le Dolomiti sono sempre una garanzia. Sentieri ben segnati e guida molto simpatica.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Davide</h5>
                <div class="stelle">★★★★☆</div>
                <p>Ottimo gruppo e atmosfera piacevole. Solo il meteo un po' incerto, ma esperienza positiva.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Amilcare</h5>
                <div class="stelle">★★★★★</div>
                <p>Emozionante dal primo all’ultimo passo. La natura qui è semplicemente incredibile.</p>
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
