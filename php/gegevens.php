<?php

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

// CSV-bestandspad
$csvFile = "../log/log.csv";

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

// Optioneel: Opslaan van de PHP-code in een bestand
// file_put_contents("output.php", $phpCode);
?>