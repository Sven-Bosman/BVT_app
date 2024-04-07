<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gegevens.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Gegevens</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li class="h-list"><button>Form</button></li>
                <li class="h-list"><a href="../Index.php">Home</a></li>
            </ul>
        </nav>
    </header>

<main>
    
<?php

error_reporting(0);
ini_set('display_errors', 0);

// Functie om CSV-bestand naar een PHP-array te converteren
function csvToPhpArray($csvFile) {
    $csvData = [];
    
    // Open het CSV-bestand om te lezen
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        // Loop door elke rij in het CSV-bestand
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Voeg de rij toe aan de array
            $csvData[] = $data;
        }
        fclose($handle);
    }
    
    return $csvData;
}

// Functie om te controleren of het CSV-bestand leeg is
function isCsvEmpty($csvFile) {
    $handle = fopen($csvFile, "r");
    // Controleer of het bestand geopend kon worden
    if ($handle !== FALSE) {
        // Lees de eerste regel om te controleren op inhoud
        $data = fgetcsv($handle);
        fclose($handle);
        // Als de eerste regel leeg is, retourneer true
        return $data === NULL;
    }
    return true; // Bestand kon niet geopend worden
}

// CSV-bestandspad
$csvFile = "../log/log.csv";

// Controleer of het CSV-bestand leeg is
if (isCsvEmpty($csvFile)) {
    // Geef een aangepaste melding weer als het bestand leeg is
    echo "<h1>Er is geen data beschikbaar in het CSV-bestand.</h1>";
} else {
    // Gebruik de functie om CSV naar PHP-array te converteren
    $csvData = csvToPhpArray($csvFile);

    // HTML tabel weergave
    echo "<table border='1'>";
    foreach ($csvData as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</main>
</body>
</html>
