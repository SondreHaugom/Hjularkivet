<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hjularkivet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $innsendtFnr = $_POST["fordelsnummer"]; 
    $innsendtFornavn = $_POST["fornavn"];
    $innsendtEtternavn = $_POST["etternavn"];
    $innsendtAdresse = $_POST["adresse"];
    $innsendtPostnr = $_POST["postnr"];
    $innsendtEpost = $_POST["epost"];
    $innsendtTlf = $_POST["tlf"];

    // SQL for å sjekke om brukeren finnes
    $sql = "SELECT * FROM eiere WHERE Fnr = ? AND fornavn = ? AND etternavn = ? AND adresse = ? AND postnr = ? AND epost = ? AND tlf = ?";
   
    // Forbered spørringen
    $stmt = $conn->prepare($sql);

    // Bind parameterene
    $stmt->bind_param("sssssss", $innsendtFnr, $innsendtFornavn, $innsendtEtternavn, $innsendtAdresse, $innsendtPostnr, $innsendtEpost, $innsendtTlf);

    // Utfør spørringen
    $stmt->execute();

    // Hent resultatene
    $result = $stmt->get_result();

    // Kontroller om bilen finnes i databasen
    if ($result->num_rows > 0) {
        echo "Denne brukeren finnes fra før.";
    } else {
        // Brukeren finnes ikke, legg til i databasen
        $insertSql = "INSERT INTO eiere (Fnr, fornavn, etternavn , adresse, postnr, epost, tid) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);

        // Definer tid, for eksempel dagens dato og tid
        $innsendtTid = date('Y-m-d H:i:s'); // Eksempel

        // Bind parameterene for INSERT
        $insertStmt->bind_param("sssssss", $innsendtFnr, $innsendtFornavn, $innsendtEtternavn, $innsendtAdresse, $innsendtPostnr, $innsendtEpost, $innsendtTif);

        // Utfør INSERT-spørringen
        $insertStmt->execute();

        echo "Velkommen til Hjularkivet.";
    }
}
?>
