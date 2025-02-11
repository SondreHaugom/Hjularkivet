<?php
session_start();

// Databasekobling
$server = "localhost";
$database = "hjularkivet";
$dbUser = "root";
$dbPassword = "";

// Koble til databasen
$conn = new mysqli($server, $dbUser, $dbPassword, $database);

// Sjekk tilkoblingen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Klargjør SQL-spørringen med `prepare()`
$stmt = $conn->prepare("INSERT INTO bruker (brukernavn, passord) VALUES (?, ?)");
$stmt->bind_param("ss", $brukernavn, $passord);

// Data som skal settes inn
$brukernavn = "John";
$passord = "Test123"; // Ingen hashing av passordet

// Kjør SQL-spørringen
if ($stmt->execute()) {
    echo "Ny bruker registrert!";
} else {
    echo "Feil ved registrering: " . $stmt->error;
}

// Lukk spørring og tilkobling
$stmt->close();
$conn->close();
?>
