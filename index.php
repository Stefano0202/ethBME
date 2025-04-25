<?php
    // Includi la connessione al database
    require_once 'connection.php';

    // Verifica se l'utente è autenticato tramite il cookie
    $isAuthenticated = isset($_COOKIE['authToken']);

    // Se l'utente è autenticato, mostra il pulsante di logout
    if ($isAuthenticated) {
        $logoutUrl = 'logout.php'; // Pagina di logout (vedi sotto per il codice)
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escursioni in Montagna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Benvenuti nelle Escursioni in Montagna</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="escursioni.php">Escursioni</a></li>
                    <li><a href="contatti.php">Contatti</a></li>
                    <li><a href="login.php">Login</a></li>
                    <!-- Mostra il pulsante di logout solo se l'utente è autenticato -->
                    <?php if ($isAuthenticated): ?>
                        <li><a href="<?= $logoutUrl ?>" class="btn-logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            <h2>Esplora la bellezza delle montagne</h2>
            <p>Vieni a scoprire le meraviglie delle nostre montagne con escursioni guidate per tutti i livelli!</p>
        </div>
    </section>

    <section class="highlights">
        <div class="container">
            <h2>Le nostre escursioni più popolari</h2>
            <ul>
                <li class="card">
                    <img src="img/montebianco.jpg" alt="Monte Bianco">
                    <h3>Monte Bianco</h3>
                    <p>Un'escursione impegnativa per ammirare uno dei picchi più alti d'Europa.</p>
                    <div class="commenti">
                        <ul class="commenti-lista">
                            <li><strong>Giulia:</strong> Panorama mozzafiato!</li>
                            <li><strong>Luca:</strong> Esperienza unica, consigliatissima!</li>
                            <li><strong>Anna:</strong> Tanta fatica ma ne è valsa la pena</li>
                        </ul>
                        <h4><a href="commenti-monte-bianco.php">Commenti (clicca per leggerli tutti)</a></h4>
                    </div>
                </li>
                <li class="card">
                    <img src="img/granparadiso.jpg" alt="Gran Paradiso">
                    <h3>Gran Paradiso</h3>
                    <p>Un'escursione panoramica in uno dei parchi naturali più belli d'Italia.</p>
                    <div class="commenti">
                        <ul class="commenti-lista">
                            <li><strong>Marta:</strong> Paesaggi spettacolari!</li>
                            <li><strong>Simone:</strong> Perfetto anche con bambini.</li>
                            <li><strong>Francesco:</strong> Occhio agli stambecchi</li>
                        </ul>
                        <h4><a href="commenti-gran-paradiso.php">Commenti (clicca per leggerli tutti)</a></h4>
                    </div>
                </li>
                <li class="card">
                    <img src="img/dolomiti.jpg" alt="Dolomiti">
                    <h3>Parco delle Dolomiti</h3>
                    <p>Un'escursione facile per scoprire i paesaggi mozzafiato delle Dolomiti.</p>
                    <div class="commenti">
                        <ul class="commenti-lista">
                            <li><strong>Elena:</strong> I colori delle Dolomiti sono incredibili!</li>
                            <li><strong>Davide:</strong> Escursione semplice e rilassante.</li>
                            <li><strong>Sara:</strong> Ottimo percorso per principianti!</li>
                        </ul>
                        <h4><a href="commenti-dolomiti.php">Commenti (clicca per leggerli tutti)</a></h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
