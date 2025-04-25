<?php
require 'connection.php';

// Verifica se l'utente è già autenticato
if (isset($_COOKIE['authToken'])) {
    // Reindirizza alla home page
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Escursioni in montagna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Accesso Utente</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="escursioni.php">Escursioni</a></li>
                    <li><a href="contatti.php">Contatti</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-form">
        <h2>Effettua il login</h2>
        <!-- Inizia il form di login -->
        <form action="controlloCredenziali.php" method="POST">
            <label for="username">Username</label>
            <input type="username" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Accedi</button>
        </form>
    </section>

    <div class="register-prompt">
        <p>Non hai ancora un account?</p>
        <a href="register.php" class="btn-register">Registrati</a>
    </div>    

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
