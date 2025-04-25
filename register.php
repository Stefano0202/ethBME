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
    <title>Registrazione - Escursioni in Montagna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Registrazione</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="escursioni.php">Escursioni</a></li>
                    <li><a href="contatti.html">Contatti</a></li>
                    <!-- Mostra il pulsante di logout solo se l'utente è autenticato -->
                    <?php if (isset($_COOKIE['authToken'])): ?>
                        <li><a href="logout.php" class="btn-logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="login-button">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-form">
        <h2>Crea un nuovo account</h2>
        <form action="register.php" method="POST">
            <label for="nome">Username</label>
            <input type="text" id="nome" name="nome" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Conferma Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Registrati</button>
        </form>
        <p style="text-align: center; margin-top: 10px;">
            Hai già un account? <a href="login.php">Accedi</a>
        </p>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
