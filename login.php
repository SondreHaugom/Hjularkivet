<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logg inn</title>
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
    <form class="innlogin_skjema" action="logget_Inn.php" method="POST">
        <label for="brukernvan">Brukernavn:</label>
        <input type="text" name="brukernavn" >
        <label for="brukernvan">Passord:</label>
        <input type="password" name="passord" >
        <button type="submit">Log inn</button>
        
    </form>
    <form class="innlogin_skjema" action="logout.php" method="post">
    <button type="submit" name="loggut">Logg ut</button>
    <br>
    <br>

    <a class="registrer" href="registrer.php">Registrer </a>
</form>
<?php

    session_start();
    if (isset($_SESSION['hjularkivet']) && $_SESSION['hjularkivet'] == true){
        echo" Du er nå logget inn";
    } else{
        echo " Du er logget ut";
    }
    ?>
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