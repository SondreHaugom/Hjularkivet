<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ny Eier</title>
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
            <a class="navigasjon"  href="kunder.php">Kunder</a>
            <a class="navigasjon"  href="innstilling.php">Innstilinger</a>
        </nav>
    </header>
    <main>
    <section class="ILS_section">
    <form class="innlogin_skjema" action="eier_hontering.php" method="POST">
    <label for="fordelsnummer">Fødselsnummer:</label>
    <input type="text" name="fordelsnummer" >
    <label for="fornavn">Fornavn:</label>
    <input type="text" name="fornavn" >
    <label for="etternavn">etternavn:</label>
    <input type="text" name="etternavn" >
    <label for="adresse">Adresse:</label>
    <input type="text" name="adresse" >
    <label for="postnr">Postnummer_</label>
    <input type="text" name="postnr" >
    <label for="epost">Epost:</label>
    <input type="text" name="epost" >
    <label for="tlf">Telefon nummer:</label>
    <input type="text" name="tlf" >
    <button type="submit">Registrer deg</button>
    </form>


    <a class="registrer" href="">Registrer </a>
</form>
    </section> 
    </main>
    <footer>

    </footer>
</body>
</html>