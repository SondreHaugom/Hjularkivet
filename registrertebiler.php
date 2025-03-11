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
    <title>Registrerte biler</title>
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
    <table>
        <tr>
            <th>Registrerings nummer:</th>
            <th>Merke:</th>
            <th>Type bil:</th>
            <th>Farge:</th>
            <th>Fødtels nummer</th>
        </tr>
        <?php
        // Koble til databasen
        $conn = mysqli_connect("localhost", "root", "", "hjularkivet");
        if ($conn->connect_error) {
            die("Feil med koblingen av databasen: " . $conn->connect_error);
        }

        // SQL-spørring for å hente data
        $sql = "SELECT * FROM `biler`";
        $result = $conn->query($sql);  // Korrekt metode er query()

        if ($result->num_rows > 0) {
            // Hent ut rader og vis dem i tabellen
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["RegNr"] . "</td>";
                echo "<td>" . $row["Merke"] . "</td>";
                echo "<td>" . $row["Type"] . "</td>";
                echo "<td>" . $row["Farge"] . "</td>";
                echo "<td>" . $row["eierID"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Ingen resultater</td></tr>";
        }

        // Lukk databaseforbindelsen
        $conn->close();
        ?>
    </table>
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
