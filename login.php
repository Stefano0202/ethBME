<?php
// Verifica se l'utente è già autenticato
if (isset($_COOKIE['authToken'])) {
    // Reindirizza alla home page
    header("Location: index.html");
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="escursioni.html">Escursioni</a></li>
                    <li><a href="contatti.html">Contatti</a></li>
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

        <?php
        // Mostra il messaggio di errore se presente
        if (isset($errorMessage)) {
            echo "<p style='color: red;'>$errorMessage</p>";
        }
        ?>
    </section>

    <div class="register-prompt">
        <p>Non hai ancora un account?</p>
        <a href="register.html" class="btn-register">Registrati</a>
    </div>    

    <footer>
        <div class="container">
            <p>&copy; 2025 Escursioni in Montagna - Tutti i diritti riservati</p>
        </div>
    </footer>
</body>
</html>
