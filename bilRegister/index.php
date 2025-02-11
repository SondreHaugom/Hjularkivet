<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hjularkivet</title>
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
        <section class="FI_section">
            <h2>
                <strong>
                    Velkommen til Hjularkivet
                </strong>
            </h2>
        <p class="fellesInfo">
            Vi er glade for å ha deg her! Her får du en enkel og oversiktlig start på din opplevelse hos oss.
            Utforsk våre tjenester, finn informasjon du trenger, og naviger deg enkelt videre.
            Dersom du ønsker å registrere bilen din eller få tilgang til dine personlige opplysninger, må du logge inn.
            <ul class="punktliste">
                <li>🚗 Hold oversikt over dine kjøretøy</li>
                <li>🔧 Få tilgang til nyttige tjenester</li>
                <li>🔒 Trygg og sikker innlogging</li>
            </ul>

        </p>
        <form class="log_Inn" action="login.php" method="POST">
        <button class="logg_Inn_Knapp" type="submit">Log Inn</button>
        </form>
        </section>
        <?php
        session_start();

        if (isset($_SESSION['innlogging']) && $_SESSION['innlogging'] === true) {
            
        } else {
                 
        }
        ?>

    </main>
    <footer>
 
    </footer>
    
</body>
</html>