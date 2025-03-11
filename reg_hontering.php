<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hjularkivet";

// Opprett forbindelse
$conn = new mysqli($servername, $username, $password, $dbname);

// Sjekk forbindelse
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $innsendtRegNR = $_POST['regNr'];
    $innsendtType = $_POST['type'];
    $innsendtMerke = $_POST['merke'];
    $innsendtFarge = $_POST['farge'];
    $innsendtFd = intval($_POST['fordelsnummer']); // Sikre at Fd er et heltall

    // SQL-spørring for å sjekke om bilen finnes (med eierinformasjon)
    $sql = "SELECT biler.*, eiere.fornavn, eiere.etternavn, eiere.epost 
            FROM biler 
            LEFT JOIN eiere ON biler.eierID = eiere.eierID 
            WHERE RegNr = ? AND Type = ? AND Merke = ? AND Farge = ? AND biler.Fd = ?";

    // Forbered spørringen
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $innsendtRegNR, $innsendtType, $innsendtMerke, $innsendtFarge, $innsendtFd);
        $stmt->execute();
        $result = $stmt->get_result();

        // Kontroller om bilen finnes i databasen
        if ($result->num_rows > 0) {
            echo "Bilen finnes allerede i databasen.";
        } else {
            // Bilen finnes ikke, legg den til
            $insertSql = "INSERT INTO biler (RegNr, Type, Merke, Farge, Fd, eierID) VALUES (?, ?, ?, ?, ?, ?)";

            if ($insertStmt = $conn->prepare($insertSql)) {
                $eierID = 1; // Du må finne riktig eierID eller få den fra et skjema
                $insertStmt->bind_param("ssssii", $innsendtRegNR, $innsendtType, $innsendtMerke, $innsendtFarge, $innsendtFd, $eierID);

                if ($insertStmt->execute()) {
                    echo "Bilen ble lagt til i databasen.";
                    header('Location: registrertebiler.php');
                    exit;
                } else {
                    echo "Feil ved innsending: " . $conn->error;
                }
            } else {
                echo "Feil ved forberedelse av INSERT-spørring: " . $conn->error;
            }
        }
    } else {
        echo "Feil ved forberedelse av SELECT-spørring: " . $conn->error;
    }
}
?>


