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
    <title>Registrer bil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="Logo_Section">
            <img class="Logo" src="Logo/Hjularkivet.jpg" alt="">
        </div>
        <nav>
            <a class="navigasjon"  href="index.php">Hjem</a>
            <a class="navigasjon"  href="registrerBil.php">Registrer bil</a>
            <a class="navigasjon" href="registrertebiler.php">Biler i Hjularkivet</a>
            <a class="navigasjon"  href="kunder.php">Kunder</a>
            <a class="navigasjon"  href="innstilling.php">Innstilinger</a>
        </nav>
    </header>
    <main>
    <section class="ILS_section">
    <form class="innlogin_skjema" action="reg_hontering.php" method="POST">
        <a class="registrer_link" href="ny_eier.php"> <strong>Ny eier</strong></a>
        <br>
        <br>    
        <label for="rgNR">Reggistrerings nummer:</label>
        <input type="text" name="regNr" >
        <label for="type">Type:</label>
        <input type="text" name="type" >
        <label for="merke">Merke:</label>
        <input type="text" name="merke" >
        <label for="type">Farge:</label>
        <input type="text" name="farge">
        <label for="type">Fødsels nummer    :</label>
        <input type="text" name="fordelsnummer" >
        <button type="submit">Registrer bil</button>
        
    </form>
</form>
    </section>  

    </main>
    <footer>
        <section class="footer_section">
            <p class="footer_text">
            © 2025 Hjularkivet OVS. Alle rettigheter forbeholdt. Innholdet på denne nettsiden er beskyttet av opphavsrett og kan ikke brukes uten tillatelse
            </p>
        </section>
    </footer>
</body>
</html>