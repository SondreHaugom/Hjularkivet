
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
    <section class="ILS_section">
    <form class="innlogin_skjema" action="reg_hontering.php" method="POST">
    <label for="brukernvan">Brukernavn:</label>
        <input type="text" name="brukernavn" >
        <label for="brukernvan">Passord:</label>
        <input type="password" name="passord" >
        <button type="submit">Registrer deg </button>
        
    </form>


    <a class="registrer" href="">Registrer </a>
</form>
    </section>  

    
</body>
</html>