<?php 
    echo "Sto per fare la connessione";
require_once 'connection.php';
if ($conn) {
    echo "Connessione al database riuscita!";
}?>
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
                    <li><a href="connection.php">Home</a></li>
                    <li><a href="escursioni.html">Escursioni</a></li>
                    <li><a href="contatti.html">Contatti</a></li>
                    <li><a href="login.html">Login</a></li>
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
                <li>
                    <h3>Escursione al Monte Bianco</h3>
                    <p>Un'escursione impegnativa per ammirare uno dei picchi più alti d'Europa.</p>
                </li>
                <li>
                    <h3>Escursione al Gran Paradiso</h3>
                    <p>Un'escursione panoramica in uno dei parchi naturali più belli d'Italia.</p>
                </li>
                <li>
                    <h3>Escursione nel Parco delle Dolomiti</h3>
                    <p>Un'escursione facile per scoprire i paesaggi mozzafiato delle Dolomiti.</p>
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
