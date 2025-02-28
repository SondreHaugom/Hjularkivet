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
    $innsendtRegNR = $_POST['regNr'];
    $innsendtType = $_POST['type'];
    $innsendtMerke = $_POST['merke'];
    $innsendtFarge = $_POST['farge'];
    $innsendtFnr = $_POST['fordelsnummer'];

    // Rette SQL-spørringen
    $sql = "SELECT * FROM biler WHERE RegNr = ? AND Type = ? AND Merke = ? AND Farge = ? AND Fnr = ?";
    
    // Forbered spørringen
    $stmt = $conn->prepare($sql);
    
    // Bind parametrene til spørringen
    $stmt->bind_param("sssss", $innsendtRegNR, $innsendtType, $innsendtMerke, $innsendtFarge, $innsendtFnr);

    // Utfør spørringen
    $stmt->execute();
    
    // Hent resultatene
    $result = $stmt->get_result();
    
    // Kontroller om bilen finnes i databasen
    if ($result->num_rows > 0) {
        // Bilen finnes allerede
        echo "Bilen finnes allerede i databasen.";
    } else {
        // Bilen finnes ikke, legg til den i databasen (eksempel)
        $insertSql = "INSERT INTO biler (RegNr, Type, Merke, Farge, Fnr) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("sssss", $innsendtRegNR, $innsendtType, $innsendtMerke, $innsendtFarge, $innsendtFnr);
        $insertStmt->execute();
        
        echo "Bilen ble lagt til i databasen.";
        header('Location: registrertebiler.php');
    }
}
?>
