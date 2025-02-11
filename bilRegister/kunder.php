<?php
session_start();

// Sjekk om brukeren er logget inn
if (!isset($_SESSION['hjularkivet']) || $_SESSION['hjularkivet'] !== true) {
    header('Location: index.php'); // Send brukeren til login-siden
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="Logo_Section">
            <img class="Logo" src="Logo/Hjularkivet.jpg" alt="">
        </div>
        <nav>
            <a class="navigasjon"  href="index.php">Hjem</a>
            <a class="navigasjon"  href="biler.php">Biler</a>
            <a class="navigasjon"  href="kunder.php">Kunder</a>
            <a class="navigasjon"  href="innstilling.php">Innstilinger</a>
        </nav>
    </header>
    <main>

    </main>
    <footer>
        
    </footer>
 
</body>
</html>