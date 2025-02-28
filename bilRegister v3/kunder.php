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
            <a class="navigasjon"  href="registrerBil.php">Registrer bil</a>
            <a class="navigasjon"  href="kunder.php">Kunder</a>
            <a class="navigasjon"  href="innstilling.php">Innstilinger</a>
        </nav>
    </header>
    <main>
    table>
        <tr>
            <th>fødsels nummer:</th>
            <th>Fornavn:</th>
            <th>Etternavn:</th>
            <th>Adresse:</th>
            <th>Pots nummer:</th>
            <th>Epost:</th>
            <th>telfon nummer:</th>
        </tr>
        <?php
        // Koble til databasen
        $conn = mysqli_connect("localhost", "root", "", "hjularkivet");
        if ($conn->connect_error) {
            die("Feil med koblingen av databasen: " . $conn->connect_error);
        }

        // SQL-spørring for å hente data
        $sql = "SELECT * FROM `eiere`";
        $result = $conn->query($sql);  // Korrekt metode er query()

        if ($result->num_rows > 0) {
            // Hent ut rader og vis dem i tabellen
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Fnr"] . "</td>";
                echo "<td>" . $row["fornavn"] . "</td>";
                echo "<td>" . $row["etternavn"] . "</td>";
                echo "<td>" . $row["adresse"] . "</td>";
                echo "<td>" . $row["postnr"] . "</td></tr>";
                echo "<td>" . $row["epost"] . "</td></tr>";
                echo "<td>" . $row["tlf"] . "</td></tr>";
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
        
    </footer>
 
</body>
</html>