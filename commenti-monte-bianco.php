<?php
require_once 'auth.php'; // Inclusione del file di autenticazione
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commenti - Escursione al Monte Bianco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Commenti - Escursione al Monte Bianco</h1>
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
        <p>Leggi cosa dicono gli escursionisti che hanno partecipato all'escursione al Monte Bianco.</p>
    </div>
</section>

<section class="highlights">
    <div class="container">
        <div class="media-stelle">⭐ Media valutazione: 4.6 / 5</div>

        <div class="commenti">
            <div class="commenti-singolo">
                <h5>Amilcare</h5>
                <div class="stelle">★★★★★</div>
                <p>Un'esperienza indimenticabile! Panorama mozzafiato e guida super preparata.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Lucia</h5>
                <div class="stelle">★★★★☆</div>
                <p>Escursione stupenda, ma consiglio di essere ben allenati. Un po' stancante ma ne vale la pena!</p>
            </div>

            <div class="commenti-singolo">
                <h5>Giorgio</h5>
                <div class="stelle">★★★★★</div>
                <p>Organizzazione perfetta e paesaggi incredibili. Tornerò sicuramente.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Amilcare</h5>
                <div class="stelle">★★★★☆</div>
                <p>La seconda volta che partecipo! Questa volta ho portato anche mia moglie e le è piaciuta molto.</p>
            </div>

            <div class="commenti-singolo">
                <h5>Valentina</h5>
                <div class="stelle">★★★★★</div>
                <p>Esperienza top! Anche il pranzo in rifugio era ottimo. Consiglio vivamente!</p>
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
